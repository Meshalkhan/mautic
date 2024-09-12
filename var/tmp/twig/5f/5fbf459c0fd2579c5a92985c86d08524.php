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

/* @MauticLead/Note/list.html.twig */
class __TwigTemplate_824a1be600491e3c3a518b9d7144e526 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "@MauticCore/Default/raw_output.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()));
        // line 2
        $context["tmpl"] = "list";
        // line 3
        $this->parent = $this->loadTemplate("@MauticCore/Default/raw_output.html.twig", "@MauticLead/Note/list.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "  ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "    <div class=\"box-layout mb-lg\">
        <div class=\"col-xs-12 col-md-9 col-lg-10 va-m\">
            ";
            // line 9
            echo twig_include($this->env, $context, "@MauticLead/Note/_list_filter_form.html.twig");
            echo "
        </div>
        <div class=\"col-xs-12 col-md-3 col-lg-2 va-t\">
            <a class=\"btn btn-primary btn-leadnote-add pull-right\" href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactnote_action", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "objectAction" => "new"]), "html", null, true);
            echo "\" data-toggle=\"ajaxmodal\" data-target=\"#MauticSharedModal\" data-header=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.note.header.new"), "html", null, true);
            echo "\"><i class=\"ri-add-line fa-lg\"></i> ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.add.note"), "html", null, true);
            echo "</a>
        </div>
    </div>
    <div id=\"NoteList\">
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        echo twig_include($this->env, $context, "@MauticLead/Note/_list.html.twig");
        echo "

  ";
        // line 20
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "    </div>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Note/list.html.twig";
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
        return array (  90 => 21,  88 => 20,  83 => 18,  80 => 17,  68 => 12,  62 => 9,  58 => 7,  55 => 6,  51 => 5,  46 => 3,  44 => 2,  42 => 1,  35 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Note/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Note\\list.html.twig");
    }
}
