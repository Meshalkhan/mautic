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

/* @MauticForm/Builder/_field_wrapper.html.twig */
class __TwigTemplate_39c65808c07f59a4f224d38b46481b0d extends Template
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
        // line 17
        $context["inBuilder"] = ((array_key_exists("inBuilder", $context)) ? (_twig_default_filter((isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 17, $this->source); })()), false)) : (false));
        // line 18
        echo "<div class=\"";
        if (( !array_key_exists("isConditional", $context) || (array_key_exists("isConditional", $context) && (false == (isset($context["isConditional"]) || array_key_exists("isConditional", $context) ? $context["isConditional"] : (function () { throw new RuntimeError('Variable "isConditional" does not exist.', 18, $this->source); })()))))) {
            echo "panel";
        } else {
            echo "panel2";
        }
        echo " form-field-wrapper\" data-sortable-id=\"mauticform_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
        ";
        // line 19
        echo twig_include($this->env, $context, "@MauticForm/Builder/_actions.html.twig", ["id" => twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "formId" =>         // line 21
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 21, $this->source); })()), "formName" => "", "disallowDelete" => ("button" == twig_get_attribute($this->env, $this->source,         // line 23
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 23, $this->source); })()), "type", [], "any", false, false, false, 23))], false);
        // line 24
        echo "
        <div class=\"row ml-0 mr-0\">
            ";
        // line 27
        echo "            <!-- start: \"";
        echo twig_escape_filter($this->env, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" -->";
        // line 28
        echo twig_include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 28, $this->source); })()), ["field" =>         // line 29
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 29, $this->source); })()), "inForm" => true, "id" => twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "formId" =>         // line 32
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 32, $this->source); })()), "mappedFields" =>         // line 33
(isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 33, $this->source); })()), "inBuilder" =>         // line 34
(isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 34, $this->source); })())], false);
        // line 36
        echo "<!-- end: \"";
        echo twig_escape_filter($this->env, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" -->
        </div>

        ";
        // line 39
        if ((((((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "showWhenValueExists", [], "any", true, true, false, 39) && (false === twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 39, $this->source); })()), "showWhenValueExists", [], "any", false, false, false, 39))) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 39, $this->source); })()), "showAfterXSubmissions", [], "any", false, false, false, 39))) || (true === ((twig_get_attribute($this->env, $this->source,         // line 40
($context["field"] ?? null), "alwaysDisplay", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "alwaysDisplay", [], "any", false, false, false, 40), null)) : (null)))) ||  !twig_test_empty(((twig_get_attribute($this->env, $this->source,         // line 41
($context["field"] ?? null), "mappedField", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "mappedField", [], "any", false, false, false, 41), null)) : (null)))) ||  !twig_test_empty(((twig_get_attribute($this->env, $this->source,         // line 42
($context["field"] ?? null), "conditions", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "conditions", [], "any", false, false, false, 42), null)) : (null))))) {
            // line 44
            echo "            <div class=\"panel-footer\">
                ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "conditions", [], "any", false, true, false, 45), "expr", [], "any", true, true, false, 45) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 45, $this->source); })()), "conditions", [], "any", false, false, false, 45), "expr", [], "any", false, false, false, 45)))) {
                // line 46
                echo "                    <span class=\"inline-spacer\">
                      <span style=\"text-transform: none\">";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.form.condition.show.on"), "html", null, true);
                echo "</span>
                      <strong>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 48, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 48, $this->source); })()), "parent", [], "array", false, false, false, 48), [], "array", false, false, false, 48), "label", [], "array", false, false, false, 48), "html", null, true);
                echo "</strong>
                      <span style=\"text-transform: none\">
                          ";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.core.operator." . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 50, $this->source); })()), "conditions", [], "array", false, false, false, 50), "expr", [], "array", false, false, false, 50)))), "html", null, true);
                echo "
                          ";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.form.condition.select.value"), "html", null, true);
                echo "
                      </span>
                      <strong>
                          ";
                // line 54
                if ((("in" === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 54, $this->source); })()), "conditions", [], "any", false, false, false, 54), "expr", [], "any", false, false, false, 54)) && ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 54, $this->source); })()), "conditions", [], "any", false, false, false, 54), "any", [], "any", false, false, false, 54)) &&  !(0 === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 54, $this->source); })()), "conditions", [], "any", false, false, false, 54), "any", [], "any", false, false, false, 54))))) {
                    // line 55
                    echo "                              *
                          ";
                } else {
                    // line 57
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 57, $this->source); })()), "conditions", [], "any", false, false, false, 57), "values", [], "any", false, false, false, 57), ", "), "html", null, true);
                    echo "
                          ";
                }
                // line 59
                echo "                      </strong>
                    </span>
                    <br>
                ";
            }
            // line 63
            echo "
                ";
            // line 64
            if ((( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 64, $this->source); })()), "mappedObject", [], "any", false, false, false, 64)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 64, $this->source); })()), "mappedField", [], "any", false, false, false, 64))) && twig_get_attribute($this->env, $this->source, ($context["mappedFields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 64, $this->source); })()), "mappedObject", [], "any", false, false, false, 64), [], "array", true, true, false, 64))) {
                // line 65
                echo "                    ";
                $context["icon"] = "compress";
                // line 66
                echo "                    ";
                $context["icon"] = ((("company" === twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 66, $this->source); })()), "mappedObject", [], "any", false, false, false, 66))) ? ("building") : ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 66, $this->source); })())));
                // line 67
                echo "                    ";
                $context["icon"] = ((("contact" === twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 67, $this->source); })()), "mappedObject", [], "any", false, false, false, 67))) ? ("user") : ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 67, $this->source); })())));
                // line 68
                echo "                    <i class=\"fa fa-";
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 68, $this->source); })()), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                    <span class=\"inline-spacer\">
                        ";
                // line 70
                $context["fieldCollection"] = twig_get_attribute($this->env, $this->source, ($context["mappedFields"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 70, $this->source); })()), "mappedObject", [], "any", false, false, false, 70), [], "array", true, true, false, 70);
                // line 71
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 71, $this->source); })()), "mappedObject", [], "any", false, false, false, 71), "html", null, true);
                echo ": ";
                if (twig_get_attribute($this->env, $this->source, ($context["fieldCollection"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 71, $this->source); })()), "mappedField", [], "any", false, false, false, 71), [], "array", true, true, false, 71)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fieldCollection"]) || array_key_exists("fieldCollection", $context) ? $context["fieldCollection"] : (function () { throw new RuntimeError('Variable "fieldCollection" does not exist.', 71, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 71, $this->source); })()), "mappedField", [], "any", false, false, false, 71), [], "array", false, false, false, 71), "name", [], "any", false, false, false, 71), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 71, $this->source); })()), "mappedField", [], "any", false, false, false, 71)), "html", null, true);
                }
                // line 72
                echo "                    </span>
                ";
            }
            // line 74
            echo "
                ";
            // line 75
            if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "alwaysDisplay", [], "any", true, true, false, 75) && twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 75, $this->source); })()), "alwaysDisplay", [], "any", false, false, false, 75))) {
                // line 76
                echo "                  <i class=\"ri-eye-line\" aria-hidden=\"true\"></i>
                  <span class=\"inline-spacer\">";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.form.always_display"), "html", null, true);
                echo "</span>
                ";
            } else {
                // line 79
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "showWhenValueExists", [], "any", true, true, false, 79) && (false === twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 79, $this->source); })()), "showWhenValueExists", [], "any", false, false, false, 79)))) {
                    // line 80
                    echo "                    <i class=\"ri-eye-line-slash\" aria-hidden=\"true\"></i>
                    <span class=\"inline-spacer\">";
                    // line 81
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.hide.if.value"), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 83
                echo "
                  ";
                // line 84
                if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "showAfterXSubmissions", [], "any", true, true, false, 84) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 84, $this->source); })()), "showAfterXSubmissions", [], "any", false, false, false, 84)))) {
                    // line 85
                    echo "                    <i class=\"ri-refresh-line\" aria-hidden=\"true\"></i>
                    <span class=\"inline-spacer\">";
                    // line 86
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.field.hide.if.submission.count", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 86, $this->source); })()), "showAfterXSubmissions", [], "any", false, false, false, 86)]), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 88
                echo "                ";
            }
            // line 89
            echo "            </div>
        ";
        }
        // line 91
        echo "
        ";
        // line 92
        if (((( !array_key_exists("isConditional", $context) || (array_key_exists("isConditional", $context) && ((isset($context["isConditional"]) || array_key_exists("isConditional", $context) ? $context["isConditional"] : (function () { throw new RuntimeError('Variable "isConditional" does not exist.', 92, $this->source); })()) === false))) && array_key_exists("fields", $context)) && twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 92, $this->source); })()), "type", [], "any", false, false, false, 92), Mautic\FormBundle\Enum\ConditionalFieldEnum::getConditionalFieldTypes()))) {
            // line 93
            echo "            <div class=\"row ml-15 mr-0 pb-15\">
                <div class=\"pull-left mt-15\">
                  <a class=\"add-new-conditional-field\" href=\"\"><i class=\"ri-add-line\"></i> ";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.component.fields.conditional"), "html", null, true);
            echo "</a>
                </div>
                <div class=\"mt-10 col-sm-4 col-xs-12\" style=\"display:none\">
                    <select class=\"chosen form-builder-new-component\" data-placeholder=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.form.component.fields"), "html", null, true);
            echo "\">
                        <option value=\"\"></option>
                        ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 100, $this->source); })()));
            foreach ($context['_seq'] as $context["conditionalField"] => $context["conditionalFieldType"]) {
                // line 101
                echo "                            ";
                if (!twig_in_filter($context["conditionalFieldType"], (isset($context["viewOnlyFields"]) || array_key_exists("viewOnlyFields", $context) ? $context["viewOnlyFields"] : (function () { throw new RuntimeError('Variable "viewOnlyFields" does not exist.', 101, $this->source); })()))) {
                    // line 102
                    echo "                                <option data-toggle=\"ajaxmodal\"
                                        data-target=\"#formComponentModal\"
                                        data-href=\"";
                    // line 104
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_formfield_action", ["objectAction" => "new", "type" => $context["conditionalFieldType"], "tmpl" => "field", "formId" => (isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 104, $this->source); })()), "inBuilder" => (isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 104, $this->source); })()), "parent" => twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
                    echo "\">
                                  ";
                    // line 105
                    echo twig_escape_filter($this->env, $context["conditionalField"], "html", null, true);
                    echo "
                                </option>
                            ";
                }
                // line 108
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['conditionalField'], $context['conditionalFieldType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                    </select>
                </div>
            </div>
        ";
        }
        // line 113
        echo "
        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 114, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field2"]) {
            // line 115
            echo "            ";
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field2"], "parent", [], "any", false, false, false, 115)) && (twig_get_attribute($this->env, $this->source, $context["field2"], "parent", [], "any", false, false, false, 115) == twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115)))) {
                // line 116
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["field2"], "isCustom", [], "any", true, true, false, 116) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field2"], "isCustom", [], "any", false, false, false, 116)))) {
                    // line 117
                    echo "                  ";
                    $context["params"] = twig_get_attribute($this->env, $this->source, $context["field2"], "customParameters", [], "any", false, false, false, 117);
                    // line 118
                    echo "                  ";
                    $context["template"] = twig_get_attribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 118, $this->source); })()), "template", [], "any", false, false, false, 118);
                    // line 119
                    echo "              ";
                } else {
                    // line 120
                    echo "                  ";
                    $context["template"] = (("@MauticForm/Field/" . twig_get_attribute($this->env, $this->source, $context["field2"], "type", [], "any", false, false, false, 120)) . ".html.twig");
                    // line 121
                    echo "              ";
                }
                // line 122
                echo "              ";
                echo twig_include($this->env, $context, "@MauticForm/Builder/_field_wrapper.html.twig", ["isConditional" => true, "template" =>                 // line 124
(isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 124, $this->source); })()), "field" =>                 // line 125
$context["field2"], "viewOnlyFields" =>                 // line 126
(isset($context["viewOnlyFields"]) || array_key_exists("viewOnlyFields", $context) ? $context["viewOnlyFields"] : (function () { throw new RuntimeError('Variable "viewOnlyFields" does not exist.', 126, $this->source); })()), "inForm" => true, "id" => twig_get_attribute($this->env, $this->source,                 // line 128
$context["field2"], "id", [], "any", false, false, false, 128), "formId" =>                 // line 129
(isset($context["formId"]) || array_key_exists("formId", $context) ? $context["formId"] : (function () { throw new RuntimeError('Variable "formId" does not exist.', 129, $this->source); })()), "mappedFields" =>                 // line 130
(isset($context["mappedFields"]) || array_key_exists("mappedFields", $context) ? $context["mappedFields"] : (function () { throw new RuntimeError('Variable "mappedFields" does not exist.', 130, $this->source); })()), "inBuilder" =>                 // line 131
(isset($context["inBuilder"]) || array_key_exists("inBuilder", $context) ? $context["inBuilder"] : (function () { throw new RuntimeError('Variable "inBuilder" does not exist.', 131, $this->source); })()), "fields" =>                 // line 132
(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 132, $this->source); })()), "formFields" =>                 // line 133
(isset($context["formFields"]) || array_key_exists("formFields", $context) ? $context["formFields"] : (function () { throw new RuntimeError('Variable "formFields" does not exist.', 133, $this->source); })())]);
                // line 134
                echo "
            ";
            }
            // line 136
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Builder/_field_wrapper.html.twig";
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
        return array (  330 => 137,  316 => 136,  312 => 134,  310 => 133,  309 => 132,  308 => 131,  307 => 130,  306 => 129,  305 => 128,  304 => 126,  303 => 125,  302 => 124,  300 => 122,  297 => 121,  294 => 120,  291 => 119,  288 => 118,  285 => 117,  282 => 116,  279 => 115,  262 => 114,  259 => 113,  253 => 109,  247 => 108,  241 => 105,  237 => 104,  233 => 102,  230 => 101,  226 => 100,  221 => 98,  215 => 95,  211 => 93,  209 => 92,  206 => 91,  202 => 89,  199 => 88,  194 => 86,  191 => 85,  189 => 84,  186 => 83,  181 => 81,  178 => 80,  175 => 79,  170 => 77,  167 => 76,  165 => 75,  162 => 74,  158 => 72,  149 => 71,  147 => 70,  141 => 68,  138 => 67,  135 => 66,  132 => 65,  130 => 64,  127 => 63,  121 => 59,  115 => 57,  111 => 55,  109 => 54,  103 => 51,  99 => 50,  94 => 48,  90 => 47,  87 => 46,  85 => 45,  82 => 44,  80 => 42,  79 => 41,  78 => 40,  77 => 39,  70 => 36,  68 => 34,  67 => 33,  66 => 32,  65 => 31,  64 => 29,  63 => 28,  59 => 27,  55 => 24,  53 => 23,  52 => 21,  51 => 20,  50 => 19,  39 => 18,  37 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Builder/_field_wrapper.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Builder\\_field_wrapper.html.twig");
    }
}
