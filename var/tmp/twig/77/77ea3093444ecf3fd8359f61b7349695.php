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

/* @bundles/ReportBundle/Scheduler/Factory/SchedulerTemplateFactory.php */
class __TwigTemplate_1aa63c45b7ee3698be0ed2bd852c2dd4 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Factory;

use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerDailyBuilder;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerMonthBuilder;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerNowBuilder;
use Mautic\\ReportBundle\\Scheduler\\Builder\\SchedulerWeeklyBuilder;
use Mautic\\ReportBundle\\Scheduler\\BuilderInterface;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException;
use Mautic\\ReportBundle\\Scheduler\\SchedulerInterface;

class SchedulerTemplateFactory
{
    /**
     * @return BuilderInterface
     *
     * @throws NotSupportedScheduleTypeException
     */
    public function getBuilder(SchedulerInterface \$scheduler)
    {
        if (\$scheduler->isScheduledNow()) {
            return new SchedulerNowBuilder();
        }
        if (\$scheduler->isScheduledDaily()) {
            return new SchedulerDailyBuilder();
        }
        if (\$scheduler->isScheduledWeekly()) {
            return new SchedulerWeeklyBuilder();
        }
        if (\$scheduler->isScheduledMonthly()) {
            return new SchedulerMonthBuilder();
        }

        throw new NotSupportedScheduleTypeException();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Factory/SchedulerTemplateFactory.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Factory/SchedulerTemplateFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Scheduler\\Factory\\SchedulerTemplateFactory.php");
    }
}
