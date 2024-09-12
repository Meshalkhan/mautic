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

/* @GrapesJsBuilder/Setting/fields.html.twig */
class __TwigTemplate_e6c19c0fda81ad1ded8ae383a8c96dd3 extends Template
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
        echo "<div class=\"row hide\">
    <div class=\"form-group col-xs-12 \">
        <div class=\"input-group\">
            <textarea id=\"grapesjsbuilder_customMjml\" class=\"form-control builder-mjml\" name=\"grapesjsbuilder[customMjml]\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["customMjml"]) || array_key_exists("customMjml", $context) ? $context["customMjml"] : (function () { throw new RuntimeError('Variable "customMjml" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</textarea>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@GrapesJsBuilder/Setting/fields.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@GrapesJsBuilder/Setting/fields.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\GrapesJsBuilderBundle\\Resources\\views\\Setting\\fields.html.twig");
    }
}
