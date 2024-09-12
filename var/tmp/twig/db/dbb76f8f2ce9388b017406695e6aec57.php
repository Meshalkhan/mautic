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

/* @MauticCore/Translation/row.html.twig */
class __TwigTemplate_99082f9e8e2337f69e85900c783a40d2 extends Template
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
        // line 10
        $context["isCurrent"] = (twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10) === twig_get_attribute($this->env, $this->source, (isset($context["activeEntity"]) || array_key_exists("activeEntity", $context) ? $context["activeEntity"] : (function () { throw new RuntimeError('Variable "activeEntity" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10));
        // line 11
        echo "<li class=\"list-group-item bg-";
        if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 11, $this->source); })())) {
            echo "dark";
        } else {
            echo "light";
        }
        echo "-xs\">
    <div class=\"box-layout\">
        <div class=\"col-md-1 va-m\">
            <h3>
                ";
        // line 15
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>         // line 16
(isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 16, $this->source); })()), "model" =>         // line 17
(isset($context["model"]) || array_key_exists("model", $context) ? $context["model"] : (function () { throw new RuntimeError('Variable "model" does not exist.', 17, $this->source); })()), "size" => "", "query" => "size="]);
        // line 20
        echo "
            </h3>
        </div>
        <div class=\"col-md-7 va-m\">
            <h5 class=\"fw-sb text-primary\">
                <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 25, $this->source); })()), ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\" data-toggle=\"ajax\">
                    <span>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 26, $this->source); })()), (isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 26, $this->source); })()), [], "any", false, false, false, 26), "html", null, true);
        echo "</span>
                </a>
                ";
        // line 28
        if ((isset($context["isCurrent"]) || array_key_exists("isCurrent", $context) ? $context["isCurrent"] : (function () { throw new RuntimeError('Variable "isCurrent" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "                    &nbsp;<span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.current"), "html", null, true);
            echo "</span>
                ";
        }
        // line 31
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 31, $this->source); })()), "parent", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31) === twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31))) {
            // line 32
            echo "                    &nbsp;<span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.parent"), "html", null, true);
            echo "</span>
                ";
        }
        // line 34
        echo "            </h5>
            ";
        // line 35
        if ($this->env->getFunction('method_exists')->getCallable()((isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 35, $this->source); })()), "getAlias")) {
            // line 36
            echo "                <span class=\"text-white dark-sm\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 36, $this->source); })()), "alias", [], "any", false, false, false, 36), "html", null, true);
            echo "</span>
            ";
        }
        // line 38
        echo "        </div>
        <div class=\"col-md-4 va-m text-right\">
            <em class=\"text-white dark-sm\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["translation"]) || array_key_exists("translation", $context) ? $context["translation"] : (function () { throw new RuntimeError('Variable "translation" does not exist.', 40, $this->source); })()), "language", [], "any", false, false, false, 40), "html", null, true);
        echo "</em>
        </div>
    </div>
</li>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Translation/row.html.twig";
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
        return array (  103 => 40,  99 => 38,  93 => 36,  91 => 35,  88 => 34,  82 => 32,  79 => 31,  73 => 29,  71 => 28,  66 => 26,  62 => 25,  55 => 20,  53 => 17,  52 => 16,  51 => 15,  39 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Translation/row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Translation\\row.html.twig");
    }
}
