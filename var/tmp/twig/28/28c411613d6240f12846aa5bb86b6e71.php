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

/* @MauticLead/Company/form_fields.html.twig */
class __TwigTemplate_3bfddf7bec7a2a5ca44278b2ffee3cab extends Template
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
        // line 7
        $context["halfSize"] = ((array_key_exists("embedded", $context)) ? (6) : (4));
        // line 8
        $context["fullSize"] = ((array_key_exists("embedded", $context)) ? (12) : (8));
        // line 9
        echo "<!-- pane -->
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 10, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["group"]) {
            // line 11
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), $context["group"], [], "array", true, true, false, 11)) {
                // line 12
                echo "        ";
                $context["groupFields"] = twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 12, $this->source); })()), $context["group"], [], "array", false, false, false, 12);
                // line 13
                echo "        ";
                if ( !twig_test_empty((isset($context["groupFields"]) || array_key_exists("groupFields", $context) ? $context["groupFields"] : (function () { throw new RuntimeError('Variable "groupFields" does not exist.', 13, $this->source); })()))) {
                    // line 14
                    echo "            <div class=\"tab-pane fade ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 14)) {
                        echo "in active";
                    }
                    echo " bdr-rds-0 bdr-w-0\" id=\"company-";
                    echo twig_escape_filter($this->env, $context["group"], "html", null, true);
                    echo "\">
                ";
                    // line 15
                    if ( !array_key_exists("embedded", $context)) {
                        // line 16
                        echo "                    <div class=\"pa-md bg-light-xs bdr-b\">
                        <h4 class=\"fw-sb\">";
                        // line 17
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["group"])), "html", null, true);
                        echo "</h4>
                    </div>
                ";
                    }
                    // line 20
                    echo "                <div class=\"pa-md\">
                    ";
                    // line 21
                    if (("core" == $context["group"])) {
                        // line 22
                        echo "                        <div class=\"form-group mb-0\">
                            <div class=\"row\">
                                ";
                        // line 24
                        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "companyname", [], "any", true, true, false, 24)) {
                            // line 25
                            echo "                                    <div class=\"col-sm-";
                            echo twig_escape_filter($this->env, (isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 25, $this->source); })()), "html", null, true);
                            echo "\">";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "companyname", [], "any", false, false, false, 25), 'row');
                            echo "</div>
                                ";
                        }
                        // line 27
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "companyemail", [], "any", true, true, false, 27)) {
                            // line 28
                            echo "                                    <div class=\"col-sm-";
                            echo twig_escape_filter($this->env, (isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 28, $this->source); })()), "html", null, true);
                            echo "\">";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "companyemail", [], "any", false, false, false, 28), 'row');
                            echo "</div>
                                ";
                        }
                        // line 30
                        echo "                            </div>
                        </div>
                        <hr class=\"mnr-md mnl-md\">
                        ";
                        // line 33
                        if ((((((twig_get_attribute($this->env, $this->source,                         // line 34
($context["form"] ?? null), "companyaddress1", [], "any", true, true, false, 34) || twig_get_attribute($this->env, $this->source,                         // line 35
($context["form"] ?? null), "companyaddress2", [], "any", true, true, false, 35)) || twig_get_attribute($this->env, $this->source,                         // line 36
($context["form"] ?? null), "companycity", [], "any", true, true, false, 36)) || twig_get_attribute($this->env, $this->source,                         // line 37
($context["form"] ?? null), "companystate", [], "any", true, true, false, 37)) || twig_get_attribute($this->env, $this->source,                         // line 38
($context["form"] ?? null), "companyzipcode", [], "any", true, true, false, 38)) || twig_get_attribute($this->env, $this->source,                         // line 39
($context["form"] ?? null), "companycountry", [], "any", true, true, false, 39))) {
                            // line 41
                            echo "                            <div class=\"form-group mb-0\">
                                <label class=\"control-label mb-xs\">";
                            // line 42
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.field.address"), "html", null, true);
                            echo "</label>
                                ";
                            // line 43
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "companyaddress1", [], "any", true, true, false, 43)) {
                                // line 44
                                echo "                                    <div class=\"row mb-xs\">
                                        <div class=\"col-sm-";
                                // line 45
                                echo twig_escape_filter($this->env, (isset($context["fullSize"]) || array_key_exists("fullSize", $context) ? $context["fullSize"] : (function () { throw new RuntimeError('Variable "fullSize" does not exist.', 45, $this->source); })()), "html", null, true);
                                echo "\">
                                            ";
                                // line 46
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "companyaddress1", [], "any", false, false, false, 46), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "companyaddress1", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "label", [], "any", false, false, false, 46)]]);
                                echo "
                                        </div>
                                    </div>
                                ";
                            }
                            // line 50
                            echo "                                ";
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "companyaddress2", [], "any", true, true, false, 50)) {
                                // line 51
                                echo "                                    <div class=\"row mb-xs\">
                                        <div class=\"col-sm-";
                                // line 52
                                echo twig_escape_filter($this->env, (isset($context["fullSize"]) || array_key_exists("fullSize", $context) ? $context["fullSize"] : (function () { throw new RuntimeError('Variable "fullSize" does not exist.', 52, $this->source); })()), "html", null, true);
                                echo "\">
                                            ";
                                // line 53
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "companyaddress2", [], "any", false, false, false, 53), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "companyaddress2", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "label", [], "any", false, false, false, 53)]]);
                                echo "
                                        </div>
                                    </div>
                                ";
                            }
                            // line 57
                            echo "                                <div class=\"row mb-xs\">
                                    ";
                            // line 58
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "companycity", [], "any", true, true, false, 58)) {
                                // line 59
                                echo "                                        <div class=\"col-sm-";
                                echo twig_escape_filter($this->env, (isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 59, $this->source); })()), "html", null, true);
                                echo "\">
                                            ";
                                // line 60
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "companycity", [], "any", false, false, false, 60), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "companycity", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "label", [], "any", false, false, false, 60)]]);
                                echo "
                                        </div>
                                    ";
                            }
                            // line 63
                            echo "                                    ";
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "companystate", [], "any", true, true, false, 63)) {
                                // line 64
                                echo "                                        <div class=\"col-sm-";
                                echo twig_escape_filter($this->env, (isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 64, $this->source); })()), "html", null, true);
                                echo "\">
                                            ";
                                // line 65
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "companystate", [], "any", false, false, false, 65), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "companystate", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "label", [], "any", false, false, false, 65)]]);
                                echo "
                                        </div>
                                    ";
                            }
                            // line 68
                            echo "                                </div>
                                <div class=\"row mb-md\">
                                    ";
                            // line 70
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "companyzipcode", [], "any", true, true, false, 70)) {
                                // line 71
                                echo "                                        <div class=\"col-sm-";
                                echo twig_escape_filter($this->env, (isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 71, $this->source); })()), "html", null, true);
                                echo "\">
                                            ";
                                // line 72
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "companyzipcode", [], "any", false, false, false, 72), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "companyzipcode", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "label", [], "any", false, false, false, 72)]]);
                                echo "
                                        </div>
                                    ";
                            }
                            // line 75
                            echo "                                    ";
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "companycountry", [], "any", true, true, false, 75)) {
                                // line 76
                                echo "                                        <div class=\"col-sm-";
                                echo twig_escape_filter($this->env, (isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 76, $this->source); })()), "html", null, true);
                                echo "\">
                                            ";
                                // line 77
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "companycountry", [], "any", false, false, false, 77), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "companycountry", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "label", [], "any", false, false, false, 77)]]);
                                echo "
                                        </div>
                                    ";
                            }
                            // line 80
                            echo "                                </div>
                                <div class=\"row\">
                                    <div  class=\"col-sm-";
                            // line 82
                            echo twig_escape_filter($this->env, (isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 82, $this->source); })()), "html", null, true);
                            echo "\">
                                        ";
                            // line 83
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "score", [], "any", false, false, false, 83), 'row');
                            echo "
                                    </div>
                                    <div  class=\"col-sm-";
                            // line 85
                            echo twig_escape_filter($this->env, (isset($context["halfSize"]) || array_key_exists("halfSize", $context) ? $context["halfSize"] : (function () { throw new RuntimeError('Variable "halfSize" does not exist.', 85, $this->source); })()), "html", null, true);
                            echo "\">
                                        ";
                            // line 86
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "owner", [], "any", false, false, false, 86), 'row');
                            echo "
                                    </div>
                                </div>
                            </div>
                        ";
                        }
                        // line 91
                        echo "                        <hr class=\"mnr-md mnl-md\">
                    ";
                    }
                    // line 93
                    echo "                    <div class=\"form-group mb-0\">
                        <div class=\"row\">
                            ";
                    // line 95
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["groupFields"]) || array_key_exists("groupFields", $context) ? $context["groupFields"] : (function () { throw new RuntimeError('Variable "groupFields" does not exist.', 95, $this->source); })()));
                    foreach ($context['_seq'] as $context["alias"] => $context["field"]) {
                        // line 96
                        echo "                                ";
                        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), $context["alias"], [], "array", false, false, false, 96), "isRendered", [], "any", false, false, false, 96)) {
                            // line 97
                            echo "                                  <div class=\"col-sm-";
                            echo twig_escape_filter($this->env, (isset($context["fullSize"]) || array_key_exists("fullSize", $context) ? $context["fullSize"] : (function () { throw new RuntimeError('Variable "fullSize" does not exist.', 97, $this->source); })()), "html", null, true);
                            echo "\">";
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), $context["alias"], [], "array", false, false, false, 97), 'row');
                            echo "</div>
                                ";
                        }
                        // line 99
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['alias'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 100
                    echo "                        </div>
                    </div>
                    ";
                    // line 102
                    if ((array_key_exists("embedded", $context) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "owner", [], "array", false, false, false, 102), "isRendered", [], "any", false, false, false, 102))) {
                        // line 103
                        echo "                        <hr class=\"mnr-md mnl-md\">
                        <div>";
                        // line 104
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "owner", [], "any", false, false, false, 104), 'row');
                        echo "</div>
                    ";
                    }
                    // line 106
                    echo "                </div>
            </div>
        ";
                }
                // line 109
                echo "    ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Company/form_fields.html.twig";
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
        return array (  307 => 109,  302 => 106,  297 => 104,  294 => 103,  292 => 102,  288 => 100,  282 => 99,  274 => 97,  271 => 96,  267 => 95,  263 => 93,  259 => 91,  251 => 86,  247 => 85,  242 => 83,  238 => 82,  234 => 80,  228 => 77,  223 => 76,  220 => 75,  214 => 72,  209 => 71,  207 => 70,  203 => 68,  197 => 65,  192 => 64,  189 => 63,  183 => 60,  178 => 59,  176 => 58,  173 => 57,  166 => 53,  162 => 52,  159 => 51,  156 => 50,  149 => 46,  145 => 45,  142 => 44,  140 => 43,  136 => 42,  133 => 41,  131 => 39,  130 => 38,  129 => 37,  128 => 36,  127 => 35,  126 => 34,  125 => 33,  120 => 30,  112 => 28,  109 => 27,  101 => 25,  99 => 24,  95 => 22,  93 => 21,  90 => 20,  84 => 17,  81 => 16,  79 => 15,  70 => 14,  67 => 13,  64 => 12,  61 => 11,  44 => 10,  41 => 9,  39 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Company/form_fields.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Company\\form_fields.html.twig");
    }
}
