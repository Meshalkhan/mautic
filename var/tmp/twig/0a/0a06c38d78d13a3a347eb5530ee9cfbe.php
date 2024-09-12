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

/* @MauticLead/Timeline/list.html.twig */
class __TwigTemplate_91e8d9cd40e2f2671d5caba6078c27e4 extends Template
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
        // line 3
        echo twig_include($this->env, $context, "@MauticLead/Timeline/_list_filter_form.html.twig");
        // line 4
        echo "<script>
    mauticLang['showMore'] = '";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.show"), "html", null, true);
        echo "';
    mauticLang['hideMore'] = '";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.more.hide"), "html", null, true);
        echo "';
</script>
<div id=\"timeline-table\">";
        // line 9
        echo twig_include($this->env, $context, "@MauticLead/Timeline/_list.html.twig");
        // line 10
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Timeline/list.html.twig";
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
        return array (  53 => 10,  51 => 9,  46 => 6,  42 => 5,  39 => 4,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Timeline/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Timeline\\list.html.twig");
    }
}
