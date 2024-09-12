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

/* @MauticCore/Helper/details.html.twig */
class __TwigTemplate_7ddcb6f27d3ca45b47c09c65b9e2234a extends Template
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
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.top", $context);
        echo "
";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "getCategory", [], "any", true, true, false, 2) && $this->env->getFunction('method_exists')->getCallable()((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 2, $this->source); })()), "getCategory"))) {
            // line 3
            echo "<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.category", [], "messages");
            echo "</span></td>
    <td>";
            // line 5
            echo twig_escape_filter($this->env, (($this->env->getTest('object')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "getCategory", [], "method", false, false, false, 5))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "getCategory", [], "method", false, false, false, 5), "getTitle", [], "method", false, false, false, 5)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))), "html", null, true);
            echo "</td>
</tr>
";
        }
        // line 8
        echo "
";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "getCreateByUser", [], "any", true, true, false, 9)) {
            // line 10
            if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 10, $this->source); })()), "getCreatedByUser", [], "method", false, false, false, 10)) {
                // line 11
                echo "<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\">";
                // line 12
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.createdby", [], "messages");
                echo "</span></td>
    <td>";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 13, $this->source); })()), "getCreatedByUser", [], "method", false, false, false, 13), "html", null, true);
                echo "</td>
</tr>
";
            }
            // line 16
            echo "<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.created", [], "messages");
            echo "</span></td>
    <td>";
            // line 18
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "getDateAdded", [], "method", false, false, false, 18));
            echo "</td>
</tr>
";
        }
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "getModifiedByUser", [], "any", true, true, false, 21)) {
            // line 22
            $context["modified"] = twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 22, $this->source); })()), "getModifiedByUser", [], "method", false, false, false, 22);
            // line 23
            if ((isset($context["modified"]) || array_key_exists("modified", $context) ? $context["modified"] : (function () { throw new RuntimeError('Variable "modified" does not exist.', 23, $this->source); })())) {
                // line 24
                echo "    <tr>
        <td width=\"20%\"><span class=\"fw-b textTitle\">";
                // line 25
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.modifiedby", [], "messages");
                echo "</span></td>
        <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 26, $this->source); })()), "getModifiedByUser", [], "method", false, false, false, 26), "html", null, true);
                echo "</td>
    </tr>
    <tr>
        <td width=\"20%\"><span class=\"fw-b textTitle\">";
                // line 29
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.modified", [], "messages");
                echo "</span></td>
        <td>";
                // line 30
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "getDateModified", [], "method", false, false, false, 30));
                echo "</td>
    </tr>
";
            }
        }
        // line 34
        if ((twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "getPublishUp", [], "any", true, true, false, 34) && $this->env->getFunction('method_exists')->getCallable()((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "getPublishUp"))) {
            // line 35
            echo "<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.page.publish.up", [], "messages");
            echo "</span></td>
    <td>";
            // line 37
            echo (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "getPublishUp", [], "method", false, false, false, 37))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "getPublishUp", [], "method", false, false, false, 37))) : ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "getDateAdded", [], "method", false, false, false, 37))));
            echo "</td>
</tr>
<tr>
    <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.page.publish.down", [], "messages");
            echo "</span></td>
    <td>";
            // line 41
            (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "getPublishDown", [], "method", false, false, false, 41))) ? (print ($this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "getPublishDown", [], "method", false, false, false, 41)))) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.never"), "html", null, true))));
            echo "</td>
</tr>
";
        }
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "getId", [], "any", true, true, false, 44)) {
            // line 45
            echo "    <tr>
        <td width=\"20%\"><span class=\"fw-b textTitle\">";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.id", [], "messages");
            echo "</span></td>
        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 47, $this->source); })()), "getId", [], "method", false, false, false, 47), "html", null, true);
            echo "</td>
    </tr>
";
        }
        // line 50
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.bottom", $context);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/details.html.twig";
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
        return array (  159 => 50,  153 => 47,  149 => 46,  146 => 45,  144 => 44,  138 => 41,  134 => 40,  128 => 37,  124 => 36,  121 => 35,  119 => 34,  112 => 30,  108 => 29,  102 => 26,  98 => 25,  95 => 24,  93 => 23,  91 => 22,  89 => 21,  83 => 18,  79 => 17,  76 => 16,  70 => 13,  66 => 12,  63 => 11,  61 => 10,  59 => 9,  56 => 8,  50 => 5,  46 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\details.html.twig");
    }
}
