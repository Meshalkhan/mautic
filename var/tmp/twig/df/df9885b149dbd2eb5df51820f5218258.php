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

/* @MauticCampaign/Event/form.html.twig */
class __TwigTemplate_dcbfd6e59466d5d60fa2470b6c618265 extends Template
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
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), ["@MauticCampaign/FormTheme/Event/_campaignevent_properties_row.html.twig"], true);
        // line 8
        if (array_key_exists("formTheme", $context)) {
            // line 9
            echo "  ";
            $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), [(isset($context["formTheme"]) || array_key_exists("formTheme", $context) ? $context["formTheme"] : (function () { throw new RuntimeError('Variable "formTheme" does not exist.', 9, $this->source); })())], true);
        }
        // line 11
        echo "<div class=\"bundle-form\">
    <div class=\"bundle-form-header mb-10\">
        <h3>";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["eventHeader"]) || array_key_exists("eventHeader", $context) ? $context["eventHeader"] : (function () { throw new RuntimeError('Variable "eventHeader" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</h3>
        ";
        // line 14
        if (array_key_exists("eventDescription", $context)) {
            // line 15
            echo "          <h6 class=\"text-muted\">";
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["eventDescription"]) || array_key_exists("eventDescription", $context) ? $context["eventDescription"] : (function () { throw new RuntimeError('Variable "eventDescription" does not exist.', 15, $this->source); })()));
            echo "</h6>
        ";
        }
        // line 17
        echo "    </div>

    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
        echo "

    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "canvasSettings", [], "any", false, false, false, 21), "droppedX", [], "any", false, false, false, 21), 'widget');
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "canvasSettings", [], "any", false, false, false, 22), "droppedY", [], "any", false, false, false, 22), 'widget');
        echo "

    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), 'row');
        echo "

    ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "triggerMode", [], "any", true, true, false, 26)) {
            // line 27
            echo "    <div";
            if ((isset($context["hideTriggerMode"]) || array_key_exists("hideTriggerMode", $context) ? $context["hideTriggerMode"] : (function () { throw new RuntimeError('Variable "hideTriggerMode" does not exist.', 27, $this->source); })())) {
                echo " class=\"hide\"";
            }
            echo ">
        ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "triggerMode", [], "any", false, false, false, 28), 'row');
            echo "

        <div";
            // line 30
            if (("date" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "triggerMode", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "data", [], "array", false, false, false, 30))) {
                echo " class=\"hide\"";
            }
            echo " id=\"triggerDate\">
            ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "triggerDate", [], "any", false, false, false, 31), 'row');
            echo "
        </div>

        <div";
            // line 34
            if (("interval" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "triggerMode", [], "any", false, false, false, 34), "vars", [], "any", false, false, false, 34), "data", [], "array", false, false, false, 34))) {
                echo " class=\"hide\"";
            }
            echo " id=\"triggerInterval\">
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "triggerInterval", [], "any", false, false, false, 37), 'row');
            echo "
                </div>
                <div class=\"col-sm-8\">
                    ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "triggerIntervalUnit", [], "any", false, false, false, 40), 'row');
            echo "
                </div>
            </div>
            <div id=\"interval_settings\">
                <hr />
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div style=\"display:inline-block; font-weight: 600;\">";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.form.type.interval_schedule_at"), "html", null, true);
            echo " </div>
                        <div style=\"width: 75px; display:inline-block; margin:0 10px 0 10px;\">";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "triggerHour", [], "any", false, false, false, 48), 'widget');
            echo "</div>
                        <div style=\"display:inline-block; font-weight: 600;\"> ";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.form.type.interval_schedule_between_hours"), "html", null, true);
            echo " </div>
                        <div style=\"width: 75px;display:inline-block; margin:0 10px 0 10px;\">";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "triggerRestrictedStartHour", [], "any", false, false, false, 50), 'widget');
            echo "</div>
                        <div style=\"display:inline-block; font-weight: 600;\"> ";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.and"), "html", null, true);
            echo " </div>
                        <div style=\"width: 75px; display:inline-block; margin:0 10px 0 10px;\">";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "triggerRestrictedStopHour", [], "any", false, false, false, 52), 'widget');
            echo "</div>
                    </div>
                </div>
                <hr />
                <div class=\"row mt-5\">
                    <div class=\"col-sm-12\" style=\"font-weight: 600;\">";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.form.type.interval_trigger_restricted_dow"), "html", null, true);
            echo "</div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-3\">
                        <div class=\"checkbox\">
                            <label>";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 62), 0, [], "array", false, false, false, 62), 'widget');
            echo " ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 62), 0, [], "array", false, false, false, 62), 'label');
            echo "</label>
                        </div>
                        <div class=\"checkbox\">
                            <label>";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 65), 1, [], "array", false, false, false, 65), 'widget');
            echo " ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 65), 1, [], "array", false, false, false, 65), 'label');
            echo "</label>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"checkbox\">
                            <label>";
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 70), 2, [], "array", false, false, false, 70), 'widget');
            echo " ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 70), 2, [], "array", false, false, false, 70), 'label');
            echo "</label>
                        </div>
                        <div class=\"checkbox\">
                            <label>";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 73), 3, [], "array", false, false, false, 73), 'widget');
            echo " ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 73), 3, [], "array", false, false, false, 73), 'label');
            echo "</label>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"checkbox\">
                            <label>";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 78), 4, [], "array", false, false, false, 78), 'widget');
            echo " ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 78), 4, [], "array", false, false, false, 78), 'label');
            echo "</label>
                        </div>
                        <div class=\"checkbox\">
                            <label>";
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 81), 5, [], "array", false, false, false, 81), 'widget');
            echo " ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 81), 5, [], "array", false, false, false, 81), 'label');
            echo "</label>
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        <div class=\"checkbox\">
                            <label>";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 86), 6, [], "array", false, false, false, 86), 'widget');
            echo " ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 86), 6, [], "array", false, false, false, 86), 'label');
            echo "</label>
                        </div>
                        <div class=\"checkbox\">
                            <label>";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 89), 7, [], "array", false, false, false, 89), 'widget');
            echo " ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "triggerRestrictedDaysOfWeek", [], "array", false, false, false, 89), 7, [], "array", false, false, false, 89), 'label');
            echo "</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 97
        echo "
    ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_end');
        echo "
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCampaign/Event/form.html.twig";
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
        return array (  248 => 98,  245 => 97,  232 => 89,  224 => 86,  214 => 81,  206 => 78,  196 => 73,  188 => 70,  178 => 65,  170 => 62,  162 => 57,  154 => 52,  150 => 51,  146 => 50,  142 => 49,  138 => 48,  134 => 47,  124 => 40,  118 => 37,  110 => 34,  104 => 31,  98 => 30,  93 => 28,  86 => 27,  84 => 26,  79 => 24,  74 => 22,  70 => 21,  65 => 19,  61 => 17,  55 => 15,  53 => 14,  49 => 13,  45 => 11,  41 => 9,  39 => 8,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCampaign/Event/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Resources\\views\\Event\\form.html.twig");
    }
}
