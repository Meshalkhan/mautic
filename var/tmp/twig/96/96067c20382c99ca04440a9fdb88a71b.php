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

/* @bundles/ReportBundle/Scheduler/Builder/SchedulerWeeklyBuilder.php */
class __TwigTemplate_9ee00faa5e695a14418452081afe1dcc extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Builder;

use Mautic\\ReportBundle\\Scheduler\\BuilderInterface;
use Mautic\\ReportBundle\\Scheduler\\Enum\\SchedulerEnum;
use Mautic\\ReportBundle\\Scheduler\\Exception\\InvalidSchedulerException;
use Mautic\\ReportBundle\\Scheduler\\SchedulerInterface;
use Recurr\\Exception\\InvalidArgument;
use Recurr\\Exception\\InvalidRRule;
use Recurr\\Rule;

class SchedulerWeeklyBuilder implements BuilderInterface
{
    /**
     * @throws InvalidSchedulerException
     */
    public function build(Rule \$rule, SchedulerInterface \$scheduler): Rule
    {
        try {
            \$rule->setFreq('WEEKLY');

            if (\$scheduler->isScheduledWeekDays()) {
                \$days = SchedulerEnum::getWeekDays();
            } else {
                \$days = [\$scheduler->getScheduleDay()];
            }

            \$rule->setByDay(\$days);
        } catch (InvalidArgument|InvalidRRule) {
            throw new InvalidSchedulerException();
        }

        return \$rule;
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
        return "@bundles/ReportBundle/Scheduler/Builder/SchedulerWeeklyBuilder.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Builder/SchedulerWeeklyBuilder.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Scheduler\\Builder\\SchedulerWeeklyBuilder.php");
    }
}
