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

/* @MauticUser/SubscribedEvents/Search/global_role.html.twig */
class __TwigTemplate_b03db8ea2dcec0cbf19611f7942282f9 extends Template
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
        echo "
";
        // line 2
        if ((array_key_exists("showMore", $context) &&  !twig_test_empty((isset($context["showMore"]) || array_key_exists("showMore", $context) ? $context["showMore"] : (function () { throw new RuntimeError('Variable "showMore" does not exist.', 2, $this->source); })())))) {
            // line 3
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_role_index", ["filter-user" => (isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 3, $this->source); })())]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
        <span>";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.more", ["%count%" => (isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 4, $this->source); })())]), "html", null, true);
            echo "</span>
    </a>
";
        } else {
            // line 7
            echo "    ";
            if ((isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 7, $this->source); })())) {
                // line 8
                echo "    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_role_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 8, $this->source); })()), "getId", [], "method", false, false, false, 8)]), "html", null, true);
                echo "\" data-toggle=\"ajax\">
        ";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 9, $this->source); })()), "getName", [true], "method", false, false, false, 9), "html", null, true);
                echo "
    </a>
    ";
            } else {
                // line 12
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 12, $this->source); })()), "getName", [true], "method", false, false, false, 12), "html", null, true);
                echo "
    ";
            }
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticUser/SubscribedEvents/Search/global_role.html.twig";
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
        return array (  67 => 12,  61 => 9,  56 => 8,  53 => 7,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticUser/SubscribedEvents/Search/global_role.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\SubscribedEvents\\Search\\global_role.html.twig");
    }
}
