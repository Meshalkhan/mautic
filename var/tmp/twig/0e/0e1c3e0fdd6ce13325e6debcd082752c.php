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

/* @MauticFocus/Focus/form.html.twig */
class __TwigTemplate_4d73a42eeb695a72ad8f1b773a60a458 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticFocus/Focus/form.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "focus";
    }

    // line 7
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)) {
            // line 9
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9))]), "html", null, true);
            echo "
  ";
        } else {
            // line 11
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.new"), "html", null, true);
            echo "
  ";
        }
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "  ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeStylesheet("plugins/MauticFocusBundle/Assets/css/focus.css");
        echo "
  ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
    <!-- start: box layout -->
    <div class=\"box-layout\">
        <!-- container -->
        <div class=\"col-md-9 height-auto bdr-r pa-md\">
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'row');
        echo "</div>
                <div class=\"col-md-6\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "website", [], "any", false, false, false, 24), 'row');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'row');
        echo "</div>
            </div>
        </div>
        <div class=\"col-md-3 height-auto\">
            <div class=\"pr-lg pl-lg pt-md pb-md\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "category", [], "any", false, false, false, 32), 'row');
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "isPublished", [], "any", false, false, false, 33), 'row');
        echo "
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "publishUp", [], "any", false, false, false, 34), 'row');
        echo "
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "publishDown", [], "any", false, false, false, 35), 'row');
        echo "
                <hr />
                <h5>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.utm_tags"), "html", null, true);
        echo "</h5>
                <br />
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "utmTags", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["utmTag"]) {
            // line 40
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["utmTag"], 'row');
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utmTag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
        </div>
    </div>

    <div class=\"hide builder focus-builder\">
        <div class=\"builder-content\">
            <div class=\"website-preview\">

                <!-- Form to get preview URL -->
                <div class=\"website-placeholder hide well well-lg col-md-6 col-md-offset-3\">
                    <div class=\"row\">
                        <div class=\"mautibot-image col-xs-3 text-center\">
                            <img class=\"img-responsive\" style=\"max-height: 125px; margin-left: auto; margin-right: auto;\" src=\"";
        // line 54
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave");
        echo "\"/>
                        </div>
                        <div class=\"col-xs-9\">
                            <h4><i class=\"fa fa-quote-left\"></i> ";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.noresults.tip"), "html", null, true);
        echo "
                                <i class=\"fa fa-quote-right\"></i></h4>
                            <p class=\"mt-md\">
                                ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.website_placeholder"), "html", null, true);
        echo "
                            </p>
                            <div class=\"input-group\">
                                <input id=\"websiteUrlPlaceholderInput\" disabled type=\"text\" class=\"form-control\" placeholder=\"https://example.com\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-default btn-fetch\" type=\"button\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.fetch_snapshot"), "html", null, true);
        echo "</button>
                                </span>
                            </div>
                            <div class=\"help-block hide\"></div>
                        </div>
                    </div>
                </div>

                <!-- Viewport switcher -->
                <div class=\"viewport-switcher text-center bdr-t-sm bdr-b-sm bdr-r-sm\">
                    <div class=\"btn btn-sm btn-success btn-nospin btn-viewport\" data-viewport=\"desktop\">
                        <i class=\"fa fa-mobile-phone fa-3x\"></i>
                    </div>
                </div>

                <!-- Website preview block -->
                <div id=\"websiteScreenshot\">
                    <div class=\"screenshot-container text-center\">
                        <div class=\"preview-body center\"></div>
                        <div id=\"websiteCanvas\"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Builder -->
        <div class=\"builder-panel builder-panel-focus\">
            <div class=\"builder-panel-top\">
                <p>
                    <button type=\"button\" class=\"btn btn-primary btn-close-builder btn-block\" onclick=\"Mautic.closeFocusBuilder(this);\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close.builder"), "html", null, true);
        echo "</button>
                </p>
            </div>
            ";
        // line 97
        $context["class"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, true, false, 97), "vars", [], "any", false, true, false, 97), "data", [], "any", true, true, false, 97) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "type", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "data", [], "any", false, false, false, 97)))) ? (("focus-type-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "type", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "data", [], "any", false, false, false, 97))) : ("focus-type-all"));
        // line 98
        echo "            ";
        $context["class"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "style", [], "any", false, true, false, 98), "vars", [], "any", false, true, false, 98), "data", [], "any", true, true, false, 98) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "style", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "data", [], "any", false, false, false, 98)))) ? ((((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 98, $this->source); })()) . " focus-style-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "style", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "data", [], "any", false, false, false, 98))) : (((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 98, $this->source); })()) . " focus-style-all")));
        // line 99
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 99, $this->source); })()), "html", null, true);
        echo "\" style=\"margin-top: 40px;\" id=\"focusFormContent\">
                <!-- start focus type -->
                <div class=\"panel panel-default\" id=\"focusType\">
                    <div class=\"panel-heading\">
                        <h4 class=\"focus-type-header panel-title\">
                            <a role=\"button\" data-toggle=\"collapse\" href=\"#focusTypePanel\" aria-expanded=\"true\" aria-controls=\"focusTypePanel\">
                                <i class=\"fa fa-bullseye\"></i> ";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type"), "html", null, true);
        echo "
                            </a>
                        </h4>
                    </div>
                    <div id=\"focusTypePanel\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "type", [], "any", false, false, false, 110), 'widget');
        echo "
                        <ul class=\"list-group mb-0\">
                            <li data-focus-type=\"form\" class=\"focus-type list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"fa fa-2x fa-pencil-square-o text-primary\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.form"), "html", null, true);
        echo "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.form_description"), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </li>

                            <li class=\"focus-properties focus-form-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>

                            <li data-focus-type=\"notice\" class=\"focus-type list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"fa fa-2x fa-bullhorn text-warning\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.notice"), "html", null, true);
        echo "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.notice_description"), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </li>

                            <li class=\"focus-properties focus-notice-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>

                            <li data-focus-type=\"link\" class=\"focus-type list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"fa fa-2x fa-hand-o-right text-info\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.link"), "html", null, true);
        echo "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.link_description"), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </li>

                            <li class=\"focus-properties focus-link-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>
                        </ul>
                    </div>

                    <div class=\"hide\" id=\"focusTypeProperties\">
                        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "properties", [], "any", false, false, false, 157), "animate", [], "any", false, false, false, 157), 'row');
        echo "
                        ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "properties", [], "any", false, false, false, 158), "when", [], "any", false, false, false, 158), 'row');
        echo "
                        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "properties", [], "any", false, false, false, 159), "timeout", [], "any", false, false, false, 159), 'row');
        echo "
                        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "properties", [], "any", false, false, false, 160), "link_activation", [], "any", false, false, false, 160), 'row');
        echo "
                        ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "properties", [], "any", false, false, false, 161), "frequency", [], "any", false, false, false, 161), 'row');
        echo "
                        <div class=\"hidden-focus-type-notice\">
                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "properties", [], "any", false, false, false, 163), "stop_after_conversion", [], "any", false, false, false, 163), 'row');
        echo "
                        </div>
                        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "properties", [], "any", false, false, false, 165), "stop_after_close", [], "any", false, false, false, 165), 'row');
        echo "
                    </div>
                </div>
                <!-- end focus type -->

                <!-- start focus type tab -->
                <div class=\"panel panel-default\" id=\"focusStyle\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title focus-style-header\">
                            <a role=\"button\" data-toggle=\"collapse\" href=\"#focusStylePanel\" aria-expanded=\"true\" aria-controls=\"focusStylePanel\">
                                <i class=\"fa fa-desktop\"></i> ";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.style"), "html", null, true);
        echo "
                            </a>
                        </h4>
                    </div>
                    <div id=\"focusStylePanel\" class=\"panel-collapse collapse\" role=\"tabpanel\">
                        <ul class=\"list-group mb-0\">
                            <li data-focus-style=\"bar\" class=\"focus-style visible-focus-style-bar list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"pl-2 fa fa-2x fa-minus text-primary\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.bar"), "html", null, true);
        echo "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.bar_description"), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"focus-properties focus-bar-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>

                            <li data-focus-style=\"modal\" class=\"focus-style visible-focus-style-modal list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"fa fa-2x fa-list-alt text-warning\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.modal"), "html", null, true);
        echo "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.modal_description"), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"focus-properties focus-modal-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>

                            <li data-focus-style=\"notification\" class=\"focus-style visible-focus-style-notification list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"pl-2 fa fa-2x ri-information-2-line text-info\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.notification"), "html", null, true);
        echo "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.notification_description"), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </li>
                            <li class=\"focus-properties focus-notification-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>

                            <li data-focus-style=\"page\" class=\"focus-style visible-focus-style-page list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"pl-2 fa fa-2x fa-square text-danger\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.page"), "html", null, true);
        echo "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.page_description"), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                            </li>
                            <!-- <li class=\"focus-properties focus-page-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li> -->
                        </ul>
                    </div>

                    <div class=\"hide\" id=\"focusStyleProperties\">
                        <!-- bar type properties -->
                        <div class=\"focus-hide visible-focus-style-bar\">
                            ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "properties", [], "any", false, false, false, 238), "bar", [], "any", false, false, false, 238), "allow_hide", [], "any", false, false, false, 238), 'row');
        echo "
                            ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "properties", [], "any", false, false, false, 239), "bar", [], "any", false, false, false, 239), "push_page", [], "any", false, false, false, 239), 'row');
        echo "
                            ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "properties", [], "any", false, false, false, 240), "bar", [], "any", false, false, false, 240), "sticky", [], "any", false, false, false, 240), 'row');
        echo "
                            ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "properties", [], "any", false, false, false, 241), "bar", [], "any", false, false, false, 241), "placement", [], "any", false, false, false, 241), 'row');
        echo "
                            ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "properties", [], "any", false, false, false, 242), "bar", [], "any", false, false, false, 242), "size", [], "any", false, false, false, 242), 'row');
        echo "
                        </div>

                        <!-- modal type properties -->
                        <div class=\"focus-hide visible-focus-style-modal\">
                            ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "properties", [], "any", false, false, false, 247), "modal", [], "any", false, false, false, 247), "placement", [], "any", false, false, false, 247), 'row');
        echo "
                        </div>

                        <!-- notifications type properties -->
                        <div class=\"focus-hide visible-focus-style-notification\">
                            ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), "properties", [], "any", false, false, false, 252), "notification", [], "any", false, false, false, 252), "placement", [], "any", false, false, false, 252), 'row');
        echo "
                        </div>

                        <!-- page type properties -->
                        <!-- <div class=\"focus-hide visible-focus-style-page\"></div> -->
                    </div>
                </div>
                <!-- end focus style -->

                <!-- start focus colors -->
                <div class=\"panel panel-default\" id=\"focusColors\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            <a role=\"button\" data-toggle=\"collapse\" href=\"#focusColorsPanel\" aria-expanded=\"true\" aria-controls=\"focusColorsPanel\">
                                <i class=\"fa fa-paint-brush\"></i> ";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.tab.focus_colors"), "html", null, true);
        echo "
                            </a>
                        </h4>
                    </div>
                    <div id=\"focusColorsPanel\" class=\"panel-collapse collapse\" role=\"tabpanel\">
                        <div class=\"panel-body pa-xs\">
                            <div class=\"row\">
                                <div class=\"form-group col-xs-12 \">
                                    ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "properties", [], "any", false, false, false, 274), "colors", [], "any", false, false, false, 274), "primary", [], "any", false, false, false, 274), 'label');
        echo "
                                    <div class=\"input-group\">
                                        ";
        // line 276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "properties", [], "any", false, false, false, 276), "colors", [], "any", false, false, false, 276), "primary", [], "any", false, false, false, 276), 'widget');
        echo "
                                        <span class=\"input-group-btn\">
                                        <button data-dropper=\"focus_properties_colors_primary\" class=\"btn btn-default btn-nospin btn-dropper\" type=\"button\"><i class=\"ri-eye-linedropper\"></i></button>
                                    </span>
                                    </div>
                                    <div class=\"mt-xs site-color-list hide\" id=\"primary_site_colors\"></div>
                                    ";
        // line 282
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "properties", [], "any", false, false, false, 282), "colors", [], "any", false, false, false, 282), "primary", [], "any", false, false, false, 282), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"form-group col-xs-12 \">
                                    ";
        // line 288
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "properties", [], "any", false, false, false, 288), "colors", [], "any", false, false, false, 288), "text", [], "any", false, false, false, 288), 'label');
        echo "
                                    <div class=\"input-group\">
                                        ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "properties", [], "any", false, false, false, 290), "colors", [], "any", false, false, false, 290), "text", [], "any", false, false, false, 290), 'widget');
        echo "
                                        <span class=\"input-group-btn\">
                                        <button data-dropper=\"focus_properties_colors_text\" class=\"btn btn-default btn-nospin btn-dropper\" type=\"button\"><i class=\"ri-eye-linedropper\"></i></button>
                                    </span>
                                    </div>
                                    <div class=\"mt-xs site-color-list hide\" id=\"text_site_colors\"></div>
                                    ";
        // line 296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), "properties", [], "any", false, false, false, 296), "colors", [], "any", false, false, false, 296), "text", [], "any", false, false, false, 296), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"hidden-focus-type-notice\">

                                <div class=\"row\">
                                    <div class=\"form-group col-xs-12 \">
                                        ";
        // line 304
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "properties", [], "any", false, false, false, 304), "colors", [], "any", false, false, false, 304), "button", [], "any", false, false, false, 304), 'label');
        echo "
                                        <div class=\"input-group\">
                                            ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "properties", [], "any", false, false, false, 306), "colors", [], "any", false, false, false, 306), "button", [], "any", false, false, false, 306), 'widget');
        echo "
                                            <span class=\"input-group-btn\">
                                        <button data-dropper=\"focus_properties_colors_button\" class=\"btn btn-default btn-nospin btn-dropper\" type=\"button\"><i class=\"ri-eye-linedropper\"></i></button>
                                    </span>
                                        </div>
                                        <div class=\"mt-xs site-color-list hide\" id=\"button_site_colors\"></div>
                                        ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "properties", [], "any", false, false, false, 312), "colors", [], "any", false, false, false, 312), "button", [], "any", false, false, false, 312), 'errors');
        echo "
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"form-group col-xs-12 \">
                                        ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "properties", [], "any", false, false, false, 318), "colors", [], "any", false, false, false, 318), "button_text", [], "any", false, false, false, 318), 'label');
        echo "
                                        <div class=\"input-group\">
                                            ";
        // line 320
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "properties", [], "any", false, false, false, 320), "colors", [], "any", false, false, false, 320), "button_text", [], "any", false, false, false, 320), 'widget');
        echo "
                                            <span class=\"input-group-btn\">
                                        <button data-dropper=\"focus_properties_colors_button_text\" class=\"btn btn-default btn-nospin btn-dropper\" type=\"button\"><i class=\"ri-eye-linedropper\"></i></button>
                                    </span>
                                        </div>
                                        <div class=\"mt-xs site-color-list hide\" id=\"button_text_site_colors\"></div>
                                        ";
        // line 326
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), "properties", [], "any", false, false, false, 326), "colors", [], "any", false, false, false, 326), "button_text", [], "any", false, false, false, 326), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end focus colors -->

                <!-- start focus content -->
                <div class=\"panel panel-default\" id=\"focusContent\">
                    <div class=\"panel-heading\">
                        <h4 class=\"panel-title\">
                            <a role=\"button\" data-toggle=\"collapse\" href=\"#focusContentPanel\" aria-expanded=\"true\" aria-controls=\"focusContentPanel\">
                                <i class=\"fa fa-newspaper-o\"></i> ";
        // line 340
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.tab.focus_content"), "html", null, true);
        echo "
                            </a>
                        </h4>
                    </div>
                    <div id=\"focusContentPanel\" class=\"panel-collapse collapse\" role=\"tabpanel\">
                        <div class=\"panel-body pa-xs\">
                            ";
        // line 346
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 346, $this->source); })()), "html_mode", [], "any", false, false, false, 346), 'row');
        echo "
                            ";
        // line 347
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 347, $this->source); })()), "editor", [], "any", false, false, false, 347), 'row');
        echo "
                            ";
        // line 348
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()), "html", [], "any", false, false, false, 348), 'row');
        echo "
                            ";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "properties", [], "any", false, false, false, 349), "content", [], "any", false, false, false, 349), "headline", [], "any", false, false, false, 349), 'row');
        echo "
                            <div class=\"hidden-focus-style-bar\">
                                ";
        // line 351
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "properties", [], "any", false, false, false, 351), "content", [], "any", false, false, false, 351), "tagline", [], "any", false, false, false, 351), 'row');
        echo "
                            </div>
                            ";
        // line 353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "properties", [], "any", false, false, false, 353), "content", [], "any", false, false, false, 353), "font", [], "any", false, false, false, 353), 'row');
        echo "

                            <!-- form type properties -->
                            <div class=\"focus-hide visible-focus-type-form\">
                                <div class=\"col-sm-12\" id=\"focusFormAlert\" data-hide-on='{\"focus_html_mode_0\":\"checked\"}'>
                                    <div class=\"alert alert-info\">
                                        ";
        // line 359
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form_token.instructions"));
        echo "
                                    </div>
                                </div>
                                ";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "form", [], "any", false, false, false, 362), 'row');
        echo "
                            </div>

                            <!-- link type properties -->
                            <div class=\"focus-hide visible-focus-type-link\">
                                ";
        // line 367
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "properties", [], "any", false, false, false, 367), "content", [], "any", false, false, false, 367), "link_text", [], "any", false, false, false, 367), 'row');
        echo "
                                ";
        // line 368
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "properties", [], "any", false, false, false, 368), "content", [], "any", false, false, false, 368), "link_url", [], "any", false, false, false, 368), 'row');
        echo "
                                ";
        // line 369
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 369, $this->source); })()), "properties", [], "any", false, false, false, 369), "content", [], "any", false, false, false, 369), "link_new_window", [], "any", false, false, false, 369), 'row');
        echo "
                            </div>

                            ";
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "properties", [], "any", false, false, false, 372), "content", [], "any", false, false, false, 372), "css", [], "any", false, false, false, 372), 'row');
        echo "
                        </div>
                    </div>
                </div>
                <!-- end focus content -->

            </div>
        </div>
    </div>

  ";
        // line 382
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 382, $this->source); })()), 'form_end');
        echo "
";
        // line 383
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticFocusBundle/Assets/js/focus.js");
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Focus/form.html.twig";
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
        return array (  686 => 383,  682 => 382,  669 => 372,  663 => 369,  659 => 368,  655 => 367,  647 => 362,  641 => 359,  632 => 353,  627 => 351,  622 => 349,  618 => 348,  614 => 347,  610 => 346,  601 => 340,  584 => 326,  575 => 320,  570 => 318,  561 => 312,  552 => 306,  547 => 304,  536 => 296,  527 => 290,  522 => 288,  513 => 282,  504 => 276,  499 => 274,  488 => 266,  471 => 252,  463 => 247,  455 => 242,  451 => 241,  447 => 240,  443 => 239,  439 => 238,  425 => 227,  421 => 226,  406 => 214,  402 => 213,  387 => 201,  383 => 200,  368 => 188,  364 => 187,  349 => 175,  336 => 165,  331 => 163,  326 => 161,  322 => 160,  318 => 159,  314 => 158,  310 => 157,  297 => 147,  293 => 146,  277 => 133,  273 => 132,  257 => 119,  253 => 118,  242 => 110,  234 => 105,  224 => 99,  221 => 98,  219 => 97,  213 => 94,  181 => 65,  173 => 60,  167 => 57,  161 => 54,  147 => 42,  138 => 40,  134 => 39,  129 => 37,  124 => 35,  120 => 34,  116 => 33,  112 => 32,  104 => 27,  98 => 24,  94 => 23,  85 => 17,  80 => 16,  76 => 15,  68 => 11,  62 => 9,  59 => 8,  55 => 7,  48 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Focus/form.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Focus\\form.html.twig");
    }
}
