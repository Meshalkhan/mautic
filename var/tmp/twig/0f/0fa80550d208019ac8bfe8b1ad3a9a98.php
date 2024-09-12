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

/* @MauticLead/Note/note.html.twig */
class __TwigTemplate_b129f021063ebd673a0970b0fd603733 extends Template
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
        // line 7
        $context["icon"] = "fa-file-text";
        // line 8
        if (("email" == twig_get_attribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8))) {
            // line 9
            echo "    ";
            $context["icon"] = "fa-send";
        } elseif (("call" == twig_get_attribute($this->env, $this->source,         // line 10
(isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 10, $this->source); })()), "type", [], "any", false, false, false, 10))) {
            // line 11
            echo "    ";
            $context["icon"] = "fa-phone";
        } elseif (("meeting" == twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12))) {
            // line 13
            echo "    ";
            $context["icon"] = "fa-group";
        }
        // line 15
        echo "<li id=\"LeadNote";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
    <div class=\"panel \">
        <div class=\"panel-body np box-layout\">
            <div class=\"height-auto icon bdr-r col-xs-1 text-center\">
                <h3><i class=\"fa fa-lg fa-fw ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\"></i></h3>
            </div>
            <div class=\"media-body col-xs-11 pa-10\">
                <div class=\"pull-right btn-group\">
                    ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "edit", [], "array", false, false, false, 23)) {
            // line 24
            echo "                        <a class=\"btn btn-default btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_contactnote_action", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" data-toggle=\"ajaxmodal\" data-target=\"#MauticSharedModal\" data-header=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.note.header.edit"), "html", null, true);
            echo "\"><i class=\"ri-edit-line\"></i></a>
                    ";
        }
        // line 26
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), "delete", [], "array", false, false, false, 26)) {
            // line 27
            echo "                        <a class=\"btn btn-default btn-xs\" data-toggle=\"confirmation\"
                           href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactnote_action", ["objectAction" => "delete", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\"
                           data-message=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.note.confirmdelete"));
            echo "\"
                           data-confirm-text=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"));
            echo "\"
                           data-confirm-callback=\"executeAction\"
                           data-cancel-text=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"));
            echo "\">
                            <i class=\"ri-delete-bin-line text-danger\"></i>
                        </a>
                    ";
        }
        // line 36
        echo "                </div>
                ";
        // line 37
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 37, $this->source); })()), "text", [], "any", false, false, false, 37));
        echo "
                <div class=\"mt-15 text-muted\">
                  <i class=\"ri-time-line fa-fw\"></i> <span class=\"small\">";
        // line 39
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 39, $this->source); })()), "dateTime", [], "any", false, false, false, 39));
        echo "</span>
                  <i class=\"ri-user-6-line fa-fw\"></i> <span class=\"small\">";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 40, $this->source); })()), "createdByUser", [], "any", false, false, false, 40), "html", null, true);
        echo "</span>
                </div>
            </div>
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
        return "@MauticLead/Note/note.html.twig";
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
        return array (  118 => 40,  114 => 39,  109 => 37,  106 => 36,  99 => 32,  94 => 30,  90 => 29,  86 => 28,  83 => 27,  80 => 26,  72 => 24,  70 => 23,  63 => 19,  55 => 15,  51 => 13,  49 => 12,  46 => 11,  44 => 10,  41 => 9,  39 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Note/note.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Note\\note.html.twig");
    }
}
