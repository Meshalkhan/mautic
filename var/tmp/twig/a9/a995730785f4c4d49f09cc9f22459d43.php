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

/* @MauticLead/Import/_list.html.twig */
class __TwigTemplate_ad1b8992835aad4f8c005a404f163edd extends Template
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
        // line 5
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 5, $this->source); })())) > 0)) {
            // line 6
            echo "  <div class=\"table-responsive\">
      <table class=\"table table-hover\" id=\"importTable\">
          <thead>
              <tr>
                  ";
            // line 10
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>             // line 11
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 11, $this->source); })()), "orderBy" => (            // line 12
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 12, $this->source); })()) . ".status"), "text" => "mautic.lead.import.status", "class" => "col-status"]);
            // line 15
            echo "
                  ";
            // line 16
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>             // line 17
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 17, $this->source); })()), "orderBy" => (            // line 18
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 18, $this->source); })()) . ".originalFile"), "text" => "mautic.lead.import.source.file", "class" => "col-original-file"]);
            // line 21
            echo "
                  ";
            // line 22
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "mautic.lead.import.runtime", "class" => "col-runtime"]);
            // line 25
            echo "
                  ";
            // line 26
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "mautic.lead.import.progress", "class" => "col-progress"]);
            // line 29
            echo "
                  ";
            // line 30
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>             // line 31
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 31, $this->source); })()), "orderBy" => (            // line 32
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 32, $this->source); })()) . ".lineCount"), "text" => "mautic.lead.import.line.count", "class" => "col-line-count"]);
            // line 35
            echo "
                  ";
            // line 36
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>             // line 37
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 37, $this->source); })()), "orderBy" => (            // line 38
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 38, $this->source); })()) . ".insertedCount"), "text" => "mautic.lead.import.inserted.count", "class" => "col-inserted-count"]);
            // line 41
            echo "
                  ";
            // line 42
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>             // line 43
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 43, $this->source); })()), "orderBy" => (            // line 44
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 44, $this->source); })()) . ".updatedCount"), "text" => "mautic.lead.import.updated.count", "class" => "col-updated-count"]);
            // line 47
            echo "
                  ";
            // line 48
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>             // line 49
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 49, $this->source); })()), "orderBy" => (            // line 50
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 50, $this->source); })()) . ".ignoredCount"), "text" => "mautic.lead.import.ignored.count", "class" => "col-ignored-count"]);
            // line 53
            echo "
                  ";
            // line 54
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>             // line 55
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 55, $this->source); })()), "orderBy" => (            // line 56
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 56, $this->source); })()) . ".createdByUser"), "text" => "mautic.core.create.by.past.tense", "class" => "col-created visible-md visible-lg"]);
            // line 59
            echo "
                  ";
            // line 60
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>             // line 61
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 61, $this->source); })()), "orderBy" => (            // line 62
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 62, $this->source); })()) . ".dateAdded"), "text" => "mautic.core.date.added", "class" => "col-date-added visible-md visible-lg", "default" => true]);
            // line 66
            echo "
                  ";
            // line 67
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" =>             // line 68
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 68, $this->source); })()), "orderBy" => (            // line 69
(isset($context["tablePrefix"]) || array_key_exists("tablePrefix", $context) ? $context["tablePrefix"] : (function () { throw new RuntimeError('Variable "tablePrefix" does not exist.', 69, $this->source); })()) . ".id"), "text" => "mautic.core.id", "class" => "col-lead-id visible-md visible-lg"]);
            // line 72
            echo "
              </tr>
          </thead>
          <tbody>
            ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 76, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 77
                echo "              ";
                echo twig_include($this->env, $context, "@MauticLead/Import/_list_row.html.twig", ["item" =>                 // line 78
$context["item"], "permissions" =>                 // line 79
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 79, $this->source); })()), "indexRoute" =>                 // line 80
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 80, $this->source); })()), "permissionBase" =>                 // line 81
(isset($context["permissionBase"]) || array_key_exists("permissionBase", $context) ? $context["permissionBase"] : (function () { throw new RuntimeError('Variable "permissionBase" does not exist.', 81, $this->source); })()), "translationBase" =>                 // line 82
(isset($context["translationBase"]) || array_key_exists("translationBase", $context) ? $context["translationBase"] : (function () { throw new RuntimeError('Variable "translationBase" does not exist.', 82, $this->source); })()), "actionRoute" =>                 // line 83
(isset($context["actionRoute"]) || array_key_exists("actionRoute", $context) ? $context["actionRoute"] : (function () { throw new RuntimeError('Variable "actionRoute" does not exist.', 83, $this->source); })())]);
                // line 84
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "          </tbody>
      </table>
  </div>
  <div class=\"panel-footer\">
      ";
            // line 90
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 91
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 91, $this->source); })()), "page" =>             // line 92
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 92, $this->source); })()), "limit" =>             // line 93
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 93, $this->source); })()), "menuLinkId" =>             // line 94
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 94, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 95
(isset($context["indexRoute"]) || array_key_exists("indexRoute", $context) ? $context["indexRoute"] : (function () { throw new RuntimeError('Variable "indexRoute" does not exist.', 95, $this->source); })()), ["object" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "get", ["object", "contacts"], "method", false, false, false, 95)]), "sessionVar" =>             // line 96
(isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 96, $this->source); })())]);
            // line 97
            echo "
  </div>
";
        } else {
            // line 100
            echo "  ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Import/_list.html.twig";
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
        return array (  181 => 100,  176 => 97,  174 => 96,  173 => 95,  172 => 94,  171 => 93,  170 => 92,  169 => 91,  168 => 90,  162 => 86,  147 => 84,  145 => 83,  144 => 82,  143 => 81,  142 => 80,  141 => 79,  140 => 78,  138 => 77,  121 => 76,  115 => 72,  113 => 69,  112 => 68,  111 => 67,  108 => 66,  106 => 62,  105 => 61,  104 => 60,  101 => 59,  99 => 56,  98 => 55,  97 => 54,  94 => 53,  92 => 50,  91 => 49,  90 => 48,  87 => 47,  85 => 44,  84 => 43,  83 => 42,  80 => 41,  78 => 38,  77 => 37,  76 => 36,  73 => 35,  71 => 32,  70 => 31,  69 => 30,  66 => 29,  64 => 26,  61 => 25,  59 => 22,  56 => 21,  54 => 18,  53 => 17,  52 => 16,  49 => 15,  47 => 12,  46 => 11,  45 => 10,  39 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Import/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Import\\_list.html.twig");
    }
}
