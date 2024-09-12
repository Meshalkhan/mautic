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

/* @MauticCore/FormTheme/form_tabbed.html.twig */
class __TwigTemplate_39770ca3ad2b1e3c86c4bdbfccb1e393 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainFormContent' => [$this, 'block_mainFormContent'],
            'aboveTabsContent' => [$this, 'block_aboveTabsContent'],
            'belowTabsContent' => [$this, 'block_belowTabsContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/FormTheme/form.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["hasRightColumn"] =         $this->hasBlock("rightFormContent", $context, $blocks);
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/FormTheme/form.html.twig", "@MauticCore/FormTheme/form_tabbed.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_mainFormContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
    <div class=\"box-layout\">
        <div class=\"col-md-";
        // line 6
        echo (((isset($context["hasRightColumn"]) || array_key_exists("hasRightColumn", $context) ? $context["hasRightColumn"] : (function () { throw new RuntimeError('Variable "hasRightColumn" does not exist.', 6, $this->source); })())) ? (9) : (12));
        echo " height-auto bg-white\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'errors');
        echo "
                    ";
        // line 10
        $this->displayBlock('aboveTabsContent', $context, $blocks);
        // line 11
        echo "                    ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs.above", $context);
        // line 12
        echo twig_include($this->env, $context, "@MauticCore/Helper/tabs.html.twig", ["tabs" => (isset($context["formTabs"]) || array_key_exists("formTabs", $context) ? $context["formTabs"] : (function () { throw new RuntimeError('Variable "formTabs" does not exist.', 12, $this->source); })())]);
        // line 13
        echo "<div class=\"pr-md pl-md\">
                        ";
        // line 14
        if (        $this->hasBlock("_content", $context, $blocks)) {
            // line 15
            echo "                            ";
            $this->displayBlock("_content", $context, $blocks);
            echo "
                        ";
        } else {
            // line 17
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'rest');
            echo "
                        ";
        }
        // line 19
        echo "                    </div>
                    ";
        // line 20
        $this->displayBlock('belowTabsContent', $context, $blocks);
        // line 21
        echo "                    ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("tabs.below", $context);
        echo "
                </div>
            </div>
        </div>
        ";
        // line 25
        $context["rightContent"] =         $this->renderBlock("rightFormContent", $context, $blocks);
        // line 26
        echo "        ";
        if ( !twig_test_empty((isset($context["rightContent"]) || array_key_exists("rightContent", $context) ? $context["rightContent"] : (function () { throw new RuntimeError('Variable "rightContent" does not exist.', 26, $this->source); })()))) {
            // line 27
            echo "        <div class=\"col-md-3 bg-white height-auto bdr-l\">
            <div class=\"pr-lg pl-lg pt-md pb-md\">
                ";
            // line 29
            echo (isset($context["rightContent"]) || array_key_exists("rightContent", $context) ? $context["rightContent"] : (function () { throw new RuntimeError('Variable "rightContent" does not exist.', 29, $this->source); })());
            echo "
            </div>
        </div>
        ";
        }
        // line 33
        echo "    </div>
";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
        echo "
";
    }

    // line 10
    public function block_aboveTabsContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 20
    public function block_belowTabsContent($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/FormTheme/form_tabbed.html.twig";
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
        return array (  139 => 20,  133 => 10,  127 => 34,  124 => 33,  117 => 29,  113 => 27,  110 => 26,  108 => 25,  100 => 21,  98 => 20,  95 => 19,  89 => 17,  83 => 15,  81 => 14,  78 => 13,  76 => 12,  73 => 11,  71 => 10,  67 => 9,  61 => 6,  55 => 4,  51 => 3,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/FormTheme/form_tabbed.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\FormTheme\\form_tabbed.html.twig");
    }
}
