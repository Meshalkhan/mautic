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

/* @MauticWebhook/Webhook/details.html.twig */
class __TwigTemplate_0de9418e28cc6915e56b30c207589ff5 extends Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticWebhook/Webhook/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 3, $this->source); })()), "getName", [], "method", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "mauticWebhook";
    }

    // line 6
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 9
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 9, $this->source); })()), "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 12, $this->source); })()), "webhook:webhooks:editown", [], "array", false, false, false, 12), twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 13, $this->source); })()), "webhook:webhooks:editother", [], "array", false, false, false, 13), twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 14, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 14)), "clone" => twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), "webhook:webhooks:create", [], "array", false, false, false, 16), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->hasEntityAccess(twig_get_attribute($this->env, $this->source,         // line 18
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 18, $this->source); })()), "webhook:webhooks:deleteown", [], "array", false, false, false, 18), twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 19, $this->source); })()), "webhook:webhooks:deleteother", [], "array", false, false, false, 19), twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 20, $this->source); })()), "getCreatedBy", [], "method", false, false, false, 20))], "routeBase" => "webhook"]);
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- left section -->
    <div class=\"col-md-9 height-auto\">
        <div>
            <!-- page detail header -->
            <div class=\"pr-md pl-md pt-lg pb-lg\">
                <div class=\"box-layout\">
                    <div class=\"col-xs-10\">
                        <div class=\"text-muted\">";
        // line 37
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()), "getDescription", [], "method", false, false, false, 37));
        echo "</div>
                    </div>
                    <div class=\"col-xs-2 text-right\">";
        // line 40
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["entity" =>         // line 42
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 42, $this->source); })())]);
        // line 44
        echo "
                    </div>
                </div>
            </div>
            <!--/ page detail header -->
        </div>
        <div class=\"pa-md\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 53
        $context["hookLog"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 53, $this->source); })()), "getLimitedLogs", [], "method", false, false, false, 53);
        // line 54
        echo "                    ";
        if (twig_test_empty((isset($context["hookLog"]) || array_key_exists("hookLog", $context) ? $context["hookLog"] : (function () { throw new RuntimeError('Variable "hookLog" does not exist.', 54, $this->source); })()))) {
            // line 55
            echo "                        <div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\" style=\"white-space: normal;\">
                            <h4>
                                ";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.no.logs", [], "messages");
            // line 58
            echo "                            </h4>
                            <p>
                                ";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.no.logs_desc", [], "messages");
            // line 61
            echo "                            </p>
                        </div>
                    ";
        } else {
            // line 64
            echo "                        <table class=\"table table-responsive\">
                            <thead>
                                <tr>
                                    <th>
                                        ";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.id", [], "messages");
            // line 69
            echo "                                    </th>
                                    <th>
                                        ";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.status", [], "messages");
            // line 72
            echo "                                    </th>
                                    <th>
                                        ";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.note", [], "messages");
            // line 75
            echo "                                    </th>
                                    <th>
                                        ";
            // line 77
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.runtime", [], "messages");
            // line 78
            echo "                                    </th>
                                    <th>
                                        ";
            // line 80
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.date.added", [], "messages");
            // line 81
            echo "                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 85
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hookLog"]) || array_key_exists("hookLog", $context) ? $context["hookLog"] : (function () { throw new RuntimeError('Variable "hookLog" does not exist.', 85, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 86
                echo "                                    <tr>
                                        <td>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "getId", [], "method", false, false, false, 87), "html", null, true);
                echo "</td>
                                        <td>";
                // line 88
                echo twig_include($this->env, $context, "@MauticWebhook/Helper/labelcode.html.twig", ["code" => twig_get_attribute($this->env, $this->source,                 // line 90
$context["log"], "getStatusCode", [], "method", false, false, false, 90)]);
                // line 92
                echo "</td>
                                        <td>";
                // line 93
                echo twig_escape_filter($this->env, (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["log"], "getNote", [], "method", false, false, false, 93))) ? (twig_get_attribute($this->env, $this->source, $context["log"], "getNote", [], "method", false, false, false, 93)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.webhook.webhook.logs.empty.response"))), "html", null, true);
                echo "</td>
                                        <td>";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "getRuntime", [], "method", false, false, false, 94), "html", null, true);
                echo " s</td>
                                        <td>";
                // line 95
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["log"], "getDateAdded", [], "method", false, false, false, 95));
                echo "</td>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "                            </tbody>
                        </table>
                        <div class=\"alert alert-info col-md-6 col-md-offset-3 mt-md\">
                            <h4>
                                ";
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.webhook.logs.title", [], "messages");
            // line 103
            echo "                            </h4>
                            <p>
                                ";
            // line 105
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.webhook.logs.desc", [], "messages");
            // line 106
            echo "                            </p>
                        </div>
                    ";
        }
        // line 109
        echo "                </div>
            </div>
        </div>
    </div>

    <!-- right section -->
    <div class=\"col-md-3 bdr-l height-auto\">
        <!-- preview URL -->
        <div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mt-sm mb-0\">
            <div class=\"panel-heading\">
                <div class=\"panel-title\">";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.webhook.webhook_url", [], "messages");
        echo "</div>
            </div>
            <div class=\"panel-body pt-xs\">
                <div class=\"input-group\">
                    <input onclick=\"this.setSelectionRange(0, this.value.length);\" type=\"text\" class=\"form-control\" readonly
                           value=\"";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 124, $this->source); })()), "getWebhookUrl", [], "method", false, false, false, 124), "html_attr");
        echo "\" />
                    <span class=\"input-group-btn\">
                        <button class=\"btn btn-default btn-nospin\" onclick=\"window.open('";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 126, $this->source); })()), "getWebhookUrl", [], "method", false, false, false, 126), "html_attr");
        echo "', '_blank');\">
                            <i class=\"ri-external-link-line\"></i>
                        </button>
                    </span>
                </div>
            </div>

            <hr class=\"hr-w-2\" style=\"width:50%\">

            <!-- recent activity -->";
        // line 136
        echo twig_include($this->env, $context, "@MauticCore/Helper/recentactivity.html.twig", ["logs" =>         // line 138
(isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 138, $this->source); })())]);
        // line 140
        echo "
        </div>
    </div>
    <!--/ right section -->
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticWebhook/Webhook/details.html.twig";
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
        return array (  287 => 140,  285 => 138,  284 => 136,  272 => 126,  267 => 124,  259 => 119,  247 => 109,  242 => 106,  240 => 105,  236 => 103,  234 => 102,  228 => 98,  211 => 95,  207 => 94,  203 => 93,  200 => 92,  198 => 90,  197 => 88,  193 => 87,  190 => 86,  173 => 85,  167 => 81,  165 => 80,  161 => 78,  159 => 77,  155 => 75,  153 => 74,  149 => 72,  147 => 71,  143 => 69,  141 => 68,  135 => 64,  130 => 61,  128 => 60,  124 => 58,  122 => 57,  118 => 55,  115 => 54,  113 => 53,  102 => 44,  100 => 42,  99 => 40,  94 => 37,  83 => 28,  79 => 27,  75 => 20,  74 => 19,  73 => 18,  72 => 16,  71 => 14,  70 => 13,  69 => 12,  68 => 9,  67 => 7,  63 => 6,  56 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticWebhook/Webhook/details.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Resources\\views\\Webhook\\details.html.twig");
    }
}
