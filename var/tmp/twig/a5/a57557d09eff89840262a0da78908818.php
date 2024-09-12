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

/* @MauticEmail/SubscribedEvents/Dashboard/Sent.email.to.contacts.html.twig */
class __TwigTemplate_8d27506f55dcb1cd6732ae7fc2013a66 extends Template
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
        // line 9
        $context["class"] = ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 9, $this->source); })()), "table")) : ("table"));
        // line 10
        $context["shortenLinkText"] = ((array_key_exists("shortenLinkText", $context)) ? (_twig_default_filter((isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 10, $this->source); })()), 30)) : (30));
        // line 11
        $context["showHeaders"] = ["mautic.dashboard.label.contact.email.address", "mautic.dashboard.label.contact.open", "mautic.dashboard.label.contact.click", "mautic.dashboard.label.email.name", "mautic.dashboard.label.segment.name", "mautic.dashboard.label.company.name", "mautic.dashboard.label.campaign.name"];
        // line 20
        $context["showValues"] = ["contact_email", "open", "click", "email_name", "segment_name", "company_name", "campaign_name"];
        // line 29
        echo "<table class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 30
        if ( !twig_test_empty((isset($context["headItems"]) || array_key_exists("headItems", $context) ? $context["headItems"] : (function () { throw new RuntimeError('Variable "headItems" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "        <thead>
          <tr>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["headItems"]) || array_key_exists("headItems", $context) ? $context["headItems"] : (function () { throw new RuntimeError('Variable "headItems" does not exist.', 33, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["headItem"]) {
                // line 34
                echo "              ";
                if (twig_in_filter($context["headItem"], (isset($context["showHeaders"]) || array_key_exists("showHeaders", $context) ? $context["showHeaders"] : (function () { throw new RuntimeError('Variable "showHeaders" does not exist.', 34, $this->source); })()))) {
                    // line 35
                    echo "                <th>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["headItem"]), "html", null, true);
                    echo "</th>
              ";
                }
                // line 37
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['headItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "          </tr>
        </thead>
    ";
        }
        // line 41
        echo "    ";
        if ( !twig_test_empty((isset($context["bodyItems"]) || array_key_exists("bodyItems", $context) ? $context["bodyItems"] : (function () { throw new RuntimeError('Variable "bodyItems" does not exist.', 41, $this->source); })()))) {
            // line 42
            echo "        <tbody>
            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["bodyItems"]) || array_key_exists("bodyItems", $context) ? $context["bodyItems"] : (function () { throw new RuntimeError('Variable "bodyItems" does not exist.', 43, $this->source); })()));
            foreach ($context['_seq'] as $context["id"] => $context["row"]) {
                // line 44
                echo "                <tr>
                    ";
                // line 45
                if (is_iterable($context["row"])) {
                    // line 46
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["row"]);
                    foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                        // line 47
                        echo "                            ";
                        if (twig_in_filter($context["key"], (isset($context["showValues"]) || array_key_exists("showValues", $context) ? $context["showValues"] : (function () { throw new RuntimeError('Variable "showValues" does not exist.', 47, $this->source); })()))) {
                            // line 48
                            echo "                            <td>
                                ";
                            // line 49
                            if ((("contact_email" == $context["key"]) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["row"], "contact_id", [], "any", false, false, false, 49)))) {
                                // line 50
                                echo "                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["row"], "contact_id", [], "any", false, false, false, 50)]), "html", null, true);
                                echo "\"
                                        title=\"";
                                // line 51
                                echo twig_escape_filter($this->env, $context["item"]);
                                echo "\"
                                        data-toggle=\"ajax\">
                                        ";
                                // line 53
                                echo twig_escape_filter($this->env, twig_slice($this->env, $context["item"], 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 53, $this->source); })())), "html", null, true);
                                echo "
                                    </a>
                                ";
                            } elseif ((("email_name" ==                             // line 55
$context["key"]) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["row"], "email_id", [], "any", false, false, false, 55)))) {
                                // line 56
                                echo "                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["row"], "email_id", [], "any", false, false, false, 56)]), "html", null, true);
                                echo "\"
                                        title=\"";
                                // line 57
                                echo twig_escape_filter($this->env, $context["item"]);
                                echo "\"
                                        data-toggle=\"ajax\">
                                        ";
                                // line 59
                                echo twig_escape_filter($this->env, twig_slice($this->env, $context["item"], 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 59, $this->source); })())), "html", null, true);
                                echo "
                                    </a>
                                ";
                            } elseif ((("segment_name" ==                             // line 61
$context["key"]) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["row"], "segment_id", [], "any", false, false, false, 61)))) {
                                // line 62
                                echo "                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_segment_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["row"], "segment_id", [], "any", false, false, false, 62)]), "html", null, true);
                                echo "\"
                                        title=\"";
                                // line 63
                                echo twig_escape_filter($this->env, $context["item"]);
                                echo "\"
                                        data-toggle=\"ajax\">
                                        ";
                                // line 65
                                echo twig_escape_filter($this->env, twig_slice($this->env, $context["item"], 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 65, $this->source); })())), "html", null, true);
                                echo "
                                    </a>
                                ";
                            } elseif ((("company_name" ==                             // line 67
$context["key"]) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["row"], "company_id", [], "any", false, false, false, 67)))) {
                                // line 68
                                echo "                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_company_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, $context["row"], "company_id", [], "any", false, false, false, 68)]), "html", null, true);
                                echo "\"
                                        title=\"";
                                // line 69
                                echo twig_escape_filter($this->env, $context["item"]);
                                echo "\"
                                        data-toggle=\"ajax\">
                                        ";
                                // line 71
                                echo twig_escape_filter($this->env, twig_slice($this->env, $context["item"], 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 71, $this->source); })())), "html", null, true);
                                echo "
                                    </a>
                                ";
                            } elseif ((("campaign_name" ==                             // line 73
$context["key"]) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["row"], "campaign_id", [], "any", false, false, false, 73)))) {
                                // line 74
                                echo "                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_campaign_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, $context["row"], "campaign_id", [], "any", false, false, false, 74)]), "html", null, true);
                                echo "\"
                                        title=\"";
                                // line 75
                                echo twig_escape_filter($this->env, $context["item"]);
                                echo "\"
                                        data-toggle=\"ajax\">
                                        ";
                                // line 77
                                echo twig_escape_filter($this->env, twig_slice($this->env, $context["item"], 0, (isset($context["shortenLinkText"]) || array_key_exists("shortenLinkText", $context) ? $context["shortenLinkText"] : (function () { throw new RuntimeError('Variable "shortenLinkText" does not exist.', 77, $this->source); })())), "html", null, true);
                                echo "
                                    </a>
                                ";
                            } else {
                                // line 80
                                echo "                                    ";
                                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                                echo "
                                ";
                            }
                            // line 82
                            echo "                            </td>
                            ";
                        }
                        // line 84
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 85
                    echo "                    ";
                }
                // line 86
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "        </tbody>
    ";
        }
        // line 90
        echo "</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/SubscribedEvents/Dashboard/Sent.email.to.contacts.html.twig";
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
        return array (  222 => 90,  218 => 88,  211 => 86,  208 => 85,  202 => 84,  198 => 82,  192 => 80,  186 => 77,  181 => 75,  176 => 74,  174 => 73,  169 => 71,  164 => 69,  159 => 68,  157 => 67,  152 => 65,  147 => 63,  142 => 62,  140 => 61,  135 => 59,  130 => 57,  125 => 56,  123 => 55,  118 => 53,  113 => 51,  108 => 50,  106 => 49,  103 => 48,  100 => 47,  95 => 46,  93 => 45,  90 => 44,  86 => 43,  83 => 42,  80 => 41,  75 => 38,  69 => 37,  63 => 35,  60 => 34,  56 => 33,  52 => 31,  50 => 30,  45 => 29,  43 => 20,  41 => 11,  39 => 10,  37 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/SubscribedEvents/Dashboard/Sent.email.to.contacts.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\SubscribedEvents\\Dashboard\\Sent.email.to.contacts.html.twig");
    }
}
