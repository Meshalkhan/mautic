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

/* @MauticCore/Helper/builder.html.twig */
class __TwigTemplate_d1661a0ee6c656b5c410d0fd14939d90 extends Template
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
        // line 12
        echo "<div class=\"hide builder ";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "-builder ";
        if ((isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 12, $this->source); })())) {
            echo "code-mode";
        }
        echo "\">
    <script type=\"text/html\" data-builder-assets>
        ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["builderAssets"]) || array_key_exists("builderAssets", $context) ? $context["builderAssets"] : (function () { throw new RuntimeError('Variable "builderAssets" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "
    </script>
    <div class=\"builder-content\">
        <input type=\"hidden\" id=\"builder_url\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((("mautic_" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 17, $this->source); })())) . "_action"), ["objectAction" => "builder", "objectId" => (isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 17, $this->source); })())]), "html", null, true);
        echo "\" />
    </div>
    <div class=\"builder-panel\">
        <div class=\"builder-panel-top\">
            ";
        // line 21
        echo twig_include($this->env, $context, "@MauticCore/Helper/builder_buttons.html.twig", ["onclick" => (("Mautic.closeBuilder('" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 21, $this->source); })())) . "');")], false);
        echo "

            <div class=\"code-mode-toolbar ";
        // line 23
        if ( !(isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 23, $this->source); })())) {
            echo "hide";
        }
        echo "\">
                <button class=\"btn btn-default btn-nospin\" onclick=\"Mautic.openMediaManager()\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.media.manager.desc"), "html", null, true);
        echo "\">
                    <i class=\"fa fa-photo\"></i>
                    ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.media.manager"), "html", null, true);
        echo "
                </button>
                <button class=\"btn btn-default btn-nospin\" onclick=\"Mautic.formatCode()\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.format.code.desc"), "html", null, true);
        echo "\">
                    <i class=\"fa fa-indent\"></i>
                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.format.code"), "html", null, true);
        echo "
                </button>
            </div>
        </div>

        ";
        // line 35
        if ((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "            <div class=\"panel panel-default\" id=\"preview\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.urlvariant"), "html", null, true);
            echo "</h4>
                </div>
                <div class=\"panel-body\">
                    <div id=\"public-preview-container\" class=\"col-md-12\">
                        <div class=\"input-group\">
                            <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly value=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\"/>
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-default btn-nospin\" onclick=\"window.open('";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "', '_blank');\">
                                    <i class=\"ri-external-link-line\"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 54
        echo "
        <div class=\"code-editor ";
        // line 55
        if ( !(isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 55, $this->source); })())) {
            echo "hide";
        }
        echo "\">
            <div id=\"customHtmlContainer\"></div>
            <i class=\"text-muted\">";
        // line 57
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.code.mode.token.dropdown.hint"));
        echo "</i>
        </div>
        <div class=\"builder-toolbar ";
        // line 59
        if ((isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 59, $this->source); })())) {
            echo "hide";
        }
        echo "\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.slot.types"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 65
        if ((array_key_exists("slots", $context) && is_iterable((isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 65, $this->source); })())))) {
            // line 66
            echo "                        <div id=\"slot-type-container\" class=\"col-md-12\">
                            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["slotKey"] => $context["slot"]) {
                // line 68
                echo "                                <div class=\"slot-type-handle btn btn-default btn-lg btn-nospin\" data-slot-type=\"";
                echo twig_escape_filter($this->env, $context["slotKey"], "html", null, true);
                echo "\">
                                    <i class=\"fa fa-";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slot"], "icon", [], "any", false, false, false, 69), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                                    <br>
                                    <span class=\"slot-caption\">";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["slot"], "header", [], "any", false, false, false, 71);
                echo "</span>
                                    <!-- slot template: \"";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slot"], "content", [], "any", false, false, false, 72), "html", null, true);
                echo "\" -->
                                    <script type=\"text/html\">";
                // line 74
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["slot"], "content", [], "any", false, false, false, 74), ((twig_get_attribute($this->env, $this->source, $context["slot"], "params", [], "any", true, true, false, 74)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["slot"], "params", [], "any", false, false, false, 74), [])) : ([])), false);
                // line 75
                echo "</script>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slotKey'], $context['slot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                            <div class=\"clearfix\"></div>
                        </div>
                    ";
        }
        // line 81
        echo "                    <p class=\"text-muted pt-md text-center\"><i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.drag.info"), "html", null, true);
        echo "</i></p>
                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.section.types"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 90
        if ((array_key_exists("sections", $context) && is_iterable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 90, $this->source); })())))) {
            // line 91
            echo "                        <div id=\"section-type-container\" class=\"col-md-12\">
                            ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 92, $this->source); })()));
            foreach ($context['_seq'] as $context["sectionKey"] => $context["section"]) {
                // line 93
                echo "                                <div class=\"section-type-handle btn btn-default btn-lg btn-nospin\" data-section-type=\"";
                echo twig_escape_filter($this->env, $context["sectionKey"], "html", null, true);
                echo "\">
                                    <i class=\"fa fa-";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "icon", [], "any", false, false, false, 94), "html", null, true);
                echo "\" aria-hidden=\"true\"></i>
                                    <br>
                                    <span class=\"slot-caption\">";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "header", [], "any", false, false, false, 96), "html", null, true);
                echo "</span>
                                    <!-- section template: \"";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["section"], "content", [], "any", false, false, false, 97), "html", null, true);
                echo "\" -->
                                    <script type=\"text/html\">";
                // line 99
                echo twig_escape_filter($this->env, twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["section"], "content", [], "any", false, false, false, 99), array(), false));
                // line 100
                echo "</script>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['sectionKey'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "                            <div class=\"clearfix\"></div>
                        </div>
                    ";
        }
        // line 106
        echo "                    <p class=\"text-muted pt-md text-center\"><i>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.drag.info"), "html", null, true);
        echo "</i></p>
                </div>
            </div>

            <div class=\"panel panel-default\" id=\"customize-slot-panel\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.customize.slot"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"panel-body\" id=\"customize-form-container\">
                    <div id=\"slot-form-container\" class=\"col-md-12\">
                        <p class=\"text-muted pt-md text-center\">
                            <i>";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.slot.customize.info"), "html", null, true);
        echo "</i>
                        </p>
                    </div>
                    ";
        // line 120
        if ((array_key_exists("slots", $context) && is_iterable((isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 120, $this->source); })())))) {
            // line 121
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 121, $this->source); })()));
            foreach ($context['_seq'] as $context["slotKey"] => $context["slot"]) {
                // line 122
                echo "                            <script type=\"text/html\" data-slot-type-form=\"";
                echo twig_escape_filter($this->env, $context["slotKey"], "html", null, true);
                echo "\">
                                ";
                // line 123
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, $context["slot"], "form", [], "any", false, false, false, 123), 'form');
                echo "
                            </script>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slotKey'], $context['slot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                    ";
        }
        // line 127
        echo "                </div>
            </div>
            <div class=\"panel panel-default\" id=\"section\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.customize.section"), "html", null, true);
        echo "</h4>
                </div>
                <div class=\"panel-body\" id=\"customize-form-container\">
                    <div id=\"section-form-container\" class=\"col-md-12\">
                        <p class=\"text-muted pt-md text-center\">
                            <i>";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.section.customize.info"), "html", null, true);
        echo "</i>
                        </p>
                    </div>
                    <script type=\"text/html\" data-section-form>
                        ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sectionForm"]) || array_key_exists("sectionForm", $context) ? $context["sectionForm"] : (function () { throw new RuntimeError('Variable "sectionForm" does not exist.', 140, $this->source); })()), 'form');
        echo "
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/builder.html.twig";
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
        return array (  323 => 140,  316 => 136,  308 => 131,  302 => 127,  299 => 126,  290 => 123,  285 => 122,  280 => 121,  278 => 120,  272 => 117,  264 => 112,  254 => 106,  249 => 103,  241 => 100,  239 => 99,  235 => 97,  231 => 96,  226 => 94,  221 => 93,  217 => 92,  214 => 91,  212 => 90,  206 => 87,  196 => 81,  191 => 78,  183 => 75,  181 => 74,  177 => 72,  173 => 71,  168 => 69,  163 => 68,  159 => 67,  156 => 66,  154 => 65,  148 => 62,  140 => 59,  135 => 57,  128 => 55,  125 => 54,  113 => 45,  108 => 43,  100 => 38,  96 => 36,  94 => 35,  86 => 30,  81 => 28,  76 => 26,  71 => 24,  65 => 23,  60 => 21,  53 => 17,  47 => 14,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/builder.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\builder.html.twig");
    }
}
