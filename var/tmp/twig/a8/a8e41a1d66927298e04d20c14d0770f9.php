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

/* @bundles/EmailBundle/Assets/css/heatmap.css */
class __TwigTemplate_9ce20f52d70feb31926a391f24edac1d extends Template
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
        yield "@media (min-width: 768px) {
    .modal-dialog-heatmap {
        width: 90%;
        max-width: 1200px;
    }
}

.modal-heatmap-close {
    position: absolute;
    top: 5px;
    right: 20px;
    color: #fff;
    z-index: 1080;
    float: none;
    opacity: 0.75;
}

.modal-heatmap-close:hover,
.modal-heatmap-close:focus {
    opacity: 1;
    color: #fff;
}


.heatmap-iframe {
    display: block;
    width: 100%;
    height: 600px;
    border: 0;
    margin: 0;
    padding: 0;
}

@media (min-width: 768px) {
    .heatmap-iframe {
        height: 90vh;
    }
}

body.heatmap-iframe-body a.heatmap-link {
    position: relative;
    z-index: 1010;
}

.heatmap-label {
    position: absolute;
    z-index: 1050;
    box-shadow: 0 0 2px rgba(0, 0, 0, 0.45);
}

.heatmap-label > p {
    padding: 6px 6px 4px 6px !important;
    margin: 0 !important;
    font-family: \"Open Sans\", Helvetica, Arial, sans-serif !important;
    font-size: 12px !important;
    line-height: 1 !important;
    color: #fff !important;
}

.heatmap-legend {
    display: none;
    position: absolute;
    z-index: 1060;
    right: 20px;
    top: 30px;
    color: #fff;
    padding: 15px;
    background-color: rgba(0, 0, 0, 0.85);
    border-radius: 4px;
}

@media (min-width: 768px) {
    .heatmap-legend {
        display: block;
    }
}

.heatmap-legend a {
    color: rgba(255, 255, 255, 0.6);
}
.heatmap-legend a.active,
.heatmap-legend a:focus,
.heatmap-legend a:hover {
    color: rgba(255, 255, 255, 1);
    text-decoration: underline;
}

.heatmap-legend > p:nth-child(1),
.heatmap-legend > p:nth-child(3) {
    color: #cccccc;
    font-size: 18px;
    line-height: 1.1;
}

.heatmap-legend > p:nth-child(1) {
    margin-top: 0;
}

.heatmap-legend > p:nth-child(2) {
    color: #fff;
    font-size: 32px;
    margin-bottom: 20px;
}

.heatmap-legend > p:nth-child(3) {
    margin-bottom: 5px;
}

.heatmap-scale {
    display: flex;
}

.heatmap-scale-header,
.heatmap-scale-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    font-size: 12px;
}

.heatmap-scale-footer {
    padding-bottom: 0;
}

.heatmap-scale-header > div,
.heatmap-scale-footer > div {

}

.heatmap-scale-bar {
    position: relative;
    width: 47px;
    height: 16px;
    background: #fff;
}

.heatmap-scale-bar:nth-child(1) {
    background: linear-gradient(to right, #2c3bb6, #0a85ff);
    border-radius: 2px 0 0 2px;
}

.heatmap-scale-bar:nth-child(2) {
    background: linear-gradient(to right, #0a85ff, #f0df42);
}

.heatmap-scale-bar:nth-child(3) {
    background: linear-gradient(to right, #f0df42, #f8c344);
}

.heatmap-scale-bar:nth-child(4) {
    background: linear-gradient(to right, #f8c344, #ff843a);
}

.heatmap-scale-bar:nth-child(5) {
    background: linear-gradient(to right, #ff843a, #f83834);
    border-radius: 0 2px 2px 0;
}

.heatmap-scale-bar:nth-child(-n+4):after {
    content: \"\";
    display: block;
    width: 1px;
    height: 24px;
    background-color: rgba(255, 255, 255, 0.8);
    position: absolute;
    top: -4px;
    right: -1px;
    z-index: 1;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Assets/css/heatmap.css";
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
        return new Source("", "@bundles/EmailBundle/Assets/css/heatmap.css", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Assets\\css\\heatmap.css");
    }
}
