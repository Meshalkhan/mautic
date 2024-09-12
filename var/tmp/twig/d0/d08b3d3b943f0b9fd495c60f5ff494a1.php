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

/* @MauticDynamicContent/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_2083105b9ff131de3003bc1f513e6585 extends Template
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
        $context["data"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "extra", [], "any", false, false, false, 1), "stat", [], "any", false, false, false, 1), "sentDetails", [], "any", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        if (( !twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "failed", [], "any", true, true, false, 3) && twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "timeline", [], "any", true, true, false, 3))) {
            // line 4
            echo "    <dl class=\"dl-horizontal\">
        <dt>";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.dynamicContent.timeline.content"), "html", null, true);
            echo "</dt>
        <dd>";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "timeline", [], "any", false, false, false, 6)), "html", null, true);
            echo "</dd>
    </dl>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticDynamicContent/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  51 => 6,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticDynamicContent/SubscribedEvents/Timeline/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Resources\\views\\SubscribedEvents\\Timeline\\index.html.twig");
    }
}
