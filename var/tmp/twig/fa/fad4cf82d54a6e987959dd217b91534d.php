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

/* @MauticSocial/Integration/Twitter/share.html.twig */
class __TwigTemplate_34f00ff537ecf07be5fcdb7c26c29744 extends Template
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
        echo "<div class=\"share-button twitter-share-button layout-";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "count", [], "any", true, true, false, 1)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "count", [], "any", false, false, false, 1), "0")) : ("0")), "html", null, true);
        echo "\">
    <a href=\"https://twitter.com/share\"
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "text", [], "any", true, true, false, 3) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 3, $this->source); })()), "text", [], "any", false, false, false, 3)))) {
            echo "data-text=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 3, $this->source); })()), "text", [], "any", false, false, false, 3), "html", null, true);
            echo "\"";
        }
        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "via", [], "any", true, true, false, 4) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 4, $this->source); })()), "via", [], "any", false, false, false, 4)))) {
            echo "data-via=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 4, $this->source); })()), "via", [], "any", false, false, false, 4), "html", null, true);
            echo "\"";
        }
        // line 5
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "related", [], "any", true, true, false, 5) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 5, $this->source); })()), "related", [], "any", false, false, false, 5)))) {
            echo "data-related=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 5, $this->source); })()), "related", [], "any", false, false, false, 5), "html", null, true);
            echo "\"";
        }
        // line 6
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "hashtags", [], "any", true, true, false, 6) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 6, $this->source); })()), "hashtags", [], "any", false, false, false, 6)))) {
            echo "data-hashtags=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 6, $this->source); })()), "hashtags", [], "any", false, false, false, 6), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "size", [], "any", true, true, false, 7) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 7, $this->source); })()), "size", [], "any", false, false, false, 7)))) {
            echo "data-size=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 7, $this->source); })()), "size", [], "any", false, false, false, 7), "html", null, true);
            echo "\"";
        }
        // line 8
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "count", [], "any", true, true, false, 8) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 8, $this->source); })()), "count", [], "any", false, false, false, 8)))) {
            echo "data-count=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 8, $this->source); })()), "count", [], "any", false, false, false, 8), "html", null, true);
            echo "\"";
        }
        // line 9
        echo "    class=\"twitter-share-button share-button\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.Twitter.share.tweet"), "html", null, true);
        echo "</a>
</div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSocial/Integration/Twitter/share.html.twig";
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
        return array (  84 => 9,  77 => 8,  70 => 7,  63 => 6,  56 => 5,  49 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Integration/Twitter/share.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Integration\\Twitter\\share.html.twig");
    }
}
