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

/* @MauticClearbit/Clearbit/lookup.html.twig */
class __TwigTemplate_af38dab2555f1320f2228336713efe85 extends Template
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
        echo "<div class=\"alert alert-info\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.clearbit.submit"), "html", null, true);
        echo "</div>
<div style=\"margin-top: 10px\">
    <ul class=\"list-group\" style=\"max-height: 400px;overflow-y: auto\">
        <li class=\"list-group-item\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["lookupItem"]) || array_key_exists("lookupItem", $context) ? $context["lookupItem"] : (function () { throw new RuntimeError('Variable "lookupItem" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</li>
    </ul>
</div>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticClearbit/Clearbit/lookup.html.twig";
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
        return array (  50 => 7,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticClearbit/Clearbit/lookup.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticClearbitBundle\\Resources\\views\\Clearbit\\lookup.html.twig");
    }
}
