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

/* @MauticSocial/Integration/Instagram/Profile/view.html.twig */
class __TwigTemplate_aa0bd891a973e09687311112700b0ff2 extends Template
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
            <a href=\"#InstagramProfile\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.profile"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"#InstagramPhotos\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.photos"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>
</div>
<div class=\"np panel-body tab-content\">
    <div class=\"pa-20 tab-pane active\" id=\"InstagramProfile\">
        ";
        // line 17
        echo twig_include($this->env, $context, "@MauticSocial/Integration/Instagram/Profile/profile.html.twig", ["profile" => twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 18, $this->source); })()), "profile", [], "any", false, false, false, 18)]);
        // line 19
        echo "
    </div>
    <div class=\"pa-20 tab-pane\" id=\"InstagramPhotos\">
        ";
        // line 22
        echo twig_include($this->env, $context, "@MauticSocial/Integration/Instagram/Profile/photos.html.twig", ["activity" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
($context["details"] ?? null), "activity", [], "any", false, true, false, 23), "photos", [], "any", true, true, false, 23)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "activity", [], "any", false, true, false, 23), "photos", [], "any", false, false, false, 23), [])) : ([]))]);
        // line 24
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
        return "@MauticSocial/Integration/Instagram/Profile/view.html.twig";
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
        return array (  72 => 24,  70 => 23,  69 => 22,  64 => 19,  62 => 18,  61 => 17,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Integration/Instagram/Profile/view.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Integration\\Instagram\\Profile\\view.html.twig");
    }
}
