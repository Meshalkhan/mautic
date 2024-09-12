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

/* @bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsFieldMappingsType.php */
class __TwigTemplate_2ccb9e689befd6283d2713e9dc000cad extends Template
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

namespace Mautic\\IntegrationsBundle\\Form\\Type;

use Mautic\\IntegrationsBundle\\Exception\\InvalidFormOptionException;
use Mautic\\IntegrationsBundle\\Helper\\FieldFilterHelper;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormError;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @extends AbstractType<mixed>
 */
class IntegrationSyncSettingsFieldMappingsType extends AbstractType
{
    public function __construct(
        private LoggerInterface \$logger,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * @throws InvalidFormOptionException
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        if (!is_array(\$options['objects'])) {
            throw new InvalidFormOptionException('objects must be an array');
        }

        \$integrationObject = \$options['integrationObject'];
        \\assert(\$integrationObject instanceof ConfigFormSyncInterface);

        \$fieldFilterHelper = new FieldFilterHelper(\$integrationObject);

        foreach (\$options['objects'] as \$objectName => \$objectLabel) {
            \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) use (\$integrationObject, \$objectName, \$fieldFilterHelper): void {
                \$error = null;

                try {
                    \$fieldFilterHelper->filterFieldsByPage(\$objectName, 1);
                } catch (\\Throwable \$exception) {
                    \$this->logger->debug(\$exception->getMessage(), ['exception' => \$exception]);

                    \$error = \$this->translator->trans(\$exception->getMessage());
                }

                \$form = \$event->getForm();
                \$form->add(
                    \$objectName,
                    IntegrationSyncSettingsObjectFieldMappingType::class,
                    [
                        'label'              => false,
                        'integrationFields'  => \$fieldFilterHelper->getFilteredFields(),
                        'page'               => 1,
                        'keyword'            => null,
                        'totalFieldCount'    => \$fieldFilterHelper->getTotalFieldCount(),
                        'object'             => \$objectName,
                        'integrationObject'  => \$integrationObject,
                        'error_bubbling'     => false,
                        'allow_extra_fields' => true,
                    ]
                );

                if (\$error) {
                    \$form[\$objectName]->addError(new FormError(\$error));
                }
            });
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(
            [
                'integrationObject',
                'objects',
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsFieldMappingsType.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/IntegrationSyncSettingsFieldMappingsType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Form\\Type\\IntegrationSyncSettingsFieldMappingsType.php");
    }
}
