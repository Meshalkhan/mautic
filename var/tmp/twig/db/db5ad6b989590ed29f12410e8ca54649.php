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

/* @MauticFullContact/Integration/form.html.twig */
class __TwigTemplate_38a96c1e4585eb21d44a69deceee068f extends Template
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
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticFullContactBundle/Assets/js/fullcontact.js");
        echo "
<div class=\"well well-sm\" style=\"margin-bottom:0 !important;\">
    <p>";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.fullcontact.webhook"), "html", null, true);
        echo "</p>
    <div class=\"alert alert-warning\">
        ";
        // line 5
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.fullcontact.public_info"));
        echo "
    </div>
    <input type=\"text\" readonly=\"readonly\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["mauticUrl"]) || array_key_exists("mauticUrl", $context) ? $context["mauticUrl"] : (function () { throw new RuntimeError('Variable "mauticUrl" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" title=\"url\"/>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFullContact/Integration/form.html.twig";
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
        return array (  52 => 7,  47 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFullContact/Integration/form.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFullContactBundle\\Resources\\views\\Integration\\form.html.twig");
    }
}
