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

/* @MauticLead/Lead/grid_card.html.twig */
class __TwigTemplate_da52efc3bb4613ae627882c7a3f84a00 extends Template
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
        // line 6
        $context["fields"] = twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 6, $this->source); })()), "fields", [], "any", false, false, false, 6);
        // line 7
        $context["color"] = ((twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "color", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "color", [], "any", false, false, false, 7), "a0acb8")) : ("a0acb8"));
        // line 8
        $context["img"] = $this->extensions['Mautic\LeadBundle\Twig\Extension\LeadExtension']->getAvatar((isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 8, $this->source); })()));
        // line 9
        echo "<div class=\"shuffle shuffle-item grid col-sm-6 col-lg-4 contact-cards\">
    <div data-color=\"#";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" class=\"panel ";
        if (array_key_exists("highlight", $context)) {
            echo "highlight";
        }
        echo " card ovf-h\" style=\"border-top: 3px solid #";
        echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ";\">
        <div class=\"box-layout\">
            <div class=\"col-xs-4 va-m\">
                <div class=\"panel-body\">
                  <span class=\"img-wrapper img-rounded\">
                      <img class=\"img\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["img"]) || array_key_exists("img", $context) ? $context["img"] : (function () { throw new RuntimeError('Variable "img" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" />
                  </span>
                </div>
            </div>
            <div class=\"col-xs-8 va-t\">
                <div class=\"panel-body\">
                    ";
        // line 21
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), twig_get_array_keys_filter((isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 21, $this->source); })())))) {
            // line 22
            echo "                        <div class=\"pull-right label label-danger\"><i class=\"fa fa-ban\"></i></div>
                    ";
        }
        // line 24
        echo "                    <h4 class=\"fw-sb mb-xs ellipsis\">
                        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\" data-toggle=\"ajax\">
                            <span>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 26, $this->source); })()), "primaryIdentifier", [], "any", false, false, false, 26), "html", null, true);
        echo "</span>
                        </a>
                    </h4>
                    <div class=\"text-muted mb-1 ellipsis\">
                        <i class=\"fa fa-fw ri-building-2-line mr-xs\"></i>";
        // line 30
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 30), "company", [], "any", false, true, false, 30), "value", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 30), "company", [], "any", false, true, false, 30), "value", [], "any", false, false, false, 30), "")) : ("")), "html", null, true);
        echo "
                    </div>
                    <div class=\"text-muted mb-1 ellipsis\">
                        <i class=\"fa fa-fw fa-map-marker mr-xs\"></i>
                        ";
        // line 34
        $context["location"] = [];
        // line 35
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 35), "city", [], "any", true, true, false, 35)) {
            // line 36
            echo "                          ";
            $context["location"] = twig_array_merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 36, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 36, $this->source); })()), "core", [], "any", false, false, false, 36), "city", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36)]);
            // line 37
            echo "                        ";
        }
        // line 38
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 38), "state", [], "any", true, true, false, 38)) {
            // line 39
            echo "                          ";
            $context["location"] = twig_array_merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 39, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 39, $this->source); })()), "core", [], "any", false, false, false, 39), "state", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39)]);
            // line 40
            echo "                        ";
        } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 40), "country", [], "any", true, true, false, 40)) {
            // line 41
            echo "                          ";
            $context["location"] = twig_array_merge((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 41, $this->source); })()), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 41, $this->source); })()), "core", [], "any", false, false, false, 41), "country", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41)]);
            // line 42
            echo "                        ";
        }
        // line 43
        echo "                        ";
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 43, $this->source); })()), ", "), "html", null, true);
        echo "
                    </div>
                    <div class=\"text-muted mb-1 ellipsis\">
                        <i class=\"ri-earth-line mr-xs\"></i>";
        // line 46
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 46), "country", [], "any", false, true, false, 46), "value", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 46), "country", [], "any", false, true, false, 46), "value", [], "any", false, false, false, 46), "")) : ("")), "html", null, true);
        echo "
                    </div>
                    ";
        // line 48
        $context["flag"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "core", [], "any", false, true, false, 48), "country", [], "any", true, true, false, 48) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 48, $this->source); })()), "core", [], "any", false, false, false, 48), "country", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48)))) ? ($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getCountryFlag(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 48, $this->source); })()), "core", [], "any", false, false, false, 48), "country", [], "any", false, false, false, 48), "value", [], "any", false, false, false, 48))) : (""));
        // line 49
        echo "                    ";
        if ( !twig_test_empty((isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 49, $this->source); })()))) {
            // line 50
            echo "                        <div style=\"position: absolute; right: 30px; bottom: 30px\">
                            <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["flag"]) || array_key_exists("flag", $context) ? $context["flag"] : (function () { throw new RuntimeError('Variable "flag" does not exist.', 51, $this->source); })()), "html", null, true);
            echo "\" style=\"max-height: 24px;\" class=\"ml-sm\" />
                        </div>
                    ";
        }
        // line 54
        echo "                    ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->getCustomContent("lead.grid", $context);
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/grid_card.html.twig";
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
        return array (  148 => 54,  142 => 51,  139 => 50,  136 => 49,  134 => 48,  129 => 46,  122 => 43,  119 => 42,  116 => 41,  113 => 40,  110 => 39,  107 => 38,  104 => 37,  101 => 36,  98 => 35,  96 => 34,  89 => 30,  82 => 26,  78 => 25,  75 => 24,  71 => 22,  69 => 21,  60 => 15,  46 => 10,  43 => 9,  41 => 8,  39 => 7,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/grid_card.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\grid_card.html.twig");
    }
}
