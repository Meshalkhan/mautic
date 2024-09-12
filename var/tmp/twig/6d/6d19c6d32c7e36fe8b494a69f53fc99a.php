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

/* @bundles/CoreBundle/Form/Type/DynamicContentFilterType.php */
class __TwigTemplate_bd13b5b45133731e35aec7530456dfc6 extends Template
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

namespace Mautic\\CoreBundle\\Form\\Type;

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Helper\\BuilderIntegrationsHelper;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class DynamicContentFilterType extends AbstractType
{
    public function __construct(
        private BuilderIntegrationsHelper \$builderIntegrationsHelper
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$extraClasses = '';

        try {
            \$mauticBuilder = \$this->builderIntegrationsHelper->getBuilder('email');
            \$mauticBuilder->getName();
        } catch (IntegrationNotFoundException) {
            // Assume legacy builder
            \$extraClasses = ' legacy-builder';
        }

        \$builder->add(
            'tokenName',
            TextType::class,
            [
                'label' => 'mautic.core.dynamicContent.token_name',
                'attr'  => [
                    'class' => 'form-control dynamic-content-token-name',
                ],
            ]
        );

        \$builder->add(
            'content',
            TextareaType::class,
            [
                'label' => 'mautic.core.dynamicContent.default_content',
                'attr'  => [
                    'class' => 'form-control editor editor-dynamic-content'.\$extraClasses,
                ],
            ]
        );

        \$builder->add(
            \$builder->create(
                'filters',
                DynamicListType::class,
                [
                    'entry_type'     => DynamicContentFilterEntryType::class,
                    'entry_options'  => [
                        'label' => false,
                        'attr'  => [
                            'class' => 'form-control',
                        ],
                    ],
                    'option_required' => false,
                    'allow_add'       => true,
                    'allow_delete'    => true,
                ]
            )
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'label'          => false,
                'error_bubbling' => false,
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
        return "@bundles/CoreBundle/Form/Type/DynamicContentFilterType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/DynamicContentFilterType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Form\\Type\\DynamicContentFilterType.php");
    }
}
