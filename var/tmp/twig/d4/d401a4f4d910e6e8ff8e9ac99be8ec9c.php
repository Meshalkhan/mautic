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

/* @bundles/CoreBundle/Assets/css/libraries/font-awesome/less/larger.less */
class __TwigTemplate_1719bb2c614f04d296382af996b97c0c extends Template
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
        echo "// Icon Sizes
// -------------------------

/* makes the font 33% larger relative to the icon container */
.@{fa-css-prefix}-lg {
  font-size: (4em / 3);
  line-height: (3em / 4);
  vertical-align: -15%;
}
.@{fa-css-prefix}-2x { font-size: 2em; }
.@{fa-css-prefix}-3x { font-size: 3em; }
.@{fa-css-prefix}-4x { font-size: 4em; }
.@{fa-css-prefix}-5x { font-size: 5em; }
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/larger.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/font-awesome/less/larger.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\libraries\\font-awesome\\less\\larger.less");
    }
}
