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

/* @MauticSocial/Integration/Foursquare/Profile/view.html.twig */
class __TwigTemplate_49b987b46cd7b534462a139100f7c75c extends Template
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
            <a href=\"#FoursquareProfile\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.profile"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"#FoursquareTips\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.foursquare.tips"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>
</div>

<div class=\"np panel-body tab-content\">
    <div class=\"pa-20 tab-pane active\" id=\"FoursquareProfile\">
        ";
        // line 18
        echo twig_include($this->env, $context, "@MauticSocial/Integration/Foursquare/Profile/profile.html.twig", ["lead" =>         // line 19
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 19, $this->source); })()), "profile" => twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 20, $this->source); })()), "profile", [], "any", false, false, false, 20)]);
        // line 21
        echo "
    </div>
    <div class=\"tab-pane\" id=\"FoursquareTips\">
        ";
        // line 24
        echo twig_include($this->env, $context, "@MauticSocial/Integration/Foursquare/Profile/tips.html.twig", ["lead" =>         // line 25
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 25, $this->source); })()), "activity" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
($context["details"] ?? null), "activity", [], "any", false, true, false, 26), "tips", [], "any", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "activity", [], "any", false, true, false, 26), "tips", [], "any", false, false, false, 26), [])) : ([]))]);
        // line 27
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
        return "@MauticSocial/Integration/Foursquare/Profile/view.html.twig";
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
        return array (  75 => 27,  73 => 26,  72 => 25,  71 => 24,  66 => 21,  64 => 20,  63 => 19,  62 => 18,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Integration/Foursquare/Profile/view.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Integration\\Foursquare\\Profile\\view.html.twig");
    }
}
