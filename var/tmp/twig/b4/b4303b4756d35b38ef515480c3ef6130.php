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

/* @MauticCore/FormTheme/Config/config_layout.html.twig */
class __TwigTemplate_8dd47654073ac84e917cfface14823a2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 1
        $_trait_0 = $this->loadTemplate("@MauticCore/FormTheme/Config/_config_coreconfig_ip_lookup_config_widget.html.twig", "@MauticCore/FormTheme/Config/config_layout.html.twig", 1);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."@MauticCore/FormTheme/Config/_config_coreconfig_ip_lookup_config_widget.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        // line 2
        $_trait_1 = $this->loadTemplate("@MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig", "@MauticCore/FormTheme/Config/config_layout.html.twig", 2);
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."@MauticCore/FormTheme/Config/_config_coreconfig_widget.html.twig".'" cannot be used as a trait.', 2, $this->source);
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        // line 3
        $_trait_2 = $this->loadTemplate("@MauticCore/FormTheme/Config/_config_themeconfig_widget.html.twig", "@MauticCore/FormTheme/Config/config_layout.html.twig", 3);
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@MauticCore/FormTheme/Config/_config_themeconfig_widget.html.twig".'" cannot be used as a trait.', 3, $this->source);
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/FormTheme/Config/config_layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  44 => 3,  37 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/FormTheme/Config/config_layout.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\FormTheme\\Config\\config_layout.html.twig");
    }
}
