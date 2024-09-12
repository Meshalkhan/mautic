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

/* @MauticCore/Helper/recentactivity.html.twig */
class __TwigTemplate_98a3ab453db07d2828406c71347ead4c extends Template
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
        echo "<div class=\"panel bg-transparent shd-none bdr-rds-0 bdr-w-0 mb-0\">
    <div class=\"panel-heading\">
        <div class=\"panel-title\">";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.recent.activity", [], "messages");
        echo "</div>
    </div>
    <div class=\"panel-body pt-xs\">
        ";
        // line 6
        if ((array_key_exists("logs", $context) &&  !twig_test_empty((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 6, $this->source); })())))) {
            // line 7
            echo "        <ul class=\"media-list media-list-feed\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) || array_key_exists("logs", $context) ? $context["logs"] : (function () { throw new RuntimeError('Variable "logs" does not exist.', 8, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 9
                echo "            <li class=\"media\">
                <div class=\"media-object pull-left\">
                ";
                // line 11
                if ((twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 11) == "create")) {
                    // line 12
                    echo "                    <span class=\"figure featured bg-success\"><span class=\"ri-check-line\"></span></span>
                ";
                } else {
                    // line 14
                    echo "                    <span class=\"figure\"></span>
                ";
                }
                // line 16
                echo "                </div>
                <div class=\"media-body\">
                    ";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((("mautic.core." . twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 18)) . ".by.past.tense")), "html", null, true);
                echo "
                    ";
                // line 19
                if ((twig_get_attribute($this->env, $this->source, $context["log"], "userId", [], "any", true, true, false, 19) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 19)))) {
                    // line 20
                    echo "                        <a 
                            href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_user_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, $context["log"], "userId", [], "any", false, false, false, 21)]), "html", null, true);
                    echo "\"
                            data-toggle=\"ajax\"
                        >";
                    // line 23
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 23), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 25
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "userName", [], "any", false, false, false, 25), "html", null, true);
                    echo "
                    ";
                }
                // line 27
                echo "                    <p class=\"fs-12 dark-sm\"><small> ";
                echo $this->extensions['Mautic\CoreBundle\Twig\Extension\DateExtension']->toFull(twig_get_attribute($this->env, $this->source, $context["log"], "dateAdded", [], "any", false, false, false, 27));
                echo "</small></p>
                </div>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </ul>
        ";
        }
        // line 33
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/recentactivity.html.twig";
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
        return array (  114 => 33,  110 => 31,  99 => 27,  93 => 25,  88 => 23,  83 => 21,  80 => 20,  78 => 19,  74 => 18,  70 => 16,  66 => 14,  62 => 12,  60 => 11,  56 => 9,  52 => 8,  49 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/recentactivity.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\recentactivity.html.twig");
    }
}
