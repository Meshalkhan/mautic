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

/* @bundles/PageBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_63d695fd2c76d03ed3a36ec76aa556cd extends Template
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
        echo "mautic.page.error.notfound=\"No page with an id of %id% was found!\"
mautic.page.notice.activated=\"<a href='%url%' data-toggle='ajax' data-menu-link='mautic_page_index'><strong>%name%</strong></a> is now active as the main page!\"
mautic.page.notice.batch_deleted=\"%count% pages have been deleted!\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/PageBundle/Translations/en_US/flashes.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Translations\\en_US\\flashes.ini");
    }
}
