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

/* @MauticCore/Slots/imagecard.html.twig */
class __TwigTemplate_c7a2be30bb14cf057ce6beae3c8ef722 extends Template
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
        echo "<table class=\"imagecard\" align=\"center\" style=\"background-color: #ddd;\">
    <tr><td class=\"imagecard-image\" align=\"center\"><img width=\"100%\" src=\"";
        // line 2
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/blank-big.png", null, null, true);
        echo "\" alt=\"An image\"/></td></tr>
    <tr><td class=\"imagecard-caption\" style=\"line-height:16px;padding: 5px;background-color: #bbb;font-size:16px;color:#000\" align=\"center\">Your image caption goes here. You can change the position of the caption and style in the customize slot tab.</td></tr>
</table>
<div style=\"clear:both\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Slots/imagecard.html.twig";
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
        return new Source("", "@MauticCore/Slots/imagecard.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Slots\\imagecard.html.twig");
    }
}
