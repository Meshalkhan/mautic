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

/* @bundles/CategoryBundle/Assets/js/category.js */
class __TwigTemplate_8fd0225e65b8899bc946b3fc4f8828b3 extends Template
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
        echo "/** CategoryBundle **/

Mautic.categoryOnLoad = function (container, response) {
    if (mQuery(container + ' #list-search').length) {
        Mautic.activateSearchAutocomplete('list-search', 'category');
    }

    if (response && response.inForm) {
        var newOption = mQuery('<option />').val(response.categoryId);
        newOption.html(response.categoryName);

        mQuery(\".category-select option:last\").prev().before(newOption);
        newOption.prop('selected', true);

        mQuery('.category-select').val(response.categoryId).trigger(\"chosen:updated\");
    }
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Assets/js/category.js";
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
        return new Source("", "@bundles/CategoryBundle/Assets/js/category.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CategoryBundle\\Assets\\js\\category.js");
    }
}
