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

/* @bundles/PointBundle/Translations/en_US/flashes.ini */
class __TwigTemplate_bc3ed5c5236c4fc9369374a600c6447f extends Template
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
        echo "mautic.point.error.notfound=\"No point action with an id of %id% was found!\"
mautic.point.notice.batch_deleted=\"%count% point actions have been deleted!\"
mautic.point.trigger.error.notfound=\"No trigger with an id of %id% was found!\"
mautic.point.trigger.notice.batch_deleted=\"%count% point triggers have been deleted!\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Translations/en_US/flashes.ini";
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
        return new Source("", "@bundles/PointBundle/Translations/en_US/flashes.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Translations\\en_US\\flashes.ini");
    }
}
