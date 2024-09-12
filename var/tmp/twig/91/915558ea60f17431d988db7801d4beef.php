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

/* @MauticPage/SubscribedEvents/PageToken/langbar.html.twig */
class __TwigTemplate_3677ea6fcb69fe1f8fa50d0412f51dc4 extends Template
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
        // line 5
        $context["count"] = twig_length_filter($this->env, (isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 5, $this->source); })()));
        // line 6
        if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 6, $this->source); })()) > 0)) {
            // line 7
            echo "<div class=\"page-lang-bar\">
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 9
                echo "      ";
                $context["active"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "requestUri", [], "any", false, false, false, 9) == twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 9));
                // line 10
                echo "      <span>
          ";
                // line 11
                if ( !(isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 11, $this->source); })())) {
                    // line 12
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "url", [], "any", false, false, false, 12), "html", null, true);
                    echo "\">
          ";
                }
                // line 14
                echo "          ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "lang", [], "any", false, false, false, 14), "html", null, true);
                echo "
          ";
                // line 15
                if ( !(isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 15, $this->source); })())) {
                    // line 16
                    echo "              </a>
          ";
                }
                // line 18
                echo "      </span>
      ";
                // line 19
                $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 19, $this->source); })()) - 1);
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPage/SubscribedEvents/PageToken/langbar.html.twig";
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
        return array (  84 => 21,  78 => 20,  76 => 19,  73 => 18,  69 => 16,  67 => 15,  62 => 14,  56 => 12,  54 => 11,  51 => 10,  48 => 9,  44 => 8,  41 => 7,  39 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/SubscribedEvents/PageToken/langbar.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\SubscribedEvents\\PageToken\\langbar.html.twig");
    }
}
