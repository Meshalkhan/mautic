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

/* @bundles/IntegrationsBundle/Form/Type/NotBlankIfPublishedConstraintTrait.php */
class __TwigTemplate_f45ca8725a6c95d781768e34715d2051 extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Form\\Type;

use Mautic\\PluginBundle\\Entity\\Integration;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;

trait NotBlankIfPublishedConstraintTrait
{
    /**
     * Get not blank restraint if published.
     *
     * @return callable
     */
    private function getNotBlankConstraint(): Callback
    {
        return new Callback(
            function (\$validateMe, ExecutionContextInterface \$context): void {
                /** @var Integration \$data */
                \$data = \$context->getRoot()->getData();
                if (!empty(\$data->getIsPublished()) && empty(\$validateMe)) {
                    \$context->buildViolation('mautic.core.value.required')->addViolation();
                }
            }
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Form/Type/NotBlankIfPublishedConstraintTrait.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/NotBlankIfPublishedConstraintTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Form\\Type\\NotBlankIfPublishedConstraintTrait.php");
    }
}
