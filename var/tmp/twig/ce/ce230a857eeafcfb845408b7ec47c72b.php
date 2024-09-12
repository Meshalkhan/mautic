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

/* @MauticPlugin/Integration/info.html.twig */
class __TwigTemplate_860fece359aacf08e1a5659746562699 extends Template
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
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-xs-4\">
        <img class=\"img img-responsive\" style=\"margin: auto;\" src=\"";
        // line 8
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 8, $this->source); })()));
        echo "\" />
    </div>

    <div class=\"col-xs-8\">
        <h3>";
        // line 12
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 12, $this->source); })()), "primaryDescription", [], "any", false, false, false, 12));
        echo "</h3>
    </div>
</div>

";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 16, $this->source); })()), "hasSecondaryDescription", [], "any", false, false, false, 16)) {
            // line 17
            echo "<div class=\"row mt-lg\">
    <div class=\"col-xs-12\">
        ";
            // line 19
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["bundle"]) || array_key_exists("bundle", $context) ? $context["bundle"] : (function () { throw new RuntimeError('Variable "bundle" does not exist.', 19, $this->source); })()), "secondaryDescription", [], "any", false, false, false, 19));
            echo "
    </div>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPlugin/Integration/info.html.twig";
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
        return array (  61 => 19,  57 => 17,  55 => 16,  48 => 12,  41 => 8,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPlugin/Integration/info.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Resources\\views\\Integration\\info.html.twig");
    }
}
