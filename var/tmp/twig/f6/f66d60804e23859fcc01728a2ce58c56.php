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

/* @bundles/LeadBundle/Field/IdentifierFields.php */
class __TwigTemplate_920637d6c14873cfdce0fd7b31ced258 extends Template
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

use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\IdentifierFieldEntityInterface;
use Mautic\\LeadBundle\\Entity\\Lead;

class IdentifierFields
{
    public function __construct(
        private FieldsWithUniqueIdentifier \$fieldsWithUniqueIdentifier,
        private FieldList \$fieldList
    ) {
    }

    /**
     * @return string[]
     */
    public function getFieldList(string \$object, ?object \$entityClass = null): array
    {
        return array_merge(
            \$this->getDefaultFields(\$object, \$entityClass),
            \$this->getUniqueIdentifierFields(\$object),
            \$this->getSocialFields(\$object)
        );
    }

    /**
     * @return string[]
     */
    private function getDefaultFields(string \$object, ?object \$entityClass): array
    {
        if (null === \$entityClass) {
            switch (\$object) {
                case 'lead':
                    \$entityClass = Lead::class;
                    break;
                case 'company':
                    \$entityClass = Company::class;
                    break;
                default:
                    return [];
            }
        }

        if (is_subclass_of(\$entityClass, IdentifierFieldEntityInterface::class)) {
            return \$entityClass::getDefaultIdentifierFields();
        }

        // The class wasn't recognized or doesn't implement the interface
        return [];
    }

    /**
     * @return string[]
     */
    private function getUniqueIdentifierFields(string \$object): array
    {
        \$fields = \$this->fieldsWithUniqueIdentifier->getFieldsWithUniqueIdentifier(
            [
                'object' => \$object,
            ]
        );

        return array_keys(\$fields);
    }

    /**
     * @return string[]
     */
    private function getSocialFields(string \$object): array
    {
        \$fields = \$this->fieldList->getFieldList(
            true,
            false,
            [
                'isPublished' => true,
                'object'      => \$object,
            ]
        );

        if (!isset(\$fields['Social'])) {
            return [];
        }

        return array_keys(\$fields['Social']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/IdentifierFields.php";
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
        return new Source("", "@bundles/LeadBundle/Field/IdentifierFields.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Field\\IdentifierFields.php");
    }
}
