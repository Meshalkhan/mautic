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

/* @MauticEmail/Send/progress.html.twig */
class __TwigTemplate_29cf1616f3898a37abc32cce9f94a0ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
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
        // line 7
        $context["percent"] = ((twig_get_attribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 7, $this->source); })()), 1, [], "array", false, false, false, 7)) ? (twig_round(((twig_get_attribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 7, $this->source); })()), 0, [], "array", false, false, false, 7) / twig_get_attribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 7, $this->source); })()), 1, [], "array", false, false, false, 7)) * 100))) : (100));
        // line 8
        $context["id"] = ((("inprogress" != (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 8, $this->source); })()))) ? ("emailSendProgressComplete") : ("emailSendProgress"));
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticEmail/Send/progress.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "emailSend";
    }

    // line 5
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send.list", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)]));
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <div class=\"row ma-lg email-send-progress\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\">
        <div class=\"col-sm-offset-3 col-sm-6 text-center\">
            <div class=\"panel panel-";
        // line 13
        echo ((("inprogress" != (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 13, $this->source); })()))) ? ("success") : ("danger"));
        echo "\">
                <div class=\"panel-heading\">
                    <h4 class=\"panel-title\">
                        ";
        // line 16
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.email.send." . (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 16, $this->source); })())), ["%subject%" => twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 16, $this->source); })()), "getSubject", [], "method", false, false, false, 16)]));
        echo "
                    </h4>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 20
        if (("inprogress" != (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "                        <h4>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send.stats", ["%sent%" => twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 21, $this->source); })()), "sent", [], "any", false, false, false, 21), "%failed%" => twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 21, $this->source); })()), "failed", [], "any", false, false, false, 21)]), "html", null, true);
            echo "</h4>
                    ";
        }
        // line 23
        echo "                    <div class=\"progress mt-md\" style=\"height:50px;\">
                        <div class=\"progress-bar-send progress-bar progress-bar-striped";
        // line 24
        if (("inprogress" == (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 24, $this->source); })()))) {
            echo " active";
        }
        echo "\"
                             role=\"progressbar\"
                             aria-valuenow=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 26, $this->source); })()), 0, [], "array", false, false, false, 26), "html", null, true);
        echo "\"
                             aria-valuemin=\"0\"
                             aria-valuemax=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 28, $this->source); })()), 1, [], "array", false, false, false, 28), "html", null, true);
        echo "\"
                             style=\"width: ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "%; height: 50px;\"
                             data-batchlimit=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["batchlimit"]) || array_key_exists("batchlimit", $context) ? $context["batchlimit"] : (function () { throw new RuntimeError('Variable "batchlimit" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\"
                             data-email=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
                            <span class=\"sr-only\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "%</span>
                        </div>
                    </div>
                </div>

                ";
        // line 37
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 37, $this->source); })()), "failedRecipients", [], "any", false, false, false, 37))) {
            // line 38
            echo "                    <ul class=\"list-group\">
                        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 39, $this->source); })()), "failedRecipients", [], "any", false, false, false, 39));
            foreach ($context['_seq'] as $context["leadId"] => $context["failedEmail"]) {
                // line 40
                echo "                            <li class=\"list-group-item\">
                                <a target=\"_new\" class=\"text-danger\" href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_action", ["objectAction" => "view", "objectId" => $context["leadId"]]), "html", null, true);
                echo "\">";
                // line 42
                echo twig_escape_filter($this->env, $context["failedEmail"], "html", null, true);
                // line 43
                echo "</a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['leadId'], $context['failedEmail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                    </ul>
                ";
        }
        // line 48
        echo "
                <div class=\"panel-footer\">
                    <span class=\"small\">
                      <span class=\"imported-count\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 51, $this->source); })()), 0, [], "array", false, false, false, 51), "html", null, true);
        echo "</span> / <span class=\"total-count\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 51, $this->source); })()), 1, [], "array", false, false, false, 51), "html", null, true);
        echo "</span>
                    </span>
                    ";
        // line 53
        if (("inprogress" == (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 53, $this->source); })()))) {
            // line 54
            echo "                        <div>
                            <a class=\"text-danger mt-md\"
                               href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "send", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"
                               data-toggle=\"ajax\">";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"), "html", null, true);
            echo "</a>
                        </div>
                    ";
        } else {
            // line 60
            echo "                        <div>
                            <a class=\"text-success mt-md\"
                               href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "send", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\"
                               data-toggle=\"ajax\">";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.done"), "html", null, true);
            echo "</a>
                        </div>
                    ";
        }
        // line 66
        echo "                </div>
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
        return "@MauticEmail/Send/progress.html.twig";
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
        return array (  208 => 66,  202 => 63,  198 => 62,  194 => 60,  188 => 57,  184 => 56,  180 => 54,  178 => 53,  171 => 51,  166 => 48,  162 => 46,  154 => 43,  152 => 42,  149 => 41,  146 => 40,  142 => 39,  139 => 38,  137 => 37,  129 => 32,  125 => 31,  121 => 30,  117 => 29,  113 => 28,  108 => 26,  101 => 24,  98 => 23,  92 => 21,  90 => 20,  83 => 16,  77 => 13,  71 => 11,  67 => 10,  60 => 5,  53 => 3,  48 => 1,  46 => 8,  44 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/Send/progress.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\Send\\progress.html.twig");
    }
}
