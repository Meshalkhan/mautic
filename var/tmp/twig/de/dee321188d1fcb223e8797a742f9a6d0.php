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

/* @MauticLead/Note/_list_filter_form.html.twig */
class __TwigTemplate_a557e6f0db768ae99635bfd9193f98b6 extends Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactnote_index", ["page" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 1, $this->source); })()), "leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "tmpl" => "list"]), "html", null, true);
        echo "\" class=\"panel\" id=\"note-filters\" method=\"post\">
    <div class=\"form-control-icon pa-xs\">
        <input type=\"text\"
               name=\"search\"
               value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 5, $this->source); })()));
        echo "\"
               id=\"NoteFilter\"
               class=\"form-control bdr-w-0\"
               placeholder=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.placeholder"), "html", null, true);
        echo "\"
               data-toggle=\"livesearch\"
               data-target=\"#NoteList\"
               data-action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contactnote_index", ["leadId" => twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "page" => 1]), "html", null, true);
        echo "\">
        <span class=\"the-icon ri-search-line text-muted mt-xs\"></span><!-- must below `form-control` -->
    </div>
    <input type=\"hidden\" name=\"leadId\" id=\"leadId\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14));
        echo "\" />
    <div class=\"panel-footer text-muted\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["noteTypes"]) || array_key_exists("noteTypes", $context) ? $context["noteTypes"] : (function () { throw new RuntimeError('Variable "noteTypes" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["typeKey"] => $context["typeName"]) {
            // line 17
            echo "            <div class=\"checkbox-inline custom-primary\">
                <label class=\"mb-0\">
                    <input name=\"noteTypes[]\" type=\"checkbox\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, $context["typeKey"], "html", null, true);
            echo "\" ";
            if (twig_in_filter($context["typeKey"], (isset($context["noteType"]) || array_key_exists("noteType", $context) ? $context["noteType"] : (function () { throw new RuntimeError('Variable "noteType" does not exist.', 19, $this->source); })()))) {
                echo "checked";
            }
            echo " />
                    <span class=\"mr-0\"></span>
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["typeName"]), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['typeKey'], $context['typeName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Note/_list_filter_form.html.twig";
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
        return array (  95 => 25,  85 => 21,  76 => 19,  72 => 17,  68 => 16,  63 => 14,  57 => 11,  51 => 8,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Note/_list_filter_form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Note\\_list_filter_form.html.twig");
    }
}
