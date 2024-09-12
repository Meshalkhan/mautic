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

/* @bundles/ReportBundle/Scheduler/Builder/SchedulerBuilder.php */
class __TwigTemplate_03ad86cce36494b4a51b266838b8740a extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Builder;

use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\Exception\\NotSupportedScheduleTypeException;
use Mautic\\ReportBundle\\Scheduler\\Factory\\SchedulerTemplateFactory;
use Mautic\\ReportBundle\\Scheduler\\SchedulerInterface;
use Recurr\\Exception\\InvalidWeekday;
use Recurr\\Rule;
use Recurr\\Transformer\\ArrayTransformer;

class SchedulerBuilder
{
    public function __construct(
        private SchedulerTemplateFactory \$schedulerTemplateFactory
    ) {
    }

    /**
     * @return \\Recurr\\Recurrence[]|\\Recurr\\RecurrenceCollection
     *
     * @throws InvalidSchedulerException
     * @throws NotSupportedScheduleTypeException
     */
    public function getNextEvent(SchedulerInterface \$scheduler)
    {
        return \$this->getNextEvents(\$scheduler, 1);
    }

    /**
     * @param int \$count
     *
     * @return \\Recurr\\RecurrenceCollection
     *
     * @throws InvalidSchedulerException
     * @throws NotSupportedScheduleTypeException
     */
    public function getNextEvents(SchedulerInterface \$scheduler, \$count)
    {
        if (!\$scheduler->isScheduled()) {
            throw new InvalidSchedulerException();
        }

        \$builder   = \$this->schedulerTemplateFactory->getBuilder(\$scheduler);
        \$startDate = new \\DateTime();
        \$rule      = new Rule();

        if (!\$scheduler->isScheduledNow()) {
            \$startDate->setTime(0, 0)->modify('+1 day');
        }

        \$rule->setStartDate(\$startDate)->setCount(\$count);

        try {
            \$finalScheduler = \$builder->build(\$rule, \$scheduler);
            \$transformer    = new ArrayTransformer();

            return \$transformer->transform(\$finalScheduler);
        } catch (InvalidWeekday) {
            throw new InvalidSchedulerException();
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
        return "@bundles/ReportBundle/Scheduler/Builder/SchedulerBuilder.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Builder/SchedulerBuilder.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Scheduler\\Builder\\SchedulerBuilder.php");
    }
}
