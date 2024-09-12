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

/* @MauticUser/Role/form.html.twig */
class __TwigTemplate_0744db02be646e6a0cb2a45e475547aa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addScriptDeclaration(("MauticVars.permissionList = " . json_encode(twig_get_attribute($this->env, $this->source, (isset($context["permissionsConfig"]) || array_key_exists("permissionsConfig", $context) ? $context["permissionsConfig"] : (function () { throw new RuntimeError('Variable "permissionsConfig" does not exist.', 3, $this->source); })()), "list", [], "array", false, false, false, 3))), "bodyClose");
        // line 5
        $context["objectId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "data", [], "any", false, false, false, 5), "getId", [], "method", false, false, false, 5);
        // line 6
        if ( !twig_test_empty((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 6, $this->source); })()))) {
            // line 7
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "data", [], "any", false, false, false, 7), "getName", [], "method", false, false, false, 7);
            // line 8
            $context["header"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.role.header.edit", ["%name%" => (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 8, $this->source); })())]);
        } else {
            // line 10
            $context["header"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.role.header.new");
        }
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticUser/Role/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "role";
    }

    // line 13
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 13, $this->source); })()), "html", null, true);
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
    <div class=\"box-layout\">
\t<div class=\"col-xs-12 height-auto\">
\t\t<!-- tabs controls -->
\t\t<ul class=\"nav nav-tabs pr-md pl-md\">
\t\t\t<li class=\"active\"><a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        echo "</a></li>
\t\t\t<li class=\"\"><a href=\"#permissions-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.role.permissions", [], "messages");
        echo "</a></li>
\t\t</ul>
\t\t<!--/ tabs controls -->

\t\t<div class=\"tab-content pa-md\">
\t\t\t<div class=\"tab-pane fade in active bdr-w-0 height-auto\" id=\"details-container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"pa-md\">
\t\t\t\t\t\t<div class=\"col-md-6\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "isAdmin", [], "any", false, false, false, 34), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"pa-md\">
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "description", [], "any", false, false, false, 41), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

            ";
        // line 47
        $context["hidePerms"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "isAdmin", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "data", [], "any", false, false, false, 47);
        // line 48
        echo "\t\t\t<div class=\"tab-pane fade bdr-w-0\" id=\"permissions-container\">
\t\t\t\t<div id=\"rolePermissions\"";
        // line 49
        if ((isset($context["hidePerms"]) || array_key_exists("hidePerms", $context) ? $context["hidePerms"] : (function () { throw new RuntimeError('Variable "hidePerms" does not exist.', 49, $this->source); })())) {
            echo "class=\"hide\"";
        }
        echo ">
\t\t\t\t\t<!-- start: box layout -->
\t\t\t\t\t<div class=\"box-layout\">
\t\t\t\t\t\t<!-- step container -->
\t\t\t\t\t\t<div class=\"col-md-5 height-auto\">
\t\t\t\t\t\t\t<div class=\"pr-lg pl-lg pt-md pb-md\">

\t\t\t\t\t\t\t\t<!-- Nav tabs -->
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-tabs\" role=\"tablist\">
                                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["permissionsConfig"]) || array_key_exists("permissionsConfig", $context) ? $context["permissionsConfig"] : (function () { throw new RuntimeError('Variable "permissionsConfig" does not exist.', 58, $this->source); })()), "config", [], "array", false, false, false, 58));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["bundle"] => $context["config"]) {
            // line 59
            echo "\t\t\t\t\t\t\t\t\t\t<li role=\"presentation\" class=\"list-group-item ";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 59) === 0)) ? ("in active") : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#";
            // line 60
            echo twig_escape_filter($this->env, $context["bundle"], "html", null, true);
            echo "PermissionTab\" aria-controls=\"";
            echo twig_escape_filter($this->env, $context["bundle"], "html", null, true);
            echo "PermissionTab\" role=\"tab\" data-toggle=\"tab\" class=\"steps\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["config"], "label", [], "array", false, false, false, 61), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"permission-ratio\"> (<span class=\"";
            // line 62
            echo twig_escape_filter($this->env, $context["bundle"], "html", null, true);
            echo "_granted\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["config"], "ratio", [], "array", false, false, false, 62), 0, [], "array", false, false, false, 62), "html", null, true);
            echo "</span> / <span class=\"";
            echo twig_escape_filter($this->env, $context["bundle"], "html", null, true);
            echo "_total\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["config"], "ratio", [], "array", false, false, false, 62), 1, [], "array", false, false, false, 62), "html", null, true);
            echo "</span>)</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['bundle'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- container -->
\t\t\t\t\t\t<div class=\"col-md-7 height-auto bdr-l\">
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 73
        $context["permissions"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "permissions", [], "any", false, false, false, 73), "children", [], "any", false, false, false, 73);
        // line 74
        echo "\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 74, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 75
            echo "\t\t\t\t\t\t\t\t\t";
            if (("newbundle" == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 75), "value", [], "any", false, false, false, 75))) {
                // line 76
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 76) > 0)) {
                    // line 77
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t\t</div>";
                    echo "
";
                    echo "</div>";
                    echo "
";
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t\t\t\t\t\t<div role=\"tabpanel\" class=\"tab-pane fade";
                echo (((0 === twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 80))) ? (" in active") : (""));
                echo " bdr-w-0\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 80), "name", [], "any", false, false, false, 80), "html", null, true);
                echo "PermissionTab\">";
                echo "
";
                echo "
\t\t\t\t\t\t\t\t\t\t<div class=\"pt-md pr-md pl-md pb-md\"> ";
                // line 81
                echo "
";
                echo "
\t\t\t\t\t\t\t\t\t\t";
                // line 82
                twig_get_attribute($this->env, $this->source, $context["child"], "setRendered", [], "method", false, false, false, 82);
                // line 83
                echo "\t\t\t\t\t\t\t\t\t";
            } else {
                // line 84
                echo "\t\t\t\t\t\t\t\t\t\t";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t\t\t\t\t\t";
        // line 88
        echo "\t\t\t\t\t\t\t\t\t</div>";
        echo "
";
        echo "
\t\t\t\t\t\t\t\t";
        // line 89
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "permissions", [], "any", false, false, false, 89), "setRendered", [], "method", false, false, false, 89);
        // line 90
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"isAdminMessage\"";
        // line 94
        if ( !(isset($context["hidePerms"]) || array_key_exists("hidePerms", $context) ? $context["hidePerms"] : (function () { throw new RuntimeError('Variable "hidePerms" does not exist.', 94, $this->source); })())) {
            echo " class=\"hide\"";
        }
        echo ">
\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t<h4>";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.role.permission.isadmin.header", [], "messages");
        echo "</h4>
\t\t\t\t\t\t<p>";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.role.permission.isadmin.message", [], "messages");
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
    ";
        // line 104
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_end');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticUser/Role/form.html.twig";
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
        return array (  330 => 104,  320 => 97,  316 => 96,  309 => 94,  303 => 90,  301 => 89,  295 => 88,  293 => 87,  279 => 86,  273 => 84,  270 => 83,  268 => 82,  263 => 81,  253 => 80,  243 => 78,  241 => 77,  238 => 76,  235 => 75,  217 => 74,  215 => 73,  206 => 66,  182 => 62,  178 => 61,  172 => 60,  167 => 59,  150 => 58,  136 => 49,  133 => 48,  131 => 47,  122 => 41,  112 => 34,  106 => 31,  94 => 22,  90 => 21,  81 => 16,  77 => 15,  70 => 13,  63 => 2,  58 => 1,  55 => 10,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticUser/Role/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\Role\\form.html.twig");
    }
}
