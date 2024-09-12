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

/* @MauticLead/Lead/form.html.twig */
class __TwigTemplate_ae63db7e85bf3f95801a10e2acb63f98 extends Template
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
        // line 7
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Lead/form.html.twig", 7);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "lead";
    }

    // line 11
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,             // line 14
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 14, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 14))]), "html", null, true);
            // line 15
            echo "
  ";
        } else {
            // line 17
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.new"), "html", null, true);
            echo "
  ";
        }
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "  ";
        $context["groups"] = twig_sort_filter($this->env, twig_get_array_keys_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 22, $this->source); })())));
        // line 23
        echo "  ";
        $context["img"] = $this->extensions['Mautic\LeadBundle\Twig\Extension\LeadExtension']->getAvatar((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 23, $this->source); })()));
        // line 24
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- step container -->
      <div class=\"col-md-3 height-auto\">
          <div class=\"pr-lg pl-lg pt-md pb-md\">
              <div class=\"media\">
                  <div class=\"media-body\">
                      <img class=\"img-rounded img-bordered img-responsive media-object contact-avatar\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\" alt=\"\">
                  </div>
              </div>

              <div class=\"row mt-xs\">
                  <div class=\"col-sm-12\">
                      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "preferred_profile_image", [], "any", false, false, false, 38), 'label');
        echo "
                      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "preferred_profile_image", [], "any", false, false, false, 39), 'widget');
        echo "
                  </div>
                  <div class=\"col-sm-12 ";
        // line 41
        if ((false == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "custom_avatar", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "valid", [], "any", false, false, false, 41))) {
            echo "has-error";
        }
        echo "\"
                       id=\"customAvatarContainer\"
                       style=\"";
        // line 43
        if (("custom" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "preferred_profile_image", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "data", [], "any", false, false, false, 43))) {
            echo "display: none;";
        }
        echo "\">
                      ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "custom_avatar", [], "any", false, false, false, 44), 'widget');
        echo "
                      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "custom_avatar", [], "any", false, false, false, 45), 'errors');
        echo "
                  </div>
              </div>

              <hr/>

              <ul class=\"list-group list-group-tabs\">
                  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 52, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["g"]) {
            // line 53
            echo "                      ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 53, $this->source); })()), $context["g"], [], "array", false, false, false, 53))) {
                // line 54
                echo "                          <li class=\"list-group-item ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 54)) {
                    echo "active";
                }
                echo "\">
                              <a href=\"#";
                // line 55
                echo twig_escape_filter($this->env, $context["g"], "html", null, true);
                echo "\" class=\"steps\" data-toggle=\"tab\">
                                  ";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["g"])), "html", null, true);
                echo "
                              </a>
                          </li>
                      ";
            }
            // line 60
            echo "                  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "              </ul>
          </div>
      </div>
      <!--/ step container -->

      <!-- container -->
      <div class=\"col-md-9 height-auto bdr-l\">
          <div class=\"tab-content\">
              <!-- pane -->
              ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 70, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 71
            echo "                  ";
            if (twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), $context["group"], [], "array", true, true, false, 71)) {
                // line 72
                echo "                      ";
                $context["groupFields"] = twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 72, $this->source); })()), $context["group"], [], "array", false, false, false, 72);
                // line 73
                echo "                      ";
                if ( !twig_test_empty((isset($context["groupFields"]) || array_key_exists("groupFields", $context) ? $context["groupFields"] : (function () { throw new RuntimeError('Variable "groupFields" does not exist.', 73, $this->source); })()))) {
                    // line 74
                    echo "                          <div class=\"tab-pane fade ";
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 74)) {
                        echo "in active";
                    }
                    echo " bdr-rds-0 bdr-w-0\" id=\"";
                    echo twig_escape_filter($this->env, $context["group"], "html", null, true);
                    echo "\">
                              <div class=\"pa-md bg-light-xs bdr-b\">
                                  <h4 class=\"fw-sb\">";
                    // line 76
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["group"])), "html", null, true);
                    echo "</h4>
                              </div>
                              <div class=\"pa-md\">
                                  ";
                    // line 79
                    if (("core" == $context["group"])) {
                        // line 80
                        echo "                                      ";
                        if (((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", true, true, false, 80) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", true, true, false, 80)) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", true, true, false, 80))) {
                            // line 81
                            echo "                                          <div class=\"form-group mb-0\">
                                              <label class=\"control-label mb-xs\">";
                            // line 82
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.name"), "html", null, true);
                            echo "</label>
                                              <div class=\"row\">
                                                  ";
                            // line 84
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", true, true, false, 84)) {
                                // line 85
                                echo "                                                      <div class=\"col-sm-2\">
                                                          ";
                                // line 86
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "title", [], "any", false, false, false, 86), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "title", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "label", [], "any", false, false, false, 86)]]);
                                echo "
                                                      </div>
                                                  ";
                            }
                            // line 89
                            echo "                                                  ";
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", true, true, false, 89)) {
                                // line 90
                                echo "                                                      <div class=\"col-sm-3\">
                                                          ";
                                // line 91
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "firstname", [], "any", false, false, false, 91), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "firstname", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "label", [], "any", false, false, false, 91)]]);
                                echo "
                                                      </div>
                                                  ";
                            }
                            // line 94
                            echo "                                                  ";
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", true, true, false, 94)) {
                                // line 95
                                echo "                                                      <div class=\"col-sm-3\">
                                                          ";
                                // line 96
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "lastname", [], "any", false, false, false, 96), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "lastname", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "label", [], "any", false, false, false, 96)]]);
                                echo "
                                                      </div>
                                                  ";
                            }
                            // line 99
                            echo "                                              </div>
                                              <hr class=\"mnr-md mnl-md\">
                                          </div>
                                      ";
                        }
                        // line 103
                        echo "                                      <div class=\"form-group mb-0\">
                                          <label class=\"control-label mb-xs\">";
                        // line 104
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "email", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "label", [], "any", false, false, false, 104), "html", null, true);
                        echo "</label>
                                          <div class=\"row\">
                                              <div class=\"col-sm-8\">
                                                  ";
                        // line 107
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "email", [], "any", false, false, false, 107), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "email", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "label", [], "any", false, false, false, 107)]]);
                        echo "
                                              </div>
                                          </div>
                                      </div>
                                      <hr class=\"mnr-md mnl-md\">
                                      <div class=\"form-group mb-0\">
                                          <label>";
                        // line 113
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.company"), "html", null, true);
                        echo "</label>
                                          <div class=\"row\">
                                              ";
                        // line 115
                        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "companies", [], "any", true, true, false, 115)) {
                            // line 116
                            echo "                                                  <div class=\"col-sm-4\">
                                                      ";
                            // line 117
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "companies", [], "any", false, false, false, 117), 'widget');
                            echo "
                                                  </div>
                                              ";
                        }
                        // line 120
                        echo "                                              ";
                        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "position", [], "any", true, true, false, 120)) {
                            // line 121
                            echo "                                                  <div class=\"col-sm-4\">
                                                      ";
                            // line 122
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "position", [], "any", false, false, false, 122), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "position", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "label", [], "any", false, false, false, 122)]]);
                            echo "
                                                  </div>
                                              ";
                        }
                        // line 125
                        echo "                                          </div>
                                      </div>
                                      <hr class=\"mnr-md mnl-md\">
                                      ";
                        // line 128
                        if ((((((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address1", [], "any", true, true, false, 128) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address2", [], "any", true, true, false, 128)) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", true, true, false, 128)) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", true, true, false, 128)) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zipcode", [], "any", true, true, false, 128)) || twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", true, true, false, 128))) {
                            // line 129
                            echo "                                          <div class=\"form-group mb-0\">
                                              <label class=\"control-label mb-xs\">";
                            // line 130
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.address"), "html", null, true);
                            echo "</label>
                                              ";
                            // line 131
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address1", [], "any", true, true, false, 131)) {
                                // line 132
                                echo "                                                  <div class=\"row mb-xs\">
                                                      <div class=\"col-sm-8\">
                                                          ";
                                // line 134
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "address1", [], "any", false, false, false, 134), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "address1", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "label", [], "any", false, false, false, 134)]]);
                                echo "
                                                      </div>
                                                  </div>
                                              ";
                            }
                            // line 138
                            echo "                                              ";
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address2", [], "any", true, true, false, 138)) {
                                // line 139
                                echo "                                                  <div class=\"row mb-xs\">
                                                      <div class=\"col-sm-8\">
                                                          ";
                                // line 141
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "address2", [], "any", false, false, false, 141), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "address2", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "label", [], "any", false, false, false, 141)]]);
                                echo "
                                                      </div>
                                                  </div>
                                              ";
                            }
                            // line 145
                            echo "                                              <div class=\"row mb-xs\">
                                                  ";
                            // line 146
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", true, true, false, 146)) {
                                // line 147
                                echo "                                                      <div class=\"col-sm-4\">
                                                          ";
                                // line 148
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "city", [], "any", false, false, false, 148), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "city", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "label", [], "any", false, false, false, 148)]]);
                                echo "
                                                      </div>
                                                  ";
                            }
                            // line 151
                            echo "                                                  ";
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", true, true, false, 151)) {
                                // line 152
                                echo "                                                      <div class=\"col-sm-4\">
                                                          ";
                                // line 153
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "state", [], "any", false, false, false, 153), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "state", [], "any", false, false, false, 153), "vars", [], "any", false, false, false, 153), "label", [], "any", false, false, false, 153)]]);
                                echo "
                                                      </div>
                                                  ";
                            }
                            // line 156
                            echo "                                              </div>
                                              <div class=\"row\">
                                                  ";
                            // line 158
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "zipcode", [], "any", true, true, false, 158)) {
                                // line 159
                                echo "                                                      <div class=\"col-sm-4\">
                                                          ";
                                // line 160
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "zipcode", [], "any", false, false, false, 160), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "zipcode", [], "any", false, false, false, 160), "vars", [], "any", false, false, false, 160), "label", [], "any", false, false, false, 160)]]);
                                echo "
                                                      </div>
                                                  ";
                            }
                            // line 163
                            echo "                                                  ";
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", true, true, false, 163)) {
                                // line 164
                                echo "                                                      <div class=\"col-sm-4\">
                                                          ";
                                // line 165
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "country", [], "any", false, false, false, 165), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "country", [], "any", false, false, false, 165), "vars", [], "any", false, false, false, 165), "label", [], "any", false, false, false, 165)]]);
                                echo "
                                                      </div>
                                                  ";
                            }
                            // line 168
                            echo "                                              </div>
                                          </div>
                                          <hr class=\"mnr-md mnl-md\">
                                      ";
                        }
                        // line 172
                        echo "                                      ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "attribution", [], "any", true, true, false, 172) && twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "attribution_date", [], "any", true, true, false, 172))) {
                            // line 173
                            echo "                                          <div class=\"form-group mb-0\">
                                              <div class=\"row\">
                                                  <div class=\"col-sm-4\">
                                                    <label class=\"control-label mb-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                            // line 176
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.attribution.tooltip"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.attribution"), "html", null, true);
                            echo " <i class=\"ri-question-line\"></i></label>
                                                      ";
                            // line 177
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "attribution", [], "any", false, false, false, 177), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "attribution", [], "any", false, false, false, 177), "vars", [], "any", false, false, false, 177), "label", [], "any", false, false, false, 177), "preaddon" => "fa fa-money"]]);
                            echo "
                                                  </div>
                                                  <div class=\"col-sm-4\">
                                                    <label class=\"control-label mb-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                            // line 180
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.attribution_date.tooltip"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.attribution_date"), "html", null, true);
                            echo " <i class=\"ri-question-line\"></i></label>
                                                      ";
                            // line 181
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "attribution_date", [], "any", false, false, false, 181), 'widget', ["attr" => ["placeholder" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "attribution_date", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "label", [], "any", false, false, false, 181)]]);
                            echo "
                                                  </div>
                                              </div>
                                          </div>
                                          <hr class=\"mnr-md mnl-md\">
                                      ";
                        }
                        // line 187
                        echo "                                  ";
                    }
                    // line 188
                    echo "                                  <div class=\"form-group mb-0\">
                                      <div class=\"row\">
                                          ";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["groupFields"]) || array_key_exists("groupFields", $context) ? $context["groupFields"] : (function () { throw new RuntimeError('Variable "groupFields" does not exist.', 190, $this->source); })()));
                    foreach ($context['_seq'] as $context["alias"] => $context["field"]) {
                        // line 191
                        echo "                                              ";
                        if (((("company" != $context["alias"]) && twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), $context["alias"], [], "array", true, true, false, 191)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), $context["alias"], [], "array", false, false, false, 191), "isRendered", [], "any", false, false, false, 191))) {
                            // line 192
                            echo "                                                  <div class=\"col-sm-8\">
                                                      ";
                            // line 193
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), $context["alias"], [], "array", false, false, false, 193), 'row');
                            echo "
                                                  </div>
                                              ";
                        } else {
                            // line 196
                            echo "                                                  ";
                            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), $context["alias"], [], "array", false, false, false, 196), "setRendered", [], "any", false, false, false, 196);
                            // line 197
                            echo "                                              ";
                        }
                        // line 198
                        echo "                                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['alias'], $context['field'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    echo "                                      </div>
                                  </div>
                                  ";
                    // line 201
                    if (("core" == $context["group"])) {
                        // line 202
                        echo "                                      <hr class=\"mnr-md mnl-md\">
                                      <div class=\"row\">
                                          <div class=\"col-sm-8\">
                                              ";
                        // line 205
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "stage", [], "any", false, false, false, 205), 'label');
                        echo "
                                              ";
                        // line 206
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "stage", [], "any", false, false, false, 206), 'widget');
                        echo "
                                          </div>
                                      </div>
                                      <hr class=\"mnr-md mnl-md\">
                                      <div class=\"form-group mb-0\">
                                          <div class=\"row\">
                                              <div class=\"col-sm-4\">
                                                  ";
                        // line 213
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "owner", [], "any", false, false, false, 213), 'label');
                        echo "
                                                  ";
                        // line 214
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "owner", [], "any", false, false, false, 214), 'widget');
                        echo "
                                              </div>
                                              <div class=\"col-sm-4\">
                                                  ";
                        // line 217
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "tags", [], "any", false, false, false, 217), 'label');
                        echo "
                                                  ";
                        // line 218
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "tags", [], "any", false, false, false, 218), 'widget');
                        echo "
                                              </div>
                                          </div>
                                      </div>
                                  ";
                    }
                    // line 223
                    echo "                              </div>
                          </div>
                      ";
                }
                // line 226
                echo "                  ";
            }
            // line 227
            echo "              ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        echo "              <!--/ #pane -->
          </div>
      </div>
      <!--/ end: container -->
  </div>
  ";
        // line 233
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), 'form_end');
        echo "
  <!--/ end: box layout -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/form.html.twig";
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
        return array (  596 => 233,  589 => 228,  575 => 227,  572 => 226,  567 => 223,  559 => 218,  555 => 217,  549 => 214,  545 => 213,  535 => 206,  531 => 205,  526 => 202,  524 => 201,  520 => 199,  514 => 198,  511 => 197,  508 => 196,  502 => 193,  499 => 192,  496 => 191,  492 => 190,  488 => 188,  485 => 187,  476 => 181,  470 => 180,  464 => 177,  458 => 176,  453 => 173,  450 => 172,  444 => 168,  438 => 165,  435 => 164,  432 => 163,  426 => 160,  423 => 159,  421 => 158,  417 => 156,  411 => 153,  408 => 152,  405 => 151,  399 => 148,  396 => 147,  394 => 146,  391 => 145,  384 => 141,  380 => 139,  377 => 138,  370 => 134,  366 => 132,  364 => 131,  360 => 130,  357 => 129,  355 => 128,  350 => 125,  344 => 122,  341 => 121,  338 => 120,  332 => 117,  329 => 116,  327 => 115,  322 => 113,  313 => 107,  307 => 104,  304 => 103,  298 => 99,  292 => 96,  289 => 95,  286 => 94,  280 => 91,  277 => 90,  274 => 89,  268 => 86,  265 => 85,  263 => 84,  258 => 82,  255 => 81,  252 => 80,  250 => 79,  244 => 76,  234 => 74,  231 => 73,  228 => 72,  225 => 71,  208 => 70,  197 => 61,  183 => 60,  176 => 56,  172 => 55,  165 => 54,  162 => 53,  145 => 52,  135 => 45,  131 => 44,  125 => 43,  118 => 41,  113 => 39,  109 => 38,  100 => 32,  88 => 24,  85 => 23,  82 => 22,  78 => 21,  70 => 17,  66 => 15,  64 => 14,  62 => 13,  59 => 12,  55 => 11,  48 => 9,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\form.html.twig");
    }
}
