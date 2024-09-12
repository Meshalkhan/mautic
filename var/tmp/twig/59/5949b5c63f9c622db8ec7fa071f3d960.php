<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/PointBundle/EventListener/DashboardSubscriber.php */
class __TwigTemplate_c27765f97a5fcbdf9c5c9e9ef0373170 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\PointBundle\\EventListener;

use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\EventListener\\DashboardSubscriber as MainDashboardSubscriber;
use Mautic\\PointBundle\\Model\\PointModel;

class DashboardSubscriber extends MainDashboardSubscriber
{
    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'point';

    /**
     * Define the widget(s).
     *
     * @var string
     */
    protected \$types = [
        'points.in.time' => [],
    ];

    /**
     * Define permissions to see those widgets.
     *
     * @var array
     */
    protected \$permissions = [
        'point:points:viewown',
        'point:points:viewother',
    ];

    public function __construct(
        protected PointModel \$pointModel
    ) {
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event): void
    {
        \$this->checkPermissions(\$event);
        \$canViewOthers = \$event->hasPermission('point:points:viewother');

        if ('points.in.time' == \$event->getType()) {
            \$widget = \$event->getWidget();
            \$params = \$widget->getParams();

            if (!\$event->isCached()) {
                \$event->setTemplateData([
                    'chartType'   => 'line',
                    'chartHeight' => \$widget->getHeight() - 80,
                    'chartData'   => \$this->pointModel->getPointLineChartData(
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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PointBundle/EventListener/DashboardSubscriber.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/PointBundle/EventListener/DashboardSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\EventListener\\DashboardSubscriber.php");
    }
}
