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

/* @MauticLead/Lead/dnc_small.html.twig */
class __TwigTemplate_65c8757e7115eb646daddb18f341bd02 extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dncList"]) || array_key_exists("dncList", $context) ? $context["dncList"] : (function () { throw new RuntimeError('Variable "dncList" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["channel"] => $context["reason"]) {
            // line 6
            echo "  <span class=\"label label-danger\">
    <i title=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.event.donotcontact_channel", ["%channel%" => $context["channel"]]), "html", null, true);
            echo "\" class=\"fa fa-ban ico-";
            echo twig_escape_filter($this->env, $context["channel"], "html", null, true);
            echo "\"></i>
  </span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['channel'], $context['reason'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/dnc_small.html.twig";
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
        return array (  44 => 7,  41 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/dnc_small.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\dnc_small.html.twig");
    }
}
