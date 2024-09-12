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

/* @MauticSocial/Integration/LinkedIn/Profile/view.html.twig */
class __TwigTemplate_07d90531a9d6782dd867cad1e8afd988 extends Template
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
        echo "<div class=\"panel-toolbar np\">
    <ul class=\"nav nav-tabs pr-md pl-md\">
        <li class=\"active\">
            <a href=\"#LinkedInProfile\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.profile"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"#LinkedInPhotos\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.photos"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>
</div>
<div class=\"np panel-body tab-content\">
    <div class=\"pa-20 tab-pane active\" id=\"LinkedInProfile\">
        ";
        // line 17
        echo twig_include($this->env, $context, "@MauticSocial/Integration/LinkedIn/Profile/profile.html.twig", ["profile" => twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 18, $this->source); })()), "profile", [], "any", false, false, false, 18)]);
        // line 19
        echo "
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSocial/Integration/LinkedIn/Profile/view.html.twig";
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
        return array (  64 => 19,  62 => 18,  61 => 17,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Integration/LinkedIn/Profile/view.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Integration\\LinkedIn\\Profile\\view.html.twig");
    }
}
