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

/* @MauticChannel/Message/form.html.twig */
class __TwigTemplate_8de891aadc602ba56d7461d330204297 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'channel_row' => [$this, 'block_channel_row'],
            'aboveTabsContent' => [$this, 'block_aboveTabsContent'],
            'rightFormContent' => [$this, 'block_rightFormContent'],
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/FormTheme/form_tabbed.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [$this->getTemplateName()], true);
        // line 40
        list($context["tabs"], $context["active"]) =         [[], true];
        // line 41
        $context["_channel"] = "";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["channels"]) || array_key_exists("channels", $context) ? $context["channels"] : (function () { throw new RuntimeError('Variable "channels" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["channel"] => $context["config"]) {
            // line 43
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "channels", [], "any", false, true, false, 43), $context["channel"], [], "array", true, true, false, 43)) {
                // line 44
                $context["tab"] = ["active" =>                 // line 45
(isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 45, $this->source); })()), "id" => ("channel_" .                 // line 46
$context["channel"]), "name" => twig_get_attribute($this->env, $this->source,                 // line 47
$context["config"], "label", [], "any", false, false, false, 47), "content" =>                 // line 48
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "channels", [], "any", false, false, false, 48), $context["channel"], [], "array", false, false, false, 48), 'row'), "containerAttr" => ["style" => "min-height: 200px;"]];
                // line 53
                if ($this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "channels", [], "any", false, false, false, 53), $context["channel"], [], "array", false, false, false, 53))) {
                    // line 54
                    $context["tab"] = twig_array_merge((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 54, $this->source); })()), ["class" => "text-danger", "icon" => "fa-warning"]);
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 55
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "channels", [], "any", false, false, false, 55), $context["channel"], [], "array", false, false, false, 55), "isEnabled", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "data", [], "any", false, false, false, 55)) {
                    // line 56
                    $context["tab"] = twig_array_merge((isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 56, $this->source); })()), ["published" => true]);
                }
                // line 59
                list($context["tabs"], $context["active"]) =                 [twig_array_merge((isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 59, $this->source); })()), [(isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 59, $this->source); })())]), false];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['channel'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        $context["formTabs"] = (isset($context["tabs"]) || array_key_exists("tabs", $context) ? $context["tabs"] : (function () { throw new RuntimeError('Variable "tabs" does not exist.', 62, $this->source); })());
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/FormTheme/form_tabbed.html.twig", "@MauticChannel/Message/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_channel_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, true, false, 4), "channel", [], "any", true, true, false, 4)) {
            // line 5
            echo "        ";
            $context["channel"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "children", [], "any", false, false, false, 5), "channel", [], "any", false, false, false, 5), "vars", [], "any", false, false, false, 5), "data", [], "any", false, false, false, 5);
            // line 6
            echo "        ";
            $context["enabled"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "children", [], "any", false, false, false, 6), "isEnabled", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "data", [], "any", false, false, false, 6);
            // line 7
            echo "        ";
            $context["channelContent"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("channel.right", $context);
            // line 8
            echo "        ";
            $context["leftCol"] = (((isset($context["channelContent"]) || array_key_exists("channelContent", $context) ? $context["channelContent"] : (function () { throw new RuntimeError('Variable "channelContent" does not exist.', 8, $this->source); })())) ? (6) : (12));
            // line 9
            echo "        ";
            $context["enableCol"] = (((isset($context["channelContent"]) || array_key_exists("channelContent", $context) ? $context["channelContent"] : (function () { throw new RuntimeError('Variable "channelContent" does not exist.', 9, $this->source); })())) ? ("") : ("col-md-2"));
            // line 10
            echo "        ";
            $context["propsCol"] = (((isset($context["channelContent"]) || array_key_exists("channelContent", $context) ? $context["channelContent"] : (function () { throw new RuntimeError('Variable "channelContent" does not exist.', 10, $this->source); })())) ? ("") : ("col-md-10"));
            // line 11
            echo "
        ";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "children", [], "any", false, false, false, 12), "channel", [], "any", false, false, false, 12), 'row');
            echo "
        ";
            // line 13
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'errors');
            echo "
        <div class=\"row\">
            <div class=\"col-md-";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["leftCol"]) || array_key_exists("leftCol", $context) ? $context["leftCol"] : (function () { throw new RuntimeError('Variable "leftCol" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\">
                <div class=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["enableCol"]) || array_key_exists("enableCol", $context) ? $context["enableCol"] : (function () { throw new RuntimeError('Variable "enableCol" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\">
                    ";
            // line 17
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "children", [], "any", false, false, false, 17), "isEnabled", [], "any", false, false, false, 17), 'row');
            echo "
                </div>
                <div class=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["propsCol"]) || array_key_exists("propsCol", $context) ? $context["propsCol"] : (function () { throw new RuntimeError('Variable "propsCol" does not exist.', 19, $this->source); })()), "html", null, true);
            echo "\">
                    <div class=\"message_channel_properties_";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["channel"]) || array_key_exists("channel", $context) ? $context["channel"] : (function () { throw new RuntimeError('Variable "channel" does not exist.', 20, $this->source); })()), "html", null, true);
            if ( !(isset($context["enabled"]) || array_key_exists("enabled", $context) ? $context["enabled"] : (function () { throw new RuntimeError('Variable "enabled" does not exist.', 20, $this->source); })())) {
                echo " hide";
            }
            echo "\">
                        ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, true, false, 21), "channelId", [], "any", true, true, false, 21)) {
                // line 22
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "children", [], "any", false, false, false, 22), "channelId", [], "any", false, false, false, 22), 'row');
                echo "
                        ";
            }
            // line 24
            echo "
                        ";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, true, false, 25), "properties", [], "any", true, true, false, 25) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "children", [], "any", false, false, false, 25), "properties", [], "any", false, false, false, 25)))) {
                // line 26
                echo "                            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "children", [], "any", false, false, false, 26), "properties", [], "any", false, false, false, 26), 'row');
                echo "
                        ";
            }
            // line 28
            echo "                    </div>
                </div>
            </div>
            ";
            // line 31
            if ((isset($context["channelContent"]) || array_key_exists("channelContent", $context) ? $context["channelContent"] : (function () { throw new RuntimeError('Variable "channelContent" does not exist.', 31, $this->source); })())) {
                // line 32
                echo "            <div class=\"col-md-6\">
                ";
                // line 33
                echo twig_escape_filter($this->env, (isset($context["channelContent"]) || array_key_exists("channelContent", $context) ? $context["channelContent"] : (function () { throw new RuntimeError('Variable "channelContent" does not exist.', 33, $this->source); })()), "html", null, true);
                echo "
            </div>
            ";
            }
            // line 36
            echo "        </div>
    ";
        }
    }

    // line 64
    public function block_aboveTabsContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "<div class=\"pa-md row\">
    <div class=\"col-md-12\">
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "name", [], "any", false, false, false, 67), 'row');
        echo "
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), 'row');
        echo "
    </div>
</div>
";
    }

    // line 73
    public function block_rightFormContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "category", [], "any", false, false, false, 74), 'row');
        echo "
";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "isPublished", [], "any", false, false, false, 75), 'row');
        echo "
";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "publishUp", [], "any", false, false, false, 76), 'row');
        echo "
";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "publishDown", [], "any", false, false, false, 77), 'row');
        echo "
";
    }

    // line 79
    public function block__content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticChannel/Message/form.html.twig";
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
        return array (  230 => 79,  224 => 77,  220 => 76,  216 => 75,  212 => 74,  208 => 73,  200 => 68,  196 => 67,  192 => 65,  188 => 64,  182 => 36,  176 => 33,  173 => 32,  171 => 31,  166 => 28,  160 => 26,  158 => 25,  155 => 24,  149 => 22,  147 => 21,  140 => 20,  136 => 19,  131 => 17,  127 => 16,  123 => 15,  118 => 13,  114 => 12,  111 => 11,  108 => 10,  105 => 9,  102 => 8,  99 => 7,  96 => 6,  93 => 5,  90 => 4,  86 => 3,  81 => 1,  79 => 62,  72 => 59,  69 => 56,  67 => 55,  65 => 54,  63 => 53,  61 => 48,  60 => 47,  59 => 46,  58 => 45,  57 => 44,  55 => 43,  51 => 42,  49 => 41,  47 => 40,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticChannel/Message/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Resources\\views\\Message\\form.html.twig");
    }
}
