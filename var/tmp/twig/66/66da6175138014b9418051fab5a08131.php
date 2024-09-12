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

/* @MauticUser/SubscribedEvents/Search/global_user.html.twig */
class __TwigTemplate_44ec34cd730fe4496bc12cd41f64e5d0 extends Template
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
        if ((array_key_exists("showMore", $context) &&  !twig_test_empty((isset($context["showMore"]) || array_key_exists("showMore", $context) ? $context["showMore"] : (function () { throw new RuntimeError('Variable "showMore" does not exist.', 1, $this->source); })())))) {
            // line 2
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_user_index", ["filter-user" => (isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 2, $this->source); })())]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
    <span><";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.more", ["%count%" => (isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 3, $this->source); })())]), "html", null, true);
            echo "</span>
</a>
";
        } else {
            // line 6
            echo "<div>
    <span class=\"pull-left pr-xs pt-xs\" style=\"width:36px\">
        <span class=\"img-wrapper img-rounded\"><img src=\"";
            // line 8
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\GravatarExtension']->getImage(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 8, $this->source); })()), "getEmail", [], "method", false, false, false, 8), "100");
            echo "\" /></span>
    </span>
    ";
            // line 10
            if ((isset($context["canEdit"]) || array_key_exists("canEdit", $context) ? $context["canEdit"] : (function () { throw new RuntimeError('Variable "canEdit" does not exist.', 10, $this->source); })())) {
                // line 11
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_user_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "getId", [], "method", false, false, false, 11)]), "html", null, true);
                echo "\" data-toggle=\"ajax\">
            ";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "getName", [true], "method", false, false, false, 12), "html", null, true);
                echo "
        </a>
    ";
            } else {
                // line 15
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "getName", [true], "method", false, false, false, 15), "html", null, true);
                echo "
    ";
            }
            // line 17
            echo "
    <div><small>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "getPosition", [], "method", false, false, false, 18), "html", null, true);
            echo "</small></div>
    <div class=\"clearfix\"></div>
</div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticUser/SubscribedEvents/Search/global_user.html.twig";
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
        return array (  81 => 18,  78 => 17,  72 => 15,  66 => 12,  61 => 11,  59 => 10,  54 => 8,  50 => 6,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticUser/SubscribedEvents/Search/global_user.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\SubscribedEvents\\Search\\global_user.html.twig");
    }
}
