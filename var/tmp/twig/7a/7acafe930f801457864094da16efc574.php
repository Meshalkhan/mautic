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

/* @bundles/CategoryBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_ef962402493165688889f675f139c567 extends Template
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
        echo "mautic.category.error.notfound=\"No category with an id of %id% was found!\"
mautic.category.notice.batch_deleted=\"%count% categories have been deleted!\"
mautic.category.notice.created=\"<strong>%name%</strong> has been created!\"
mautic.category.notice.updated=\"<strong>%name%</strong> has been updated!\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/CategoryBundle/Translations/en_US/flashes.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CategoryBundle\\Translations\\en_US\\flashes.ini");
    }
}
