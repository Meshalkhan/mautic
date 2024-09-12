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

/* @MauticEmail/Email/form.html.twig */
class __TwigTemplate_d7bdab823fa66121cbeae32c0220dab8 extends Template
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
        // line 2
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), ["@MauticEmail/FormTheme/Email/layout.html.twig"], true);
        // line 6
        $context["dynamicContentPrototype"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "dynamicContent", [], "any", false, false, false, 6), "vars", [], "any", false, false, false, 6), "prototype", [], "any", false, false, false, 6);
        // line 7
        $context["filterBlockPrototype"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dynamicContent", [], "any", false, true, false, 7), "children", [], "any", false, true, false, 7), 0, [], "array", false, true, false, 7), "filters", [], "any", false, true, false, 7), "vars", [], "any", false, true, false, 7), "prototype", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dynamicContent", [], "any", false, true, false, 7), "children", [], "any", false, true, false, 7), 0, [], "array", false, true, false, 7), "filters", [], "any", false, true, false, 7), "vars", [], "any", false, true, false, 7), "prototype", [], "any", false, false, false, 7), null)) : (null));
        // line 8
        $context["filterSelectPrototype"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dynamicContent", [], "any", false, true, false, 8), "children", [], "any", false, true, false, 8), 0, [], "array", false, true, false, 8), "filters", [], "any", false, true, false, 8), "children", [], "any", false, true, false, 8), 0, [], "array", false, true, false, 8), "filters", [], "any", false, true, false, 8), "vars", [], "any", false, true, false, 8), "prototype", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dynamicContent", [], "any", false, true, false, 8), "children", [], "any", false, true, false, 8), 0, [], "array", false, true, false, 8), "filters", [], "any", false, true, false, 8), "children", [], "any", false, true, false, 8), 0, [], "array", false, true, false, 8), "filters", [], "any", false, true, false, 8), "vars", [], "any", false, true, false, 8), "prototype", [], "any", false, false, false, 8), null)) : (null));
        // line 10
        $context["variantParent"] = twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 10, $this->source); })()), "variantParent", [], "any", false, false, false, 10);
        // line 11
        $context["isExisting"] =  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11));
        // line 12
        $context["emailType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "emailType", [], "any", false, false, false, 12), "vars", [], "any", false, false, false, 12), "data", [], "any", false, false, false, 12);
        // line 13
        $context["attachmentSize"] = ((array_key_exists("attachmentSize", $context)) ? (_twig_default_filter((isset($context["attachmentSize"]) || array_key_exists("attachmentSize", $context) ? $context["attachmentSize"] : (function () { throw new RuntimeError('Variable "attachmentSize" does not exist.', 13, $this->source); })()), 0)) : (0));
        // line 14
        $context["templates"] = ["select" => "select-template", "countries" => "country-template", "regions" => "region-template", "timezones" => "timezone-template", "stages" => "stage-template", "locales" => "locale-template"];
        // line 22
        $context["isCodeMode"] = (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 22, $this->source); })()), "getTemplate", [], "method", false, false, false, 22) === "mautic_code_mode");
        // line 23
        $context["previewUrl"] = ((array_key_exists("previewUrl", $context)) ? (_twig_default_filter((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 23, $this->source); })()), "")) : (""));
        // line 2
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticEmail/Email/form.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "email";
    }

    // line 25
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "  ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26))) {
            // line 27
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.header.edit", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27)]), "html", null, true);
            echo "
  ";
        } else {
            // line 29
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.header.new"), "html", null, true);
            echo "
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 32, $this->source); })()), "variantParent", [], "any", false, false, false, 32)) {
            // line 33
            echo "    <div><span class=\"small\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33), "%parent%" => twig_get_attribute($this->env, $this->source, (isset($context["variantParent"]) || array_key_exists("variantParent", $context) ? $context["variantParent"] : (function () { throw new RuntimeError('Variable "variantParent" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33)]), "html", null, true);
            echo "</span></div>
  ";
        }
    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
    <div class=\"box-layout\">
        <div class=\"col-md-9 height-auto\">
            <div class=\"row\">
                <div class=\"col-xs-12\">

                    <!-- tabs controls -->
                    <ul class=\"nav nav-tabs pr-md pl-md\">
                        <li class=\"active\">
                            <a href=\"#email-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.theme"), "html", null, true);
        echo "</a>
                        </li>
                        <li>
                            <a href=\"#advanced-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.advanced"), "html", null, true);
        echo "</a>
                        </li>
                        <li id=\"dynamic-content-tab\" ";
        // line 52
        echo (((isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 52, $this->source); })())) ? ("") : ("class=\"hidden\""));
        echo ">
                            <a href=\"#dynamic-content-container\" role=\"tab\" data-toggle=\"tab\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.dynamicContent"), "html", null, true);
        echo "</a>
                        </li>
                        ";
        // line 55
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.tabs", $context);
        echo "
                    </ul>
                    <!--/ tabs controls -->

                    <div class=\"tab-content pa-md\">
                        <div class=\"tab-pane fade in active bdr-w-0\" id=\"email-container\">
                            <div class=\"row\">
                                <div class=\"col-md-12\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "template", [], "any", false, false, false, 62), 'row');
        echo "</div>
                            </div>";
        // line 64
        echo twig_include($this->env, $context, "@MauticCore/Helper/theme_select.html.twig", ["type" => "email", "themes" =>         // line 66
(isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 66, $this->source); })()), "active" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 67
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "template", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "value", [], "any", false, false, false, 67)]);
        // line 69
        echo "</div>
                        <div class=\"tab-pane fade bdr-w-0\" id=\"advanced-container\">
                            <div class=\"row\">
                                <div class=\"col-md-6\">
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "fromName", [], "any", false, false, false, 73), 'row');
        echo "
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "fromAddress", [], "any", false, false, false, 74), 'row');
        echo "
                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "replyToAddress", [], "any", false, false, false, 75), 'row');
        echo "
                                    ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "bccAddress", [], "any", false, false, false, 76), 'row');
        echo "
                                    ";
        // line 77
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.settings.advanced", $context);
        echo "
                                    <div>
                                        <div class=\"pull-left\">
                                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "assetAttachments", [], "any", false, false, false, 80), 'label');
        echo "
                                        </div>
                                        <div class=\"text-right pr-10\">
                                            <span class=\"label label-info\"
                                                  id=\"attachment-size\">";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["attachmentSize"]) || array_key_exists("attachmentSize", $context) ? $context["attachmentSize"] : (function () { throw new RuntimeError('Variable "attachmentSize" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "</span>
                                        </div>
                                        <div class=\"clearfix\"></div>
                                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "assetAttachments", [], "any", false, false, false, 87), 'widget');
        echo "
                                    </div>

                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "headers", [], "any", false, false, false, 92), 'row');
        echo "
                                </div>
                                <div class=\"col-md-6\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "useOwnerAsMailer", [], "any", false, false, false, 95), 'row');
        echo "
                                </div>
                            </div>
                            <br/>
                            <div class=\"row hidden\" id=\"custom-html-row\">
                                <div class=\"col-md-12\">
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "customHtml", [], "any", false, false, false, 101), 'label');
        echo "
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "customHtml", [], "any", false, false, false, 102), 'widget');
        echo "
                                </div>
                            </div>
                            <br/>
                            <div class=\"row\">
                                <div class=\"col-md-12\">
                                    <div class=\"pull-left\">
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "plainText", [], "any", false, false, false, 109), 'label');
        echo "
                                    </div>
                                    <div class=\"text-right pr-10\">
                                        <i class=\"fa fa-spinner fa-spin ml-2 plaintext-spinner hide\"></i>
                                        <a class=\"small\"
                                           onclick=\"Mautic.autoGeneratePlaintext();\">";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.plaintext.generate"), "html", null, true);
        echo "</a>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "plainText", [], "any", false, false, false, 117), 'widget');
        echo "
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.new"), "html", null, true);
        echo "</a>
                                            </li>
                                            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "dynamicContent", [], "any", false, false, false, 130));
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
            echo "                                              ";
            $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dynamicContent"], "tokenName", [], "any", false, false, false, 131), "vars", [], "any", false, false, false, 131), "value", [], "any", false, false, false, 131);
            // line 132
            echo "                                              ";
            $context["linkText"] = ((array_key_exists("name", $context)) ? ((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 132, $this->source); })())) : ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.dynamicContent") . " ") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 132))));
            // line 133
            echo "                                              <li class=\"";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 133)) {
                echo "active";
            }
            echo "\">
                                                <a role=\"tab\" data-toggle=\"tab\" href=\"#";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["dynamicContent"], "vars", [], "any", false, false, false, 134), "id", [], "any", false, false, false, 134), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["linkText"]) || array_key_exists("linkText", $context) ? $context["linkText"] : (function () { throw new RuntimeError('Variable "linkText" does not exist.', 134, $this->source); })()), "html", null, true);
            echo "</a>
                                              </li>
                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dynamicContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                                            </ul>
                                        </div>
                                        <div class=\"tab-content pa-md col-xs-9\" id=\"dynamicContentContainer\">
                                          ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "dynamicContent", [], "any", false, false, false, 140));
        foreach ($context['_seq'] as $context["_key"] => $context["dynamicContent"]) {
            // line 141
            echo "                                              ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["dynamicContent"], 'widget');
            echo "
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dynamicContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 148
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("email.tabs.content", $context);
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-md-3 height-auto bdr-l\">
            <div class=\"pr-lg pl-lg pt-md pb-md\">
                ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "subject", [], "any", false, false, false, 155), 'row');
        echo "
                ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "name", [], "any", false, false, false, 156), 'row');
        echo "
                ";
        // line 157
        if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 157, $this->source); })())) {
            // line 158
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "variantSettings", [], "any", false, false, false, 158), 'row');
            echo "
                    ";
            // line 159
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "isPublished", [], "any", false, false, false, 159), 'row');
            echo "
                    ";
            // line 160
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "publishUp", [], "any", false, false, false, 160), 'row');
            echo "
                    ";
            // line 161
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "publishDown", [], "any", false, false, false, 161), 'row');
            echo "
                ";
        } else {
            // line 163
            echo "                    <div id=\"leadList\"";
            echo ((("template" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 163, $this->source); })()))) ? (" class=\"hide\"") : (""));
            echo ">
                        ";
            // line 164
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "lists", [], "any", false, false, false, 164), 'row');
            echo "
                        ";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "excludedLists", [], "any", false, false, false, 165), 'row');
            echo "
                    </div>
                    ";
            // line 167
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "category", [], "any", false, false, false, 167), 'row');
            echo "
                    ";
            // line 168
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 168, $this->source); })()), "language", [], "any", false, false, false, 168), 'row');
            echo "
                    <div id=\"segmentTranslationParent\"";
            // line 169
            echo ((("template" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 169, $this->source); })()))) ? (" class=\"hide\"") : (""));
            echo ">
                        ";
            // line 170
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "segmentTranslationParent", [], "any", false, false, false, 170), 'row');
            echo "
                    </div>
                    <div id=\"templateTranslationParent\"";
            // line 172
            echo ((("list" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 172, $this->source); })()))) ? (" class=\"hide\"") : (""));
            echo ">
                        ";
            // line 173
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "templateTranslationParent", [], "any", false, false, false, 173), 'row');
            echo "
                    </div>
                ";
        }
        // line 176
        echo "
                ";
        // line 177
        if ( !(isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 177, $this->source); })())) {
            // line 178
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "isPublished", [], "any", false, false, false, 178), 'row');
            echo "
                    ";
            // line 179
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "publishUp", [], "any", false, false, false, 179), 'row');
            echo "
                    ";
            // line 180
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "publishDown", [], "any", false, false, false, 180), 'row');
            echo "
                ";
        }
        // line 182
        echo "
                ";
        // line 183
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), "unsubscribeForm", [], "any", false, false, false, 183), 'row');
        echo "
                ";
        // line 184
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 184, $this->source); })()), "page:preference_center:viewown", [], "array", false, false, false, 184)) ||  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 184, $this->source); })()), "page:preference_center:viewother", [], "array", false, false, false, 184)))) {
            // line 185
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "preferenceCenter", [], "any", false, false, false, 185), 'row');
            echo "
                ";
        }
        // line 187
        echo "                <hr/>
                <h5>";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.utm_tags"), "html", null, true);
        echo "</h5>
                <br/>
                ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), "utmTags", [], "any", false, false, false, 190));
        foreach ($context['_seq'] as $context["i"] => $context["utmTag"]) {
            // line 191
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["utmTag"], 'row');
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['utmTag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "            </div>
            <div class=\"hide\">
                ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), 'rest');
        echo "
            </div>
        </div>
    </div>
    ";
        // line 199
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), 'form_end');
        echo "

    <div id=\"dynamicContentPrototype\" data-prototype=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["dynamicContentPrototype"]) || array_key_exists("dynamicContentPrototype", $context) ? $context["dynamicContentPrototype"] : (function () { throw new RuntimeError('Variable "dynamicContentPrototype" does not exist.', 201, $this->source); })()), 'widget'));
        echo "\"></div>
    ";
        // line 202
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["filterBlockPrototype"]) || array_key_exists("filterBlockPrototype", $context) ? $context["filterBlockPrototype"] : (function () { throw new RuntimeError('Variable "filterBlockPrototype" does not exist.', 202, $this->source); })()), "\\Symfony\\Component\\Form\\FormView")) {
            // line 203
            echo "        <div id=\"filterBlockPrototype\" data-prototype=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filterBlockPrototype"]) || array_key_exists("filterBlockPrototype", $context) ? $context["filterBlockPrototype"] : (function () { throw new RuntimeError('Variable "filterBlockPrototype" does not exist.', 203, $this->source); })()), 'widget'));
            echo "\"></div>
    ";
        }
        // line 205
        echo "    ";
        if ($this->env->getTest('instanceof')->getCallable()((isset($context["filterSelectPrototype"]) || array_key_exists("filterSelectPrototype", $context) ? $context["filterSelectPrototype"] : (function () { throw new RuntimeError('Variable "filterSelectPrototype" does not exist.', 205, $this->source); })()), "\\Symfony\\Component\\Form\\FormView")) {
            // line 206
            echo "        <div id=\"filterSelectPrototype\" data-prototype=\"";
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["filterSelectPrototype"]) || array_key_exists("filterSelectPrototype", $context) ? $context["filterSelectPrototype"] : (function () { throw new RuntimeError('Variable "filterSelectPrototype" does not exist.', 206, $this->source); })()), 'widget'));
            echo "\"></div>
    ";
        }
        // line 208
        echo "
    <div class=\"hide\" id=\"templates\">
        ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templates"]) || array_key_exists("templates", $context) ? $context["templates"] : (function () { throw new RuntimeError('Variable "templates" does not exist.', 210, $this->source); })()));
        foreach ($context['_seq'] as $context["dataKey"] => $context["template"]) {
            // line 211
            echo "            ";
            $context["attr"] = ((("tags" == $context["dataKey"])) ? (((((" data-placeholder=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mautic"]) || array_key_exists("mautic", $context) ? $context["mautic"] : (function () { throw new RuntimeError('Variable "mautic" does not exist.', 211, $this->source); })()), "lead", [], "any", false, false, false, 211), "tags", [], "any", false, false, false, 211), "select_or_create", [], "any", false, false, false, 211))) . "\" data-no-results-text=\"") . $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["mautic"]) || array_key_exists("mautic", $context) ? $context["mautic"] : (function () { throw new RuntimeError('Variable "mautic" does not exist.', 211, $this->source); })()), "lead", [], "any", false, false, false, 211), "tags", [], "any", false, false, false, 211), "enter_to_create", [], "any", false, false, false, 211))) . "\" data-allow-add=\"true\" onchange=\"Mautic.createLeadTag(this)\"")) : (""));
            // line 212
            echo "            <select class=\"form-control not-chosen ";
            echo twig_escape_filter($this->env, $context["template"], "html", null, true);
            echo "\"
                    name=\"emailform[dynamicContent][__dynamicContentIndex__][filters][__dynamicContentFilterIndex__][filters][__name__][filter]\"
                    id=\"emailform_dynamicContent___dynamicContentIndex___filters___dynamicContentFilterIndex___filters___name___filter\"";
            // line 214
            echo twig_escape_filter($this->env, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 214, $this->source); })()), "html", null, true);
            echo ">
                ";
            // line 215
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 215), $context["dataKey"], [], "array", true, true, false, 215)) {
                // line 216
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "vars", [], "any", false, false, false, 216), $context["dataKey"], [], "array", false, false, false, 216));
                foreach ($context['_seq'] as $context["value"] => $context["label"]) {
                    // line 217
                    echo "                        ";
                    if (is_iterable($context["label"])) {
                        // line 218
                        echo "                            <optgroup label=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\">
                                ";
                        // line 219
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["label"]);
                        foreach ($context['_seq'] as $context["optionValue"] => $context["optionLabel"]) {
                            // line 220
                            echo "                                    <option value=\"";
                            echo twig_escape_filter($this->env, $context["optionValue"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["optionLabel"], "html", null, true);
                            echo "</option>
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['optionValue'], $context['optionLabel'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 222
                        echo "                            </optgroup>
                        ";
                    } else {
                        // line 224
                        echo "                            ";
                        if ((("lists" != $context["dataKey"]) || ( !array_key_exists("currentListId", $context) || ($context["value"] != (isset($context["currentListId"]) || array_key_exists("currentListId", $context) ? $context["currentListId"] : (function () { throw new RuntimeError('Variable "currentListId" does not exist.', 224, $this->source); })()))))) {
                            // line 225
                            echo "                                <option value=\"";
                            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "</option>
                            ";
                        }
                        // line 227
                        echo "                        ";
                    }
                    // line 228
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['label'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 229
                echo "                ";
            }
            // line 230
            echo "            </select>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['dataKey'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 232
        echo "    </div>";
        // line 233
        echo twig_include($this->env, $context, "@MauticCore/Helper/builder.html.twig", ["type" => "email", "isCodeMode" =>         // line 235
(isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 235, $this->source); })()), "sectionForm" =>         // line 236
(isset($context["sectionForm"]) || array_key_exists("sectionForm", $context) ? $context["sectionForm"] : (function () { throw new RuntimeError('Variable "sectionForm" does not exist.', 236, $this->source); })()), "builderAssets" =>         // line 237
(isset($context["builderAssets"]) || array_key_exists("builderAssets", $context) ? $context["builderAssets"] : (function () { throw new RuntimeError('Variable "builderAssets" does not exist.', 237, $this->source); })()), "slots" =>         // line 238
(isset($context["slots"]) || array_key_exists("slots", $context) ? $context["slots"] : (function () { throw new RuntimeError('Variable "slots" does not exist.', 238, $this->source); })()), "sections" =>         // line 239
(isset($context["sections"]) || array_key_exists("sections", $context) ? $context["sections"] : (function () { throw new RuntimeError('Variable "sections" does not exist.', 239, $this->source); })()), "objectId" => twig_get_attribute($this->env, $this->source,         // line 240
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 240, $this->source); })()), "sessionId", [], "any", false, false, false, 240), "previewUrl" =>         // line 241
(isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 241, $this->source); })())], false);
        // line 244
        $context["typeTwoDifferences"] = ["mautic.email.type.segment.differences.1st", "mautic.email.type.segment.differences.2nd", "mautic.email.type.segment.differences.3rd", "mautic.email.type.segment.differences.4th"];
        // line 245
        echo "    ";
        $context["typeOneDifferences"] = ["mautic.email.type.template.differences.1st", "mautic.email.type.template.differences.2nd", "mautic.email.type.template.differences.3rd", "mautic.email.type.template.differences.4th"];
        // line 246
        echo "
    ";
        // line 247
        $context["type"] = twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 247, $this->source); })()), "emailType", [], "any", false, false, false, 247);
        // line 248
        echo "    ";
        if ((((((( !        // line 250
array_key_exists("updateSelect", $context) || (array_key_exists("updateSelect", $context) && twig_test_empty((isset($context["updateSelect"]) || array_key_exists("updateSelect", $context) ? $context["updateSelect"] : (function () { throw new RuntimeError('Variable "updateSelect" does not exist.', 250, $this->source); })())))) &&  !        // line 251
(isset($context["isExisting"]) || array_key_exists("isExisting", $context) ? $context["isExisting"] : (function () { throw new RuntimeError('Variable "isExisting" does not exist.', 251, $this->source); })())) &&  !$this->extensions['Mautic\CoreBundle\Twig\Extension\FormExtension']->containsErrors(        // line 252
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()))) &&  !        // line 253
(isset($context["variantParent"]) || array_key_exists("variantParent", $context) ? $context["variantParent"] : (function () { throw new RuntimeError('Variable "variantParent" does not exist.', 253, $this->source); })())) || twig_test_empty(        // line 255
(isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 255, $this->source); })()))) || (        // line 256
array_key_exists("forceTypeSelection", $context) &&  !twig_test_empty((isset($context["forceTypeSelection"]) || array_key_exists("forceTypeSelection", $context) ? $context["forceTypeSelection"] : (function () { throw new RuntimeError('Variable "forceTypeSelection" does not exist.', 256, $this->source); })()))))) {
            // line 259
            echo twig_include($this->env, $context, "@MauticCore/Helper/form_selecttype.html.twig", ["item" =>             // line 260
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 260, $this->source); })()), "mauticLang" => ["newListEmail" => "mautic.email.type.list.header", "newTemplateEmail" => "mautic.email.type.template.header"], "typePrefix" => "email", "cancelUrl" => "mautic_email_index", "header" => "mautic.email.type.header", "typeOneHeader" => "mautic.email.type.template.header", "typeOneIconClass" => "ri-mail-send-fill", "typeOneDifferences" =>             // line 270
(isset($context["typeOneDifferences"]) || array_key_exists("typeOneDifferences", $context) ? $context["typeOneDifferences"] : (function () { throw new RuntimeError('Variable "typeOneDifferences" does not exist.', 270, $this->source); })()), "typeOneOnClick" => "Mautic.selectEmailType('template');", "typeTwoHeader" => "mautic.email.type.list.header", "typeTwoIconClass" => "ri-pie-chart-fill", "typeTwoDifferences" =>             // line 274
(isset($context["typeTwoDifferences"]) || array_key_exists("typeTwoDifferences", $context) ? $context["typeTwoDifferences"] : (function () { throw new RuntimeError('Variable "typeTwoDifferences" does not exist.', 274, $this->source); })()), "typeTwoOnClick" => "Mautic.selectEmailType('list');"]);
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/Email/form.html.twig";
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
        return array (  639 => 274,  638 => 270,  637 => 260,  636 => 259,  634 => 256,  633 => 255,  632 => 253,  631 => 252,  630 => 251,  629 => 250,  627 => 248,  625 => 247,  622 => 246,  619 => 245,  617 => 244,  615 => 241,  614 => 240,  613 => 239,  612 => 238,  611 => 237,  610 => 236,  609 => 235,  608 => 233,  606 => 232,  599 => 230,  596 => 229,  590 => 228,  587 => 227,  579 => 225,  576 => 224,  572 => 222,  561 => 220,  557 => 219,  552 => 218,  549 => 217,  544 => 216,  542 => 215,  538 => 214,  532 => 212,  529 => 211,  525 => 210,  521 => 208,  515 => 206,  512 => 205,  506 => 203,  504 => 202,  500 => 201,  495 => 199,  488 => 195,  484 => 193,  475 => 191,  471 => 190,  466 => 188,  463 => 187,  457 => 185,  455 => 184,  451 => 183,  448 => 182,  443 => 180,  439 => 179,  434 => 178,  432 => 177,  429 => 176,  423 => 173,  419 => 172,  414 => 170,  410 => 169,  406 => 168,  402 => 167,  397 => 165,  393 => 164,  388 => 163,  383 => 161,  379 => 160,  375 => 159,  370 => 158,  368 => 157,  364 => 156,  360 => 155,  350 => 148,  343 => 143,  334 => 141,  330 => 140,  325 => 137,  306 => 134,  299 => 133,  296 => 132,  293 => 131,  276 => 130,  271 => 128,  257 => 117,  251 => 114,  243 => 109,  233 => 102,  229 => 101,  220 => 95,  214 => 92,  206 => 87,  200 => 84,  193 => 80,  187 => 77,  183 => 76,  179 => 75,  175 => 74,  171 => 73,  165 => 69,  163 => 67,  162 => 66,  161 => 64,  157 => 62,  147 => 55,  142 => 53,  138 => 52,  133 => 50,  127 => 47,  114 => 38,  110 => 37,  102 => 33,  100 => 32,  97 => 31,  91 => 29,  85 => 27,  82 => 26,  78 => 25,  71 => 4,  66 => 2,  64 => 23,  62 => 22,  60 => 14,  58 => 13,  56 => 12,  54 => 11,  52 => 10,  50 => 8,  48 => 7,  46 => 6,  44 => 1,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/Email/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\Email\\form.html.twig");
    }
}
