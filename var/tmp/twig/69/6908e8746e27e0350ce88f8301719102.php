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

/* @MauticSms/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_b038136c7bdd58f49cba2d07ccaae1ec extends Template
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
        // line 1
        $context["item"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 1), "stat", [], "any", true, true, false, 1)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1, $this->source); })()), "extra", [], "any", false, false, false, 1), "stat", [], "any", false, false, false, 1)) : (false));
        // line 2
        if ((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 2, $this->source); })())) {
            // line 3
            echo "    ";
            $context["type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["event"] ?? null), "extra", [], "any", false, true, false, 3), "type", [], "any", true, true, false, 3)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "extra", [], "any", false, false, false, 3), "type", [], "any", false, false, false, 3)) : (null));
            // line 4
            echo "    <p>
        ";
            // line 5
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isFailed", [], "any", true, true, false, 5) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 5, $this->source); })()), "isFailed", [], "any", false, false, false, 5))) && ("failed" == (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 5, $this->source); })())))) {
                // line 6
                echo "            ";
                $context["details"] = $this->env->getFilter('json_decode')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()), "details", [], "any", false, false, false, 6));
                // line 7
                echo "            ";
                $context["errors"] = "";
                // line 8
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, ($context["details"] ?? null), "failed", [], "any", true, true, false, 8)) {
                    // line 9
                    echo "                ";
                    $context["failedDetails"] = twig_get_attribute($this->env, $this->source, (isset($context["details"]) || array_key_exists("details", $context) ? $context["details"] : (function () { throw new RuntimeError('Variable "details" does not exist.', 9, $this->source); })()), "failed", [], "any", false, false, false, 9);
                    // line 10
                    echo "                ";
                    if ( !is_iterable((isset($context["failedDetails"]) || array_key_exists("failedDetails", $context) ? $context["failedDetails"] : (function () { throw new RuntimeError('Variable "failedDetails" does not exist.', 10, $this->source); })()))) {
                        // line 11
                        echo "                    ";
                        $context["failedDetails"] = [(isset($context["failedDetails"]) || array_key_exists("failedDetails", $context) ? $context["failedDetails"] : (function () { throw new RuntimeError('Variable "failedDetails" does not exist.', 11, $this->source); })())];
                        // line 12
                        echo "                ";
                    }
                    // line 13
                    echo "                ";
                    $context["errors"] = twig_join_filter((isset($context["failedDetails"]) || array_key_exists("failedDetails", $context) ? $context["failedDetails"] : (function () { throw new RuntimeError('Variable "failedDetails" does not exist.', 13, $this->source); })()), "<br />");
                    // line 14
                    echo "            ";
                }
                // line 15
                echo "        <span class=\"text-danger mt-0 mb-10\"><i class=\"ri-alert-line\"></i>
            ";
                // line 16
                if ((array_key_exists("errors", $context) &&  !twig_test_empty((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 16, $this->source); })())))) {
                    // line 17
                    echo "                ";
                    echo twig_escape_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 17, $this->source); })()), "html", null, true);
                    echo "
            ";
                } else {
                    // line 19
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.timeline.event.failed"), "html", null, true);
                    echo "
            ";
                }
                // line 21
                echo "        </span>

        ";
            }
            // line 24
            echo "        ";
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "list_name", [], "any", true, true, false, 24) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 24, $this->source); })()), "list_name", [], "any", false, false, false, 24))) && ("failed" != (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })())))) {
                // line 25
                echo "            <br />";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.timeline.event.list", ["%list%" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 25, $this->source); })()), "list_name", [], "any", false, false, false, 25)]), "html", null, true);
                echo "
        ";
            }
            // line 27
            echo "    </p>
";
        }
        // line 29
        echo "
";
        // line 30
        if (array_key_exists("errors", $context)) {
            // line 31
            echo "<p class=\"text-danger mt-0 mb-10\">
    <i class=\"ri-alert-line\"></i> ";
            // line 32
            echo twig_escape_filter($this->env, (($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.campaign.event.last_error") . ": ") . (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 32, $this->source); })())), "html", null, true);
            echo "
</p>
";
        } else {
            // line 35
            echo "<dl class=\"dl-horizontal\">
    <dt>";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.timeline.status"), "html", null, true);
            echo "</dt>
    <dd>
        ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "is_failed", [], "any", true, true, false, 38) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "is_failed", [], "any", false, false, false, 38)))) {
                // line 39
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.stat.failed"), "html", null, true);
                echo "
        ";
            } else {
                // line 41
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send"), "html", null, true);
                echo "
        ";
            }
            // line 43
            echo "    </dd>
    <dt>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.timeline.type"), "html", null, true);
            echo "</dt>
    <dd>";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 45, $this->source); })()), "type", [], "any", false, false, false, 45)), "html", null, true);
            echo "</dd>
</dl>
";
        }
        // line 48
        echo "
";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "message", [], "any", true, true, false, 49) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 49, $this->source); })()), "message", [], "any", false, false, false, 49)))) {
            // line 50
            echo "<div class=\"small\">
    <hr />
    <strong>";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.timeline.content.heading"), "html", null, true);
            echo "</strong>
    <br />
    ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 54, $this->source); })()), "message", [], "any", false, false, false, 54), "html", null, true);
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
        return "@MauticSms/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  174 => 54,  169 => 52,  165 => 50,  163 => 49,  160 => 48,  154 => 45,  150 => 44,  147 => 43,  141 => 41,  135 => 39,  133 => 38,  128 => 36,  125 => 35,  119 => 32,  116 => 31,  114 => 30,  111 => 29,  107 => 27,  101 => 25,  98 => 24,  93 => 21,  87 => 19,  81 => 17,  79 => 16,  76 => 15,  73 => 14,  70 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSms/SubscribedEvents/Timeline/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Resources\\views\\SubscribedEvents\\Timeline\\index.html.twig");
    }
}
