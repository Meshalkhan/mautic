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

/* @MauticSocial/Integration/Facebook/share.html.twig */
class __TwigTemplate_d000e6b3d637deaff521b184aa3ec811 extends Template
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
        $context["locale"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "locale", [], "any", false, false, false, 1);
        // line 2
        $context["settings"] = ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", true, true, false, 2)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "properties", [], "any", false, false, false, 2), [])) : ([]));
        // line 3
        $context["layout"] = ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "layout", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "layout", [], "any", false, false, false, 3), "standard")) : ("standard"));
        // line 4
        $context["action"] = ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "action", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "action", [], "any", false, false, false, 4), "like")) : ("like"));
        // line 5
        $context["showFaces"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 5, $this->source); })()), "showFaces", [], "any", false, false, false, 5))) ? ("true") : ("false"));
        // line 6
        $context["showShare"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 6, $this->source); })()), "showShare", [], "any", false, false, false, 6))) ? ("true") : ("false"));
        // line 7
        $context["clientId"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "keys", [], "any", false, true, false, 7), "clientId", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "keys", [], "any", false, true, false, 7), "clientId", [], "any", false, false, false, 7), "")) : (""));
        // line 8
        echo "
";
        // line 10
        echo "<meta property=\"og:type\" content=\"website\" />
<div class=\"fb-";
        // line 11
        if (("share" == (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()))) {
            echo "share-button";
        } else {
            echo "like";
        }
        echo " share-button facebook-share-button layout-";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " action-";
        echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\"
     data-";
        // line 12
        if (("share" == (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()))) {
            echo "type";
        } else {
            echo "layout";
        }
        echo "=\"";
        echo twig_escape_filter($this->env, (isset($context["layout"]) || array_key_exists("layout", $context) ? $context["layout"] : (function () { throw new RuntimeError('Variable "layout" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\"
     ";
        // line 13
        if (("share" != (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "       data-action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\"
       data-show-faces=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["showFaces"]) || array_key_exists("showFaces", $context) ? $context["showFaces"] : (function () { throw new RuntimeError('Variable "showFaces" does not exist.', 15, $this->source); })()), "html", null, true);
            echo "\"
       data-share=\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["showShare"]) || array_key_exists("showShare", $context) ? $context["showShare"] : (function () { throw new RuntimeError('Variable "showShare" does not exist.', 16, $this->source); })()), "html", null, true);
            echo "\"
     ";
        }
        // line 18
        echo "</div>
<div id=\"fb-root\"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '//connect.facebook.net/{\$locale}/sdk.js#xfbml=1&appId=";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["clientId"]) || array_key_exists("clientId", $context) ? $context["clientId"] : (function () { throw new RuntimeError('Variable "clientId" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "&version=v2.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSocial/Integration/Facebook/share.html.twig";
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
        return array (  103 => 24,  95 => 18,  90 => 16,  86 => 15,  81 => 14,  79 => 13,  69 => 12,  57 => 11,  54 => 10,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Integration/Facebook/share.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Integration\\Facebook\\share.html.twig");
    }
}
