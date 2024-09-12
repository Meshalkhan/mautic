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

/* @MauticCore/Slots/socialfollow.html.twig */
class __TwigTemplate_9f5e7854ceed542a4f61c6dd406ea884 extends Template
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
        echo "<div class=\"socialfollow\">
    <a id=\"flink\" href=\"http://www.facebook.com\" target=\"_blank\"><img
            src=\"";
        // line 3
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/neopolitan/img/facebook.gif", null, null, true);
        echo "\"
            alt=\"facebook\"
            class=\"fr-view fr-dii fr-draggable\"></a>
    <a id=\"tlink\" href=\"http://www.twitter.com\" target=\"_blank\"><img
            src=\"";
        // line 7
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl("themes/neopolitan/img/twitter.gif", null, null, true);
        echo "\"
            alt=\"twitter\"
            class=\"fr-view fr-dii fr-draggable\"></a>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Slots/socialfollow.html.twig";
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
        return array (  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Slots/socialfollow.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Slots\\socialfollow.html.twig");
    }
}
