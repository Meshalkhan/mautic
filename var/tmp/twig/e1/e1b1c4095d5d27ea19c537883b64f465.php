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

/* @MauticForm/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_0f4e2cfcbd425bc5e18a262e2ddd6374 extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", true, true, false, 1)) {
            // line 2
            echo "  ";
            $context["form"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 2, $this->source); })()), "extra", [], "any", false, false, false, 2), "form", [], "any", false, false, false, 2);
            // line 3
            echo "  ";
            $context["page"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "extra", [], "any", false, false, false, 3), "page", [], "any", false, false, false, 3);
            // line 4
            echo "  ";
            $context["submission"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 4, $this->source); })()), "extra", [], "any", false, false, false, 4), "submission", [], "any", false, false, false, 4);
            // line 5
            echo "  ";
            $context["results"] = twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 5, $this->source); })()), "results", [], "any", false, false, false, 5);
            // line 6
            echo "
  <dl class=\"dl-horizontal\">
    ";
            // line 8
            if (array_key_exists("link", $context)) {
                // line 9
                echo "        <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.source"), "html", null, true);
                echo "</dt>
        <dd>";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 10, $this->source); })()), "html", null, true);
                echo "</dd>
    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13)) {
                // line 14
                echo "        <dt>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.description"), "html", null, true);
                echo "</dt>
        <dd>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), "html", null, true);
                echo "</dd>
    ";
            }
            // line 17
            echo "
    <dt>";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.result.thead.referrer"), "html", null, true);
            echo "</dt>
    <dd>";
            // line 19
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->makeLinks(twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 19, $this->source); })()), "referer", [], "any", false, false, false, 19));
            echo "</dd>

    ";
            // line 21
            if (is_iterable((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 21, $this->source); })()))) {
                // line 22
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "fields", [], "any", false, false, false, 22));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    // line 23
                    echo "            ";
                    if ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 23), twig_get_array_keys_filter((isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 23, $this->source); })()))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 23, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 23), [], "array", false, false, false, 23)))) {
                        // line 24
                        echo "                <dt>";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 24), "html", null, true);
                        echo "</dt>
                <dd>
                    ";
                        // line 26
                        if (twig_get_attribute($this->env, $this->source, $context["field"], "isFileType", [], "any", false, false, false, 26)) {
                            // line 27
                            echo "                        <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_form_file_download", ["submissionId" => twig_get_attribute($this->env, $this->source, (isset($context["submission"]) || array_key_exists("submission", $context) ? $context["submission"] : (function () { throw new RuntimeError('Variable "submission" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "field" => twig_get_attribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 27)]), "html", null, true);
                            echo "\">
                            ";
                            // line 28
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 28, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 28), [], "array", false, false, false, 28), "html", null, true);
                            echo "
                        </a>
                    ";
                        } else {
                            // line 31
                            echo "                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["results"]) || array_key_exists("results", $context) ? $context["results"] : (function () { throw new RuntimeError('Variable "results" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["field"], "alias", [], "any", false, false, false, 31), [], "array", false, false, false, 31), "html", null, true);
                            echo "
                    ";
                        }
                        // line 33
                        echo "                </dd>
            ";
                    }
                    // line 35
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "    ";
            }
            // line 37
            echo "  </dl>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  142 => 37,  139 => 36,  133 => 35,  129 => 33,  123 => 31,  117 => 28,  112 => 27,  110 => 26,  104 => 24,  101 => 23,  96 => 22,  94 => 21,  89 => 19,  85 => 18,  82 => 17,  77 => 15,  72 => 14,  70 => 13,  67 => 12,  62 => 10,  57 => 9,  55 => 8,  51 => 6,  48 => 5,  45 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/SubscribedEvents/Timeline/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\SubscribedEvents\\Timeline\\index.html.twig");
    }
}
