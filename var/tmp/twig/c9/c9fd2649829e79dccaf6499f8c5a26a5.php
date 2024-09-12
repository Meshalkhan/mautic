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

/* @bundles/CampaignBundle/EventListener/DashboardSubscriber.php */
class __TwigTemplate_5f1aa251eb2685d3104cd012763cdaf6 extends Template
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

namespace Mautic\\CampaignBundle\\EventListener;

use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CampaignBundle\\Model\\EventModel;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\EventListener\\DashboardSubscriber as MainDashboardSubscriber;

class DashboardSubscriber extends MainDashboardSubscriber
{
    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'campaign';

    /**
     * Define the widget(s).
     *
     * @var string
     */
    protected \$types = [
        'events.in.time'      => [],
        'leads.added.in.time' => [],
    ];

    /**
     * Define permissions to see those widgets.
     *
     * @var array
     */
    protected \$permissions = [
        'campaign:campaigns:viewown',
        'campaign:campaigns:viewother',
    ];

    public function __construct(
        protected CampaignModel \$campaignModel,
        protected EventModel \$campaignEventModel
    ) {
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event): void
    {
        \$this->checkPermissions(\$event);
        \$canViewOthers = \$event->hasPermission('campaign:campaigns:viewother');

        if ('events.in.time' == \$event->getType()) {
            \$widget = \$event->getWidget();
            \$params = \$widget->getParams();

            if (!\$event->isCached()) {
                \$event->setTemplateData([
                    'chartType'   => 'line',
                    'chartHeight' => \$widget->getHeight() - 80,
                    'chartData'   => \$this->campaignEventModel->getEventLineChartData(
                        \$params['timeUnit'],
                        \$params['dateFrom'],
                        \$params['dateTo'],
                        \$params['dateFormat'],
                        [],
                        \$canViewOthers
                    ),
                ]);
            }

            \$event->setTemplate('@MauticCore/Helper/chart.html.twig');
            \$event->stopPropagation();
        }

        if ('leads.added.in.time' == \$event->getType()) {
            \$widget = \$event->getWidget();
            \$params = \$widget->getParams();

            if (!\$event->isCached()) {
                \$event->setTemplateData([
                    'chartType'   => 'line',
                    'chartHeight' => \$widget->getHeight() - 80,
                    'chartData'   => \$this->campaignModel->getLeadsAddedLineChartData(
                        \$params['timeUnit'],
                        \$params['dateFrom'],
                        \$params['dateTo'],
                        \$params['dateFormat'],
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
        return "@bundles/CampaignBundle/EventListener/DashboardSubscriber.php";
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
        return new Source("", "@bundles/CampaignBundle/EventListener/DashboardSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\EventListener\\DashboardSubscriber.php");
    }
}
