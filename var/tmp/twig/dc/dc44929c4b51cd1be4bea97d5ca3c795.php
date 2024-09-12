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

/* @bundles/ChannelBundle/Translations/en_US/javascript.ini */
class __TwigTemplate_540ecef5dfbcf254e9197679b10c600c extends Template
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
        echo "mautic.message.queue.status.cancelled=\"Cancelled\"
mautic.message.queue.status.rescheduled=\"Rescheduled\"
mautic.message.queue.status.pending=\"Pending\"
mautic.message.queue.status.Sent=\"Sent\"";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Translations/en_US/javascript.ini";
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
        return new Source("", "@bundles/ChannelBundle/Translations/en_US/javascript.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Translations\\en_US\\javascript.ini");
    }
}
