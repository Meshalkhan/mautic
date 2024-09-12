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

/* @bundles/ReportBundle/EventListener/SchedulerSubscriber.php */
class __TwigTemplate_a23e080abc3747a3fe654b5d068b0617 extends Template
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

use Mautic\\ReportBundle\\Event\\ReportScheduleSendEvent;
use Mautic\\ReportBundle\\ReportEvents;
use Mautic\\ReportBundle\\Scheduler\\Model\\SendSchedule;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SchedulerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private SendSchedule \$sendSchedule
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ReportEvents::REPORT_SCHEDULE_SEND => ['onScheduleSend', 0],
        ];
    }

    public function onScheduleSend(ReportScheduleSendEvent \$event): void
    {
        \$scheduler = \$event->getScheduler();
        \$file      = \$event->getFile();

        \$this->sendSchedule->send(\$scheduler, \$file);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/EventListener/SchedulerSubscriber.php";
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
        return new Source("", "@bundles/ReportBundle/EventListener/SchedulerSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\EventListener\\SchedulerSubscriber.php");
    }
}
