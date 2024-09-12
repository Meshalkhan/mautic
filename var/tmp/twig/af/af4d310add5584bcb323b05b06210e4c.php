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

/* @bundles/ApiBundle/Assets/js/api.js */
class __TwigTemplate_598170f95bf105062d6952a216b47ad7 extends Template
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
        echo "//ApiBundle
Mautic.clientOnLoad = function (container) {
    if (mQuery(container + ' #list-search').length) {
        Mautic.activateSearchAutocomplete('list-search', 'api.client');
    }
};

Mautic.refreshApiClientForm = function(url, modeEl) {
    var mode = mQuery(modeEl).val();

    if (mQuery('#client_redirectUris').length) {
        mQuery('#client_redirectUris').prop('disabled', true);
    } else {
        mQuery('#client_callback').prop('disabled', true);
    }
    mQuery('#client_name').prop('disabled', true);

    Mautic.loadContent(url + '/' + mode);
};";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Assets/js/api.js";
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
        return new Source("", "@bundles/ApiBundle/Assets/js/api.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Assets\\js\\api.js");
    }
}
