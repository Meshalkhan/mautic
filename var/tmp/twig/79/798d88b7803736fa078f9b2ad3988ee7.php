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

/* @MauticLead/List/_list.html.twig */
class __TwigTemplate_76893d49a8023f8158ebdd3f2378fb92 extends Template
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
        // line 8
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 8, $this->source); })())) > 0)) {
            // line 9
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover\" id=\"leadListTable\">
            <thead>
            <tr>
                ";
            // line 13
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#leadListTable", "langVar" => "lead.list", "routeBase" => "segment", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 19
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), "lead:lists:deleteother", [], "array", false, false, false, 19)]]);
            // line 21
            echo "
                ";
            // line 22
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.name", "text" => "mautic.core.name", "class" => "col-leadlist-name"]);
            // line 27
            echo "
                ";
            // line 28
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "text" => "mautic.lead.list.thead.leadcount", "class" => "visible-md visible-lg col-leadlist-leadcount"]);
            // line 32
            echo "
                ";
            // line 33
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.dateAdded", "text" => "mautic.lead.import.label.dateAdded", "class" => "visible-md visible-lg col-leadlist-dateAdded"]);
            // line 38
            echo "
                ";
            // line 39
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.dateModified", "text" => "mautic.lead.import.label.dateModified", "class" => "visible-md visible-lg col-leadlist-dateModified", "default" => true]);
            // line 45
            echo "
                ";
            // line 46
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.createdByUser", "text" => "mautic.core.createdby", "class" => "visible-md visible-lg col-leadlist-createdByUser"]);
            // line 51
            echo "
                ";
            // line 52
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "lead.list", "orderBy" => "l.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-leadlist-id"]);
            // line 57
            echo "
            </tr>
            </thead>
            <tbody>
              ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 61, $this->source); })()));
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
                // line 62
                echo "                ";
                echo twig_include($this->env, $context, "@MauticLead/List/_list_row.html.twig", ["item" => $context["item"]]);
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
            // line 64
            echo "            </tbody>
        </table>
        <div class=\"panel-footer\">
            ";
            // line 67
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 68
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 68, $this->source); })())), "page" =>             // line 69
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 69, $this->source); })()), "limit" =>             // line 70
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 70, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_index"), "sessionVar" => "lead.list"]);
            // line 73
            echo "
        </div>
    </div>
";
        } else {
            // line 77
            echo "    ";
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
        return "@MauticLead/List/_list.html.twig";
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
        return array (  134 => 77,  128 => 73,  126 => 70,  125 => 69,  124 => 68,  123 => 67,  118 => 64,  101 => 62,  84 => 61,  78 => 57,  76 => 52,  73 => 51,  71 => 46,  68 => 45,  66 => 39,  63 => 38,  61 => 33,  58 => 32,  56 => 28,  53 => 27,  51 => 22,  48 => 21,  46 => 19,  45 => 13,  39 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/List/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\List\\_list.html.twig");
    }
}
