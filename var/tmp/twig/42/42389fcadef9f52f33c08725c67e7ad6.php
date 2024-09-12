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

/* @MauticLead/Social/index.html.twig */
class __TwigTemplate_bfeb6267d864214ca404706402417205 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        if (twig_test_empty((isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "  <div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\">
      <h4>";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.socialprofiles.header"), "html", null, true);
            echo "</h4>
      <p><a href=\"javascript: void(0);\" onclick=\"Mautic.refreshLeadSocialProfile('', ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
            echo ", event);\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.socialprofiles.noresults"), "html", null, true);
            echo "</a></p>
  </div>
";
        } else {
            // line 13
            echo "  <div class=\"row\">
  ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["socialProfiles"]) || array_key_exists("socialProfiles", $context) ? $context["socialProfiles"] : (function () { throw new RuntimeError('Variable "socialProfiles" does not exist.', 14, $this->source); })()));
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
                echo "      ";
                echo twig_escape_filter($this->env, twig_cycle(["", "</div><div class=\"row\">"], twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 15)), "html", null, true);
                echo "
      <div class=\"col-md-6\">
          <div class=\"panel panel-default panel-";
                // line 17
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["integrationName"]), "html", null, true);
                echo "\">
              <div class=\"panel-heading pr-0\">
                  <h3 class=\"panel-title\">";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.integration." . $context["integrationName"])), "html", null, true);
                echo "</h3>
                  <div class=\"panel-toolbar text-right\">
                      <a href=\"javascript:void(0);\" class=\"btn\" data-toggle=\"tooltip\" onclick=\"Mautic.refreshLeadSocialProfile('";
                // line 21
                echo twig_escape_filter($this->env, $context["integrationName"], "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
                echo "', event);\"
                         title=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.lastupdate", ["%datetime%" => $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFullConcat(twig_get_attribute($this->env, $this->source, $context["details"], "lastRefresh", [], "any", false, false, false, 22), "utc")]), "html", null, true);
                echo "\">
                          <i class=\"text-white ri-refresh-line\"></i>
                      </a>
                      <a href=\"javascript:void(0);\" class=\"btn\" onclick=\"Mautic.clearLeadSocialProfile('";
                // line 25
                echo twig_escape_filter($this->env, $context["integrationName"], "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25), "html", null, true);
                echo "', event);\" data-toggle=\"tooltip\"
                         title=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.lead.social.removecache"), "html", null, true);
                echo "\">
                          <i class=\"text-white ri-close-line\"></i>
                      </a>
                      ";
                // line 30
                echo "                      <a class=\"hide ";
                echo twig_escape_filter($this->env, $context["integrationName"], "html", null, true);
                echo "-panelremove\" data-toggle=\"panelremove\" data-parent=\".col-md-6\">&amp;</a>
                  </div>
              </div>
               <div class=\"panel-collapse pull out\" id=\"";
                // line 33
                echo twig_escape_filter($this->env, $context["integrationName"], "html", null, true);
                echo "CompleteProfile\">
                  ";
                // line 34
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["details"], "social_profile_template", [], "any", false, false, false, 34), ["lead" =>                 // line 35
(isset($context["lead"]) || array_key_exists("lead", $context) ? $context["lead"] : (function () { throw new RuntimeError('Variable "lead" does not exist.', 35, $this->source); })()), "details" =>                 // line 36
$context["details"], "integrationName" =>                 // line 37
$context["integrationName"], "socialProfileUrls" =>                 // line 38
(isset($context["socialProfileUrls"]) || array_key_exists("socialProfileUrls", $context) ? $context["socialProfileUrls"] : (function () { throw new RuntimeError('Variable "socialProfileUrls" does not exist.', 38, $this->source); })())]);
                // line 39
                echo "
              </div>
          </div>
      </div>
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
            unset($context['_seq'], $context['_iterated'], $context['integrationName'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "  </div>
";
        }
        // line 46
        echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "socialImageModal", "body" => "<img class=\"img-responsive img-thumbnail\" />", "header" => false, "padding" => "np"]);
        // line 51
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Social/index.html.twig";
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
        return array (  155 => 51,  153 => 46,  149 => 44,  131 => 39,  129 => 38,  128 => 37,  127 => 36,  126 => 35,  125 => 34,  121 => 33,  114 => 30,  108 => 26,  102 => 25,  96 => 22,  90 => 21,  85 => 19,  80 => 17,  74 => 15,  57 => 14,  54 => 13,  46 => 10,  42 => 9,  39 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Social/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Social\\index.html.twig");
    }
}
