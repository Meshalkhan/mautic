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

/* @MauticLead/Lead/form.html.twig */
class __TwigTemplate_779dac1c9b0401aaae20a58f89e44dfa extends Template
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
        // line 7
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticLead/Lead/form.html.twig", 7);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "lead";
        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 12
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)) {
            // line 13
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source,             // line 14
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 14, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 14))]), "html", null, true);
            // line 15
            yield "
  ";
        } else {
            // line 17
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.header.new"), "html", null, true);
            yield "
  ";
        }
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "  ";
        $context["groups"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::keys((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 22, $this->source); })())));
        // line 23
        yield "  ";
        $context["img"] = $this->extensions['Mautic\LeadBundle\Twig\Extension\LeadExtension']->getAvatar((isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 23, $this->source); })()));
        // line 24
        yield "  ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        yield "
  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- step container -->
      <div class=\"col-md-3 height-auto\">
          <div class=\"pr-lg pl-lg pt-md pb-md\">
              <div class=\"media\">
                  <div class=\"media-body\">
                      <img class=\"img-rounded img-bordered img-responsive media-object contact-avatar\" src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\" alt=\"\">
                  </div>
              </div>

              <div class=\"row mt-xs\">
                  <div class=\"col-sm-12\">
                      ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "preferred_profile_image", [], "any", false, false, false, 38), 'label');
        yield "
                      ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "preferred_profile_image", [], "any", false, false, false, 39), 'widget');
        yield "
                  </div>
                  <div class=\"col-sm-12 ";
        // line 41
        if ((false == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "custom_avatar", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "valid", [], "any", false, false, false, 41))) {
            yield "has-error";
        }
        yield "\"
                       id=\"customAvatarContainer\"
                       style=\"";
        // line 43
        if (("custom" != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "preferred_profile_image", [], "any", false, false, false, 43), "vars", [], "any", false, false, false, 43), "data", [], "any", false, false, false, 43))) {
            yield "display: none;";
        }
        yield "\">
                      ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "custom_avatar", [], "any", false, false, false, 44), 'widget');
        yield "
                      ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "custom_avatar", [], "any", false, false, false, 45), 'errors');
        yield "
                  </div>
              </div>

              <hr/>

              <ul class=\"list-group list-group-tabs\">
                  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 52, $this->source); })()));
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
            yield "                      ";
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 53, $this->source); })()), $context["g"], [], "array", false, false, false, 53))) {
                // line 54
                yield "                          <li class=\"list-group-item ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 54)) {
                    yield "active";
                }
                yield "\">
                              <a href=\"#";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["g"], "html", null, true);
                yield "\" class=\"steps\" data-toggle=\"tab\">
                                  ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["g"])), "html", null, true);
                yield "
                              </a>
                          </li>
                      ";
            }
            // line 60
            yield "                  ";
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
        unset($context['_seq'], $context['_key'], $context['g'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        yield "              </ul>
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
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 70, $this->source); })()));
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
            yield "                  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), $context["group"], [], "array", true, true, false, 71)) {
                // line 72
                yield "                      ";
                $context["groupFields"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 72, $this->source); })()), $context["group"], [], "array", false, false, false, 72);
                // line 73
                yield "                      ";
                if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["groupFields"]) || array_key_exists("groupFields", $context) ? $context["groupFields"] : (function () { throw new RuntimeError('Variable "groupFields" does not exist.', 73, $this->source); })()))) {
                    // line 74
                    yield "                          <div class=\"tab-pane fade ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 74)) {
                        yield "in active";
                    }
                    yield " bdr-rds-0 bdr-w-0\" id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
                    yield "\">
                              <div class=\"pa-md bg-light-xs bdr-b\">
                                  <h4 class=\"fw-sb\">";
                    // line 76
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.lead.field.group." . $context["group"])), "html", null, true);
                    yield "</h4>
                              </div>
                              <div class=\"pa-md\">
                                  ";
                    // line 79
                    if (("core" == $context["group"])) {
                        // line 80
                        yield "                                      ";
                        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", true, true, false, 80) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", true, true, false, 80)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", true, true, false, 80))) {
                            // line 81
                            yield "                                          <div class=\"form-group mb-0\">
                                              <label class=\"control-label mb-xs\">";
                            // line 82
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.name"), "html", null, true);
                            yield "</label>
                                              <div class=\"row\">
                                                  ";
                            // line 84
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", true, true, false, 84)) {
                                // line 85
                                yield "                                                      <div class=\"col-sm-2\">
                                                          ";
                                // line 86
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "title", [], "any", false, false, false, 86), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "title", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "label", [], "any", false, false, false, 86)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 89
                            yield "                                                  ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "firstname", [], "any", true, true, false, 89)) {
                                // line 90
                                yield "                                                      <div class=\"col-sm-3\">
                                                          ";
                                // line 91
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "firstname", [], "any", false, false, false, 91), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "firstname", [], "any", false, false, false, 91), "vars", [], "any", false, false, false, 91), "label", [], "any", false, false, false, 91)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 94
                            yield "                                                  ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "lastname", [], "any", true, true, false, 94)) {
                                // line 95
                                yield "                                                      <div class=\"col-sm-3\">
                                                          ";
                                // line 96
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "lastname", [], "any", false, false, false, 96), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "lastname", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "label", [], "any", false, false, false, 96)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 99
                            yield "                                              </div>
                                              <hr class=\"mnr-md mnl-md\">
                                          </div>
                                      ";
                        }
                        // line 103
                        yield "                                      <div class=\"form-group mb-0\">
                                          <label class=\"control-label mb-xs\">";
                        // line 104
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "email", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "label", [], "any", false, false, false, 104), "html", null, true);
                        yield "</label>
                                          <div class=\"row\">
                                              <div class=\"col-sm-8\">
                                                  ";
                        // line 107
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "email", [], "any", false, false, false, 107), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "email", [], "any", false, false, false, 107), "vars", [], "any", false, false, false, 107), "label", [], "any", false, false, false, 107)]]);
                        yield "
                                              </div>
                                          </div>
                                      </div>
                                      <hr class=\"mnr-md mnl-md\">
                                      <div class=\"form-group mb-0\">
                                          <label>";
                        // line 113
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.company.company"), "html", null, true);
                        yield "</label>
                                          <div class=\"row\">
                                              ";
                        // line 115
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "companies", [], "any", true, true, false, 115)) {
                            // line 116
                            yield "                                                  <div class=\"col-sm-4\">
                                                      ";
                            // line 117
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "companies", [], "any", false, false, false, 117), 'widget');
                            yield "
                                                  </div>
                                              ";
                        }
                        // line 120
                        yield "                                              ";
                        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "position", [], "any", true, true, false, 120)) {
                            // line 121
                            yield "                                                  <div class=\"col-sm-4\">
                                                      ";
                            // line 122
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "position", [], "any", false, false, false, 122), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "position", [], "any", false, false, false, 122), "vars", [], "any", false, false, false, 122), "label", [], "any", false, false, false, 122)]]);
                            yield "
                                                  </div>
                                              ";
                        }
                        // line 125
                        yield "                                          </div>
                                      </div>
                                      <hr class=\"mnr-md mnl-md\">
                                      ";
                        // line 128
                        if ((((((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address1", [], "any", true, true, false, 128) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address2", [], "any", true, true, false, 128)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", true, true, false, 128)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", true, true, false, 128)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "zipcode", [], "any", true, true, false, 128)) || CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", true, true, false, 128))) {
                            // line 129
                            yield "                                          <div class=\"form-group mb-0\">
                                              <label class=\"control-label mb-xs\">";
                            // line 130
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.field.address"), "html", null, true);
                            yield "</label>
                                              ";
                            // line 131
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address1", [], "any", true, true, false, 131)) {
                                // line 132
                                yield "                                                  <div class=\"row mb-xs\">
                                                      <div class=\"col-sm-8\">
                                                          ";
                                // line 134
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "address1", [], "any", false, false, false, 134), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "address1", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134), "label", [], "any", false, false, false, 134)]]);
                                yield "
                                                      </div>
                                                  </div>
                                              ";
                            }
                            // line 138
                            yield "                                              ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "address2", [], "any", true, true, false, 138)) {
                                // line 139
                                yield "                                                  <div class=\"row mb-xs\">
                                                      <div class=\"col-sm-8\">
                                                          ";
                                // line 141
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "address2", [], "any", false, false, false, 141), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "address2", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "label", [], "any", false, false, false, 141)]]);
                                yield "
                                                      </div>
                                                  </div>
                                              ";
                            }
                            // line 145
                            yield "                                              <div class=\"row mb-xs\">
                                                  ";
                            // line 146
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "city", [], "any", true, true, false, 146)) {
                                // line 147
                                yield "                                                      <div class=\"col-sm-4\">
                                                          ";
                                // line 148
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "city", [], "any", false, false, false, 148), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "city", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "label", [], "any", false, false, false, 148)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 151
                            yield "                                                  ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "state", [], "any", true, true, false, 151)) {
                                // line 152
                                yield "                                                      <div class=\"col-sm-4\">
                                                          ";
                                // line 153
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "state", [], "any", false, false, false, 153), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "state", [], "any", false, false, false, 153), "vars", [], "any", false, false, false, 153), "label", [], "any", false, false, false, 153)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 156
                            yield "                                              </div>
                                              <div class=\"row\">
                                                  ";
                            // line 158
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "zipcode", [], "any", true, true, false, 158)) {
                                // line 159
                                yield "                                                      <div class=\"col-sm-4\">
                                                          ";
                                // line 160
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "zipcode", [], "any", false, false, false, 160), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "zipcode", [], "any", false, false, false, 160), "vars", [], "any", false, false, false, 160), "label", [], "any", false, false, false, 160)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 163
                            yield "                                                  ";
                            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", true, true, false, 163)) {
                                // line 164
                                yield "                                                      <div class=\"col-sm-4\">
                                                          ";
                                // line 165
                                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "country", [], "any", false, false, false, 165), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "country", [], "any", false, false, false, 165), "vars", [], "any", false, false, false, 165), "label", [], "any", false, false, false, 165)]]);
                                yield "
                                                      </div>
                                                  ";
                            }
                            // line 168
                            yield "                                              </div>
                                          </div>
                                          <hr class=\"mnr-md mnl-md\">
                                      ";
                        }
                        // line 172
                        yield "                                      ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attribution", [], "any", true, true, false, 172) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "attribution_date", [], "any", true, true, false, 172))) {
                            // line 173
                            yield "                                          <div class=\"form-group mb-0\">
                                              <div class=\"row\">
                                                  <div class=\"col-sm-4\">
                                                    <label class=\"control-label mb-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                            // line 176
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.attribution.tooltip"), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.attribution"), "html", null, true);
                            yield " <i class=\"ri-question-line\"></i></label>
                                                      ";
                            // line 177
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "attribution", [], "any", false, false, false, 177), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "attribution", [], "any", false, false, false, 177), "vars", [], "any", false, false, false, 177), "label", [], "any", false, false, false, 177), "preaddon" => "fa fa-money"]]);
                            yield "
                                                  </div>
                                                  <div class=\"col-sm-4\">
                                                    <label class=\"control-label mb-xs\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                            // line 180
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.attribution_date.tooltip"), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.attribution_date"), "html", null, true);
                            yield " <i class=\"ri-question-line\"></i></label>
                                                      ";
                            // line 181
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "attribution_date", [], "any", false, false, false, 181), 'widget', ["attr" => ["placeholder" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "attribution_date", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "label", [], "any", false, false, false, 181)]]);
                            yield "
                                                  </div>
                                              </div>
                                          </div>
                                          <hr class=\"mnr-md mnl-md\">
                                      ";
                        }
                        // line 187
                        yield "                                  ";
                    }
                    // line 188
                    yield "                                  <div class=\"form-group mb-0\">
                                      <div class=\"row\">
                                          ";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupFields"]) || array_key_exists("groupFields", $context) ? $context["groupFields"] : (function () { throw new RuntimeError('Variable "groupFields" does not exist.', 190, $this->source); })()));
                    foreach ($context['_seq'] as $context["alias"] => $context["field"]) {
                        // line 191
                        yield "                                              ";
                        if (((("company" != $context["alias"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), $context["alias"], [], "array", true, true, false, 191)) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), $context["alias"], [], "array", false, false, false, 191), "isRendered", [], "any", false, false, false, 191))) {
                            // line 192
                            yield "                                                  <div class=\"col-sm-8\">
                                                      ";
                            // line 193
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), $context["alias"], [], "array", false, false, false, 193), 'row');
                            yield "
                                                  </div>
                                              ";
                        } else {
                            // line 196
                            yield "                                                  ";
                            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), $context["alias"], [], "array", false, false, false, 196), "setRendered", [], "any", false, false, false, 196);
                            // line 197
                            yield "                                              ";
                        }
                        // line 198
                        yield "                                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['alias'], $context['field'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 199
                    yield "                                      </div>
                                  </div>
                                  ";
                    // line 201
                    if (("core" == $context["group"])) {
                        // line 202
                        yield "                                      <hr class=\"mnr-md mnl-md\">
                                      <div class=\"row\">
                                          <div class=\"col-sm-8\">
                                              ";
                        // line 205
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "stage", [], "any", false, false, false, 205), 'label');
                        yield "
                                              ";
                        // line 206
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "stage", [], "any", false, false, false, 206), 'widget');
                        yield "
                                          </div>
                                      </div>
                                      <hr class=\"mnr-md mnl-md\">
                                      <div class=\"form-group mb-0\">
                                          <div class=\"row\">
                                              <div class=\"col-sm-4\">
                                                  ";
                        // line 213
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "owner", [], "any", false, false, false, 213), 'label');
                        yield "
                                                  ";
                        // line 214
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "owner", [], "any", false, false, false, 214), 'widget');
                        yield "
                                              </div>
                                              <div class=\"col-sm-4\">
                                                  ";
                        // line 217
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "tags", [], "any", false, false, false, 217), 'label');
                        yield "
                                                  ";
                        // line 218
                        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "tags", [], "any", false, false, false, 218), 'widget');
                        yield "
                                              </div>
                                          </div>
                                      </div>
                                  ";
                    }
                    // line 223
                    yield "                              </div>
                          </div>
                      ";
                }
                // line 226
                yield "                  ";
            }
            // line 227
            yield "              ";
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
        unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 228
        yield "              <!--/ #pane -->
          </div>
      </div>
      <!--/ end: container -->
  </div>
  ";
        // line 233
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), 'form_end');
        yield "
  <!--/ end: box layout -->
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Lead/form.html.twig";
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
        return array (  612 => 233,  605 => 228,  591 => 227,  588 => 226,  583 => 223,  575 => 218,  571 => 217,  565 => 214,  561 => 213,  551 => 206,  547 => 205,  542 => 202,  540 => 201,  536 => 199,  530 => 198,  527 => 197,  524 => 196,  518 => 193,  515 => 192,  512 => 191,  508 => 190,  504 => 188,  501 => 187,  492 => 181,  486 => 180,  480 => 177,  474 => 176,  469 => 173,  466 => 172,  460 => 168,  454 => 165,  451 => 164,  448 => 163,  442 => 160,  439 => 159,  437 => 158,  433 => 156,  427 => 153,  424 => 152,  421 => 151,  415 => 148,  412 => 147,  410 => 146,  407 => 145,  400 => 141,  396 => 139,  393 => 138,  386 => 134,  382 => 132,  380 => 131,  376 => 130,  373 => 129,  371 => 128,  366 => 125,  360 => 122,  357 => 121,  354 => 120,  348 => 117,  345 => 116,  343 => 115,  338 => 113,  329 => 107,  323 => 104,  320 => 103,  314 => 99,  308 => 96,  305 => 95,  302 => 94,  296 => 91,  293 => 90,  290 => 89,  284 => 86,  281 => 85,  279 => 84,  274 => 82,  271 => 81,  268 => 80,  266 => 79,  260 => 76,  250 => 74,  247 => 73,  244 => 72,  241 => 71,  224 => 70,  213 => 61,  199 => 60,  192 => 56,  188 => 55,  181 => 54,  178 => 53,  161 => 52,  151 => 45,  147 => 44,  141 => 43,  134 => 41,  129 => 39,  125 => 38,  116 => 32,  104 => 24,  101 => 23,  98 => 22,  91 => 21,  82 => 17,  78 => 15,  76 => 14,  74 => 13,  71 => 12,  64 => 11,  53 => 9,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Lead/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\form.html.twig");
    }
}
