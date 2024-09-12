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

/* @bundles/LeadBundle/Form/Validator/Constraints/FieldAliasKeywordValidator.php */
class __TwigTemplate_da58a44f61356ccc8112e70fcf225e11 extends Template
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

namespace Mautic\\LeadBundle\\Form\\Validator\\Constraints;

use Doctrine\\ORM\\EntityManager;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Helper\\FieldAliasHelper;
use Mautic\\LeadBundle\\Model\\ListModel;
use Mautic\\LeadBundle\\Services\\ContactSegmentFilterDictionary;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Throws an exception if the field alias is equal some segment filter keyword.
 * It would cause odd behavior with segment filters otherwise.
 */
class FieldAliasKeywordValidator extends ConstraintValidator
{
    public const RESTRICTED_ALIASES = [
        'contact_id',
        'company_id',
    ];

    public function __construct(
        private ListModel \$listModel,
        private FieldAliasHelper \$aliasHelper,
        private EntityManager \$em,
        private TranslatorInterface \$translator,
        private ContactSegmentFilterDictionary \$contactSegmentFilterDictionary
    ) {
    }

    /**
     * @param LeadField \$field
     */
    public function validate(\$field, Constraint \$constraint): void
    {
        \$oldValue = \$this->em->getUnitOfWork()->getOriginalEntityData(\$field);
        \$this->aliasHelper->makeAliasUnique(\$field);

        // If empty it's a new object else it's an edit
        if (empty(\$oldValue) || (!empty(\$oldValue) && is_array(\$oldValue) && \$oldValue['alias'] != \$field->getAlias())) {
            if (in_array(\$field->getAlias(), self::RESTRICTED_ALIASES)) {
                \$this->context->addViolation(
                    \$this->translator->trans(
                        'mautic.lead.field.keyword.restricted',
                        ['%alias%' => \$field->getAlias()],
                        'validators'
                    )
                );

                return;
            }
            \$choices = array_merge(\$this->listModel->getChoiceFields()[\$field->getObject()] ?? [], \$this->contactSegmentFilterDictionary->getFilters());

            if (isset(\$choices[\$field->getAlias()])) {
                \$this->context->addViolation(\$constraint->message, ['%keyword%' => \$field->getAlias()]);
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Validator/Constraints/FieldAliasKeywordValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Validator/Constraints/FieldAliasKeywordValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\Validator\\Constraints\\FieldAliasKeywordValidator.php");
    }
}
