<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Assets/css/app/less/components/calendar.less */
class __TwigTemplate_3ae918ba49b8eccd051b34ab42e2efef extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield ".xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default, .xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current, .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div.xdsoft_current
{
\tbackground: @mautic-primary;
\tbox-shadow: darken(@mautic-primary, 3%) 0px 1px 3px 0px inset;
}

.xdsoft_datetimepicker .xdsoft_calendar td:hover, .xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box >div >div:hover 
{
\tbackground: @mautic-secondary !important;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/app/less/components/calendar.less";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Assets/css/app/less/components/calendar.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\app\\less\\components\\calendar.less");
    }
}
