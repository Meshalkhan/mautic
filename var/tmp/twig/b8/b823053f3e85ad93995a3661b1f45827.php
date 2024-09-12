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

/* @bundles/LeadBundle/Field/FieldsWithUniqueIdentifier.php */
class __TwigTemplate_693b39c50d1bcdff27a901abe7e34107 extends Template
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
        echo "<?php

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Field;

class FieldsWithUniqueIdentifier
{
    /**
     * @var array<mixed>
     */
    private array \$uniqueIdentifierFields = [];

    public function __construct(
        private FieldList \$fieldList
    ) {
    }

    /**
     * Retrieves a list of cached published fields that are unique identifiers.
     *
     * @param array<mixed> \$filters
     *
     * @return array<mixed>
     */
    public function getFieldsWithUniqueIdentifier(array \$filters = []): array
    {
        \$filters = \$this->prepareFilters(\$filters);

        \$key = base64_encode(json_encode(\$filters));
        if (!isset(\$this->uniqueIdentifierFields[\$key])) {
            \$this->uniqueIdentifierFields[\$key] = \$this->fieldList->getFieldList(false, true, \$filters);
        }

        return \$this->uniqueIdentifierFields[\$key];
    }

    /**
     * Retrieves a list of published fields that are unique identifiers fresh from the DB each time.
     *
     * @param array<mixed> \$filters
     *
     * @return array<mixed>
     */
    public function getLiveFields(array \$filters = []): array
    {
        \$filters = \$this->prepareFilters(\$filters);

        return \$this->fieldList->getFieldList(false, true, \$filters);
    }

    /**
     * @param array<mixed> \$filters
     *
     * @return array<mixed>
     */
    private function prepareFilters(array \$filters): array
    {
        \$filters['isPublished'] ??= true;
        \$filters['isUniqueIdentifer'] ??= true;
        \$filters['object'] ??= 'lead';

        return \$filters;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/FieldsWithUniqueIdentifier.php";
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
        return new Source("", "@bundles/LeadBundle/Field/FieldsWithUniqueIdentifier.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Field\\FieldsWithUniqueIdentifier.php");
    }
}
