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

/* @bundles/DynamicContentBundle/Translations/en_US/validators.ini */
class __TwigTemplate_143c7e1b338a3c7bb11eee5bee1d52dd extends Template
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
        echo "mautic.dynamicContent.name.notblank=\"Please enter a name.\"
mautic.dynamicContent.slot_name.notblank=\"Please enter a slot name.\"
mautic.dynamicContent.filter.options.empty=\"At least one filter is required.\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Translations/en_US/validators.ini";
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
        return new Source("", "@bundles/DynamicContentBundle/Translations/en_US/validators.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Translations\\en_US\\validators.ini");
    }
}
