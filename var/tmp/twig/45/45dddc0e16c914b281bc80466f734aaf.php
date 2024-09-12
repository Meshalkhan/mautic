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

/* @MauticSocial/Integration/Twitter/Profile/tags.html.twig */
class __TwigTemplate_4fe7f397c57f99b79a843eca6a826467 extends Template
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
        echo "<ul class=\"twitter-tags tag-cloud\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activity"]) || array_key_exists("activity", $context) ? $context["activity"] : (function () { throw new RuntimeError('Variable "activity" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["tag"] => $context["t"]) {
            // line 3
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, $context["t"], "count", [], "any", false, false, false, 3) / 10) < 1)) {
                // line 4
                echo "            ";
                $context["fontSize"] = ((twig_get_attribute($this->env, $this->source, $context["t"], "count", [], "any", false, false, false, 4) / 10) + 1);
                // line 5
                echo "        ";
            } elseif (((twig_get_attribute($this->env, $this->source, $context["t"], "count", [], "any", false, false, false, 5) / 10) > 2)) {
                // line 6
                echo "            ";
                $context["fontSize"] = 2;
                // line 7
                echo "        ";
            } else {
                // line 8
                echo "            ";
                $context["fontSize"] = (twig_get_attribute($this->env, $this->source, $context["t"], "count", [], "any", false, false, false, 8) / 10);
                // line 9
                echo "        ";
            }
            // line 10
            echo "        <li style=\"font-size: ";
            echo twig_escape_filter($this->env, (isset($context["fontSize"]) || array_key_exists("fontSize", $context) ? $context["fontSize"] : (function () { throw new RuntimeError('Variable "fontSize" does not exist.', 10, $this->source); })()), "html", null, true);
            echo "em\"><a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["t"], "url", [], "any", false, false, false, 10), "html", null, true);
            echo "\" target=\"_new\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSocial/Integration/Twitter/Profile/tags.html.twig";
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
        return array (  78 => 12,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Integration/Twitter/Profile/tags.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Integration\\Twitter\\Profile\\tags.html.twig");
    }
}
