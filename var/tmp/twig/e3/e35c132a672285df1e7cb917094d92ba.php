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

/* @MauticLead/Lead/grid.html.twig */
class __TwigTemplate_fb3c46dae19d8c3b5d7575649cba6616 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 19
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 19, $this->source); })())) ? ("@MauticLead/Lead/list.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticLead/Lead/grid.html.twig", 19);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        $context["isIndex"] = ((("index" == (isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 18, $this->source); })()))) ? (true) : (false));
        // line 19
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    ";
        echo twig_include($this->env, $context, "@MauticLead/Lead/_filter.html.twig");
        echo "
<div class=\"pa-md\">
    ";
        // line 24
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 24, $this->source); })())) > 0)) {
            // line 25
            echo "        <div class=\"row shuffle-grid\">
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 26, $this->source); })()));
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
                // line 27
                echo "                ";
                echo twig_include($this->env, $context, "@MauticLead/Lead/grid_card.html.twig", ["contact" => $context["item"], "noContactList" => ((array_key_exists("noContactList", $context)) ? (_twig_default_filter((isset($context["noContactList"]) || array_key_exists("noContactList", $context) ? $context["noContactList"] : (function () { throw new RuntimeError('Variable "noContactList" does not exist.', 27, $this->source); })()), [])) : ([]))]);
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
            // line 29
            echo "        </div>
    ";
        } else {
            // line 31
            echo "        ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["header" => "mautic.lead.grid.noresults.header", "message" => "mautic.lead.grid.noresults.message"]);
            echo "
        <div class=\"clearfix\"></div>
    ";
        }
        // line 34
        echo "</div>
";
        // line 35
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 35, $this->source); })())) > 0)) {
            // line 36
            echo "    <div class=\"panel-footer\">
        ";
            // line 37
            $context["route"] = ((array_key_exists("route", $context)) ? ((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 37, $this->source); })())) : (((array_key_exists("link", $context)) ? (_twig_default_filter((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 37, $this->source); })()), "mautic_contact_index")) : ("mautic_contact_index"))));
            // line 38
            echo "        ";
            $context["routeParameters"] = ((array_key_exists("routeParameters", $context)) ? (_twig_default_filter((isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 38, $this->source); })()), [])) : ([]));
            // line 39
            echo "        ";
            if (array_key_exists("objectId", $context)) {
                // line 40
                echo "          ";
                $context["routeParameters"] = twig_array_merge((isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 40, $this->source); })()), ["objectId" => (isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 40, $this->source); })())]);
                // line 41
                echo "        ";
            }
            // line 42
            echo "        ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" =>             // line 43
(isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 43, $this->source); })()), "page" =>             // line 44
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 44, $this->source); })()), "limit" =>             // line 45
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 45, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(            // line 46
(isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 46, $this->source); })()), (isset($context["routeParameters"]) || array_key_exists("routeParameters", $context) ? $context["routeParameters"] : (function () { throw new RuntimeError('Variable "routeParameters" does not exist.', 46, $this->source); })())), "tmpl" => ((!twig_in_filter(            // line 47
(isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 47, $this->source); })()), ["grid", "index"])) ? ((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 47, $this->source); })())) : ((isset($context["indexMode"]) || array_key_exists("indexMode", $context) ? $context["indexMode"] : (function () { throw new RuntimeError('Variable "indexMode" does not exist.', 47, $this->source); })()))), "sessionVar" => ((            // line 48
array_key_exists("sessionVar", $context)) ? (_twig_default_filter((isset($context["sessionVar"]) || array_key_exists("sessionVar", $context) ? $context["sessionVar"] : (function () { throw new RuntimeError('Variable "sessionVar" does not exist.', 48, $this->source); })()), "lead")) : ("lead")), "target" => ((            // line 49
array_key_exists("target", $context)) ? (_twig_default_filter((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 49, $this->source); })()), ".page-list")) : (".page-list"))]);
            // line 50
            echo "
    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Lead/grid.html.twig";
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
        return array (  140 => 50,  138 => 49,  137 => 48,  136 => 47,  135 => 46,  134 => 45,  133 => 44,  132 => 43,  130 => 42,  127 => 41,  124 => 40,  121 => 39,  118 => 38,  116 => 37,  113 => 36,  111 => 35,  108 => 34,  101 => 31,  97 => 29,  80 => 27,  63 => 26,  60 => 25,  58 => 24,  52 => 22,  48 => 21,  44 => 19,  42 => 18,  35 => 19,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Lead/grid.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Lead\\grid.html.twig");
    }
}
