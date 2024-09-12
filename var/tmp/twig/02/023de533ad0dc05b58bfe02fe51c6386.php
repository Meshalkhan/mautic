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

/* @bundles/ReportBundle/Scheduler/Entity/SchedulerEntity.php */
class __TwigTemplate_6c99e0d9464d7499fb425b4723cdf556 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Entity;

use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\SchedulerInterface;

class SchedulerEntity implements SchedulerInterface
{
    /**
     * @param bool        \$isScheduled
     * @param string|null \$scheduleUnit
     * @param string|null \$scheduleDay
     * @param string|null \$scheduleMonthFrequency
     */
    public function __construct(
        private \$isScheduled,
        private \$scheduleUnit,
        private \$scheduleDay,
        private \$scheduleMonthFrequency
    ) {
    }

    /**
     * @return bool
     */
    public function isScheduled()
    {
        return \$this->isScheduled;
    }

    /**
     * @return string|null
     */
    public function getScheduleUnit()
    {
        return \$this->scheduleUnit;
    }

    /**
     * @return string|null
     */
    public function getScheduleDay()
    {
        return \$this->scheduleDay;
    }

    /**
     * @return string|null
     */
    public function getScheduleMonthFrequency()
    {
        return \$this->scheduleMonthFrequency;
    }

    public function isScheduledNow(): bool
    {
        return SchedulerEnum::UNIT_NOW === \$this->getScheduleUnit();
    }

    public function isScheduledDaily(): bool
    {
        return SchedulerEnum::UNIT_DAILY === \$this->getScheduleUnit();
    }

    public function isScheduledWeekly(): bool
    {
        return SchedulerEnum::UNIT_WEEKLY === \$this->getScheduleUnit();
    }

    public function isScheduledMonthly(): bool
    {
        return SchedulerEnum::UNIT_MONTHLY === \$this->getScheduleUnit();
    }

    public function isScheduledWeekDays(): bool
    {
        return SchedulerEnum::DAY_WEEK_DAYS === \$this->getScheduleDay();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Entity/SchedulerEntity.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Entity/SchedulerEntity.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Scheduler\\Entity\\SchedulerEntity.php");
    }
}
