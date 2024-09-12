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

/* @bundles/ApiBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_1d108466d58e40fd354dcac27714d9be extends Template
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
        echo "mautic.api.client.error.notfound=\"Client not found with an ID of <strong>%id%</strong>.\"
mautic.api.client.notice.created=\"<a href='%url%' data-toggle='ajax'><strong>%name%</strong></a> has been created.\"
mautic.api.client.notice.revoked=\"API access has been revoked from the application, %name%\"
mautic.api.call.permissionempty=\"At least one permission must be submitted.\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/ApiBundle/Translations/en_US/flashes.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Translations\\en_US\\flashes.ini");
    }
}
