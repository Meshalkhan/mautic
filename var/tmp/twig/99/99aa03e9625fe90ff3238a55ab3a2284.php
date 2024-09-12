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

/* @MauticPoint/Trigger/form.html.twig */
class __TwigTemplate_efe1fcad06b3d9703129e71a316c40eb extends Template
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
            'modal' => [$this, 'block_modal'],
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticPoint/Trigger/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "pointTrigger";
    }

    // line 5
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)) {
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.header.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7))]), "html", null, true);
        } else {
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.header.new"), "html", null, true);
        }
    }

    // line 13
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "triggerEventModal", "header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.form.modalheader"), "footerButtons" => true]);
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
<div class=\"box-layout\">
    <div class=\"col-md-9 height-auto\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <!-- tabs controls -->
                <ul class=\"nav nav-tabs pr-md pl-md\">
                    <li class=\"active\"><a href=\"#details-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "</a></li>
                    <li class=\"\"><a href=\"#events-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.tab.events"), "html", null, true);
        echo "</a></li>
                </ul>
                <!--/ tabs controls -->

                <div class=\"tab-content pa-md\">
                    <div class=\"tab-pane fade in active bdr-w-0 height-auto\" id=\"details-container\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"pa-md\">
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37), 'row');
        echo "
                                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), 'row', ["attr" => ["class" => "form-control editor"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"pa-md\">
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "points", [], "any", false, false, false, 43), 'row');
        echo "
                                    ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "color", [], "any", false, false, false, 44), 'row');
        echo "
                                    ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "group", [], "any", false, false, false, 45), 'row');
        echo "
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "triggerExistingLeads", [], "any", false, false, false, 46), 'row');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"tab-pane fade bdr-w-0\" id=\"events-container\">
                        <div id=\"triggerEvents\">
                            <div class=\"mb-md\">
                                <div class=\"dropdown\">
                                    <button class=\"btn btn-default dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                                        ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.event.add"), "html", null, true);
        echo "
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul class=\"dropdown-menu\" role=\"menu\">
                                        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 61, $this->source); })()));
        foreach ($context['_seq'] as $context["group"] => $context["event"]) {
            // line 62
            echo "                                            <li role=\"presentation\" class=\"dropdown-header\">
                                                ";
            // line 63
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "
                                            </li>
                                            ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["event"]);
            foreach ($context['_seq'] as $context["k"] => $context["e"]) {
                // line 66
                echo "                                                <li id=\"event_";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "\">
                                                    <a data-toggle=\"ajaxmodal\"
                                                       data-target=\"#triggerEventModal\"
                                                       class=\"list-group-item\"
                                                       href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_pointtriggerevent_action", ["objectAction" => "new", "type" => $context["k"], "tmpl" => "event", "triggerId" => (isset($context["sessionId"]) || array_key_exists("sessionId", $context) ? $context["sessionId"] : (function () { throw new RuntimeError('Variable "sessionId" does not exist.', 70, $this->source); })())]), "html", null, true);
                echo "\">
                                                        <div data-toggle=\"tooltip\" title=\"";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "description", [], "any", false, false, false, 71), "html", null, true);
                echo "\">
                                                            <span>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "label", [], "any", false, false, false, 72), "html", null, true);
                echo "</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['e'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                                    </ul>
                                </div>
                            </div>
                            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["triggerEvents"]) || array_key_exists("triggerEvents", $context) ? $context["triggerEvents"] : (function () { throw new RuntimeError('Variable "triggerEvents" does not exist.', 81, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 82
            echo "                                ";
            $context["template"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "settings", [], "any", false, true, false, 82), "template", [], "any", true, true, false, 82)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["event"], "settings", [], "any", false, true, false, 82), "template", [], "any", false, false, false, 82), "@MauticPoint/Event/generic.html.twig")) : ("@MauticPoint/Event/generic.html.twig"));
            // line 83
            echo "                                <!-- start: \"";
            echo twig_escape_filter($this->env, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 83, $this->source); })()), "html", null, true);
            echo "\" -->
                                ";
            // line 84
            echo twig_include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 84, $this->source); })()), ["event" =>             // line 85
$context["event"], "id" => twig_get_attribute($this->env, $this->source,             // line 86
$context["event"], "id", [], "any", false, false, false, 86), "deleted" => twig_in_filter(twig_get_attribute($this->env, $this->source,             // line 87
$context["event"], "id", [], "any", false, false, false, 87), (isset($context["deletedEvents"]) || array_key_exists("deletedEvents", $context) ? $context["deletedEvents"] : (function () { throw new RuntimeError('Variable "deletedEvents" does not exist.', 87, $this->source); })())), "sessionId" =>             // line 88
(isset($context["sessionId"]) || array_key_exists("sessionId", $context) ? $context["sessionId"] : (function () { throw new RuntimeError('Variable "sessionId" does not exist.', 88, $this->source); })())], false);
            // line 89
            echo "
                                <!--/ start: \"";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 90, $this->source); })()), "html", null, true);
            echo "\" -->
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            echo "                                <div class=\"alert alert-info\" id=\"triggerEventPlaceholder\">
                                    <p>";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.trigger.addevent"), "html", null, true);
            echo "</p>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-3 height-auto bdr-l\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "category", [], "any", false, false, false, 104), 'row');
        echo "
            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "isPublished", [], "any", false, false, false, 105), 'row');
        echo "
            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "publishUp", [], "any", false, false, false, 106), 'row');
        echo "
            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "publishDown", [], "any", false, false, false, 107), 'row');
        echo "
        </div>
    </div>
</div>
";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
        echo "

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPoint/Trigger/form.html.twig";
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
        return array (  276 => 111,  269 => 107,  265 => 106,  261 => 105,  257 => 104,  247 => 96,  238 => 93,  235 => 92,  228 => 90,  225 => 89,  223 => 88,  222 => 87,  221 => 86,  220 => 85,  219 => 84,  214 => 83,  211 => 82,  206 => 81,  201 => 78,  195 => 77,  184 => 72,  180 => 71,  176 => 70,  168 => 66,  164 => 65,  159 => 63,  156 => 62,  152 => 61,  145 => 57,  131 => 46,  127 => 45,  123 => 44,  119 => 43,  111 => 38,  107 => 37,  95 => 28,  91 => 27,  81 => 20,  77 => 19,  70 => 13,  65 => 9,  62 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPoint/Trigger/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Resources\\views\\Trigger\\form.html.twig");
    }
}
