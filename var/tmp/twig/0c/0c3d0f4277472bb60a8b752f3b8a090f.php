<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticLead/Note/note.html.twig */
class __TwigTemplate_8380e5a16a595e8abe204f5c6ccb3a60 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        $context["icon"] = "fa-file-text";
        // line 8
        if (("email" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 8, $this->source); })()), "type", [], "any", false, false, false, 8))) {
            // line 9
            yield "    ";
            $context["icon"] = "fa-send";
        } elseif (("call" == CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 10, $this->source); })()), "type", [], "any", false, false, false, 10))) {
            // line 11
            yield "    ";
            $context["icon"] = "fa-phone";
        } elseif (("meeting" == CoreExtension::getAttribute($this->env, $this->source,         // line 12
(isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 12, $this->source); })()), "type", [], "any", false, false, false, 12))) {
            // line 13
            yield "    ";
            $context["icon"] = "fa-group";
        }
        // line 15
        yield "<li id=\"LeadNote";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
        yield "\">
    <div class=\"panel \">
        <div class=\"panel-body np box-layout\">
            <div class=\"height-auto icon bdr-r col-xs-1 text-center\">
                <h3><i class=\"fa fa-lg fa-fw ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\"></i></h3>
            </div>
            <div class=\"media-body col-xs-11 pa-10\">
                <div class=\"pull-right btn-group\">
                    ";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 23, $this->source); })()), "edit", [], "array", false, false, false, 23)) {
            // line 24
            yield "                        <a class=\"btn btn-default btn-xs\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_contactnote_action", ["leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
            yield "\" data-toggle=\"ajaxmodal\" data-target=\"#MauticSharedModal\" data-header=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.note.header.edit"), "html", null, true);
            yield "\"><i class=\"ri-edit-line\"></i></a>
                    ";
        }
        // line 26
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 26, $this->source); })()), "delete", [], "array", false, false, false, 26)) {
            // line 27
            yield "                        <a class=\"btn btn-default btn-xs\" data-toggle=\"confirmation\"
                           href=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactnote_action", ["objectAction" => "delete", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28), "leadId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\"
                           data-message=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.note.confirmdelete"));
            yield "\"
                           data-confirm-text=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.delete"));
            yield "\"
                           data-confirm-callback=\"executeAction\"
                           data-cancel-text=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"));
            yield "\">
                            <i class=\"ri-delete-bin-line text-danger\"></i>
                        </a>
                    ";
        }
        // line 36
        yield "                </div>
                ";
        // line 37
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 37, $this->source); })()), "text", [], "any", false, false, false, 37));
        yield "
                <div class=\"mt-15 text-muted\">
                  <i class=\"ri-time-line fa-fw\"></i> <span class=\"small\">";
        // line 39
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 39, $this->source); })()), "dateTime", [], "any", false, false, false, 39));
        yield "</span>
                  <i class=\"ri-user-6-line fa-fw\"></i> <span class=\"small\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new RuntimeError('Variable "note" does not exist.', 40, $this->source); })()), "createdByUser", [], "any", false, false, false, 40), "html", null, true);
        yield "</span>
                </div>
            </div>
        </div>
    </div>
</li>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Note/note.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  123 => 40,  119 => 39,  114 => 37,  111 => 36,  104 => 32,  99 => 30,  95 => 29,  91 => 28,  88 => 27,  85 => 26,  77 => 24,  75 => 23,  68 => 19,  60 => 15,  56 => 13,  54 => 12,  51 => 11,  49 => 10,  46 => 9,  44 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Note/note.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Note\\note.html.twig");
    }
}
