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

/* @MauticEmail/Email/details.html.twig */
class __TwigTemplate_4003e8a39ae60230913844552a25064f extends Template
{
    private $source;
    private $macros = [];

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

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 1, $this->source); })())) ? ("@MauticCore/Default/raw_output.html.twig") : ("@MauticCore/Default/content.html.twig")), "@MauticEmail/Email/details.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        $context["variantContent"] = twig_include($this->env, $context, "@MauticCore/Variant/index.html.twig", ["activeEntity" =>         // line 8
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 8, $this->source); })()), "variants" =>         // line 9
(isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 9, $this->source); })()), "abTestResults" =>         // line 10
(isset($context["abTestResults"]) || array_key_exists("abTestResults", $context) ? $context["abTestResults"] : (function () { throw new RuntimeError('Variable "abTestResults" does not exist.', 10, $this->source); })()), "model" => "email", "actionRoute" => "mautic_email_action"]);
        // line 15
        $context["showVariants"] = (array_key_exists("variantContent", $context) &&  !twig_test_empty(twig_trim_filter((isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 15, $this->source); })()))));
        // line 17
        $context["translationContent"] = twig_include($this->env, $context, "@MauticCore/Translation/index.html.twig", ["activeEntity" =>         // line 19
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 19, $this->source); })()), "translations" =>         // line 20
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 20, $this->source); })()), "model" => "email", "actionRoute" => "mautic_email_action"]);
        // line 26
        $context["showTranslations"] =  !twig_test_empty(twig_trim_filter((isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 26, $this->source); })())));
        // line 27
        $context["emailType"] = twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 27, $this->source); })()), "emailType", [], "any", false, false, false, 27);
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
                $context["sendButton"] = ["attr" => ["data-toggle" => "ajax", "href" => ((twig_get_attribute($this->env, $this->source,                 // line 39
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 39, $this->source); })()), "isBackgroundSending", [], "method", false, false, false, 39)) ? ("javascript:void(0);") : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "send", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 39, $this->source); })()), "getId", [], "method", false, false, false, 39)])))], "iconClass" => "fa fa-send-o", "btnText" => "mautic.email.send", "primary" => true];
                // line 45
                if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 45, $this->source); })()), "isBackgroundSending", [], "method", false, false, false, 45)) {
                    // line 46
                    $context["sendButton"] = twig_array_merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 46, $this->source); })()), ["tooltip" => "mautic.email.send.disabled"]);
                    // line 47
                    $context["sendButton"] = twig_array_merge((isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 47, $this->source); })()), ["attr" => ["disabled" => true]]);
                }
                // line 50
                $context["customButtons"] = twig_array_merge((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 50, $this->source); })()), [(isset($context["sendButton"]) || array_key_exists("sendButton", $context) ? $context["sendButton"] : (function () { throw new RuntimeError('Variable "sendButton" does not exist.', 50, $this->source); })())]);
            }
            // line 52
            $context["sendExampleButton"] = ["attr" => ["class" => "btn btn-default btn-nospin", "data-toggle" => "ajaxmodal", "data-target" => "#MauticSharedModal", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "sendExample", "objectId" => twig_get_attribute($this->env, $this->source,             // line 57
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 57, $this->source); })()), "getId", [], "method", false, false, false, 57)]), "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send.example")], "iconClass" => "ri-mail-send-line", "btnText" => "mautic.email.send.example", "primary" => true];
            // line 64
            $context["customButtons"] = twig_array_merge((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 64, $this->source); })()), [(isset($context["sendExampleButton"]) || array_key_exists("sendExampleButton", $context) ? $context["sendExampleButton"] : (function () { throw new RuntimeError('Variable "sendExampleButton" does not exist.', 64, $this->source); })())]);
            // line 65
            $context["heatmapButton"] = ["attr" => ["class" => "btn btn-default btn-nospin", "data-toggle" => "email-heatmap", "data-email" => twig_get_attribute($this->env, $this->source,             // line 69
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 69, $this->source); })()), "getId", [], "method", false, false, false, 69), "data-target" => "#MauticSharedModal", "href" => "#", "data-header" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.heatmap.click_heatmap")], "iconClass" => "ri-fire-line", "btnText" => "mautic.email.heatmap.click_heatmap"];
            // line 77
            $context["customButtons"] = twig_array_merge((isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 77, $this->source); })()), [(isset($context["heatmapButton"]) || array_key_exists("heatmapButton", $context) ? $context["heatmapButton"] : (function () { throw new RuntimeError('Variable "heatmapButton" does not exist.', 77, $this->source); })())]);
        }
        // line 82
        $context["allowAbTest"] = (((twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 82, $this->source); })()), "isTranslation", [true], "method", false, false, false, 82) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 82, $this->source); })()), "parent", [], "array", false, false, false, 82), "isVariant", [true], "method", false, false, false, 82))) ? (false) : (true));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "email";
    }

    // line 84
    public function block_publishStatus($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo "  ";
        if ( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 85, $this->source); })())) {
            // line 86
            echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_badge.html.twig", ["entity" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 86, $this->source); })())]);
        }
    }

    // line 90
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        echo "    ";
        if ( !(isset($context["isEmbedded"]) || array_key_exists("isEmbedded", $context) ? $context["isEmbedded"] : (function () { throw new RuntimeError('Variable "isEmbedded" does not exist.', 91, $this->source); })())) {
            // line 92
            echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>             // line 93
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 93, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,             // line 96
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 96, $this->source); })()), "email:emails:editown", [], "array", false, false, false, 96), twig_get_attribute($this->env, $this->source,             // line 97
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 97, $this->source); })()), "email:emails:editother", [], "array", false, false, false, 97), twig_get_attribute($this->env, $this->source,             // line 98
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 98, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 98)), "clone" => twig_get_attribute($this->env, $this->source,             // line 100
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 100, $this->source); })()), "email:emails:create", [], "array", false, false, false, 100), "abtest" => (            // line 101
(isset($context["allowAbTest"]) || array_key_exists("allowAbTest", $context) ? $context["allowAbTest"] : (function () { throw new RuntimeError('Variable "allowAbTest" does not exist.', 101, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 101, $this->source); })()), "email:emails:create", [], "array", false, false, false, 101)), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,             // line 103
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 103, $this->source); })()), "email:emails:deleteown", [], "array", false, false, false, 103), twig_get_attribute($this->env, $this->source,             // line 104
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 104, $this->source); })()), "email:emails:deleteother", [], "array", false, false, false, 104), twig_get_attribute($this->env, $this->source,             // line 105
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 105, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 105)), "close" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,             // line 108
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 108, $this->source); })()), "email:emails:viewown", [], "array", false, false, false, 108), twig_get_attribute($this->env, $this->source,             // line 109
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 109, $this->source); })()), "email:emails:viewother", [], "array", false, false, false, 109), twig_get_attribute($this->env, $this->source,             // line 110
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 110, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 110))], "routeBase" => "email", "customButtons" =>             // line 114
(isset($context["customButtons"]) || array_key_exists("customButtons", $context) ? $context["customButtons"] : (function () { throw new RuntimeError('Variable "customButtons" does not exist.', 114, $this->source); })())]);
        }
    }

    // line 120
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "  <!-- start: box layout -->
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 130, $this->source); })()), "subject", [], "any", false, false, false, 130), "html", null, true);
        echo "</div>
                          <div class=\"text-muted\">";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["emailPreview"]) || array_key_exists("emailPreview", $context) ? $context["emailPreview"] : (function () { throw new RuntimeError('Variable "emailPreview" does not exist.', 131, $this->source); })()), "html", null, true);
        echo "</div>
                          ";
        // line 132
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 132, $this->source); })()), "isVariant", [true], "method", false, false, false, 132)) {
            // line 133
            echo "                            <div class=\"small\">
                              <a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 134, $this->source); })()), "parent", [], "any", false, false, false, 134), "id", [], "any", false, false, false, 134)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variant_of", ["%parent%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["variants"]) || array_key_exists("variants", $context) ? $context["variants"] : (function () { throw new RuntimeError('Variable "variants" does not exist.', 135, $this->source); })()), "parent", [], "any", false, false, false, 135), "name", [], "any", false, false, false, 135)]), "html", null, true);
            // line 136
            echo "</a>
                            </div>
                          ";
        }
        // line 139
        echo "                          ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 139, $this->source); })()), "isTranslation", [true], "method", false, false, false, 139)) {
            // line 140
            echo "                            <div class=\"small\">
                              <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 141, $this->source); })()), "parent", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translation_of", ["%parent%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 142, $this->source); })()), "parent", [], "any", false, false, false, 142), "name", [], "any", false, false, false, 142)]), "html", null, true);
            // line 143
            echo "</a>
                            </div>
                          ";
        }
        // line 146
        echo "                      </div>
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
        echo twig_include($this->env, $context, "@MauticCore/Helper/details.html.twig", ["entity" => (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 157, $this->source); })())]);
        // line 158
        echo "<tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.theme"), "html", null, true);
        echo "</span>
                                  </td>
                                  <td>";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 162, $this->source); })()), "template", [], "any", false, false, false, 162), "html", null, true);
        echo "</td>
                              </tr>
                              ";
        // line 164
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 164, $this->source); })()), "fromName", [], "any", false, false, false, 164)) {
            // line 165
            echo "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 167
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.from_name"), "html", null, true);
            echo "</span>
                                      </td>
                                      <td>";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 169, $this->source); })()), "fromName", [], "any", false, false, false, 169), "html", null, true);
            echo "</td>
                                  </tr>
                              ";
        }
        // line 172
        echo "                              ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 172, $this->source); })()), "fromAddress", [], "any", false, false, false, 172)) {
            // line 173
            echo "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 175
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.from_email"), "html", null, true);
            echo "</span>
                                      </td>
                                      <td>";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 177, $this->source); })()), "fromAddress", [], "any", false, false, false, 177), "html", null, true);
            echo "</td>
                                  </tr>
                              ";
        }
        // line 180
        echo "                              ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 180, $this->source); })()), "replyToAddress", [], "any", false, false, false, 180)) {
            // line 181
            echo "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 183
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.reply_to_email"), "html", null, true);
            echo "</span>
                                      </td>
                                      <td>";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 185, $this->source); })()), "replyToAddress", [], "any", false, false, false, 185), "html", null, true);
            echo "</td>
                                  </tr>
                              ";
        }
        // line 188
        echo "                              ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 188, $this->source); })()), "bccAddress", [], "any", false, false, false, 188)) {
            // line 189
            echo "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 191
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.bcc"), "html", null, true);
            echo "</span>
                                      </td>
                                      <td>";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 193, $this->source); })()), "bccAddress", [], "any", false, false, false, 193), "html", null, true);
            echo "</td>
                                  </tr>
                              ";
        }
        // line 196
        echo "                              ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 196, $this->source); })()), "headers", [], "any", false, false, false, 196)) {
            // line 197
            echo "                                  <tr>
                                      <td width=\"20%\">
                                          <span class=\"fw-b\">";
            // line 199
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.custom_headers"), "html", null, true);
            echo "</span>
                                      </td>
                                      <td>";
            // line 201
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\FormatterExtension']->simpleArrayToHtml(twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 201, $this->source); })()), "headers", [], "any", false, false, false, 201));
            echo "</td>
                                  </tr>
                              ";
        }
        // line 204
        echo "                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.sent"), "html", null, true);
        echo "</span>
                                  </td>
                                  <td>";
        // line 208
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 208, $this->source); })()), "sentCount", [], "any", false, false, false, 208), "html", null, true);
        echo "</td>
                              </tr>
                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.delivered"), "html", null, true);
        echo "</span>
                                  </td>
                                  <td data-email-stat-delivered-for=\"";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 214, $this->source); })()), "id", [], "any", false, false, false, 214), "html", null, true);
        echo "\"><div class=\"spinner\"><i class=\"fa fa-spin fa-spinner\"></i></div></td>
                              </tr>
                              <tr>
                                  <td width=\"20%\">
                                      <span class=\"fw-b\">";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.read"), "html", null, true);
        echo "</span>
                                  </td>
                                  <td>";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 220, $this->source); })()), "readCount", [], "any", false, false, false, 220), "html", null, true);
        echo "</td>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\" data-target=\"#email-details\">
                      <span class=\"caret\"></span> ";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.details"), "html", null, true);
        echo "
                    </a>
                </span>
              </div>
              <!--/ email detail collapseable toggler -->

              ";
        // line 241
        $context["isVariant"] = ((((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 241, $this->source); })()) || (isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 241, $this->source); })()))) ?: (0));
        // line 242
        echo "              ";
        $context["dateFrom"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 242, $this->source); })()), "children", [], "any", false, false, false, 242), "date_from", [], "array", false, false, false, 242), "vars", [], "any", false, false, false, 242), "data", [], "array", false, false, false, 242);
        // line 243
        echo "              ";
        $context["dateTo"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 243, $this->source); })()), "children", [], "any", false, false, false, 243), "date_to", [], "array", false, false, false, 243), "vars", [], "any", false, false, false, 243), "data", [], "array", false, false, false, 243);
        // line 244
        echo "
              <div class=\"stats-menu pl-md mt-lg\">
                  <!-- tabs controls -->
                  <ul class=\"nav nav-tabs\">
                      <li class=\"active\">
                          <a href=\"#stats-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.thead.stats"), "html", null, true);
        echo "
                          </a>
                      </li>
                      <li>
                          <a href=\"#reads-map-container\" role=\"tab\" data-toggle=\"tab\" data-load=\"map\">
                              ";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.thead.maps"), "html", null, true);
        echo "
                          </a>
                      </li>
                  </ul>
                  <!--/ tabs controls -->

                  <div class=\"date-range\">
                      ";
        // line 262
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["dateRangeForm" =>         // line 263
(isset($context["dateRangeForm"]) || array_key_exists("dateRangeForm", $context) ? $context["dateRangeForm"] : (function () { throw new RuntimeError('Variable "dateRangeForm" does not exist.', 263, $this->source); })())]);
        // line 264
        echo "
                  </div>
              </div>

              <div class=\"stats-menu__content tab-content bg-white pa-md mb-lg shd-sm\">
                  <div class=\"tab-pane active bdr-w-0\" id=\"stats-container\">
                      <div id=\"emailGraphStats\"
                           data-graph-url=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_graph_stats", ["objectId" => twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 271, $this->source); })()), "id", [], "any", false, false, false, 271), "isVariant" => (isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 271, $this->source); })()), "dateFrom" => twig_date_format_filter($this->env, (isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 271, $this->source); })()), "Y-m-d"), "dateTo" => twig_date_format_filter($this->env, (isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 271, $this->source); })()), "Y-m-d")]), "html", null, true);
        echo "\"
                      >
                          <div class=\"spinner\">
                              <i class=\"fa fa-spin fa-spinner\"></i>
                          </div>
                      </div>

                  </div>
                  <div class=\"tab-pane bdr-w-0\" id=\"reads-map-container\"
                       data-map-url=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_map_stats", ["objectId" => twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 280, $this->source); })()), "id", [], "any", false, false, false, 280), "isVariant" => (isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 280, $this->source); })()), "dateFrom" => twig_date_format_filter($this->env, (isset($context["dateFrom"]) || array_key_exists("dateFrom", $context) ? $context["dateFrom"] : (function () { throw new RuntimeError('Variable "dateFrom" does not exist.', 280, $this->source); })()), "Y-m-d"), "dateTo" => twig_date_format_filter($this->env, (isset($context["dateTo"]) || array_key_exists("dateTo", $context) ? $context["dateTo"] : (function () { throw new RuntimeError('Variable "dateTo" does not exist.', 280, $this->source); })()), "Y-m-d")]), "html", null, true);
        echo "\"
                  >
                      <div class=\"spinner\">
                          <i class=\"fa fa-spin fa-spinner\"></i>
                      </div>
                  </div>
              </div>

              ";
        // line 288
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("details.stats.graph.below", $context);
        echo "

              <!-- tabs controls -->
              <ul class=\"nav nav-tabs pr-md pl-md\">
                  <li class=\"active\">
                      <a href=\"#clicks-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.trackable.click_counts"), "html", null, true);
        echo "
                      </a>
                  </li>
                  <li>
                      <a href=\"#contacts-container\" role=\"tab\" data-toggle=\"tab\">
                          ";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.associated.contacts"), "html", null, true);
        echo "
                      </a>
                  </li>
                  ";
        // line 302
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 302, $this->source); })())) {
            // line 303
            echo "                      <li>
                          <a href=\"#variants-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
            // line 305
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.variants"), "html", null, true);
            echo "
                          </a>
                      </li>
                  ";
        }
        // line 309
        echo "                  ";
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 309, $this->source); })())) {
            // line 310
            echo "                      <li>
                          <a href=\"#translation-container\" role=\"tab\" data-toggle=\"tab\">
                              ";
            // line 312
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.translations"), "html", null, true);
            echo "
                          </a>
                      </li>
                  ";
        }
        // line 316
        echo "              </ul>
              <!--/ tabs controls -->
          </div>

          <!-- start: tab-content -->
          <div class=\"tab-content pa-md\">
              <div class=\"tab-pane active bdr-w-0\" id=\"clicks-container\">";
        // line 323
        echo twig_include($this->env, $context, "@MauticPage/Trackable/click_counts.html.twig", ["trackables" =>         // line 324
(isset($context["trackables"]) || array_key_exists("trackables", $context) ? $context["trackables"] : (function () { throw new RuntimeError('Variable "trackables" does not exist.', 324, $this->source); })()), "entity" =>         // line 325
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 325, $this->source); })()), "channel" => "email"]);
        // line 328
        echo "</div>

              <div class=\"tab-pane bdr-w-0 page-list\" id=\"contacts-container\">
                  ";
        // line 331
        echo (isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 331, $this->source); })());
        echo "
              </div>

              ";
        // line 334
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 334, $this->source); })())) {
            // line 335
            echo "                  <!-- #variants-container -->
                  <div class=\"tab-pane bdr-w-0\" id=\"variants-container\">
                      ";
            // line 337
            echo (isset($context["variantContent"]) || array_key_exists("variantContent", $context) ? $context["variantContent"] : (function () { throw new RuntimeError('Variable "variantContent" does not exist.', 337, $this->source); })());
            echo "
                  </div>
                  <!--/ #variants-container -->
              ";
        }
        // line 341
        echo "
              <!-- #translation-container -->
              ";
        // line 343
        if ((isset($context["showTranslations"]) || array_key_exists("showTranslations", $context) ? $context["showTranslations"] : (function () { throw new RuntimeError('Variable "showTranslations" does not exist.', 343, $this->source); })())) {
            // line 344
            echo "                  <div class=\"tab-pane bdr-w-0\" id=\"translation-container\">
                      ";
            // line 345
            echo (isset($context["translationContent"]) || array_key_exists("translationContent", $context) ? $context["translationContent"] : (function () { throw new RuntimeError('Variable "translationContent" does not exist.', 345, $this->source); })());
            echo "
                  </div>
              ";
        }
        // line 348
        echo "              <!--/ #translation-container -->
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.url"), "html", null, true);
        echo "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  ";
        // line 361
        if (twig_get_attribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "translation", [], "any", true, true, false, 361)) {
            // line 362
            echo "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"control-label\">";
            // line 364
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.translation"), "html", null, true);
            echo "</div>
                          ";
            // line 365
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 365, $this->source); })()), "translation", [], "any", false, false, false, 365), 'widget');
            echo "
                      </div>
                  </div>
                  ";
        }
        // line 369
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "variant", [], "any", true, true, false, 369)) {
            // line 370
            echo "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"control-label\">";
            // line 372
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.ab.variant"), "html", null, true);
            echo "</div>
                          ";
            // line 373
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 373, $this->source); })()), "variant", [], "any", false, false, false, 373), 'widget');
            echo "
                      </div>
                  </div>
                  ";
        }
        // line 377
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["previewSettingsForm"] ?? null), "contact", [], "any", true, true, false, 377)) {
            // line 378
            echo "                      <div class=\"row\">
                          <div class=\"form-group col-xs-12 \">
                              <div class=\"control-label\">";
            // line 380
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.preview.show.contact"), "html", null, true);
            echo "</div>
                              ";
            // line 381
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["previewSettingsForm"]) || array_key_exists("previewSettingsForm", $context) ? $context["previewSettingsForm"] : (function () { throw new RuntimeError('Variable "previewSettingsForm" does not exist.', 381, $this->source); })()), "contact", [], "any", false, false, false, 381), 'widget');
            echo "
                          </div>
                      </div>
                  ";
        }
        // line 385
        echo "                  <div class=\"row\">
                      <div class=\"form-group col-xs-12 \">
                          <div class=\"input-group\">
                              <div class=\"input-group-addon\">";
        // line 389
        echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>         // line 390
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 390, $this->source); })()), "model" => "email", "query" => "customToggle=publicPreview"]);
        // line 394
        echo "</div>
                              <input id=\"content_preview_url\" data-route=\"email/preview\" onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly value=\"";
        // line 395
        echo twig_escape_filter($this->env, (isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 395, $this->source); })()));
        echo "\"/>
                              <span class=\"input-group-btn\">
                              <button id=\"content_preview_url_button\" class=\"btn btn-default btn-nospin\" onclick=\"window.open('";
        // line 397
        echo twig_escape_filter($this->env, (isset($context["previewUrl"]) || array_key_exists("previewUrl", $context) ? $context["previewUrl"] : (function () { throw new RuntimeError('Variable "previewUrl" does not exist.', 397, $this->source); })()), "html", null, true);
        echo "', '_blank');\">
                                  <i class=\"ri-external-link-line\"></i>
                              </button>
                          </span>
                              <input type=\"hidden\" id=\"content_preview_settings_object_id\" value=\"";
        // line 401
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 401, $this->source); })()), "id", [], "any", false, false, false, 401), "html", null, true);
        echo "\">
                              <input type=\"hidden\" id=\"content_preview_settings_contact_id\" value=\"\">
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- email usages -->
          <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\" data-fetch-email-usages=\"";
        // line 410
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 410, $this->source); })()), "id", [], "any", false, false, false, 410), "html", null, true);
        echo "\">
              <div class=\"panel-heading\">
                  <div class=\"panel-title\">";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.usages"), "html", null, true);
        echo "</div>
              </div>
              <div class=\"panel-body pt-xs\">
                  <i class=\"fa fa-spinner fa-spin\"></i>
              </div>
          </div>

          <!-- activity feed -->";
        // line 420
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" => (isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 420, $this->source); })())]);
        // line 423
        echo "</div>
      <!-- right section -->
      <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 425
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 425, $this->source); })()), "id", [], "any", false, false, false, 425));
        echo "\"/>
  </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/Email/details.html.twig";
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
        return array (  684 => 425,  680 => 423,  678 => 420,  668 => 412,  663 => 410,  651 => 401,  644 => 397,  639 => 395,  636 => 394,  634 => 390,  633 => 389,  628 => 385,  621 => 381,  617 => 380,  613 => 378,  610 => 377,  603 => 373,  599 => 372,  595 => 370,  592 => 369,  585 => 365,  581 => 364,  577 => 362,  575 => 361,  569 => 358,  557 => 348,  551 => 345,  548 => 344,  546 => 343,  542 => 341,  535 => 337,  531 => 335,  529 => 334,  523 => 331,  518 => 328,  516 => 325,  515 => 324,  514 => 323,  506 => 316,  499 => 312,  495 => 310,  492 => 309,  485 => 305,  481 => 303,  479 => 302,  473 => 299,  465 => 294,  456 => 288,  445 => 280,  433 => 271,  424 => 264,  422 => 263,  421 => 262,  411 => 255,  403 => 250,  395 => 244,  392 => 243,  389 => 242,  387 => 241,  378 => 235,  373 => 233,  357 => 220,  352 => 218,  345 => 214,  340 => 212,  333 => 208,  328 => 206,  324 => 204,  318 => 201,  313 => 199,  309 => 197,  306 => 196,  300 => 193,  295 => 191,  291 => 189,  288 => 188,  282 => 185,  277 => 183,  273 => 181,  270 => 180,  264 => 177,  259 => 175,  255 => 173,  252 => 172,  246 => 169,  241 => 167,  237 => 165,  235 => 164,  230 => 162,  225 => 160,  221 => 158,  219 => 157,  207 => 146,  202 => 143,  200 => 142,  197 => 141,  194 => 140,  191 => 139,  186 => 136,  184 => 135,  181 => 134,  178 => 133,  176 => 132,  172 => 131,  168 => 130,  157 => 121,  153 => 120,  148 => 114,  147 => 110,  146 => 109,  145 => 108,  144 => 105,  143 => 104,  142 => 103,  141 => 101,  140 => 100,  139 => 98,  138 => 97,  137 => 96,  136 => 93,  135 => 92,  132 => 91,  128 => 90,  123 => 86,  120 => 85,  116 => 84,  109 => 5,  102 => 3,  98 => 1,  96 => 82,  93 => 77,  91 => 69,  90 => 65,  88 => 64,  86 => 57,  85 => 52,  82 => 50,  79 => 47,  77 => 46,  75 => 45,  73 => 39,  72 => 36,  70 => 35,  68 => 34,  66 => 32,  63 => 30,  61 => 29,  59 => 27,  57 => 26,  55 => 20,  54 => 19,  53 => 17,  51 => 15,  49 => 10,  48 => 9,  47 => 8,  46 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/Email/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\Email\\details.html.twig");
    }
}
