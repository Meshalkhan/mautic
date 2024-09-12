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

/* @bundles/FormBundle/Exception/ValidationException.php */
class __TwigTemplate_abc66113f455dbb9376cff4fdc2a87fb extends Template
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

namespace Mautic\\FormBundle\\Exception;

class ValidationException extends \\Exception
{
    /**
     * @var mixed[]
     */
    private array \$violations = [];

    public function __construct(\$message = 'Validation failed', \$code = 0, \\Exception \$previous = null)
    {
        parent::__construct(\$message, \$code, \$previous);
    }

    /**
     * @return mixed[]
     */
    public function getViolations(): array
    {
        return \$this->violations;
    }

    /**
     * @param mixed[] \$violations
     */
    public function setViolations(array \$violations): self
    {
        \$this->violations = \$violations;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Exception/ValidationException.php";
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
        return new Source("", "@bundles/FormBundle/Exception/ValidationException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Exception\\ValidationException.php");
    }
}
