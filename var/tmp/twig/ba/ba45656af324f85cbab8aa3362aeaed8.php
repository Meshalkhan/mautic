<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/PageBundle/EventListener/DashboardSubscriber.php */
class __TwigTemplate_cc5f2b458b800bfd60bb6739945fc74b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

namespace Mautic\\PageBundle\\EventListener;

use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\EventListener\\DashboardSubscriber as MainDashboardSubscriber;
use Mautic\\PageBundle\\Form\\Type\\DashboardHitsInTimeWidgetType;
use Mautic\\PageBundle\\Model\\PageModel;
use Symfony\\Component\\Routing\\RouterInterface;

class DashboardSubscriber extends MainDashboardSubscriber
{
    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'page';

    /**
     * Define the widget(s).
     *
     * @var string
     */
    protected \$types = [
        'page.hits.in.time' => [
            'formAlias' => DashboardHitsInTimeWidgetType::class,
        ],
        'unique.vs.returning.leads' => [],
        'dwell.times'               => [],
        'popular.pages'             => [],
        'created.pages'             => [],
        'device.granularity'        => [],
    ];

    /**
     * Define permissions to see those widgets.
     *
     * @var array
     */
    protected \$permissions = [
        'page:pages:viewown',
        'page:pages:viewother',
    ];

    public function __construct(
        protected PageModel \$pageModel,
        protected RouterInterface \$router
    ) {
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event): void
    {
        \$this->checkPermissions(\$event);
        \$canViewOthers = \$event->hasPermission('page:pages:viewother');

        if ('page.hits.in.time' == \$event->getType()) {
            \$widget = \$event->getWidget();
            \$params = \$widget->getParams();

            if (isset(\$params['flag'])) {
                \$params['filter']['flag'] = \$params['flag'];
            }

            if (!\$event->isCached()) {
                \$event->setTemplateData([
                    'chartType'   => 'line',
                    'chartHeight' => \$widget->getHeight() - 80,
                    'chartData'   => \$this->pageModel->getHitsLineChartData(
                        \$params['timeUnit'],
                        \$params['dateFrom'],
                        \$params['dateTo'],
                        \$params['dateFormat'],
                        \$params['filter'],
                        \$canViewOthers
                    ),
                ]);
            }

            \$event->setTemplate('@MauticCore/Helper/chart.html.twig');
            \$event->stopPropagation();
        }

        if ('unique.vs.returning.leads' == \$event->getType()) {
            if (!\$event->isCached()) {
                \$params = \$event->getWidget()->getParams();
                \$event->setTemplateData([
                    'chartType'   => 'pie',
                    'chartHeight' => \$event->getWidget()->getHeight() - 80,
                    'chartData'   => \$this->pageModel->getUniqueVsReturningPieChartData(\$params['dateFrom'], \$params['dateTo'], \$canViewOthers),
                ]);
            }

            \$event->setTemplate('@MauticCore/Helper/chart.html.twig');
            \$event->stopPropagation();
        }

        if ('dwell.times' == \$event->getType()) {
            if (!\$event->isCached()) {
                \$params = \$event->getWidget()->getParams();
                \$event->setTemplateData([
                    'chartType'   => 'pie',
                    'chartHeight' => \$event->getWidget()->getHeight() - 80,
                    'chartData'   => \$this->pageModel->getDwellTimesPieChartData(\$params['dateFrom'], \$params['dateTo'], [], \$canViewOthers),
                ]);
            }

            \$event->setTemplate('@MauticCore/Helper/chart.html.twig');
            \$event->stopPropagation();
        }

        if ('popular.pages' == \$event->getType()) {
            if (!\$event->isCached()) {
                \$params = \$event->getWidget()->getParams();

                if (empty(\$params['limit'])) {
                    // Count the pages limit from the widget height
                    \$limit = round(((\$event->getWidget()->getHeight() - 80) / 35) - 1);
                } else {
                    \$limit = \$params['limit'];
                }

                \$pages = \$this->pageModel->getPopularPages(\$limit, \$params['dateFrom'], \$params['dateTo'], [], \$canViewOthers);
                \$items = [];

                // Build table rows with links
                foreach (\$pages as &\$page) {
                    \$pageUrl = \$this->router->generate('mautic_page_action', ['objectAction' => 'view', 'objectId' => \$page['id']]);
                    \$row     = [
                        [
                            'value' => \$page['title'],
                            'type'  => 'link',
                            'link'  => \$pageUrl,
                        ],
                        [
                            'value' => \$page['hits'],
                        ],
                    ];
                    \$items[] = \$row;
                }

                \$event->setTemplateData([
                    'headItems' => [
                        'mautic.dashboard.label.title',
                        'mautic.dashboard.label.hits',
                    ],
                    'bodyItems' => \$items,
                    'raw'       => \$pages,
                ]);
            }

            \$event->setTemplate('@MauticCore/Helper/table.html.twig');
            \$event->stopPropagation();
        }

        if ('created.pages' == \$event->getType()) {
            if (!\$event->isCached()) {
                \$params = \$event->getWidget()->getParams();

                if (empty(\$params['limit'])) {
                    // Count the pages limit from the widget height
                    \$limit = round(((\$event->getWidget()->getHeight() - 80) / 35) - 1);
                } else {
                    \$limit = \$params['limit'];
                }

                \$pages = \$this->pageModel->getPageList(\$limit, \$params['dateFrom'], \$params['dateTo'], [], \$canViewOthers);
                \$items = [];

                // Build table rows with links
                foreach (\$pages as &\$page) {
                    \$pageUrl = \$this->router->generate('mautic_page_action', ['objectAction' => 'view', 'objectId' => \$page['id']]);
                    \$row     = [
                        [
                            'value' => \$page['name'],
                            'type'  => 'link',
                            'link'  => \$pageUrl,
                        ],
                    ];
                    \$items[] = \$row;
                }

                \$event->setTemplateData([
                    'headItems' => [
                        'mautic.dashboard.label.title',
                    ],
                    'bodyItems' => \$items,
                    'raw'       => \$pages,
                ]);
            }

            \$event->setTemplate('@MauticCore/Helper/table.html.twig');
            \$event->stopPropagation();
        }

        if ('device.granularity' == \$event->getType()) {
            \$widget = \$event->getWidget();
            \$params = \$widget->getParams();

            if (!\$event->isCached()) {
                \$event->setTemplateData([
                    'chartType'   => 'pie',
                    'chartHeight' => \$widget->getHeight() - 80,
                    'chartData'   => \$this->pageModel->getDeviceGranularityData(
                        \$params['dateFrom'],
                        \$params['dateTo'],
                        [],
                        \$canViewOthers
                    ),
                ]);
            }

            \$event->setTemplate('@MauticCore/Helper/chart.html.twig');
            \$event->stopPropagation();
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/EventListener/DashboardSubscriber.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/PageBundle/EventListener/DashboardSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\EventListener\\DashboardSubscriber.php");
    }
}
