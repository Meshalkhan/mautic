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

/* @bundles/ReportBundle/Scheduler/Date/DateBuilder.php */
class __TwigTemplate_256321dc16f82d4969ee431f5017fa45 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Date;

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerBuilder;
use Mautic\\ReportBundle\\Scheduler\\Entity\\SchedulerEntity;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NoScheduleException;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException;
use Mautic\\ReportBundle\\Scheduler\\SchedulerInterface;

class DateBuilder
{
    public function __construct(
        private SchedulerBuilder \$schedulerBuilder
    ) {
    }

    /**
     * @param bool   \$isScheduled
     * @param string \$scheduleUnit
     * @param string \$scheduleDay
     * @param string \$scheduleMonthFrequency
     */
    public function getPreviewDays(\$isScheduled, \$scheduleUnit, \$scheduleDay, \$scheduleMonthFrequency): array
    {
        \$entity = new SchedulerEntity(\$isScheduled, \$scheduleUnit, \$scheduleDay, \$scheduleMonthFrequency);
        \$count  = \$entity->isScheduledNow() ? 1 : 10;

        try {
            \$recurrences = \$this->schedulerBuilder->getNextEvents(\$entity, \$count);
        } catch (InvalidSchedulerException|NotSupportedScheduleTypeException) {
            return [];
        }

        \$dates = [];
        foreach (\$recurrences as \$recurrence) {
            \$dates[] = \$recurrence->getStart();
        }

        return \$dates;
    }

    /**
     * @return \\DateTimeInterface
     *
     * @throws NoScheduleException
     */
    public function getNextEvent(SchedulerInterface \$scheduler)
    {
        try {
            \$recurrences = \$this->schedulerBuilder->getNextEvent(\$scheduler);
        } catch (InvalidSchedulerException|NotSupportedScheduleTypeException) {
            throw new NoScheduleException();
        }

        if (empty(\$recurrences[0])) {
            throw new NoScheduleException();
        }

        return \$recurrences[0]->getStart();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Date/DateBuilder.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Date/DateBuilder.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Scheduler\\Date\\DateBuilder.php");
    }
}
