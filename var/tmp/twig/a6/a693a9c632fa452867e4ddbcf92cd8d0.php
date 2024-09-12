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

/* @MauticDashboard/Widget/detail.html.twig */
class __TwigTemplate_a4ae68c6501ccbcb51d4779ac3dd9a1c extends Template
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
        echo "<div class=\"card\" style=\"height: ";
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "height", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["widget"] ?? null), "height", [], "any", false, false, false, 1), "310")) : ("310")) - 10), "html", null, true);
        echo "px;\">
    <div class=\"card-header\">
        <h4>";
        // line 3
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3));
        echo "</h4>
        ";
        // line 4
        if (twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)) {
            // line 5
            echo "            <div class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"ri-more-2-fill\"></i>
                </a>
                <ul class=\"dropdown-menu dropdown-menu-right\">
                    <li>
                        <a  href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dashboard_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\"
                            data-toggle=\"ajaxmodal\"
                            data-target=\"#MauticSharedModal\"
                            data-header=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.header.edit"), "html", null, true);
            echo "\">
                            <i class=\"ri-edit-line\"></i> Edit
                        </a>
                    </li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li  class=\"dropdown-header\">
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.load.time", ["%time%" => twig_round((twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 20, $this->source); })()), "loadTime", [], "any", false, false, false, 20) * 1000), 1)]), "html", null, true);
            echo "
                    </li>
                    <li  class=\"dropdown-header\">
                        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 23, $this->source); })()), "isCached", [], "any", false, false, false, 23)) {
                // line 24
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.data.loaded.from.cache"), "html", null, true);
                echo "
                        ";
            } else {
                // line 26
                echo "                            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.data.loaded.from.database"), "html", null, true);
                echo "
                        ";
            }
            // line 28
            echo "                    </li>
                    <li role=\"separator\" class=\"divider\"></li>
                    <li>
                        <a  href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_dashboard_action", ["objectAction" => "delete", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\"
                            data-header=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dashboard.widget.header.delete"), "html", null, true);
            echo "\"
                            class=\"remove-widget\">
                            <i class=\"ri-close-line\"></i> Remove
                        </a>
                    </li>
                </ul>
            </div>
        ";
        }
        // line 40
        echo "    </div>
    <div class=\"card-body\">
        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 42, $this->source); })()), "errorMessage", [], "any", false, false, false, 42)) {
            // line 43
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
                ";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 44, $this->source); })()), "errorMessage", [], "any", false, false, false, 44)), "html", null, true);
            echo "
            </div>
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 46
(isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 46, $this->source); })()), "template", [], "any", false, false, false, 46)) {
            // line 47
            echo "            <!-- start: ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 47, $this->source); })()), "template", [], "any", false, false, false, 47), "html", null, true);
            echo " -->
            ";
            // line 48
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 48, $this->source); })()), "template", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 48, $this->source); })()), "templateData", [], "any", false, false, false, 48));
            echo "
            <!-- end: ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 49, $this->source); })()), "template", [], "any", false, false, false, 49), "html", null, true);
            echo " -->
        ";
        }
        // line 51
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticDashboard/Widget/detail.html.twig";
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
        return array (  142 => 51,  137 => 49,  133 => 48,  128 => 47,  126 => 46,  121 => 44,  118 => 43,  116 => 42,  112 => 40,  101 => 32,  97 => 31,  92 => 28,  86 => 26,  80 => 24,  78 => 23,  72 => 20,  63 => 14,  57 => 11,  49 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticDashboard/Widget/detail.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DashboardBundle\\Resources\\views\\Widget\\detail.html.twig");
    }
}
