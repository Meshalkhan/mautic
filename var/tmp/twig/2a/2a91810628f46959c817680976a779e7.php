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

/* @bundles/ConfigBundle/Form/Helper/RestrictionHelper.php */
class __TwigTemplate_a9330528505e5cf27eaceab1865ff84e extends Template
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

namespace Mautic\\ConfigBundle\\Form\\Helper;

use Mautic\\ConfigBundle\\Mapper\\Helper\\RestrictionHelper as FieldHelper;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class RestrictionHelper
{
    public const MODE_REMOVE = 'remove';

    public const MODE_MASK   = 'mask';

    /**
     * @var string[]
     */
    private array \$restrictedFields;

    public function __construct(
        private TranslatorInterface \$translator,
        array \$restrictedFields,
        private string \$displayMode
    ) {
        \$this->restrictedFields = FieldHelper::prepareRestrictions(\$restrictedFields);
    }

    /**
     * @param FormInterface<mixed> \$childType
     * @param FormInterface<mixed> \$parentType
     */
    public function applyRestrictions(FormInterface \$childType, FormInterface \$parentType, array \$restrictedFields = null): void
    {
        if (null === \$restrictedFields) {
            \$restrictedFields = \$this->restrictedFields;
        }

        \$fieldName = \$childType->getName();
        if (array_key_exists(\$fieldName, \$restrictedFields)) {
            if (is_array(\$restrictedFields[\$fieldName])) {
                // Part of the collection of fields are restricted
                foreach (\$childType as \$grandchild) {
                    \$this->applyRestrictions(\$grandchild, \$childType, \$restrictedFields[\$fieldName]);
                }

                return;
            }

            \$this->restrictField(\$childType, \$parentType);
        }
    }

    /**
     * @param FormInterface<mixed> \$childType
     * @param FormInterface<mixed> \$parentType
     */
    private function restrictField(FormInterface \$childType, FormInterface \$parentType): void
    {
        switch (\$this->displayMode) {
            case self::MODE_MASK:
                \$parentType->add(
                    \$childType->getName(),
                    \$childType->getConfig()->getType()->getInnerType()::class,
                    array_merge(
                        \$childType->getConfig()->getOptions(),
                        [
                            'required' => false,
                            'mapped'   => false,
                            'disabled' => true,
                            'attr'     => array_merge(\$childType->getConfig()->getOptions()['attr'] ?? [], [
                                'placeholder' => \$this->translator->trans('mautic.config.restricted'),
                                'readonly'    => true,
                            ]),
                        ]
                    )
                );
                break;
            case self::MODE_REMOVE:
                \$parentType->remove(\$childType->getName());
                break;
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
        return "@bundles/ConfigBundle/Form/Helper/RestrictionHelper.php";
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
        return new Source("", "@bundles/ConfigBundle/Form/Helper/RestrictionHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Form\\Helper\\RestrictionHelper.php");
    }
}
