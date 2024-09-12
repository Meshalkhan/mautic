<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticFocus/Focus/form.html.twig */
class __TwigTemplate_6da20d327b3062c9cd00a658d81050f3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticFocus/Focus/form.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "focus";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8)) {
            // line 9
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9))]), "html", null, true);
            yield "
  ";
        } else {
            // line 11
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.new"), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 16
        yield "  ";
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeStylesheet("plugins/MauticFocusBundle/Assets/css/focus.css");
        yield "
  ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        yield "
    <!-- start: box layout -->
    <div class=\"box-layout\">
        <!-- container -->
        <div class=\"col-md-9 height-auto bdr-r pa-md\">
            <div class=\"row\">
                <div class=\"col-md-6\">";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), 'row');
        yield "</div>
                <div class=\"col-md-6\">";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "website", [], "any", false, false, false, 24), 'row');
        yield "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'row');
        yield "</div>
            </div>
        </div>
        <div class=\"col-md-3 height-auto\">
            <div class=\"pr-lg pl-lg pt-md pb-md\">
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "category", [], "any", false, false, false, 32), 'row');
        yield "
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "isPublished", [], "any", false, false, false, 33), 'row');
        yield "
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "publishUp", [], "any", false, false, false, 34), 'row');
        yield "
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "publishDown", [], "any", false, false, false, 35), 'row');
        yield "
                <hr />
                <h5>";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.utm_tags"), "html", null, true);
        yield "</h5>
                <br />
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "utmTags", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["utmTag"]) {
            // line 40
            yield "                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["utmTag"], 'row');
            yield "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['utmTag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "            </div>
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
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave");
        yield "\"/>
                        </div>
                        <div class=\"col-xs-9\">
                            <h4><i class=\"fa fa-quote-left\"></i> ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.noresults.tip"), "html", null, true);
        yield "
                                <i class=\"fa fa-quote-right\"></i></h4>
                            <p class=\"mt-md\">
                                ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.website_placeholder"), "html", null, true);
        yield "
                            </p>
                            <div class=\"input-group\">
                                <input id=\"websiteUrlPlaceholderInput\" disabled type=\"text\" class=\"form-control\" placeholder=\"https://example.com\">
                                <span class=\"input-group-btn\">
                                    <button class=\"btn btn-default btn-fetch\" type=\"button\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.fetch_snapshot"), "html", null, true);
        yield "</button>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.close.builder"), "html", null, true);
        yield "</button>
                </p>
            </div>
            ";
        // line 97
        $context["class"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "type", [], "any", false, true, false, 97), "vars", [], "any", false, true, false, 97), "data", [], "any", true, true, false, 97) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "type", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "data", [], "any", false, false, false, 97)))) ? (("focus-type-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "type", [], "any", false, false, false, 97), "vars", [], "any", false, false, false, 97), "data", [], "any", false, false, false, 97))) : ("focus-type-all"));
        // line 98
        yield "            ";
        $context["class"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "style", [], "any", false, true, false, 98), "vars", [], "any", false, true, false, 98), "data", [], "any", true, true, false, 98) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "style", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "data", [], "any", false, false, false, 98)))) ? ((((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 98, $this->source); })()) . " focus-style-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "style", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "data", [], "any", false, false, false, 98))) : (((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 98, $this->source); })()) . " focus-style-all")));
        // line 99
        yield "            <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 99, $this->source); })()), "html", null, true);
        yield "\" style=\"margin-top: 40px;\" id=\"focusFormContent\">
                <!-- start focus type -->
                <div class=\"panel panel-default\" id=\"focusType\">
                    <div class=\"panel-heading\">
                        <h4 class=\"focus-type-header panel-title\">
                            <a role=\"button\" data-toggle=\"collapse\" href=\"#focusTypePanel\" aria-expanded=\"true\" aria-controls=\"focusTypePanel\">
                                <i class=\"fa fa-bullseye\"></i> ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type"), "html", null, true);
        yield "
                            </a>
                        </h4>
                    </div>
                    <div id=\"focusTypePanel\" class=\"panel-collapse collapse in\" role=\"tabpanel\">
                        ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "type", [], "any", false, false, false, 110), 'widget');
        yield "
                        <ul class=\"list-group mb-0\">
                            <li data-focus-type=\"form\" class=\"focus-type list-group-item pl-sm pr-sm\">
                                <div class=\"row\">
                                    <div class=\"col-xs-2\">
                                        <i class=\"fa fa-2x fa-pencil-square-o text-primary\"></i>
                                    </div>
                                    <div class=\"col-xs-10\">
                                        <h4 class=\"list-group-heading\">";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.form"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.form_description"), "html", null, true);
        yield "</p>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.notice"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.notice_description"), "html", null, true);
        yield "</p>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.link"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.type.link_description"), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </li>

                            <li class=\"focus-properties focus-link-properties list-group-item pl-sm pr-sm\" style=\"display: none;\"></li>
                        </ul>
                    </div>

                    <div class=\"hide\" id=\"focusTypeProperties\">
                        ";
        // line 157
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "properties", [], "any", false, false, false, 157), "animate", [], "any", false, false, false, 157), 'row');
        yield "
                        ";
        // line 158
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "properties", [], "any", false, false, false, 158), "when", [], "any", false, false, false, 158), 'row');
        yield "
                        ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "properties", [], "any", false, false, false, 159), "timeout", [], "any", false, false, false, 159), 'row');
        yield "
                        ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "properties", [], "any", false, false, false, 160), "link_activation", [], "any", false, false, false, 160), 'row');
        yield "
                        ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "properties", [], "any", false, false, false, 161), "frequency", [], "any", false, false, false, 161), 'row');
        yield "
                        <div class=\"hidden-focus-type-notice\">
                            ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "properties", [], "any", false, false, false, 163), "stop_after_conversion", [], "any", false, false, false, 163), 'row');
        yield "
                        </div>
                        ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "properties", [], "any", false, false, false, 165), "stop_after_close", [], "any", false, false, false, 165), 'row');
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form.style"), "html", null, true);
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.bar"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.bar_description"), "html", null, true);
        yield "</p>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.modal"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.modal_description"), "html", null, true);
        yield "</p>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.notification"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.notification_description"), "html", null, true);
        yield "</p>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.page"), "html", null, true);
        yield "</h4>
                                        <p class=\"list-group-item-text small\">";
        // line 227
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.style.page_description"), "html", null, true);
        yield "</p>
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "properties", [], "any", false, false, false, 238), "bar", [], "any", false, false, false, 238), "allow_hide", [], "any", false, false, false, 238), 'row');
        yield "
                            ";
        // line 239
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "properties", [], "any", false, false, false, 239), "bar", [], "any", false, false, false, 239), "push_page", [], "any", false, false, false, 239), 'row');
        yield "
                            ";
        // line 240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "properties", [], "any", false, false, false, 240), "bar", [], "any", false, false, false, 240), "sticky", [], "any", false, false, false, 240), 'row');
        yield "
                            ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "properties", [], "any", false, false, false, 241), "bar", [], "any", false, false, false, 241), "placement", [], "any", false, false, false, 241), 'row');
        yield "
                            ";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "properties", [], "any", false, false, false, 242), "bar", [], "any", false, false, false, 242), "size", [], "any", false, false, false, 242), 'row');
        yield "
                        </div>

                        <!-- modal type properties -->
                        <div class=\"focus-hide visible-focus-style-modal\">
                            ";
        // line 247
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "properties", [], "any", false, false, false, 247), "modal", [], "any", false, false, false, 247), "placement", [], "any", false, false, false, 247), 'row');
        yield "
                        </div>

                        <!-- notifications type properties -->
                        <div class=\"focus-hide visible-focus-style-notification\">
                            ";
        // line 252
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), "properties", [], "any", false, false, false, 252), "notification", [], "any", false, false, false, 252), "placement", [], "any", false, false, false, 252), 'row');
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.tab.focus_colors"), "html", null, true);
        yield "
                            </a>
                        </h4>
                    </div>
                    <div id=\"focusColorsPanel\" class=\"panel-collapse collapse\" role=\"tabpanel\">
                        <div class=\"panel-body pa-xs\">
                            <div class=\"row\">
                                <div class=\"form-group col-xs-12 \">
                                    ";
        // line 274
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "properties", [], "any", false, false, false, 274), "colors", [], "any", false, false, false, 274), "primary", [], "any", false, false, false, 274), 'label');
        yield "
                                    <div class=\"input-group\">
                                        ";
        // line 276
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "properties", [], "any", false, false, false, 276), "colors", [], "any", false, false, false, 276), "primary", [], "any", false, false, false, 276), 'widget');
        yield "
                                        <span class=\"input-group-btn\">
                                        <button data-dropper=\"focus_properties_colors_primary\" class=\"btn btn-default btn-nospin btn-dropper\" type=\"button\"><i class=\"ri-eye-linedropper\"></i></button>
                                    </span>
                                    </div>
                                    <div class=\"mt-xs site-color-list hide\" id=\"primary_site_colors\"></div>
                                    ";
        // line 282
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "properties", [], "any", false, false, false, 282), "colors", [], "any", false, false, false, 282), "primary", [], "any", false, false, false, 282), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"form-group col-xs-12 \">
                                    ";
        // line 288
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "properties", [], "any", false, false, false, 288), "colors", [], "any", false, false, false, 288), "text", [], "any", false, false, false, 288), 'label');
        yield "
                                    <div class=\"input-group\">
                                        ";
        // line 290
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "properties", [], "any", false, false, false, 290), "colors", [], "any", false, false, false, 290), "text", [], "any", false, false, false, 290), 'widget');
        yield "
                                        <span class=\"input-group-btn\">
                                        <button data-dropper=\"focus_properties_colors_text\" class=\"btn btn-default btn-nospin btn-dropper\" type=\"button\"><i class=\"ri-eye-linedropper\"></i></button>
                                    </span>
                                    </div>
                                    <div class=\"mt-xs site-color-list hide\" id=\"text_site_colors\"></div>
                                    ";
        // line 296
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 296, $this->source); })()), "properties", [], "any", false, false, false, 296), "colors", [], "any", false, false, false, 296), "text", [], "any", false, false, false, 296), 'errors');
        yield "
                                </div>
                            </div>

                            <div class=\"hidden-focus-type-notice\">

                                <div class=\"row\">
                                    <div class=\"form-group col-xs-12 \">
                                        ";
        // line 304
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "properties", [], "any", false, false, false, 304), "colors", [], "any", false, false, false, 304), "button", [], "any", false, false, false, 304), 'label');
        yield "
                                        <div class=\"input-group\">
                                            ";
        // line 306
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "properties", [], "any", false, false, false, 306), "colors", [], "any", false, false, false, 306), "button", [], "any", false, false, false, 306), 'widget');
        yield "
                                            <span class=\"input-group-btn\">
                                        <button data-dropper=\"focus_properties_colors_button\" class=\"btn btn-default btn-nospin btn-dropper\" type=\"button\"><i class=\"ri-eye-linedropper\"></i></button>
                                    </span>
                                        </div>
                                        <div class=\"mt-xs site-color-list hide\" id=\"button_site_colors\"></div>
                                        ";
        // line 312
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "properties", [], "any", false, false, false, 312), "colors", [], "any", false, false, false, 312), "button", [], "any", false, false, false, 312), 'errors');
        yield "
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"form-group col-xs-12 \">
                                        ";
        // line 318
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), "properties", [], "any", false, false, false, 318), "colors", [], "any", false, false, false, 318), "button_text", [], "any", false, false, false, 318), 'label');
        yield "
                                        <div class=\"input-group\">
                                            ";
        // line 320
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 320, $this->source); })()), "properties", [], "any", false, false, false, 320), "colors", [], "any", false, false, false, 320), "button_text", [], "any", false, false, false, 320), 'widget');
        yield "
                                            <span class=\"input-group-btn\">
                                        <button data-dropper=\"focus_properties_colors_button_text\" class=\"btn btn-default btn-nospin btn-dropper\" type=\"button\"><i class=\"ri-eye-linedropper\"></i></button>
                                    </span>
                                        </div>
                                        <div class=\"mt-xs site-color-list hide\" id=\"button_text_site_colors\"></div>
                                        ";
        // line 326
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), "properties", [], "any", false, false, false, 326), "colors", [], "any", false, false, false, 326), "button_text", [], "any", false, false, false, 326), 'errors');
        yield "
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.tab.focus_content"), "html", null, true);
        yield "
                            </a>
                        </h4>
                    </div>
                    <div id=\"focusContentPanel\" class=\"panel-collapse collapse\" role=\"tabpanel\">
                        <div class=\"panel-body pa-xs\">
                            ";
        // line 346
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 346, $this->source); })()), "html_mode", [], "any", false, false, false, 346), 'row');
        yield "
                            ";
        // line 347
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 347, $this->source); })()), "editor", [], "any", false, false, false, 347), 'row');
        yield "
                            ";
        // line 348
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()), "html", [], "any", false, false, false, 348), 'row');
        yield "
                            ";
        // line 349
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 349, $this->source); })()), "properties", [], "any", false, false, false, 349), "content", [], "any", false, false, false, 349), "headline", [], "any", false, false, false, 349), 'row');
        yield "
                            <div class=\"hidden-focus-style-bar\">
                                ";
        // line 351
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), "properties", [], "any", false, false, false, 351), "content", [], "any", false, false, false, 351), "tagline", [], "any", false, false, false, 351), 'row');
        yield "
                            </div>
                            ";
        // line 353
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "properties", [], "any", false, false, false, 353), "content", [], "any", false, false, false, 353), "font", [], "any", false, false, false, 353), 'row');
        yield "

                            <!-- form type properties -->
                            <div class=\"focus-hide visible-focus-type-form\">
                                <div class=\"col-sm-12\" id=\"focusFormAlert\" data-hide-on='{\"focus_html_mode_0\":\"checked\"}'>
                                    <div class=\"alert alert-info\">
                                        ";
        // line 359
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.focus.form_token.instructions"));
        yield "
                                    </div>
                                </div>
                                ";
        // line 362
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "form", [], "any", false, false, false, 362), 'row');
        yield "
                            </div>

                            <!-- link type properties -->
                            <div class=\"focus-hide visible-focus-type-link\">
                                ";
        // line 367
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "properties", [], "any", false, false, false, 367), "content", [], "any", false, false, false, 367), "link_text", [], "any", false, false, false, 367), 'row');
        yield "
                                ";
        // line 368
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 368, $this->source); })()), "properties", [], "any", false, false, false, 368), "content", [], "any", false, false, false, 368), "link_url", [], "any", false, false, false, 368), 'row');
        yield "
                                ";
        // line 369
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 369, $this->source); })()), "properties", [], "any", false, false, false, 369), "content", [], "any", false, false, false, 369), "link_new_window", [], "any", false, false, false, 369), 'row');
        yield "
                            </div>

                            ";
        // line 372
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 372, $this->source); })()), "properties", [], "any", false, false, false, 372), "content", [], "any", false, false, false, 372), "css", [], "any", false, false, false, 372), 'row');
        yield "
                        </div>
                    </div>
                </div>
                <!-- end focus content -->

            </div>
        </div>
    </div>

  ";
        // line 382
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 382, $this->source); })()), 'form_end');
        yield "
";
        // line 383
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticFocusBundle/Assets/js/focus.js");
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticFocus/Focus/form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  702 => 383,  698 => 382,  685 => 372,  679 => 369,  675 => 368,  671 => 367,  663 => 362,  657 => 359,  648 => 353,  643 => 351,  638 => 349,  634 => 348,  630 => 347,  626 => 346,  617 => 340,  600 => 326,  591 => 320,  586 => 318,  577 => 312,  568 => 306,  563 => 304,  552 => 296,  543 => 290,  538 => 288,  529 => 282,  520 => 276,  515 => 274,  504 => 266,  487 => 252,  479 => 247,  471 => 242,  467 => 241,  463 => 240,  459 => 239,  455 => 238,  441 => 227,  437 => 226,  422 => 214,  418 => 213,  403 => 201,  399 => 200,  384 => 188,  380 => 187,  365 => 175,  352 => 165,  347 => 163,  342 => 161,  338 => 160,  334 => 159,  330 => 158,  326 => 157,  313 => 147,  309 => 146,  293 => 133,  289 => 132,  273 => 119,  269 => 118,  258 => 110,  250 => 105,  240 => 99,  237 => 98,  235 => 97,  229 => 94,  197 => 65,  189 => 60,  183 => 57,  177 => 54,  163 => 42,  154 => 40,  150 => 39,  145 => 37,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  120 => 27,  114 => 24,  110 => 23,  101 => 17,  96 => 16,  89 => 15,  80 => 11,  74 => 9,  71 => 8,  64 => 7,  53 => 5,  42 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticFocus/Focus/form.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Focus\\form.html.twig");
    }
}
