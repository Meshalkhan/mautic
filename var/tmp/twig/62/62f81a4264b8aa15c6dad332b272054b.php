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

/* @bundles/StageBundle/Assets/js/stage.js */
class __TwigTemplate_6c83a56050132b844025de60a478d577 extends Template
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
        yield "Mautic.getStageActionPropertiesForm = function(actionType) {
    Mautic.activateLabelLoadingIndicator('stage_type');

    var query = \"action=stage:getActionForm&actionType=\" + actionType;
    mQuery.ajax({
        url: mauticAjaxUrl,
        type: \"POST\",
        data: query,
        dataType: \"json\",
        success: function (response) {
            if (typeof response.html != 'undefined') {
                mQuery('#stageActionProperties').html(response.html);
                Mautic.onPageLoad('#stageActionProperties', response);
            }
        },
        error: function (request, textStatus, errorThrown) {
            Mautic.processAjaxError(request, textStatus, errorThrown);
        },
        complete: function() {
            Mautic.removeLabelLoadingIndicator();
        }
    });
};";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/StageBundle/Assets/js/stage.js";
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
        return new Source("", "@bundles/StageBundle/Assets/js/stage.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StageBundle\\Assets\\js\\stage.js");
    }
}
