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

/* @MauticCore/Slots/imagecaption.html.twig */
class __TwigTemplate_0e7323cf6a29b3ed628cbaaac83af7dd extends Template
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
        echo "<figure style=\"text-align:center;\">
    <img src=\"";
        // line 2
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/blank.png", null, null, true);
        echo "\" alt=\"An image\"/>
    <figcaption style=\"line-height:16px;padding: 5px;color:#000;font-size:16px;text-align: left;\">Your image caption goes here. You can change the position of the caption and style in the customize slot tab.</figcaption>
</figure>
<div style=\"clear:both\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Slots/imagecaption.html.twig";
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
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Slots/imagecaption.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Slots\\imagecaption.html.twig");
    }
}
