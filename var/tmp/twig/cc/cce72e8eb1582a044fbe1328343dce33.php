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

/* @bundles/CoreBundle/Update/StepProvider.php */
class __TwigTemplate_c68dee38fb2a01471a431ace49e77af8 extends Template
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

namespace Mautic\\CoreBundle\\Update;

use Mautic\\CoreBundle\\Update\\Step\\StepInterface;

class StepProvider
{
    /**
     * @var StepInterface[]
     */
    private array \$initialSteps = [];

    /**
     * @var StepInterface[]
     */
    private array \$finalSteps = [];

    public function addStep(StepInterface \$step): void
    {
        if (\$step->shouldExecuteInFinalStage()) {
            \$this->finalSteps[] = \$step;

            return;
        }

        \$this->initialSteps[] = \$step;
    }

    /**
     * @return StepInterface[]
     */
    public function getInitialSteps(): array
    {
        return \$this->orderSteps(\$this->initialSteps);
    }

    /**
     * @return StepInterface[]
     */
    public function getFinalSteps(): array
    {
        return \$this->orderSteps(\$this->finalSteps);
    }

    /**
     * @return StepInterface[]
     */
    private function orderSteps(array \$steps): array
    {
        usort(\$steps, fn (StepInterface \$step1, StepInterface \$step2): int => \$step1->getOrder() <=> \$step2->getOrder());

        return \$steps;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Update/StepProvider.php";
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
        return new Source("", "@bundles/CoreBundle/Update/StepProvider.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Update\\StepProvider.php");
    }
}
