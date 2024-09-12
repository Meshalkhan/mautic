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

/* @MauticSocial/Integration/Foursquare/Profile/profile.html.twig */
class __TwigTemplate_e4754c544ce7b24efb92a45aedd81486 extends Template
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
        $macros["social"] = $this->macros["social"] = $this->loadTemplate("@MauticSocial//macros.html.twig", "@MauticSocial/Integration/Foursquare/Profile/profile.html.twig", 1)->unwrap();
        // line 2
        $context["tableFields"] = ["gender", "homeCity", "bio"];
        // line 3
        echo "<div class=\"media\">
    ";
        // line 4
        echo twig_call_macro($macros["social"], "macro_profileImage", [(isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 4, $this->source); })())], 4, $context, $this->getSourceContext());
        echo "
    <div class=\"media-body\">
        <h4 class=\"media-heading\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 6, $this->source); })()), "firstName", [], "any", false, false, false, 6), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 6, $this->source); })()), "lastName", [], "any", false, false, false, 6), "html", null, true);
        echo "</h4>
        <p class=\"text-muted\"><a href=\"https://foursquare.com/user/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 7, $this->source); })()), "profileHandle", [], "any", false, false, false, 7), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 7, $this->source); })()), "profileHandle", [], "any", false, false, false, 7), "html", null, true);
        echo "</a></p>
        <table class=\"table table-condensed\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["tableFields"]) || array_key_exists("tableFields", $context) ? $context["tableFields"] : (function () { throw new RuntimeError('Variable "tableFields" does not exist.', 9, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 9, $this->source); })()), [], "array", true, true, false, 9) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 9, $this->source); })()), (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 9, $this->source); })()), [], "array", false, false, false, 9))); }));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 10
            echo "                <tr>
                    <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->translatorConditional(("mautic.integration.common." . $context["t"]), ("mautic.integration.Foursquare." . $context["t"])), "html", null, true);
            echo "</td>
                    <td>";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 12, $this->source); })()), $context["t"], [], "array", false, false, false, 12), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </table>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSocial/Integration/Foursquare/Profile/profile.html.twig";
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
        return array (  82 => 15,  73 => 12,  69 => 11,  66 => 10,  62 => 9,  55 => 7,  49 => 6,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Integration/Foursquare/Profile/profile.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Integration\\Foursquare\\Profile\\profile.html.twig");
    }
}
