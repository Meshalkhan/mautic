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

/* @MauticEmail/Email/details.html.twig */
class __TwigTemplate_d3c141687c9fce08a1af619ad379ea14 extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            'publishStatus' => [$this, 'block_publishStatus'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return $this->loadTemplate((((isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 1, $this->source); })())) ? ("@MauticCore/Default/raw_output.html.twig") : ("@MauticCore/Default/content.html.twig")), "@MauticEmail/Email/details.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        $context["variantContent"] = Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Variant/index.html.twig", ["activeEntity" =>         // line 8
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 8, $this->source); })()), "variants" =>         // line 9
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 9, $this->source); })()), "abTestResults" =>         // line 10
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 10, $this->source); })()), "model" => "email", "actionRoute" => "mautic_email_action"]);
        // line 15
        $context["showVariants"] = (array_key_exists("variantContent", $context) &&  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim((isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 15, $this->source); })()))));
        // line 17
        $context["translationContent"] = Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Translation/index.html.twig", ["activeEntity" =>         // line 19
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 19, $this->source); })()), "translations" =>         // line 20
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 20, $this->source); })()), "model" => "email", "actionRoute" => "mautic_email_action"]);
        // line 26
        $context["showTranslations"] =  !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim((isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 26, $this->source); })())));
        // line 27
        $context["emailType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 27, $this->source); })()), "emailType", [], "any", false, false, false, 27);
        // line 29
        if ( !array_key_exists("emailType", $context)) {
            // line 30
            $context["emailType"] = "template";
        }
        // line 32
        $context["customButtons"] = [];
        // line 34
        if ( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 34, $this->source); })())) {
            // line 35
            if (("list" == (isset($context["emailType"]) || array_key_exists("emailType", $context) ? $context["emailType"] : (function () { throw new RuntimeError('Variable "emailType" does not exist.', 35, $this->source); })()))) {
                // line 36
                $context["sendButton"] = ["attr" => ["data-toggle" => "ajax", "href" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 39
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 39, $this->source); })()), "isBackgroundSending", [], "method", false, false, false, 39)) ? ("javascript:void(0);") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "send", "objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 39, $this->source); })()), "getId", [], "method", false, false, false, 39)])))], "iconClass" => "fa fa-send-o", "btnText" => "mautic.email.send", "primary" => true];
                // line 45
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 45, $this->source); })()), "isBackgroundSending", [], "method", false, false, false, 45)) {
                    // line 46
                    $context["sendButton"] = Twig\Extension\CoreExtension::merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 46, $this->source); })()), ["tooltip" => "mautic.email.send.disabled"]);
                    // line 47
                    $context["sendButton"] = Twig\Extension\CoreExtension::merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 47, $this->source); })()), ["attr" => ["disabled" => true]]);
                }
                // line 50
                $context["customButtons"] = Twig\Extension\CoreExtension::merge((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 50, $this->source); })()), [(isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 50, $this->source); })())]);
            }
            // line 52
            $context["sendExampleButton"] = ["attr" => ["class" => "btn btn-default btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "sendExample", "objectId" => CoreExtension::getAttribute($this->env, $this->source,             // line 57
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 57, $this->source); })()), "getId", [], "method", false, false, false, 57)]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send.example")], "iconClass" => "ri-mail-send-line", "btnText" => "mautic.email.send.example", "primary" => true];
            // line 64
            $context["customButtons"] = Twig\Extension\CoreExtension::merge((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 64, $this->source); })()), [(isset($context["sendExampleButton"]) || array_key_exists("sendExampleButton", $context) ? $context["sendExampleButton"] : (function () { throw new RuntimeError('Variable "sendExampleButton" does not exist.', 64, $this->source); })())]);
            // line 65
            $context["heatmapButton"] = ["attr" => ["class" => "btn btn-default btn-nospin", "data-toggle" => "email-heatmap", "data-email" => CoreExtension::getAttribute($this->env, $this->source,             // line 69
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 69, $this->source); })()), "getId", [], "method", false, false, false, 69), "data-target" => "#MauticSharedModal", "href" => "#", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.click_heatmap")], "iconClass" => "ri-fire-line", "btnText" => "mautic.email.heatmap.click_heatmap"];
            // line 77
            $context["customButtons"] = Twig\Extension\CoreExtension::merge((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 77, $this->source); })()), [(isset($context["heatmapButton"]) || array_key_exists("heatmapButton", $context) ? $context["heatmapButton"] : (function () { throw new RuntimeError('Variable "heatmapButton" does not exist.', 77, $this->source); })())]);
        }
        // line 82
        $context["allowAbTest"] = (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 82, $this->source); })()), "isTranslation", [true], "method", false, false, false, 82) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 82, $this->source); })()), "parent", [], "array", false, false, false, 82), "isVariant", [true], "method", false, false, false, 82))) ? (false) : (true));
        // line 1
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "email";
        yield from [];
    }

    // line 84
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_publishStatus(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 85
        yield "  ";
        if ( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 85, $this->source); })())) {
            // line 86
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 86, $this->source); })())]);
        }
        yield from [];
    }

    // line 90
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 91
        yield "    ";
        if ( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 91, $this->source); })())) {
            // line 92
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>             // line 93
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 93, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,             // line 96
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 96, $this->source); })()), "email:emails:editown", [], "array", false, false, false, 96), CoreExtension::getAttribute($this->env, $this->source,             // line 97
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 97, $this->source); })()), "email:emails:editother", [], "array", false, false, false, 97), CoreExtension::getAttribute($this->env, $this->source,             // line 98
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 98, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 98)), "clone" => CoreExtension::getAttribute($this->env, $this->source,             // line 100
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 100, $this->source); })()), "email:emails:create", [], "array", false, false, false, 100), "abtest" => (            // line 101
(isset($context["allowAbTest"]) || array_key_exists("allowAbTest", $context) ? $context["allowAbTest"] : (function () { throw new RuntimeError('Variable "allowAbTest" does not exist.', 101, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 101, $this->source); })()), "email:emails:create", [], "array", false, false, false, 101)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,             // line 103
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 103, $this->source); })()), "email:emails:deleteown", [], "array", false, false, false, 103), CoreExtension::getAttribute($this->env, $this->source,             // line 104
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 104, $this->source); })()), "email:emails:deleteother", [], "array", false, false, false, 104), CoreExtension::getAttribute($this->env, $this->source,             // line 105
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 105, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 105)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(CoreExtension::getAttribute($this->env, $this->source,             // line 108
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 108, $this->source); })()), "email:emails:viewown", [], "array", false, false, false, 108), CoreExtension::getAttribute($this->env, $this->source,             // line 109
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 109, $this->source); })()), "email:emails:viewother", [], "array", false, false, false, 109), CoreExtension::getAttribute($this->env, $this->source,             // line 110
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 110, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 110))], "routeBase" => "email", "customButtons" =>             // line 114
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 114, $this->source); })())]);
        }
        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 121
        yield "  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- left section -->
      <div class=\"col-md-9 height-auto\">
          <div>
              <!-- email detail header -->
              <div class=\"pr-md pl-md pt-lg pb-lg\">
                  <div class=\"box-layout\">
                      <div class=\"col-xs-10\">
                          <div>";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 130, $this->source); })()), "subject", [], "any", false, false, false, 130), "html", null, true);
        yield "</div>
                          <div class=\"text-muted\">";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emailPreview"]) || array_key_exists("emailPreview", $context) ? $context["emailPreview"] : (function () { throw new RuntimeError('Variable "emailPreview" does not exist.', 131, $this->source); })()), "html", null, true);
        yield "</div>
                          ";
        // line 132
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 132, $this->source); })()), "isVariant", [true], "method", false, false, false, 132)) {
            // line 133
            yield "                            <div class=\"small\">
                              <a href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 134, $this->source); })()), "parent", [], "any", false, false, false, 134), "id", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 135, $this->source); })()), "parent", [], "any", false, false, false, 135), "name", [], "any", false, false, false, 135)]), "html", null, true);
            // line 136
            yield "</a>
                            </div>
                          ";
        }
        // line 139
        yield "                          ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 139, $this->source); })()), "isTranslation", [true], "method", false, false, false, 139)) {
            // line 140
            yield "                            <div class=\"small\">
                              <a href=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 141, $this->source); })()), "parent", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141)]), "html", null, true);
            yield "\" data-toggle=\"ajax\">";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 142, $this->source); })()), "parent", [], "any", false, false, false, 142), "name", [], "any", false, false, false, 142)]), "html", null, true);
            // line 143
            yield "</a>
                            </div>
                          ";
        }
        // line 146
        yield "                      </div>
                  </div>
              </div>
              <!--/ email detail header -->

              <!-- email detail collapseable -->
              <div class=\"collapse\" id=\"email-details\">
                  <div class=\"pr-md pl-md pb-md\">
                      <div class=\"panel shd-none mb-0\">
                          <table class=\"table table-hover mb-0\">
                              <tbody>";
        // line 157
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 157, $this->source); })())]);
        // line 158
        yield "<tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.theme"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td>";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 162, $this->source); })()), "template", [], "any", false, false, false, 162), "html", null, true);
        yield "</td>
                              </tr>
                              ";
        // line 164
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 164, $this->source); })()), "fromName", [], "any", false, false, false, 164)) {
            // line 165
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.from_name"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 169, $this->source); })()), "fromName", [], "any", false, false, false, 169), "html", null, true);
            yield "</td>
                                  </tr>
                              ";
        }
        // line 172
        yield "                              ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 172, $this->source); })()), "fromAddress", [], "any", false, false, false, 172)) {
            // line 173
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.from_email"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 177, $this->source); })()), "fromAddress", [], "any", false, false, false, 177), "html", null, true);
            yield "</td>
                                  </tr>
                              ";
        }
        // line 180
        yield "                              ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 180, $this->source); })()), "replyToAddress", [], "any", false, false, false, 180)) {
            // line 181
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.reply_to_email"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 185
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 185, $this->source); })()), "replyToAddress", [], "any", false, false, false, 185), "html", null, true);
            yield "</td>
                                  </tr>
                              ";
        }
        // line 188
        yield "                              ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 188, $this->source); })()), "bccAddress", [], "any", false, false, false, 188)) {
            // line 189
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.bcc"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 193
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 193, $this->source); })()), "bccAddress", [], "any", false, false, false, 193), "html", null, true);
            yield "</td>
                                  </tr>
                              ";
        }
        // line 196
        yield "                              ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 196, $this->source); })()), "headers", [], "any", false, false, false, 196)) {
            // line 197
            yield "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.custom_headers"), "html", null, true);
            yield "</span>
                                      </td>
                                      <td>";
            // line 201
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->simpleArrayToHtml(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 201, $this->source); })()), "headers", [], "any", false, false, false, 201));
            yield "</td>
                                  </tr>
                              ";
        }
        // line 204
        yield "                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.sent"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td>";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 208, $this->source); })()), "sentCount", [], "any", false, false, false, 208), "html", null, true);
        yield "</td>
                              </tr>
                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.delivered"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td data-email-stat-delivered-for=\"";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 214, $this->source); })()), "id", [], "any", false, false, false, 214), "html", null, true);
        yield "\"><div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div></td>
                              </tr>
                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.read"), "html", null, true);
        yield "</span>
                                  </td>
                                  <td>";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 220, $this->source); })()), "readCount", [], "any", false, false, false, 220), "html", null, true);
        yield "</td>
                              </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
              <!--/ email detail collapseable -->
          </div>

          <div>
              <!-- email detail collapseable toggler -->
              <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#email-details\">
                      <span class=\"caret\"></span> ";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        yield "
                    </a>
                </span>
              </div>
              <!--/ email detail collapseable toggler -->

              ";
        // line 241
        $context["isVariant"] = ((((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 241, $this->source); })()) || (isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 241, $this->source); })()))) ?: (0));
        // line 242
        yield "              ";
        $context["dateFrom"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 242, $this->source); })()), "children", [], "any", false, false, false, 242), "date_from", [], "array", false, false, false, 242), "vars", [], "any", false, false, false, 242), "data", [], "array", false, false, false, 242);
        // line 243
        yield "              ";
        $context["dateTo"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 243, $this->source); })()), "children", [], "any", false, false, false, 243), "date_to", [], "array", false, false, false, 243), "vars", [], "any", false, false, false, 243), "data", [], "array", false, false, false, 243);
        // line 244
        yield "
              <div class=\"stats-menu pl-md mt-lg\">
                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs\">
                      <li class=\"active\">
                          <a href=\"#stats-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.thead.stats"), "html", null, true);
        yield "
                          </a>
                      </li>
                      <li>
                          <a href=\"#reads-map-container\" role=\"tab\" data-toggle=\"tab\" data-load=\"map\">
                              ";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.thead.maps"), "html", null, true);
        yield "
                          </a>
                      </li>
                  </ul>
                  <!--/ tabs controls -->

                  <div class=\"date-range\">
                      ";
        // line 262
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" =>         // line 263
(isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 263, $this->source); })())]);
        // line 264
        yield "
                  </div>
              </div>

              <div class=\"stats-menu__content tab-content bg-white pa-md mb-lg shd-sm\">
                  <div class=\"tab-pane active bdr-w-0\" id=\"stats-container\">
                      <div id=\"emailGraphStats\"
                           data-graph-url=\"";
        // line 271
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_graph_stats", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271), "isVariant" => (isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 271, $this->source); })()), "dateFrom" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 271, $this->source); })()), "Y-m-d"), "dateTo" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 271, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\"
                      >
                          <div class=\"spinner\">
                              <i class=\"fa fa-spin fa-spinner\"></i>
                          </div>
                      </div>

                  </div>
                  <div class=\"tab-pane bdr-w-0\" id=\"reads-map-container\"
                       data-map-url=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_map_stats", ["objectId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 280, $this->source); })()), "id", [], "any", false, false, false, 280), "isVariant" => (isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 280, $this->source); })()), "dateFrom" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 280, $this->source); })()), "Y-m-d"), "dateTo" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 280, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\"
                  >
                      <div class=\"spinner\">
                          <i class=\"fa fa-spin fa-spinner\"></i>
                      </div>
                  </div>
              </div>

              ";
        // line 288
        yield $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        yield "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs pr-md pl-md\">
                  <li class=\"active\">
                      <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 294
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        yield "
                      </a>
                  </li>
                  <li>
                      <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 299
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.associated.contacts"), "html", null, true);
        yield "
                      </a>
                  </li>
                  ";
        // line 302
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 302, $this->source); })())) {
            // line 303
            yield "                      <li>
                          <a href=\"#variants-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variants"), "html", null, true);
            yield "
                          </a>
                      </li>
                  ";
        }
        // line 309
        yield "                  ";
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 309, $this->source); })())) {
            // line 310
            yield "                      <li>
                          <a href=\"#translation-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translations"), "html", null, true);
            yield "
                          </a>
                      </li>
                  ";
        }
        // line 316
        yield "              </ul>
              <!--/ tabs controls -->
          </div>

          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              <div class=\"tab-pane active bdr-w-0\" id=\"clicks-container\">";
        // line 323
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" =>         // line 324
(isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 324, $this->source); })()), "entity" =>         // line 325
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 325, $this->source); })()), "channel" => "email"]);
        // line 328
        yield "</div>

              <div class=\"tab-pane bdr-w-0 page-list\" id=\"contacts-container\">
                  ";
        // line 331
        yield (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 331, $this->source); })());
        yield "
              </div>

              ";
        // line 334
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 334, $this->source); })())) {
            // line 335
            yield "                  <!-- #variants-container -->
                  <div class=\"tab-pane bdr-w-0\" id=\"variants-container\">
                      ";
            // line 337
            yield (isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 337, $this->source); })());
            yield "
                  </div>
                  <!--/ #variants-container -->
              ";
        }
        // line 341
        yield "
              <!-- #translation-container -->
              ";
        // line 343
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 343, $this->source); })())) {
            // line 344
            yield "                  <div class=\"tab-pane bdr-w-0\" id=\"translation-container\">
                      ";
            // line 345
            yield (isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 345, $this->source); })());
            yield "
                  </div>
              ";
        }
        // line 348
        yield "              <!--/ #translation-container -->
          </div>
      </div>
      <!--/ left section -->

      <!-- right section -->
      <div class=\"col-md-3 bdr-l height-auto\">
          <!-- preview URL -->
          <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.url"), "html", null, true);
        yield "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  ";
        // line 361
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "translation", [], "any", true, true, false, 361)) {
            // line 362
            yield "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"control-label\">";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.translation"), "html", null, true);
            yield "</div>
                          ";
            // line 365
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 365, $this->source); })()), "translation", [], "any", false, false, false, 365), 'widget');
            yield "
                      </div>
                  </div>
                  ";
        }
        // line 369
        yield "                  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "variant", [], "any", true, true, false, 369)) {
            // line 370
            yield "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"control-label\">";
            // line 372
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.ab.variant"), "html", null, true);
            yield "</div>
                          ";
            // line 373
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 373, $this->source); })()), "variant", [], "any", false, false, false, 373), 'widget');
            yield "
                      </div>
                  </div>
                  ";
        }
        // line 377
        yield "                  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "contact", [], "any", true, true, false, 377)) {
            // line 378
            yield "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 380
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.contact"), "html", null, true);
            yield "</div>
                              ";
            // line 381
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 381, $this->source); })()), "contact", [], "any", false, false, false, 381), 'widget');
            yield "
                          </div>
                      </div>
                  ";
        }
        // line 385
        yield "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"input-group\">
                              <div class=\"input-group-addon\">";
        // line 389
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>         // line 390
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 390, $this->source); })()), "model" => "email", "query" => "customToggle=publicPreview"]);
        // line 394
        yield "</div>
                              <input id=\"content_preview_url\" data-route=\"email/preview\" onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly value=\"";
        // line 395
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 395, $this->source); })()));
        yield "\"/>
                              <span class=\"input-group-btn\">
                              <button id=\"content_preview_url_button\" class=\"btn btn-default btn-nospin\" onclick=\"window.open('";
        // line 397
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 397, $this->source); })()), "html", null, true);
        yield "', '_blank');\">
                                  <i class=\"ri-external-link-line\"></i>
                              </button>
                          </span>
                              <input type=\"hidden\" id=\"content_preview_settings_object_id\" value=\"";
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 401, $this->source); })()), "id", [], "any", false, false, false, 401), "html", null, true);
        yield "\">
                              <input type=\"hidden\" id=\"content_preview_settings_contact_id\" value=\"\">
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- email usages -->
          <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\" data-fetch-email-usages=\"";
        // line 410
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 410, $this->source); })()), "id", [], "any", false, false, false, 410), "html", null, true);
        yield "\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.usages"), "html", null, true);
        yield "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  <i class=\"fa fa-spinner fa-spin\"></i>
              </div>
          </div>

          <!-- activity feed -->";
        // line 420
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 420, $this->source); })())]);
        // line 423
        yield "</div>
      <!-- right section -->
      <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 425, $this->source); })()), "id", [], "any", false, false, false, 425));
        yield "\"/>
  </div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticEmail/Email/details.html.twig";
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
        return array (  708 => 425,  704 => 423,  702 => 420,  692 => 412,  687 => 410,  675 => 401,  668 => 397,  663 => 395,  660 => 394,  658 => 390,  657 => 389,  652 => 385,  645 => 381,  641 => 380,  637 => 378,  634 => 377,  627 => 373,  623 => 372,  619 => 370,  616 => 369,  609 => 365,  605 => 364,  601 => 362,  599 => 361,  593 => 358,  581 => 348,  575 => 345,  572 => 344,  570 => 343,  566 => 341,  559 => 337,  555 => 335,  553 => 334,  547 => 331,  542 => 328,  540 => 325,  539 => 324,  538 => 323,  530 => 316,  523 => 312,  519 => 310,  516 => 309,  509 => 305,  505 => 303,  503 => 302,  497 => 299,  489 => 294,  480 => 288,  469 => 280,  457 => 271,  448 => 264,  446 => 263,  445 => 262,  435 => 255,  427 => 250,  419 => 244,  416 => 243,  413 => 242,  411 => 241,  402 => 235,  397 => 233,  381 => 220,  376 => 218,  369 => 214,  364 => 212,  357 => 208,  352 => 206,  348 => 204,  342 => 201,  337 => 199,  333 => 197,  330 => 196,  324 => 193,  319 => 191,  315 => 189,  312 => 188,  306 => 185,  301 => 183,  297 => 181,  294 => 180,  288 => 177,  283 => 175,  279 => 173,  276 => 172,  270 => 169,  265 => 167,  261 => 165,  259 => 164,  254 => 162,  249 => 160,  245 => 158,  243 => 157,  231 => 146,  226 => 143,  224 => 142,  221 => 141,  218 => 140,  215 => 139,  210 => 136,  208 => 135,  205 => 134,  202 => 133,  200 => 132,  196 => 131,  192 => 130,  181 => 121,  174 => 120,  168 => 114,  167 => 110,  166 => 109,  165 => 108,  164 => 105,  163 => 104,  162 => 103,  161 => 101,  160 => 100,  159 => 98,  158 => 97,  157 => 96,  156 => 93,  155 => 92,  152 => 91,  145 => 90,  139 => 86,  136 => 85,  129 => 84,  118 => 5,  107 => 3,  103 => 1,  101 => 82,  98 => 77,  96 => 69,  95 => 65,  93 => 64,  91 => 57,  90 => 52,  87 => 50,  84 => 47,  82 => 46,  80 => 45,  78 => 39,  77 => 36,  75 => 35,  73 => 34,  71 => 32,  68 => 30,  66 => 29,  64 => 27,  62 => 26,  60 => 20,  59 => 19,  58 => 17,  56 => 15,  54 => 10,  53 => 9,  52 => 8,  51 => 7,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticEmail/Email/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\Email\\details.html.twig");
    }
}
