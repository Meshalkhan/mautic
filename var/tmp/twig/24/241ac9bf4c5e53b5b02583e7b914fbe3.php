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

/* @MauticPage/SubscribedEvents/PageToken/sharebtn_css.html.twig */
class __TwigTemplate_87477756e0e7ec2675a6fa28660184ce extends Template
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
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->addScriptDeclaration(".share-buttons { display: block; }
.share-button { float: left; margin-right: 5px; }
.share-button.facebook-share-button.layout-box_count.action-like  iframe { width: 50px !important; }
.share-button.facebook-share-button.layout-box_count { margin-right: 10px !important; }
.share-button.twitter-share-button.layout-horizontal { width: 75px !important; }"), "html", null, true);
        // line 5
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPage/SubscribedEvents/PageToken/sharebtn_css.html.twig";
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
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/SubscribedEvents/PageToken/sharebtn_css.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\SubscribedEvents\\PageToken\\sharebtn_css.html.twig");
    }
}
