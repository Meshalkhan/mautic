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

/* @MauticSocial/Integration/Twitter/Profile/view.html.twig */
class __TwigTemplate_c64d562bf9bf92ea7cb81113c77b56f5 extends Template
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
            <a href=\"#TwitterProfile\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.profile"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"#TwitterTweets\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.twitter.tweets"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"#TwitterPhotos\" role=\"tab\" data-toggle=\"tab\">
                ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.photos"), "html", null, true);
        echo "
            </a>
        </li>
        <li>
            <a href=\"#TwitterTags\" role=\"tab\" data-toggle=\"tab\">
               ";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.tags"), "html", null, true);
        echo "
            </a>
        </li>
    </ul>
</div>
<div class=\"np panel-body tab-content\">
    <div class=\"pa-20 tab-pane active\" id=\"TwitterProfile\">
        ";
        // line 27
        echo twig_include($this->env, $context, "@MauticSocial/Integration/Twitter/Profile/profile.html.twig", ["lead" =>         // line 28
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 28, $this->source); })()), "profile" => twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 29, $this->source); })()), "profile", [], "any", false, false, false, 29)]);
        // line 30
        echo "
    </div>
    <div class=\"tab-pane\" id=\"TwitterTweets\">
        ";
        // line 33
        echo twig_include($this->env, $context, "@MauticSocial/Integration/Twitter/Profile/tweets.html.twig", ["lead" =>         // line 34
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 34, $this->source); })()), "activity" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 35
($context["details"] ?? null), "activity", [], "any", false, true, false, 35), "tweets", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "activity", [], "any", false, true, false, 35), "tweets", [], "any", false, false, false, 35), [])) : ([]))]);
        // line 36
        echo "
    </div>
    <div class=\"pa-20 tab-pane\" id=\"TwitterPhotos\">
        ";
        // line 39
        echo twig_include($this->env, $context, "@MauticSocial/Integration/Twitter/Profile/photos.html.twig", ["lead" =>         // line 40
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 40, $this->source); })()), "activity" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["details"] ?? null), "activity", [], "any", false, true, false, 41), "photos", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "activity", [], "any", false, true, false, 41), "photos", [], "any", false, false, false, 41), [])) : ([]))]);
        // line 42
        echo "
    </div>
    <div class=\"pa-20 tab-pane\" id=\"TwitterTags\">
        ";
        // line 45
        echo twig_include($this->env, $context, "@MauticSocial/Integration/Twitter/Profile/tags.html.twig", ["lead" =>         // line 46
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 46, $this->source); })()), "activity" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 47
($context["details"] ?? null), "activity", [], "any", false, true, false, 47), "tags", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "activity", [], "any", false, true, false, 47), "tags", [], "any", false, false, false, 47), [])) : ([]))]);
        // line 48
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
        return "@MauticSocial/Integration/Twitter/Profile/view.html.twig";
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
        return array (  108 => 48,  106 => 47,  105 => 46,  104 => 45,  99 => 42,  97 => 41,  96 => 40,  95 => 39,  90 => 36,  88 => 35,  87 => 34,  86 => 33,  81 => 30,  79 => 29,  78 => 28,  77 => 27,  67 => 20,  59 => 15,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Integration/Twitter/Profile/view.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Integration\\Twitter\\Profile\\view.html.twig");
    }
}
