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

/* @MauticFullContact/FullContact/lookup.html.twig */
class __TwigTemplate_5cec90d9f1936418df0b6c844776d045 extends Template
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
        echo "<div class=\"alert alert-info\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.fullcontact.submit"), "html", null, true);
        echo "</div>
<div style=\"margin-top: 10px\">
    <ul class=\"list-group\" style=\"max-height: 400px;overflow-y: auto\">
        <li class=\"list-group-item\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["lookupItem"]) || array_key_exists("lookupItem", $context) ? $context["lookupItem"] : (function () { throw new RuntimeError('Variable "lookupItem" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</li>
    </ul>
</div>
";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFullContact/FullContact/lookup.html.twig";
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
        return array (  50 => 12,  44 => 9,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFullContact/FullContact/lookup.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFullContactBundle\\Resources\\views\\FullContact\\lookup.html.twig");
    }
}
