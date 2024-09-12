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

/* @MauticWebhook/Webhook/list.html.twig */
class __TwigTemplate_f5e3c9b6aa1bdd9bf23b177e47babf3b extends Template
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
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
            'listResults' => [$this, 'block_listResults'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 5, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticWebhook/Webhook/list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 2, $this->source); })()) == "index")) ? (true) : (false));
        // line 3
        $context["tmpl"] = "list";
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.webhooks", [], "messages");
    }

    // line 8
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "mauticWebhook";
    }

    // line 10
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 14, $this->source); })()), "webhook:webhooks:create", [], "array", false, false, false, 14)], "routeBase" => "webhook"]);
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "<div class=\"panel panel-default bdr-t-wdh-0 mb-0\">";
            // line 23
            echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>             // line 25
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 25, $this->source); })()), "searchHelp" => "mautic.page.help.searchcommands", "action" =>             // line 27
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 27, $this->source); })())]);
            // line 29
            echo "<div class=\"page-list\">
        ";
            // line 30
            $this->displayBlock("listResults", $context, $blocks);
            echo "
    </div>
</div>
";
        } else {
            // line 34
            echo "    ";
            $this->displayBlock("listResults", $context, $blocks);
            echo "
";
        }
    }

    // line 38
    public function block_listResults($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        if ((array_key_exists("items", $context) &&  !twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 39, $this->source); })())))) {
            // line 40
            echo "    <div class=\"table-responsive panel-collapse pull out webhook-list\">
        <table class=\"table table-hover webhook-list\" id=\"webhookTable\">
            <thead>
            <tr>";
            // line 44
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#webhookTable", "routeBase" => "webhook", "templateButtons" => ["delete" => (twig_get_attribute($this->env, $this->source,             // line 50
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 50, $this->source); })()), "webhook:webhooks:deleteown", [], "array", false, false, false, 50) || twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 50, $this->source); })()), "webhook:webhooks:deleteother", [], "array", false, false, false, 50))]]);
            // line 53
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "mautic_webhook", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-webhook-name", "default" => true]);
            // line 61
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "mautic_webhook", "orderBy" => "e.webhookUrl", "text" => "mautic.webhook.webhook_url", "class" => "col-webhook-id visible-md visible-lg"]);
            // line 68
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "mautic_webhook", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "col-webhook-id visible-md visible-lg"]);
            // line 75
            echo "</tr>
            </thead>
            <tbody>
                ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 78, $this->source); })()));
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
                // line 79
                echo "                <tr>
                    <td>";
                // line 81
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 83
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 86
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 86, $this->source); })()), "webhook:webhooks:editown", [], "array", false, false, false, 86), twig_get_attribute($this->env, $this->source,                 // line 87
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 87, $this->source); })()), "webhook:webhooks:editother", [], "array", false, false, false, 87), twig_get_attribute($this->env, $this->source,                 // line 88
$context["item"], "getCreatedBy", [], "method", false, false, false, 88)), "clone" => twig_get_attribute($this->env, $this->source,                 // line 90
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 90, $this->source); })()), "webhook:webhooks:create", [], "array", false, false, false, 90), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,                 // line 92
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 92, $this->source); })()), "webhook:webhooks:deleteown", [], "array", false, false, false, 92), twig_get_attribute($this->env, $this->source,                 // line 93
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 93, $this->source); })()), "webhook:webhooks:deleteother", [], "array", false, false, false, 93), twig_get_attribute($this->env, $this->source,                 // line 94
$context["item"], "getCreatedBy", [], "method", false, false, false, 94))], "routeBase" => "webhook"]);
                // line 99
                echo "</td>
                    <td>
                        <div>";
                // line 102
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 104
$context["item"], "model" => "webhook"]);
                // line 107
                echo "
                            <a data-toggle=\"ajax\" href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_webhook_action", ["objectId" => twig_get_attribute($this->env, $this->source,                 // line 110
$context["item"], "getId", [], "method", false, false, false, 110), "objectAction" => "view"]), "html", null, true);
                // line 111
                echo "\">
                                ";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getName", [], "method", false, false, false, 112), "html", null, true);
                echo "
                            </a>
                            ";
                // line 114
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", true, true, false, 114) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 114)))) {
                    // line 115
                    echo "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 116
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 116));
                    echo "</small>
                            </div>
                            ";
                }
                // line 119
                echo "                        </div>
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getWebhookUrl", [], "method", false, false, false, 121), "html", null, true);
                echo "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 122), "html", null, true);
                echo " </td>
                </tr>
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
            // line 125
            echo "            </tbody>
        </table>
    </div>

    <div class=\"panel-footer\">";
            // line 130
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 132
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 132, $this->source); })())), "page" =>             // line 133
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 133, $this->source); })()), "limit" =>             // line 134
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 134, $this->source); })()), "menuLinkId" => "mautic_webhook_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_webhook_index"), "sessionVar" => "mautic_webhook"]);
            // line 139
            echo "
    </div>
";
        } else {
            // line 142
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
        return "@MauticWebhook/Webhook/list.html.twig";
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
        return array (  235 => 142,  230 => 139,  228 => 134,  227 => 133,  226 => 132,  225 => 130,  219 => 125,  202 => 122,  198 => 121,  194 => 119,  188 => 116,  185 => 115,  183 => 114,  178 => 112,  175 => 111,  173 => 110,  172 => 108,  169 => 107,  167 => 104,  166 => 102,  162 => 99,  160 => 94,  159 => 93,  158 => 92,  157 => 90,  156 => 88,  155 => 87,  154 => 86,  153 => 83,  152 => 81,  149 => 79,  132 => 78,  127 => 75,  125 => 68,  123 => 61,  121 => 53,  119 => 50,  118 => 44,  113 => 40,  111 => 39,  107 => 38,  99 => 34,  92 => 30,  89 => 29,  87 => 27,  86 => 25,  85 => 23,  83 => 22,  81 => 21,  77 => 20,  73 => 14,  72 => 11,  68 => 10,  61 => 8,  54 => 7,  50 => 5,  48 => 3,  46 => 2,  39 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticWebhook/Webhook/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Resources\\views\\Webhook\\list.html.twig");
    }
}
