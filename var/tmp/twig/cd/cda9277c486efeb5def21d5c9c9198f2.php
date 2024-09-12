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

/* @bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap.less */
class __TwigTemplate_ee588b6624cd336f7396538727059ce2 extends Template
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
        echo "// Core variables and mixins
@import \"../../../../../../../node_modules/bootstrap/less/variables\";
@import \"bootstrap-mautic-custom-variables\";
@import \"../../../../../../../node_modules/bootstrap/less/mixins\";

// Reset and dependencies
@import \"../../../../../../../node_modules/bootstrap/less/normalize\";
@import \"../../../../../../../node_modules/bootstrap/less/print\";
@import \"../../../../../../../node_modules/bootstrap/less/glyphicons\";

// Core CSS
@import \"../../../../../../../node_modules/bootstrap/less/scaffolding\";
@import \"../../../../../../../node_modules/bootstrap/less/type\";
@import \"../../../../../../../node_modules/bootstrap/less/code\";
@import \"../../../../../../../node_modules/bootstrap/less/tables\";
@import \"../../../../../../../node_modules/bootstrap/less/forms\";
@import \"../../../../../../../node_modules/bootstrap/less/buttons\";

// Components
@import \"../../../../../../../node_modules/bootstrap/less/component-animations\";
@import \"../../../../../../../node_modules/bootstrap/less/dropdowns\";
@import \"../../../../../../../node_modules/bootstrap/less/button-groups\";
@import \"../../../../../../../node_modules/bootstrap/less/input-groups\";
@import \"../../../../../../../node_modules/bootstrap/less/navs\";
@import \"../../../../../../../node_modules/bootstrap/less/navbar\";
@import \"../../../../../../../node_modules/bootstrap/less/breadcrumbs\";
@import \"../../../../../../../node_modules/bootstrap/less/pagination\";
@import \"../../../../../../../node_modules/bootstrap/less/pager\";
@import \"../../../../../../../node_modules/bootstrap/less/labels\";
@import \"../../../../../../../node_modules/bootstrap/less/badges\";
@import \"../../../../../../../node_modules/bootstrap/less/jumbotron\";
@import \"../../../../../../../node_modules/bootstrap/less/thumbnails\";
@import \"../../../../../../../node_modules/bootstrap/less/alerts\";
@import \"../../../../../../../node_modules/bootstrap/less/progress-bars\";
@import \"../../../../../../../node_modules/bootstrap/less/media\";
@import \"../../../../../../../node_modules/bootstrap/less/list-group\";
@import \"../../../../../../../node_modules/bootstrap/less/panels\";
@import \"../../../../../../../node_modules/bootstrap/less/responsive-embed\";
@import \"../../../../../../../node_modules/bootstrap/less/wells\";
@import \"../../../../../../../node_modules/bootstrap/less/close\";

// Components w/ JavaScript
@import \"../../../../../../../node_modules/bootstrap/less/modals\";
@import \"../../../../../../../node_modules/bootstrap/less/tooltip\";
@import \"../../../../../../../node_modules/bootstrap/less/popovers\";
@import \"../../../../../../../node_modules/bootstrap/less/carousel\";

// Utility classes
@import \"../../../../../../../node_modules/bootstrap/less/utilities\";
@import \"../../../../../../../node_modules/bootstrap/less/responsive-utilities\";";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap.less";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/bootstrap/bootstrap.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\libraries\\bootstrap\\bootstrap.less");
    }
}
