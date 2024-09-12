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

/* @MauticLead/Social/index.html.twig */
class __TwigTemplate_dd0aab850122de750916b77d09699457 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield "  <div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\">
      <h4>";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.socialprofiles.header"), "html", null, true);
            yield "</h4>
      <p><a href=\"javascript: void(0);\" onclick=\"Mautic.refreshLeadSocialProfile('', ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
            yield ", event);\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.socialprofiles.noresults"), "html", null, true);
            yield "</a></p>
  </div>
";
        } else {
            // line 13
            yield "  <div class=\"row\">
  ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 14, $this->source); })()));
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
            foreach ($context['_seq'] as $context["integrationName"] => $context["details"]) {
                // line 15
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::cycle(["", "</div><div class=\"row\">"], CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 15)), "html", null, true);
                yield "
      <div class=\"col-md-6\">
          <div class=\"panel panel-default panel-";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $context["integrationName"]), "html", null, true);
                yield "\">
              <div class=\"panel-heading pr-0\">
                  <h3 class=\"panel-title\">";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.integration." . $context["integrationName"])), "html", null, true);
                yield "</h3>
                  <div class=\"panel-toolbar text-right\">
                      <a href=\"javascript:void(0);\" class=\"btn\" data-toggle=\"tooltip\" onclick=\"Mautic.refreshLeadSocialProfile('";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["integrationName"], "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
                yield "', event);\"
                         title=\"";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.lastupdate", ["%datetime%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(CoreExtension::getAttribute($this->env, $this->source, $context["details"], "lastRefresh", [], "any", false, false, false, 22), "utc")]), "html", null, true);
                yield "\">
                          <i class=\"text-white ri-refresh-line\"></i>
                      </a>
                      <a href=\"javascript:void(0);\" class=\"btn\" onclick=\"Mautic.clearLeadSocialProfile('";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["integrationName"], "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
                yield "', event);\" data-toggle=\"tooltip\"
                         title=\"";
                // line 26
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.removecache"), "html", null, true);
                yield "\">
                          <i class=\"text-white ri-close-line\"></i>
                      </a>
                      ";
                // line 30
                yield "                      <a class=\"hide ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["integrationName"], "html", null, true);
                yield "-panelremove\" data-toggle=\"panelremove\" data-parent=\".col-md-6\">&amp;</a>
                  </div>
              </div>
               <div class=\"panel-collapse pull out\" id=\"";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["integrationName"], "html", null, true);
                yield "CompleteProfile\">
                  ";
                // line 34
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["details"], "social_profile_template", [], "any", false, false, false, 34), ["lead" =>                 // line 35
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 35, $this->source); })()), "details" =>                 // line 36
$context["details"], "integrationName" =>                 // line 37
$context["integrationName"], "socialProfileUrls" =>                 // line 38
(isset($context["socialProfileUrls"]) || array_key_exists("socialProfileUrls", $context) ? $context["socialProfileUrls"] : (function () { throw new RuntimeError('Variable "socialProfileUrls" does not exist.', 38, $this->source); })())]);
                // line 39
                yield "
              </div>
          </div>
      </div>
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
            unset($context['_seq'], $context['integrationName'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            yield "  </div>
";
        }
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "socialImageModal", "body" => "<img class=\"img-responsive img-thumbnail\" />", "header" => false, "padding" => "np"]);
        // line 51
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticLead/Social/index.html.twig";
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
        return array (  160 => 51,  158 => 46,  154 => 44,  136 => 39,  134 => 38,  133 => 37,  132 => 36,  131 => 35,  130 => 34,  126 => 33,  119 => 30,  113 => 26,  107 => 25,  101 => 22,  95 => 21,  90 => 19,  85 => 17,  79 => 15,  62 => 14,  59 => 13,  51 => 10,  47 => 9,  44 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticLead/Social/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Social\\index.html.twig");
    }
}
