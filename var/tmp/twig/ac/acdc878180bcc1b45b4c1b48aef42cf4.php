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

/* @bundles/ReportBundle/EventListener/DashboardSubscriber.php */
class __TwigTemplate_0ce5c5221ec3745541b3236ac32d2f9c extends Template
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

namespace Mautic\\ReportBundle\\EventListener;

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\DashboardBundle\\Event\\WidgetDetailEvent;
use Mautic\\DashboardBundle\\EventListener\\DashboardSubscriber as MainDashboardSubscriber;
use Mautic\\ReportBundle\\Form\\Type\\ReportWidgetType;
use Mautic\\ReportBundle\\Model\\ReportModel;

class DashboardSubscriber extends MainDashboardSubscriber
{
    /**
     * Define the name of the bundle/category of the widget(s).
     *
     * @var string
     */
    protected \$bundle = 'report';

    /**
     * Define the widget(s).
     *
     * @var string
     */
    protected \$types = [
        'report' => [
            'formAlias' => ReportWidgetType::class,
        ],
    ];

    /**
     * Define permissions to see those widgets.
     *
     * @var array
     */
    protected \$permissions = [
        'report:reports:viewown',
        'report:reports:viewother',
    ];

    public function __construct(
        protected ReportModel \$reportModel,
        protected CorePermissions \$security
    ) {
    }

    /**
     * Set a widget detail when needed.
     */
    public function onWidgetDetailGenerate(WidgetDetailEvent \$event): void
    {
        \$this->checkPermissions(\$event);

        if ('report' == \$event->getType()) {
            \$widget = \$event->getWidget();
            \$params = \$widget->getParams();
            if (!\$event->isCached()) {
                [\$reportId, \$graph]     = explode(':', \$params['graph']);
                \$report                 = \$this->reportModel->getEntity(\$reportId);

                if (\$report && \$this->security->hasEntityAccess('report:reports:viewown', 'report:reports:viewother', \$report->getCreatedBy())) {
                    \$reportData = \$this->reportModel->getReportData(
                        \$report,
                        null,
                        [
                            'ignoreTableData' => true,
                            'graphName'       => \$graph,
                            'dateFrom'        => \$params['dateFrom'],
                            'dateTo'          => \$params['dateTo'],
                        ]
                    );

                    if (isset(\$reportData['graphs'][\$graph])) {
                        \$graphData = \$reportData['graphs'][\$graph];
                        if (!isset(\$graphData['data']['data'])) {
                            \$graphData['data']['data'] = \$graphData['data'];
                        }
                        \$event->setTemplateData(
                            [
                                'chartData'   => \$graphData['data'],
                                'chartType'   => \$graphData['type'],
                                'chartHeight' => \$widget->getHeight() - 90,
                                'reportId'    => \$report->getId(),
                                'dateFrom'    => \$params['dateFrom'],
                                'dateTo'      => \$params['dateTo'],
                            ]
                        );
                    }
                }
            }
            \$event->setTemplate('@MauticReport/SubscribedEvents/Dashboard/widget.html.twig');
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
        return "@bundles/ReportBundle/EventListener/DashboardSubscriber.php";
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
        return new Source("", "@bundles/ReportBundle/EventListener/DashboardSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\EventListener\\DashboardSubscriber.php");
    }
}
