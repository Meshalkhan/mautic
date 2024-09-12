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

/* @MauticEmail/Email/form.html.twig */
class __TwigTemplate_18c28b2e7838f36dd885ab385defe5d9 extends Template
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
        // line 2
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["@MauticEmail/FormTheme/Email/layout.html.twig"], true);
        // line 6
        $context["dynamicContentPrototype"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "dynamicContent", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "prototype", [], "any", false, false, false, 6);
        // line 7
        $context["filterBlockPrototype"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dynamicContent", [], "any", false, true, false, 7), "children", [], "any", false, true, false, 7), 0, [], "array", false, true, false, 7), "filters", [], "any", false, true, false, 7), "vars", [], "any", false, true, false, 7), "prototype", [], "any", true, true, false, 7)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dynamicContent", [], "any", false, true, false, 7), "children", [], "any", false, true, false, 7), 0, [], "array", false, true, false, 7), "filters", [], "any", false, true, false, 7), "vars", [], "any", false, true, false, 7), "prototype", [], "any", false, false, false, 7), null)) : (null));
        // line 8
        $context["filterSelectPrototype"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dynamicContent", [], "any", false, true, false, 8), "children", [], "any", false, true, false, 8), 0, [], "array", false, true, false, 8), "filters", [], "any", false, true, false, 8), "children", [], "any", false, true, false, 8), 0, [], "array", false, true, false, 8), "filters", [], "any", false, true, false, 8), "vars", [], "any", false, true, false, 8), "prototype", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "dynamicContent", [], "any", false, true, false, 8), "children", [], "any", false, true, false, 8), 0, [], "array", false, true, false, 8), "filters", [], "any", false, true, false, 8), "children", [], "any", false, true, false, 8), 0, [], "array", false, true, false, 8), "filters", [], "any", false, true, false, 8), "vars", [], "any", false, true, false, 8), "prototype", [], "any", false, false, false, 8), null)) : (null));
        // line 10
        $context["variantParent"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 10, $this->source); })()), "variantParent", [], "any", false, false, false, 10);
        // line 11
        $context["isExisting"] =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11));
        // line 12
        $context["emailType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "emailType", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "data", [], "any", false, false, false, 12);
        // line 13
        $context["attachmentSize"] = ((array_key_exists("attachmentSize", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["attachmentSize"]) || array_key_exists("attachmentSize", $context) ? $context["attachmentSize"] : (function () { throw new RuntimeError('Variable "attachmentSize" does not exist.', 13, $this->source); })()), 0)) : (0));
        // line 14
        $context["templates"] = ["select" => "select-template", "countries" => "country-template", "regions" => "region-template", "timezones" => "timezone-template", "stages" => "stage-template", "locales" => "locale-template"];
        // line 22
        $context["isCodeMode"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 22, $this->source); })()), "getTemplate", [], "method", false, false, false, 22) === "mautic_code_mode");
        // line 23
        $context["previewUrl"] = ((array_key_exists("previewUrl", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 23, $this->source); })()), "")) : (""));
        // line 2
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticEmail/Email/form.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "email";
        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 26
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26))) {
            // line 27
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.header.edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27)]), "html", null, true);
            yield "
  ";
        } else {
            // line 29
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.header.new"), "html", null, true);
            yield "
  ";
        }
        // line 31
        yield "
  ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 32, $this->source); })()), "variantParent", [], "any", false, false, false, 32)) {
            // line 33
            yield "    <div><span class=\"small\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "%parent%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["variantParent"]) || array_key_exists("variantParent", $context) ? $context["variantParent"] : (function () { throw new RuntimeError('Variable "variantParent" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33)]), "html", null, true);
            yield "</span></div>
  ";
        }
        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 38
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start');
        yield "
    <div class=\"box-layout\">
        <div class=\"col-md-9 height-auto\">
            <div class=\"row\">
                <div class=\"col-xs-12\">

                    <!-- tabs controls -->
                    <ul class=\"nav nav-tabs pr-md pl-md\">
                        <li class=\"active\">
                            <a href=\"#email-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.theme"), "html", null, true);
        yield "</a>
                        </li>
                        <li>
                            <a href=\"#advanced-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.advanced"), "html", null, true);
        yield "</a>
                        </li>
                        <li id=\"dynamic-content-tab\" ";
        // line 52
        yield (((isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 52, $this->source); })())) ? ("") : ("class=\"hidden\""));
        yield ">
                            <a href=\"#dynamic-content-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.dynamicContent"), "html", null, true);
        yield "</a>
                        </li>
                        ";
        // line 55
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.tabs", $context);
        yield "
                    </ul>
                    <!--/ tabs controls -->

                    <div class=\"tab-content pa-md\">
                        <div class=\"tab-pane fade in active bdr-w-0\" id=\"email-container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "template", [], "any", false, false, false, 62), 'row');
        yield "</div>
                            </div>";
        // line 64
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/theme_select.html.twig", ["type" => "email", "themes" =>         // line 66
(isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 66, $this->source); })()), "active" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 67
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "template", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "value", [], "any", false, false, false, 67)]);
        // line 69
        yield "</div>
                        <div class=\"tab-pane fade bdr-w-0\" id=\"advanced-container\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "fromName", [], "any", false, false, false, 73), 'row');
        yield "
                                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "fromAddress", [], "any", false, false, false, 74), 'row');
        yield "
                                    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "replyToAddress", [], "any", false, false, false, 75), 'row');
        yield "
                                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "bccAddress", [], "any", false, false, false, 76), 'row');
        yield "
                                    ";
        // line 77
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.settings.advanced", $context);
        yield "
                                    <div>
                                        <div class=\"pull-left\">
                                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "assetAttachments", [], "any", false, false, false, 80), 'label');
        yield "
                                        </div>
                                        <div class=\"text-right pr-10\">
                                            <span class=\"label label-info\"
                                                  id=\"attachment-size\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attachmentSize"]) || array_key_exists("attachmentSize", $context) ? $context["attachmentSize"] : (function () { throw new RuntimeError('Variable "attachmentSize" does not exist.', 84, $this->source); })()), "html", null, true);
        yield "</span>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "assetAttachments", [], "any", false, false, false, 87), 'widget');
        yield "
                                    </div>

                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "headers", [], "any", false, false, false, 92), 'row');
        yield "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "useOwnerAsMailer", [], "any", false, false, false, 95), 'row');
        yield "
                                </div>
                            </div>
                            <br/>
                            <div class=\"row hidden\" id=\"custom-html-row\">
                                <div class=\"col-md-12\">
                                    ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "customHtml", [], "any", false, false, false, 101), 'label');
        yield "
                                    ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "customHtml", [], "any", false, false, false, 102), 'widget');
        yield "
                                </div>
                            </div>
                            <br/>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"pull-left\">
                                        ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "plainText", [], "any", false, false, false, 109), 'label');
        yield "
                                    </div>
                                    <div class=\"text-right pr-10\">
                                        <i class=\"fa fa-spinner fa-spin ml-2 plaintext-spinner hide\"></i>
                                        <a class=\"small\"
                                           onclick=\"Mautic.autoGeneratePlaintext();\">";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.plaintext.generate"), "html", null, true);
        yield "</a>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "plainText", [], "any", false, false, false, 117), 'widget');
        yield "
                                </div>
                            </div>
                        </div>
                        <div class=\"tab-pane fade bdr-w-0\" id=\"dynamic-content-container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"row\">
                                        <div class=\"col-xs-3 dynamicContentFilterContainer\">
                                          <ul class=\"nav nav-tabs tabs-left\" id=\"dynamicContentTabs\">
                                            <li>
                                              <a href=\"javascript:void(0);\" role=\"tab\" class=\"btn btn-primary\" id=\"addNewDynamicContent\"><i class=\"ri-add-line text-success\"></i>";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.new"), "html", null, true);
        yield "</a>
                                            </li>
                                            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "dynamicContent", [], "any", false, false, false, 130));
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
        foreach ($context['_seq'] as $context["_key"] => $context["dynamicContent"]) {
            // line 131
            yield "                                              ";
            $context["name"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dynamicContent"], "tokenName", [], "any", false, false, false, 131), "vars", [], "any", false, false, false, 131), "value", [], "any", false, false, false, 131);
            // line 132
            yield "                                              ";
            $context["linkText"] = ((array_key_exists("name", $context)) ? ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 132, $this->source); })())) : ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.dynamicContent") . " ") . CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 132))));
            // line 133
            yield "                                              <li class=\"";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 133)) {
                yield "active";
            }
            yield "\">
                                                <a role=\"tab\" data-toggle=\"tab\" href=\"#";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["dynamicContent"], "vars", [], "any", false, false, false, 134), "id", [], "any", false, false, false, 134), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["linkText"]) || array_key_exists("linkText", $context) ? $context["linkText"] : (function () { throw new RuntimeError('Variable "linkText" does not exist.', 134, $this->source); })()), "html", null, true);
            yield "</a>
                                              </li>
                                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dynamicContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        yield "                                            </ul>
                                        </div>
                                        <div class=\"tab-content pa-md col-xs-9\" id=\"dynamicContentContainer\">
                                          ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "dynamicContent", [], "any", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["dynamicContent"]) {
            // line 141
            yield "                                              ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["dynamicContent"], 'widget');
            yield "
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dynamicContent'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        yield "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 148
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.tabs.content", $context);
        yield "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 height-auto bdr-l\">
            <div class=\"pr-lg pl-lg pt-md pb-md\">
                ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "subject", [], "any", false, false, false, 155), 'row');
        yield "
                ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "name", [], "any", false, false, false, 156), 'row');
        yield "
                ";
        // line 157
        if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 157, $this->source); })())) {
            // line 158
            yield "                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "variantSettings", [], "any", false, false, false, 158), 'row');
            yield "
                    ";
            // line 159
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "isPublished", [], "any", false, false, false, 159), 'row');
            yield "
                    ";
            // line 160
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "publishUp", [], "any", false, false, false, 160), 'row');
            yield "
                    ";
            // line 161
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "publishDown", [], "any", false, false, false, 161), 'row');
            yield "
                ";
        } else {
            // line 163
            yield "                    <div id=\"leadList\"";
            yield ((("template" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 163, $this->source); })()))) ? (" class=\"hide\"") : (""));
            yield ">
                        ";
            // line 164
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "lists", [], "any", false, false, false, 164), 'row');
            yield "
                        ";
            // line 165
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "excludedLists", [], "any", false, false, false, 165), 'row');
            yield "
                    </div>
                    ";
            // line 167
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "category", [], "any", false, false, false, 167), 'row');
            yield "
                    ";
            // line 168
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "language", [], "any", false, false, false, 168), 'row');
            yield "
                    <div id=\"segmentTranslationParent\"";
            // line 169
            yield ((("template" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 169, $this->source); })()))) ? (" class=\"hide\"") : (""));
            yield ">
                        ";
            // line 170
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "segmentTranslationParent", [], "any", false, false, false, 170), 'row');
            yield "
                    </div>
                    <div id=\"templateTranslationParent\"";
            // line 172
            yield ((("list" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 172, $this->source); })()))) ? (" class=\"hide\"") : (""));
            yield ">
                        ";
            // line 173
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "templateTranslationParent", [], "any", false, false, false, 173), 'row');
            yield "
                    </div>
                ";
        }
        // line 176
        yield "
                ";
        // line 177
        if ( !(isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 177, $this->source); })())) {
            // line 178
            yield "                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "isPublished", [], "any", false, false, false, 178), 'row');
            yield "
                    ";
            // line 179
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "publishUp", [], "any", false, false, false, 179), 'row');
            yield "
                    ";
            // line 180
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "publishDown", [], "any", false, false, false, 180), 'row');
            yield "
                ";
        }
        // line 182
        yield "
                ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "unsubscribeForm", [], "any", false, false, false, 183), 'row');
        yield "
                ";
        // line 184
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 184, $this->source); })()), "page:preference_center:viewown", [], "array", false, false, false, 184)) ||  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 184, $this->source); })()), "page:preference_center:viewother", [], "array", false, false, false, 184)))) {
            // line 185
            yield "                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "preferenceCenter", [], "any", false, false, false, 185), 'row');
            yield "
                ";
        }
        // line 187
        yield "                <hr/>
                <h5>";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.utm_tags"), "html", null, true);
        yield "</h5>
                <br/>
                ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "utmTags", [], "any", false, false, false, 190));
        foreach ($context['_seq'] as $context["i"] => $context["utmTag"]) {
            // line 191
            yield "                    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["utmTag"], 'row');
            yield "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['i'], $context['utmTag'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "            </div>
            <div class=\"hide\">
                ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), 'rest');
        yield "
            </div>
        </div>
    </div>
    ";
        // line 199
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), 'form_end');
        yield "

    <div id=\"dynamicContentPrototype\" data-prototype=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["dynamicContentPrototype"]) || array_key_exists("dynamicContentPrototype", $context) ? $context["dynamicContentPrototype"] : (function () { throw new RuntimeError('Variable "dynamicContentPrototype" does not exist.', 201, $this->source); })()), 'widget'));
        yield "\"></div>
    ";
        // line 202
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["filterBlockPrototype"]) || array_key_exists("filterBlockPrototype", $context) ? $context["filterBlockPrototype"] : (function () { throw new RuntimeError('Variable "filterBlockPrototype" does not exist.', 202, $this->source); })()), "\\Symfony\\Component\\Form\\FormView")) {
            // line 203
            yield "        <div id=\"filterBlockPrototype\" data-prototype=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filterBlockPrototype"]) || array_key_exists("filterBlockPrototype", $context) ? $context["filterBlockPrototype"] : (function () { throw new RuntimeError('Variable "filterBlockPrototype" does not exist.', 203, $this->source); })()), 'widget'));
            yield "\"></div>
    ";
        }
        // line 205
        yield "    ";
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["filterSelectPrototype"]) || array_key_exists("filterSelectPrototype", $context) ? $context["filterSelectPrototype"] : (function () { throw new RuntimeError('Variable "filterSelectPrototype" does not exist.', 205, $this->source); })()), "\\Symfony\\Component\\Form\\FormView")) {
            // line 206
            yield "        <div id=\"filterSelectPrototype\" data-prototype=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filterSelectPrototype"]) || array_key_exists("filterSelectPrototype", $context) ? $context["filterSelectPrototype"] : (function () { throw new RuntimeError('Variable "filterSelectPrototype" does not exist.', 206, $this->source); })()), 'widget'));
            yield "\"></div>
    ";
        }
        // line 208
        yield "
    <div class=\"hide\" id=\"templates\">
        ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 210, $this->source); })()));
        foreach ($context['_seq'] as $context["dataKey"] => $context["template"]) {
            // line 211
            yield "            ";
            $context["attr"] = ((("tags" == $context["dataKey"])) ? (((((" data-placeholder=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mautic"]) || array_key_exists("mautic", $context) ? $context["mautic"] : (function () { throw new RuntimeError('Variable "mautic" does not exist.', 211, $this->source); })()), "lead", [], "any", false, false, false, 211), "tags", [], "any", false, false, false, 211), "select_or_create", [], "any", false, false, false, 211))) . "\" data-no-results-text=\"") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["mautic"]) || array_key_exists("mautic", $context) ? $context["mautic"] : (function () { throw new RuntimeError('Variable "mautic" does not exist.', 211, $this->source); })()), "lead", [], "any", false, false, false, 211), "tags", [], "any", false, false, false, 211), "enter_to_create", [], "any", false, false, false, 211))) . "\" data-allow-add=\"true\" onchange=\"Mautic.createLeadTag(this)\"")) : (""));
            // line 212
            yield "            <select class=\"form-control not-chosen ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["template"], "html", null, true);
            yield "\"
                    name=\"emailform[dynamicContent][__dynamicContentIndex__][filters][__dynamicContentFilterIndex__][filters][__name__][filter]\"
                    id=\"emailform_dynamicContent___dynamicContentIndex___filters___dynamicContentFilterIndex___filters___name___filter\"";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 214, $this->source); })()), "html", null, true);
            yield ">
                ";
            // line 215
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 215), $context["dataKey"], [], "array", true, true, false, 215)) {
                // line 216
                yield "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "vars", [], "any", false, false, false, 216), $context["dataKey"], [], "array", false, false, false, 216));
                foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                    // line 217
                    yield "                        ";
                    if (is_iterable($context["label"])) {
                        // line 218
                        yield "                            <optgroup label=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                        yield "\">
                                ";
                        // line 219
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["label"]);
                        foreach ($context['_seq'] as $context["optionValue"] => $context["optionLabel"]) {
                            // line 220
                            yield "                                    <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionValue"], "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionLabel"], "html", null, true);
                            yield "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['optionValue'], $context['optionLabel'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 222
                        yield "                            </optgroup>
                        ";
                    } else {
                        // line 224
                        yield "                            ";
                        if ((("lists" != $context["dataKey"]) || ( !array_key_exists("currentListId", $context) || ($context["value"] != (isset($context["currentListId"]) || array_key_exists("currentListId", $context) ? $context["currentListId"] : (function () { throw new RuntimeError('Variable "currentListId" does not exist.', 224, $this->source); })()))))) {
                            // line 225
                            yield "                                <option value=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                            yield "</option>
                            ";
                        }
                        // line 227
                        yield "                        ";
                    }
                    // line 228
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['value'], $context['label'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 229
                yield "                ";
            }
            // line 230
            yield "            </select>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['dataKey'], $context['template'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        yield "    </div>";
        // line 233
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/builder.html.twig", ["type" => "email", "isCodeMode" =>         // line 235
(isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 235, $this->source); })()), "sectionForm" =>         // line 236
(isset($context["sectionForm"]) || array_key_exists("sectionForm", $context) ? $context["sectionForm"] : (function () { throw new RuntimeError('Variable "sectionForm" does not exist.', 236, $this->source); })()), "builderAssets" =>         // line 237
(isset($context["builderAssets"]) || array_key_exists("builderAssets", $context) ? $context["builderAssets"] : (function () { throw new RuntimeError('Variable "builderAssets" does not exist.', 237, $this->source); })()), "slots" =>         // line 238
(isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 238, $this->source); })()), "sections" =>         // line 239
(isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 239, $this->source); })()), "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 240
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 240, $this->source); })()), "sessionId", [], "any", false, false, false, 240), "previewUrl" =>         // line 241
(isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 241, $this->source); })())], false);
        // line 244
        $context["typeTwoDifferences"] = ["mautic.email.type.segment.differences.1st", "mautic.email.type.segment.differences.2nd", "mautic.email.type.segment.differences.3rd", "mautic.email.type.segment.differences.4th"];
        // line 245
        yield "    ";
        $context["typeOneDifferences"] = ["mautic.email.type.template.differences.1st", "mautic.email.type.template.differences.2nd", "mautic.email.type.template.differences.3rd", "mautic.email.type.template.differences.4th"];
        // line 246
        yield "
    ";
        // line 247
        $context["type"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 247, $this->source); })()), "emailType", [], "any", false, false, false, 247);
        // line 248
        yield "    ";
        if ((((((( !        // line 250
array_key_exists("updateSelect", $context) || (array_key_exists("updateSelect", $context) && Twig\Extension\CoreExtension::testEmpty((isset($context["updateSelect"]) || array_key_exists("updateSelect", $context) ? $context["updateSelect"] : (function () { throw new RuntimeError('Variable "updateSelect" does not exist.', 250, $this->source); })())))) &&  !        // line 251
(isset($context["isExisting"]) || array_key_exists("isExisting", $context) ? $context["isExisting"] : (function () { throw new RuntimeError('Variable "isExisting" does not exist.', 251, $this->source); })())) &&  !$this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(        // line 252
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()))) &&  !        // line 253
(isset($context["variantParent"]) || array_key_exists("variantParent", $context) ? $context["variantParent"] : (function () { throw new RuntimeError('Variable "variantParent" does not exist.', 253, $this->source); })())) || Twig\Extension\CoreExtension::testEmpty(        // line 255
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 255, $this->source); })()))) || (        // line 256
array_key_exists("forceTypeSelection", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["forceTypeSelection"]) || array_key_exists("forceTypeSelection", $context) ? $context["forceTypeSelection"] : (function () { throw new RuntimeError('Variable "forceTypeSelection" does not exist.', 256, $this->source); })()))))) {
            // line 259
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/form_selecttype.html.twig", ["item" =>             // line 260
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 260, $this->source); })()), "mauticLang" => ["newListEmail" => "mautic.email.type.list.header", "newTemplateEmail" => "mautic.email.type.template.header"], "typePrefix" => "email", "cancelUrl" => "mautic_email_index", "header" => "mautic.email.type.header", "typeOneHeader" => "mautic.email.type.template.header", "typeOneIconClass" => "ri-mail-send-fill", "typeOneDifferences" =>             // line 270
(isset($context["typeOneDifferences"]) || array_key_exists("typeOneDifferences", $context) ? $context["typeOneDifferences"] : (function () { throw new RuntimeError('Variable "typeOneDifferences" does not exist.', 270, $this->source); })()), "typeOneOnClick" => "Mautic.selectEmailType('template');", "typeTwoHeader" => "mautic.email.type.list.header", "typeTwoIconClass" => "ri-pie-chart-fill", "typeTwoDifferences" =>             // line 274
(isset($context["typeTwoDifferences"]) || array_key_exists("typeTwoDifferences", $context) ? $context["typeTwoDifferences"] : (function () { throw new RuntimeError('Variable "typeTwoDifferences" does not exist.', 274, $this->source); })()), "typeTwoOnClick" => "Mautic.selectEmailType('list');"]);
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Email/form.html.twig";
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
        return array (  655 => 274,  654 => 270,  653 => 260,  652 => 259,  650 => 256,  649 => 255,  648 => 253,  647 => 252,  646 => 251,  645 => 250,  643 => 248,  641 => 247,  638 => 246,  635 => 245,  633 => 244,  631 => 241,  630 => 240,  629 => 239,  628 => 238,  627 => 237,  626 => 236,  625 => 235,  624 => 233,  622 => 232,  615 => 230,  612 => 229,  606 => 228,  603 => 227,  595 => 225,  592 => 224,  588 => 222,  577 => 220,  573 => 219,  568 => 218,  565 => 217,  560 => 216,  558 => 215,  554 => 214,  548 => 212,  545 => 211,  541 => 210,  537 => 208,  531 => 206,  528 => 205,  522 => 203,  520 => 202,  516 => 201,  511 => 199,  504 => 195,  500 => 193,  491 => 191,  487 => 190,  482 => 188,  479 => 187,  473 => 185,  471 => 184,  467 => 183,  464 => 182,  459 => 180,  455 => 179,  450 => 178,  448 => 177,  445 => 176,  439 => 173,  435 => 172,  430 => 170,  426 => 169,  422 => 168,  418 => 167,  413 => 165,  409 => 164,  404 => 163,  399 => 161,  395 => 160,  391 => 159,  386 => 158,  384 => 157,  380 => 156,  376 => 155,  366 => 148,  359 => 143,  350 => 141,  346 => 140,  341 => 137,  322 => 134,  315 => 133,  312 => 132,  309 => 131,  292 => 130,  287 => 128,  273 => 117,  267 => 114,  259 => 109,  249 => 102,  245 => 101,  236 => 95,  230 => 92,  222 => 87,  216 => 84,  209 => 80,  203 => 77,  199 => 76,  195 => 75,  191 => 74,  187 => 73,  181 => 69,  179 => 67,  178 => 66,  177 => 64,  173 => 62,  163 => 55,  158 => 53,  154 => 52,  149 => 50,  143 => 47,  130 => 38,  123 => 37,  114 => 33,  112 => 32,  109 => 31,  103 => 29,  97 => 27,  94 => 26,  87 => 25,  76 => 4,  71 => 2,  69 => 23,  67 => 22,  65 => 14,  63 => 13,  61 => 12,  59 => 11,  57 => 10,  55 => 8,  53 => 7,  51 => 6,  49 => 1,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Email/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\Email\\form.html.twig");
    }
}
