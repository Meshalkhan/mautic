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

/* @bundles/FormBundle/Event/ValidationEvent.php */
class __TwigTemplate_13746a6525c33fe42bf44d661b5d86af extends Template
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

namespace Mautic\\FormBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\FormBundle\\Entity\\Field;

class ValidationEvent extends CommonEvent
{
    private bool \$valid = true;

    private string \$invalidReason = '';

    /**
     * @param mixed \$value
     */
    public function __construct(
        private Field \$field,
        private \$value
    ) {
    }

    /**
     * @return Field
     */
    public function getField()
    {
        return \$this->field;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return \$this->value;
    }

    public function failedValidation(\$reason): void
    {
        \$this->valid         = false;
        \$this->invalidReason = \$reason;

        \$this->stopPropagation();
    }

    /**
     * Is the field valid.
     */
    public function isValid(): bool
    {
        return \$this->valid;
    }

    /**
     * Get the reason this field was invalidated.
     */
    public function getInvalidReason(): string
    {
        return \$this->invalidReason;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Event/ValidationEvent.php";
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
        return new Source("", "@bundles/FormBundle/Event/ValidationEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Event\\ValidationEvent.php");
    }
}
