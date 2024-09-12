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

/* @MauticLead/Integration/index.html.twig */
class __TwigTemplate_431fc8661d8bbc83ae7d470b1eeea2e6 extends Template
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
        // line 6
        if (twig_test_empty((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "  <div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\">
      <h4>";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.integrations.header"), "html", null, true);
            echo "</h4>
  </div>
";
        } else {
            // line 11
            echo "  <div class=\"row\">
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 12, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["details"]) {
                // line 13
                echo "      ";
                echo twig_escape_filter($this->env, twig_cycle(["", "</div><div class=\"row\">"], twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 13)), "html", null, true);
                echo "
      <div class=\"col-md-6\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["details"], "link", [], "any", true, true, false, 18)) {
                    // line 19
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["details"], "link", [], "any", false, false, false, 19), "html", null, true);
                    echo "\" class=\"pull-right\"><i class=\"ri-external-link-line\"></i></a>
              ";
                }
                // line 21
                echo "              ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["details"], "integration", [], "any", false, false, false, 21), "html", null, true);
                echo "
            </h3>
          </div>
          <div class=\"panel-body\">
            <dl class=\"dl-horizontal\">
              <dt>";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.object"), "html", null, true);
                echo "</dt><dd>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["details"], "integration_entity", [], "any", false, false, false, 26), "html", null, true);
                echo "</dd>
              <dt>";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.object_id"), "html", null, true);
                echo "</dt><dd>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["details"], "integration_entity_id", [], "any", false, false, false, 27), "html", null, true);
                echo "</dd>
              <dt>";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.date.added"), "html", null, true);
                echo "</dt><dd>";
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, $context["details"], "date_added", [], "any", false, false, false, 28), "UTC", "Y-m-d H:i:s", true);
                echo "</dd>
              <dt>";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.last_sync_date"), "html", null, true);
                echo "</dt><dd>";
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toText(twig_get_attribute($this->env, $this->source, $context["details"], "last_sync_date", [], "any", false, false, false, 29), "UTC", "Y-m-d H:i:s", true);
                echo "</dd>
            </dl>
          </div>
        </div>
      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Integration/index.html.twig";
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
        return array (  134 => 35,  112 => 29,  106 => 28,  100 => 27,  94 => 26,  85 => 21,  79 => 19,  77 => 18,  68 => 13,  51 => 12,  48 => 11,  42 => 8,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Integration/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Integration\\index.html.twig");
    }
}
