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

/* @bundles/ReportBundle/Scheduler/EventListener/ReportSchedulerSubscriber.php */
class __TwigTemplate_982c62c8f5ffe040ed91bd7848331afc extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\EventListener;

use Mautic\\ReportBundle\\Event\\ReportEvent;
use Mautic\\ReportBundle\\ReportEvents;
use Mautic\\ReportBundle\\Scheduler\\Model\\SchedulerPlanner;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ReportSchedulerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private SchedulerPlanner \$schedulerPlanner
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [ReportEvents::REPORT_POST_SAVE => ['onReportSave', 0]];
    }

    public function onReportSave(ReportEvent \$event): ReportEvent
    {
        \$report = \$event->getReport();

        \$this->schedulerPlanner->computeScheduler(\$report);

        return \$event;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/EventListener/ReportSchedulerSubscriber.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/EventListener/ReportSchedulerSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Scheduler\\EventListener\\ReportSchedulerSubscriber.php");
    }
}
