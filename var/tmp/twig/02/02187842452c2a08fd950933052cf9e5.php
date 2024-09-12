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

/* @bundles/ConfigBundle/Form/Helper/RestrictionHelper.php */
class __TwigTemplate_0e0c6335491e37ab073f014e5537892a extends Template
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
        yield "<?php

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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ConfigBundle/Form/Helper/RestrictionHelper.php";
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
        return new Source("", "@bundles/ConfigBundle/Form/Helper/RestrictionHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Form\\Helper\\RestrictionHelper.php");
    }
}
