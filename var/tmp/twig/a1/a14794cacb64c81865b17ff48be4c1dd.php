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

/* @MauticAsset/SubscribedEvents/Search/global.html.twig */
class __TwigTemplate_57246008c7a9dd1f38fd632ccda1649b extends Template
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_asset_index", ["search" => (isset($context["searchString"]) || array_key_exists("searchString", $context) ? $context["searchString"] : (function () { throw new RuntimeError('Variable "searchString" does not exist.', 2, $this->source); })())]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
    <span>";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.search.more", ["%count%" => (isset($context["remaining"]) || array_key_exists("remaining", $context) ? $context["remaining"] : (function () { throw new RuntimeError('Variable "remaining" does not exist.', 3, $this->source); })())]));
            echo "</span>
</a>
";
        } else {
            // line 6
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_asset_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["asset"]) || array_key_exists("asset", $context) ? $context["asset"] : (function () { throw new RuntimeError('Variable "asset" does not exist.', 6, $this->source); })()), "getId", [], "method", false, false, false, 6)]), "html", null, true);
            echo "\" data-toggle=\"ajax\">
    ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["asset"]) || array_key_exists("asset", $context) ? $context["asset"] : (function () { throw new RuntimeError('Variable "asset" does not exist.', 7, $this->source); })()), "getTitle", [], "method", false, false, false, 7));
            echo "
    <span class=\"label label-default pull-right\" data-toggle=\"tooltip\" title=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.downloadcount", [], "messages");
            echo "\" data-placement=\"left\">
        ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["asset"]) || array_key_exists("asset", $context) ? $context["asset"] : (function () { throw new RuntimeError('Variable "asset" does not exist.', 9, $this->source); })()), "getDownloadCount", [], "method", false, false, false, 9), "html", null, true);
            echo "
    </span>
</a>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticAsset/SubscribedEvents/Search/global.html.twig";
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
        return array (  63 => 9,  59 => 8,  55 => 7,  50 => 6,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticAsset/SubscribedEvents/Search/global.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Resources\\views\\SubscribedEvents\\Search\\global.html.twig");
    }
}
