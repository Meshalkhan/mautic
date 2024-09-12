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

/* @MauticTagManager/Tag/form.html.twig */
class __TwigTemplate_1d8b1220e1e3875117f5d7b8fcdf8cb6 extends Template
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
        $context["id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "data", [], "array", false, false, false, 3), "getId", [], "method", false, false, false, 3);
        // line 5
        $context["header"] = ((twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.menu.new")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.menu.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 5, $this->source); })()), "getTag", [], "method", false, false, false, 5))])));
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticTagManager/Tag/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "tagmanager";
    }

    // line 6
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " ";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        // line 10
        echo "<div class=\"box-layout\">
        <div class=\"col-md-9 height-auto\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <ul class=\"nav nav-tabs pr-md pl-md\">
                        <li class=\"active\">
                            <a href=\"#details\" role=\"tab\" data-toggle=\"tab\">
                                ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        // line 18
        echo "                            </a>
                        </li>
                    </ul>

                    <!-- start: tab-content -->
                    <div class=\"tab-content pa-md\">
                        <div class=\"tab-pane fade in active bdr-w-0\" id=\"details\">
                            <div class=\"row\">
                                <div class=\"col-xs-12\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "tag", [], "any", false, false, false, 27), 'row');
        // line 28
        echo "</div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-xs-12\">
                                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), 'row');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticTagManager/Tag/form.html.twig";
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
        return array (  115 => 41,  104 => 32,  98 => 28,  96 => 27,  86 => 18,  84 => 17,  75 => 10,  73 => 9,  69 => 8,  60 => 6,  53 => 2,  48 => 1,  46 => 5,  44 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticTagManager/Tag/form.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticTagManagerBundle\\Resources\\views\\Tag\\form.html.twig");
    }
}
