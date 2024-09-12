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

/* @MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig */
class __TwigTemplate_00a097ab87f893ecf2e73190caff7b0c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_config_coreconfig_widget' => [$this, 'block__config_coreconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_config_coreconfig_widget', $context, $blocks);
    }

    public function block__config_coreconfig_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["fields"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "children", [], "any", false, false, false, 2);
        // line 3
        $context["fieldKeys"] = twig_get_array_keys_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 3, $this->source); })()));
        // line 4
        echo "
";
        // line 5
        if ((twig_length_filter($this->env, twig_array_filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 5, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return twig_in_filter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 5, $this->source); })()), ["site_url", "webroot", "404_page", "cache_path", "log_path", "theme", "image_path", "last_shown_tab"]); })) > 0)) {
            // line 6
            echo "  <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.general"), "html", null, true);
            echo "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"row\">";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "site_url", [], "any", true, true, false, 12)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "site_url", [], "any", false, false, false, 12), 'row');
                echo "</div>";
            }
            // line 13
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "webroot", [], "any", true, true, false, 13)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "webroot", [], "any", false, false, false, 13), 'row');
                echo "</div>";
            }
            // line 14
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "404_page", [], "array", true, true, false, 14)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "404_page", [], "array", false, false, false, 14), 'row');
                echo "</div>";
            }
            // line 15
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cache_path", [], "any", true, true, false, 15)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "cache_path", [], "any", false, false, false, 15), 'row');
                echo "</div>";
            }
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "log_path", [], "any", true, true, false, 16)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "log_path", [], "any", false, false, false, 16), 'row');
                echo "</div>";
            }
            // line 17
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "theme", [], "any", true, true, false, 17)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "theme", [], "any", false, false, false, 17), 'row');
                echo "</div>";
            }
            // line 18
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image_path", [], "any", true, true, false, 18)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "image_path", [], "any", false, false, false, 18), 'row');
                echo "</div>";
            }
            // line 19
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "last_shown_tab", [], "any", true, true, false, 19)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "last_shown_tab", [], "any", false, false, false, 19), 'row');
            }
            // line 20
            echo "          </div>
      </div>
  </div>
";
        }
        // line 24
        echo "
";
        // line 25
        if ((twig_length_filter($this->env, twig_array_filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 25, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return twig_in_filter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 25, $this->source); })()), ["default_pagelist", "timezone", "locale", "date_format_full", "date_format_short", "date_format_dateonly", "date_format_timeonly"]); })) > 0)) {
            // line 26
            echo "  <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.defaults"), "html", null, true);
            echo "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"row\">";
            // line 32
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "default_pagelimit", [], "any", true, true, false, 32)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "default_pagelimit", [], "any", false, false, false, 32), 'row');
                echo "</div>";
            }
            // line 33
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "default_timezone", [], "any", true, true, false, 33)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "default_timezone", [], "any", false, false, false, 33), 'row');
                echo "</div>";
            }
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "locale", [], "any", true, true, false, 34)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "locale", [], "any", false, false, false, 34), 'row');
                echo "</div>";
            }
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cached_data_timeout", [], "any", true, true, false, 35)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "cached_data_timeout", [], "any", false, false, false, 35), 'row');
                echo "</div>";
            }
            // line 36
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "default_daterange_filter", [], "any", true, true, false, 36)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "default_daterange_filter", [], "any", false, false, false, 36), 'row');
                echo "</div>";
            }
            // line 37
            echo "          </div>

          <hr class=\"text-muted\" />

          <div class=\"row\">";
            // line 42
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_format_full", [], "any", true, true, false, 42)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "date_format_full", [], "any", false, false, false, 42), 'row');
                echo "</div>";
            }
            // line 43
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_format_short", [], "any", true, true, false, 43)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "date_format_short", [], "any", false, false, false, 43), 'row');
                echo "</div>";
            }
            // line 44
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_format_dateonly", [], "any", true, true, false, 44)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "date_format_dateonly", [], "any", false, false, false, 44), 'row');
                echo "</div>";
            }
            // line 45
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_format_timeonly", [], "any", true, true, false, 45)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "date_format_timeonly", [], "any", false, false, false, 45), 'row');
                echo "</div>";
            }
            // line 46
            echo "          </div>
      </div>
  </div>
";
        }
        // line 50
        echo "
";
        // line 51
        if ((twig_length_filter($this->env, twig_array_filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 51, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return twig_in_filter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 51, $this->source); })()), ["cors_restrict_domains"]); })) > 0)) {
            // line 52
            echo "  <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.cors"), "html", null, true);
            echo "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"row\">";
            // line 58
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cors_restrict_domains", [], "any", true, true, false, 58)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "cors_restrict_domains", [], "any", false, false, false, 58), 'row');
                echo "</div>";
            }
            // line 59
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "cors_valid_domains", [], "any", true, true, false, 59)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "cors_valid_domains", [], "any", false, false, false, 59), 'row');
                echo "</div>";
            }
            // line 60
            echo "          </div>
      </div>
  </div>
";
        }
        // line 64
        echo "
";
        // line 65
        if ((twig_length_filter($this->env, twig_array_filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 65, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return twig_in_filter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 65, $this->source); })()), ["trusted_hosts", "trusted_proxies", "ip_lookup_service", "do_not_track_ips", "do_not_track_bots", "transliterate_page_title"]); })) > 0)) {
            // line 66
            echo "  <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.misc"), "html", null, true);
            echo "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"row\">";
            // line 72
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "trusted_hosts", [], "any", true, true, false, 72)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "trusted_hosts", [], "any", false, false, false, 72), 'row');
                echo "</div>";
            }
            // line 73
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "trusted_proxies", [], "any", true, true, false, 73)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "trusted_proxies", [], "any", false, false, false, 73), 'row');
                echo "</div>";
            }
            // line 74
            echo "          </div>

          ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "trusted_hosts", [], "any", true, true, false, 76)) {
                echo "<hr class=\"text-muted\" />";
            }
            // line 77
            echo "
          <div class=\"row\">";
            // line 79
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ip_lookup_service", [], "any", true, true, false, 79)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "ip_lookup_service", [], "any", false, false, false, 79), 'row');
                echo "</div>";
            }
            // line 80
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ip_lookup_auth", [], "any", true, true, false, 80)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "ip_lookup_auth", [], "any", false, false, false, 80), 'row');
                echo "</div>";
            }
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ip_lookup_create_organization", [], "any", true, true, false, 81)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "ip_lookup_create_organization", [], "any", false, false, false, 81), 'row');
                echo "</div>";
            }
            // line 82
            echo "              <div id=\"ip_lookup_config_container\">";
            // line 83
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ip_lookup_config", [], "any", true, true, false, 83)) {
                echo "<div class=\"col-md-12\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "ip_lookup_config", [], "any", false, false, false, 83), 'row');
                echo "</div>";
            }
            // line 84
            echo "              </div>
          </div>
          <div class=\"row\">
              <div class=\"col-sm-12\">
                  <div class=\"small text-center\" id=\"ip_lookup_attribution\">";
            // line 88
            echo (isset($context["ipLookupAttribution"]) || array_key_exists("ipLookupAttribution", $context) ? $context["ipLookupAttribution"] : (function () { throw new RuntimeError('Variable "ipLookupAttribution" does not exist.', 88, $this->source); })());
            echo "</div>
              </div>
          </div>

          ";
            // line 92
            if ((twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "do_not_track_ips", [], "any", true, true, false, 92) || twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "do_not_track_bots", [], "any", true, true, false, 92))) {
                // line 93
                echo "              <hr class=\"text-muted\" />
              <div class=\"row\">";
                // line 95
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "do_not_track_ips", [], "any", true, true, false, 95)) {
                    echo "<div class=\"col-md-6\">";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "do_not_track_ips", [], "any", false, false, false, 95), 'row');
                    echo "</div>";
                }
                // line 96
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "do_not_track_bots", [], "any", true, true, false, 96)) {
                    echo "<div class=\"col-md-6\">";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "do_not_track_bots", [], "any", false, false, false, 96), 'row');
                    echo "</div>";
                }
                // line 97
                echo "              </div>
          ";
            }
            // line 99
            echo "
          ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "max_entity_lock_time", [], "any", true, true, false, 100)) {
                // line 101
                echo "            <hr class=\"text-muted\" />
            <div class=\"row\">";
                // line 103
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "max_entity_lock_time", [], "any", true, true, false, 103)) {
                    echo "<div class=\"col-md-6\">";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "max_entity_lock_time", [], "any", false, false, false, 103), 'row');
                    echo "</div>";
                }
                // line 104
                echo "            </div>
          ";
            }
            // line 107
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shortener_service", [], "any", true, true, false, 107)) {
                // line 108
                echo "              <hr class=\"text-muted\" />
              <div class=\"row\">
                  <div class=\"col-md-6\">
                      ";
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "shortener_service", [], "any", false, false, false, 111), 'label');
                echo "
                      ";
                // line 112
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "shortener_service", [], "any", false, false, false, 112), "vars", [], "any", false, false, false, 112), "choices", [], "any", false, false, false, 112)) > 0)) {
                    // line 113
                    echo "                          ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "shortener_service", [], "any", false, false, false, 113), 'widget');
                    echo "
                      ";
                } else {
                    // line 115
                    echo "                          <div class=\"row\">
                              <div class=\"col-xs-12\">
                                  ";
                    // line 117
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.form.shortener.empty"), "html", null, true);
                    echo "
                              </div>
                          </div>
                      ";
                }
                // line 121
                echo "                  </div>
                  ";
                // line 122
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "shortener_service", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "choices", [], "any", false, false, false, 122)) > 0)) {
                    // line 123
                    echo "                      <div class=\"col-md-3\">";
                    // line 124
                    if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shortener_email_enable", [], "any", true, true, false, 124)) {
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "shortener_email_enable", [], "any", false, false, false, 124), 'row');
                    }
                    // line 125
                    echo "                      </div>
                      <div class=\"col-md-3\">";
                    // line 127
                    if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shortener_sms_enable", [], "any", true, true, false, 127)) {
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "shortener_sms_enable", [], "any", false, false, false, 127), 'row');
                    }
                    // line 128
                    echo "                      </div>
                  ";
                }
                // line 130
                echo "              </div>
          ";
            }
            // line 132
            echo "
          ";
            // line 133
            if ((twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 133, $this->source); })()), "transliterate_page_title", [], "any", false, false, false, 133) || twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "load_froala_assets", [], "any", true, true, false, 133))) {
                // line 134
                echo "            <hr class=\"text-muted\" />
            <div class=\"row\">";
                // line 136
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "transliterate_page_title", [], "any", true, true, false, 136)) {
                    echo "<div class=\"col-md-6\">";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "transliterate_page_title", [], "any", false, false, false, 136), 'row');
                    echo "</div>";
                }
                // line 137
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "load_froala_assets", [], "any", true, true, false, 137)) {
                    // line 138
                    echo "                    <div class=\"col-md-6\">
                        ";
                    // line 139
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "load_froala_assets", [], "any", false, false, false, 139), 'row');
                    echo "
                        <div class=\"alert alert-danger\" role=\"alert\">";
                    // line 140
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.load.froala.assets.warning"), "html", null, true);
                    echo "</div>
                    </div>
                ";
                }
                // line 143
                echo "            </div>
          ";
            }
            // line 145
            echo "      </div>
  </div>
";
        }
        // line 148
        echo "
";
        // line 149
        if ((twig_length_filter($this->env, twig_array_filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 149, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return twig_in_filter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 149, $this->source); })()), ["headers_sts"]); })) > 0)) {
            // line 150
            echo "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.response.headers"), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"row\">";
            // line 156
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "headers_sts", [], "any", true, true, false, 156)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), "headers_sts", [], "any", false, false, false, 156), 'row');
                echo "</div>";
            }
            // line 157
            echo "            </div>
            <div class=\"row\">";
            // line 159
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "headers_sts_subdomains", [], "any", true, true, false, 159)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "headers_sts_subdomains", [], "any", false, false, false, 159), 'row');
                echo "</div>";
            }
            // line 160
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "headers_sts_preload", [], "any", true, true, false, 160)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "headers_sts_preload", [], "any", false, false, false, 160), 'row');
                echo "</div>";
            }
            // line 161
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "headers_sts_expire_time", [], "any", true, true, false, 161)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), "headers_sts_expire_time", [], "any", false, false, false, 161), 'row');
                echo "</div>";
            }
            // line 162
            echo "            </div>
        </div>
    </div>
";
        }
        // line 166
        echo "
";
        // line 167
        if ((twig_length_filter($this->env, twig_array_filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 167, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return twig_in_filter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 167, $this->source); })()), ["update_stability", "composer_updates"]); })) > 0)) {
            // line 168
            echo "  <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.header.update"), "html", null, true);
            echo "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"row\">";
            // line 174
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "update_stability", [], "any", true, true, false, 174)) {
                echo "<div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "update_stability", [], "any", false, false, false, 174), 'row');
                echo "</div>";
            }
            // line 175
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "composer_updates", [], "any", true, true, false, 175)) {
                // line 176
                echo "                <div class=\"col-md-6\">
                    ";
                // line 177
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "composer_updates", [], "any", false, false, false, 177), 'row');
                echo "
                    <div class=\"alert alert-danger\" role=\"alert\">
                        ";
                // line 179
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.config.form.update.composer.warning", ["%url_start%" => "<a href=\"https://mau.tc/switch-to-composer\" target=\"_blank\" style=\"color: red; text-decoration: underline\">", "%url_end%" => "</a>"]);
                // line 182
                echo "
                    </div>
                </div>
              ";
            }
            // line 186
            echo "          </div>
      </div>
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  527 => 186,  521 => 182,  519 => 179,  514 => 177,  511 => 176,  509 => 175,  503 => 174,  497 => 170,  493 => 168,  491 => 167,  488 => 166,  482 => 162,  476 => 161,  470 => 160,  464 => 159,  461 => 157,  455 => 156,  449 => 152,  445 => 150,  443 => 149,  440 => 148,  435 => 145,  431 => 143,  425 => 140,  421 => 139,  418 => 138,  416 => 137,  410 => 136,  407 => 134,  405 => 133,  402 => 132,  398 => 130,  394 => 128,  390 => 127,  387 => 125,  383 => 124,  381 => 123,  379 => 122,  376 => 121,  369 => 117,  365 => 115,  359 => 113,  357 => 112,  353 => 111,  348 => 108,  346 => 107,  342 => 104,  336 => 103,  333 => 101,  331 => 100,  328 => 99,  324 => 97,  318 => 96,  312 => 95,  309 => 93,  307 => 92,  300 => 88,  294 => 84,  288 => 83,  286 => 82,  280 => 81,  274 => 80,  268 => 79,  265 => 77,  261 => 76,  257 => 74,  251 => 73,  245 => 72,  239 => 68,  235 => 66,  233 => 65,  230 => 64,  224 => 60,  218 => 59,  212 => 58,  206 => 54,  202 => 52,  200 => 51,  197 => 50,  191 => 46,  185 => 45,  179 => 44,  173 => 43,  167 => 42,  161 => 37,  155 => 36,  149 => 35,  143 => 34,  137 => 33,  131 => 32,  125 => 28,  121 => 26,  119 => 25,  116 => 24,  110 => 20,  106 => 19,  100 => 18,  94 => 17,  88 => 16,  82 => 15,  76 => 14,  70 => 13,  64 => 12,  58 => 8,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\FormTheme\\Config\\_config_coreconfig_widget.html.twig");
    }
}
