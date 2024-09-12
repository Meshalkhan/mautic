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

/* @bundles/CoreBundle/Exception/FlattenableException.php */
class __TwigTemplate_1177b0797351b93aa290179ce11b47b1 extends Template
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

namespace Mautic\\CoreBundle\\Exception;

abstract class FlattenableException extends \\Exception
{
    /**
     * @return array{'message': string, 'file': string, 'line': int, 'trace': string}
     */
    public function toArray(): array
    {
        return [
            'message' => \$this->getMessage(),
            'file'    => \$this->getFile(),
            'line'    => \$this->getLine(),
            'trace'   => \$this->getTraceAsString(),
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Exception/FlattenableException.php";
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
        return new Source("", "@bundles/CoreBundle/Exception/FlattenableException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Exception\\FlattenableException.php");
    }
}
