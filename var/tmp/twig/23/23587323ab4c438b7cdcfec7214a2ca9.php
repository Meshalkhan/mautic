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

/* @MauticSocial/FormTheme/Campaigns/twitter_tweet_widget.html.twig */
class __TwigTemplate_94448c3c4337e60727b21fb19ab32a7e extends Template
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
        echo "<div id=\"compose-tweet\">
    <div id=\"character-count\" class=\"text-right small\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.social.twitter.tweet.count"), "html", null, true);
        echo "
        <span></span>
    </div>
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "tweet_text", [], "any", false, false, false, 6), 'row');
        echo "

    <div class=\"row\">
        <div id=\"handle\" class=\"col-md-2\">
            <label class=\"control-label\">
                ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.social.twitter.tweet.handle"), "html", null, true);
        echo "
            </label>
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "handle", [], "any", false, false, false, 13), 'row');
        echo "
        </div>

        <div id=\"asset\" class=\"col-md-5\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "asset_link", [], "any", false, false, false, 17), 'row');
        echo "
        </div>

        <div id=\"page\" class=\"col-md-5\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "page_link", [], "any", false, false, false, 21), 'row');
        echo "
        </div>
    </div>
</div>
";
        // line 25
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticSocialBundle/Assets/js/social.js", "composeSocialWatcher", "composeSocialWatcher");
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSocial/FormTheme/Campaigns/twitter_tweet_widget.html.twig";
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
        return array (  81 => 25,  74 => 21,  67 => 17,  60 => 13,  55 => 11,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/FormTheme/Campaigns/twitter_tweet_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\FormTheme\\Campaigns\\twitter_tweet_widget.html.twig");
    }
}
