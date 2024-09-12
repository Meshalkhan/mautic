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

/* @MauticCore/Default/pageheader.html.twig */
class __TwigTemplate_33eae1c9b7f30440cf5f8adaef6631a1 extends Template
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
        echo "<div class=\"page-header\">
\t<div class=\"box-layout\">
\t\t<div class=\"col-xs-5 col-sm-6 col-md-5 va-m\">
\t\t\t<h1 class=\"pull-left page-header-title\">";
        // line 4
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 4, $this->source); })()));
        echo "</h1>
\t\t\t<div class=\"ml-sm pull-left\">
\t\t\t\t\t";
        // line 6
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["publishStatus"]) || array_key_exists("publishStatus", $context) ? $context["publishStatus"] : (function () { throw new RuntimeError('Variable "publishStatus" does not exist.', 6, $this->source); })()));
        echo "
\t\t\t</div>
\t\t\t";
        // line 8
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("page.header.left", $context);
        echo "
\t\t</div>
\t\t<div class=\"col-xs-7 col-sm-6 col-md-7 va-m\">
\t\t\t<div class=\"toolbar text-right\" id=\"toolbar\">
\t\t\t\t";
        // line 14
        echo "\t\t\t\t";
        echo (( !is_iterable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 14, $this->source); })()))) ? ((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 14, $this->source); })())) : (""));
        echo "

\t\t\t\t<div class=\"toolbar-bundle-buttons pull-left\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["toolbar"]) || array_key_exists("toolbar", $context) ? $context["toolbar"] : (function () { throw new RuntimeError('Variable "toolbar" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"toolbar-form-buttons hide pull-right\">
\t\t\t\t\t<div class=\"btn-group toolbar-standard hidden-xs hidden-sm \"></div>
\t\t\t\t\t<div class=\"btn-group toolbar-dropdown hidden-md hidden-lg\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-main\"></button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default btn-nospin  dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<i class=\"fa fa-caret-down\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\"></ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 27
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("page.header.right", $context);
        echo "
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t</div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Default/pageheader.html.twig";
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
        return array (  79 => 27,  65 => 16,  59 => 14,  52 => 8,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Default/pageheader.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Default\\pageheader.html.twig");
    }
}
