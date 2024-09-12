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

/* @MauticPoint/Event/form.html.twig */
class __TwigTemplate_5955c29a4ca1e3429aa0af4e65767e2f extends Template
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
        if (array_key_exists("formTheme", $context)) {
            // line 2
            echo "  ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [(isset($context["formTheme"]) || array_key_exists("formTheme", $context) ? $context["formTheme"] : (function () { throw new RuntimeError('Variable "formTheme" does not exist.', 2, $this->source); })())], true);
        }
        // line 4
        echo "<div class=\"bundle-form\">
    <div class=\"bundle-form-header\">
        <h3>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["eventHeader"]) || array_key_exists("eventHeader", $context) ? $context["eventHeader"] : (function () { throw new RuntimeError('Variable "eventHeader" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h3>
    </div>
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form');
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPoint/Event/form.html.twig";
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
        return array (  52 => 8,  47 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPoint/Event/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Resources\\views\\Event\\form.html.twig");
    }
}
