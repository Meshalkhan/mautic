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

/* @MauticForm/Result/export.html.twig */
class __TwigTemplate_a0f411f0bc5fe02730009c2b91aa146c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["contentOnly"] = true;
        // line 2
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticForm/Result/export.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 4, $this->source); })()), "html", null, true);
    }

    // line 6
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.header.index", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7)]), "html", null, true);
        echo "
";
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  <div class=\"formresults\">
      <table class=\"table table-hover formresult-list\">
          <thead>
            <tr>
                <th class=\"col-formresult-id\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.report.submission.id"), "html", null, true);
        echo "</th>
                <th class=\"col-formresult-id\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.report.contact_id"), "html", null, true);
        echo "</th>
                <th class=\"col-formresult-date\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.thead.date"), "html", null, true);
        echo "</th>
                <th class=\"col-formresult-ip\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.ipaddress"), "html", null, true);
        echo "</th>
                ";
        // line 19
        $context["fields"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "fields", [], "any", false, false, false, 19);
        // line 20
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 21
            echo "                  ";
            if ((!twig_in_filter(twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 21), (isset($context["viewOnlyFields"]) || array_key_exists("viewOnlyFields", $context) ? $context["viewOnlyFields"] : (function () { throw new RuntimeError('Variable "viewOnlyFields" does not exist.', 21, $this->source); })())) && (true == twig_get_attribute($this->env, $this->source, $context["f"], "saveResult", [], "any", false, false, false, 21)))) {
                // line 22
                echo "                    <th class=\"col-formresult-field col-formresult-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "type", [], "any", false, false, false, 22), "html", null, true);
                echo " col-formresult-field";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "label", [], "any", false, false, false, 22), "html", null, true);
                echo "</th>
                  ";
            }
            // line 24
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </tr>
          </thead>
          <tbody>
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "              <tr>
                  <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "array", false, false, false, 30), "html", null, true);
            echo "</td>
                  <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "leadId", [], "array", false, false, false, 31), "html", null, true);
            echo "</td>
                  <td>";
            // line 32
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["item"], "dateSubmitted", [], "array", false, false, false, 32), "UTC");
            echo "</td>
                  <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ipAddress", [], "array", false, false, false, 33), "html", null, true);
            echo "</td>
                  ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "results", [], "any", false, false, false, 34));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 35
                echo "                      <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "value", [], "array", false, false, false, 35), "html", null, true);
                echo "</td>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "              </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "          </tbody>
      </table>
  </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Result/export.html.twig";
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
        return array (  169 => 39,  162 => 37,  153 => 35,  149 => 34,  145 => 33,  141 => 32,  137 => 31,  133 => 30,  130 => 29,  126 => 28,  121 => 25,  115 => 24,  105 => 22,  102 => 21,  97 => 20,  95 => 19,  91 => 18,  87 => 17,  83 => 16,  79 => 15,  73 => 11,  69 => 10,  62 => 7,  58 => 6,  51 => 4,  46 => 2,  44 => 1,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Result/export.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Result\\export.html.twig");
    }
}
