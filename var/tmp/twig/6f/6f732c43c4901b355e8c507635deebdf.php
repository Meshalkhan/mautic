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

/* @themes/fresh-wide/html/MauticFormBundle/Builder/style.html.twig */
class __TwigTemplate_2271e6ab7b1bebf809324a92ebbfb048 extends Template
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
        yield "<style type=\"text/css\" scoped>
    .mauticform_wrapper { max-width: 600px; margin: 10px auto; font-family: Helvetica, Arial, sans-serif; color: #676767;}
    .mauticform-innerform {}
    .mauticform-post-success {}
    .mauticform-name { font-weight: bold; font-size: 1.5em; margin-bottom: 3px; }
    .mauticform-description { margin-top: 2px; margin-bottom: 10px; }
    .mauticform-error { margin-bottom: 10px; color: red; }
    .mauticform-message { margin-bottom: 10px;color: green; }
    .mauticform-row { display: block; margin-bottom: 20px; }
    .mauticform-label { font-size: 1.1em; display: block; font-weight: bold; margin-bottom: 5px; }
    .mauticform-row.mauticform-required .mauticform-label:after { color: #e32; content: \" *\"; display: inline; }
    .mauticform-helpmessage { display: block; font-size: 0.9em; margin-bottom: 3px; }
    .mauticform-errormsg { display: block; color: red; margin-top: 2px; }
    .mauticform-selectbox, .mauticform-input, .mauticform-textarea { width: 100%; padding: 0.5em 0.5em; border: 1px solid #CCC; background: #fff; box-shadow: 0px 0px 0px #fff inset; border-radius: 4px; box-sizing: border-box; }
    .mauticform-checkboxgrp-row {}
    .mauticform-checkboxgrp-label { font-weight: normal; }
    .mauticform-checkboxgrp-checkbox {}
    .mauticform-radiogrp-row {}
    .mauticform-radiogrp-label { font-weight: normal; }
    .mauticform-radiogrp-radio {}
    .mauticform-button-wrapper .mauticform-button.btn-default { color: #5d6c7c;background-color: #ffffff;border-color: #dddddd;}
    .mauticform-button-wrapper .mauticform-button { display: inline-block;margin-bottom: 0;font-weight: 600;text-align: center;vertical-align: middle;cursor: pointer;background-image: none;border: 1px solid transparent;white-space: nowrap;padding: 6px 12px;font-size: 13px;line-height: 1.3856;border-radius: 3px;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}
    .mauticform-button-wrapper .mauticform-button.btn-default[disabled] { background-color: #ffffff; border-color: #dddddd;}
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@themes/fresh-wide/html/MauticFormBundle/Builder/style.html.twig";
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
        return new Source("", "@themes/fresh-wide/html/MauticFormBundle/Builder/style.html.twig", "C:\\xampp\\htdocs\\mautic\\themes\\fresh-wide\\html\\MauticFormBundle\\Builder\\style.html.twig");
    }
}
