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

/* @MauticInstall/Install/navbar.html.twig */
class __TwigTemplate_650271da93dbbd6c3bd6ec229b158e3f extends Template
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
        // line 7
        echo "
";
        // line 8
        $context["start"] = 1;
        // line 9
        echo "<div id=\"stepNavigation\" class=\"hidden-xs\">
    <ul class=\"horizontal-step\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 11, $this->source); })()) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["start"]) {
            // line 12
            echo "        <li";
            echo ((($context["start"] == (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 12, $this->source); })()))) ? (" class=\"active\"") : (""));
            echo ">
            ";
            // line 13
            $context["url"] = ((((($context["start"] == (isset($context["step"]) || array_key_exists("step", $context) ? $context["step"] : (function () { throw new RuntimeError('Variable "step" does not exist.', 13, $this->source); })())) || twig_in_filter($context["start"], (isset($context["completedSteps"]) || array_key_exists("completedSteps", $context) ? $context["completedSteps"] : (function () { throw new RuntimeError('Variable "completedSteps" does not exist.', 13, $this->source); })()))) || twig_in_filter(($context["start"] - 1), (isset($context["completedSteps"]) || array_key_exists("completedSteps", $context) ? $context["completedSteps"] : (function () { throw new RuntimeError('Variable "completedSteps" does not exist.', 13, $this->source); })())))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_installer_step", ["index" => $context["start"]])) : ("#"));
            // line 14
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 14, $this->source); })()), "html", null, true);
            echo "\" class=\"steps";
            echo ((("#" == (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 14, $this->source); })()))) ? (" disabled") : (""));
            echo "\">
                <span class=\"steps-figure\">";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.install.step." . $context["start"])), "html", null, true);
            echo "</span>
            </a>
        </li>
        ";
            // line 18
            $context["start"] = ($context["start"] + 1);
            // line 19
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['start'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
    <div class=\"clearfix\"></div>
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticInstall/Install/navbar.html.twig";
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
        return array (  78 => 20,  72 => 19,  70 => 18,  64 => 15,  57 => 14,  55 => 13,  50 => 12,  46 => 11,  42 => 9,  40 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticInstall/Install/navbar.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\Resources\\views\\Install\\navbar.html.twig");
    }
}
