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

/* @MauticDashboard/Dashboard/recentactivity.html.twig */
class __TwigTemplate_c0d050f4f824c022330188daa0043fc7 extends Template
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
        if ((array_key_exists("logs", $context) && is_iterable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "    <div class=\"pt-md pr-md pb-md pl-md\">
        <ul class=\"media-list media-list-feed\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 4, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 5
                echo "                <li class=\"media\">
                    <div class=\"media-object pull-left\">
                        <span class=\"figure featured ";
                // line 7
                if (("create" == twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 7))) {
                    echo "bg-success";
                }
                echo "\">
                            <span class=\"fa ";
                // line 8
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["icons"] ?? null), twig_get_attribute($this->env, $this->source, $context["log"], "bundle", [], "any", false, false, false, 8), [], "array", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["icons"] ?? null), twig_get_attribute($this->env, $this->source, $context["log"], "bundle", [], "any", false, false, false, 8), [], "array", false, false, false, 8), "")) : ("")), "html", null, true);
                echo "\"></span>
                        </span>
                    </div>
                    <div class=\"media-body\">
                        ";
                // line 12
                if ((twig_get_attribute($this->env, $this->source, $context["log"], "userId", [], "any", true, true, false, 12) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 12)))) {
                    // line 13
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 13)]), "html", null, true);
                    echo "\" data-toggle=\"ajax\">
                                ";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 14), "html", null, true);
                    echo "
                            </a>
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 16
$context["log"], "userName", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 17), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 19
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.system"), "html", null, true);
                    echo "
                        ";
                }
                // line 21
                echo "                        ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.dashboard." . twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 21)) . ".past.tense")), "html", null, true);
                echo "

                        ";
                // line 23
                if (twig_get_attribute($this->env, $this->source, $context["log"], "route", [], "any", true, true, false, 23)) {
                    // line 24
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "route", [], "any", false, false, false, 24), "html", null, true);
                    echo "\" data-toggle=\"ajax\">
                                ";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "objectName", [], "any", false, false, false, 25), "html", null, true);
                    echo "
                            </a>
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 27
$context["log"], "objectName", [], "any", true, true, false, 27)) {
                    // line 28
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "objectName", [], "any", false, false, false, 28), "html", null, true);
                    echo "
                        ";
                }
                // line 30
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "object", [], "any", false, false, false, 30), "html", null, true);
                echo "
                        <p class=\"fs-12 dark-sm\"><small> ";
                // line 31
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["log"], "dateAdded", [], "any", false, false, false, 31));
                echo "</small></p>
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "        </ul>
    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticDashboard/Dashboard/recentactivity.html.twig";
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
        return array (  131 => 35,  121 => 31,  116 => 30,  110 => 28,  108 => 27,  103 => 25,  98 => 24,  96 => 23,  90 => 21,  84 => 19,  78 => 17,  76 => 16,  71 => 14,  66 => 13,  64 => 12,  57 => 8,  51 => 7,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticDashboard/Dashboard/recentactivity.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DashboardBundle\\Resources\\views\\Dashboard\\recentactivity.html.twig");
    }
}
