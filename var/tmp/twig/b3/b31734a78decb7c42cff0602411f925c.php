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

/* @MauticAsset/SubscribedEvents/Timeline/index.html.twig */
class __TwigTemplate_9b2c89b12acad2add107b05884e839da extends Template
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
        echo "<div>
Hello";
        // line 3
        echo twig_include($this->env, $context, "@MauticAsset/Asset/preview.html.twig", ["activeAsset" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "extra", [], "any", false, false, false, 3), "asset", [], "any", false, false, false, 3), "assetDownloadUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_asset_action", ["objectAction" => "preview", "objectId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "extra", [], "any", false, false, false, 5), "asset", [], "any", false, false, false, 5), "getId", [], "method", false, false, false, 5)])]);
        // line 7
        echo "</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticAsset/SubscribedEvents/Timeline/index.html.twig";
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
        return array (  43 => 7,  41 => 5,  40 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticAsset/SubscribedEvents/Timeline/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Resources\\views\\SubscribedEvents\\Timeline\\index.html.twig");
    }
}
