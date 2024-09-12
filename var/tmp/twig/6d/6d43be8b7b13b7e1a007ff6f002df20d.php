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

/* @bundles/ConfigBundle/Form/Type/DsnType.php */
class __TwigTemplate_4394547889699541aea3d128bcd5fc31 extends Template
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

declare(strict_types=1);

namespace Mautic\\ConfigBundle\\Form\\Type;

use Mautic\\ConfigBundle\\Form\\DataTransformer\\DsnTransformerFactory;
use Mautic\\CoreBundle\\Form\\Type\\SortableListType;
use Mautic\\CoreBundle\\Form\\Type\\StandAloneButtonType;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\Dsn\\Dsn;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array>
 */
class DsnType extends AbstractType
{
    public function __construct(
        private DsnTransformerFactory \$dsnTransformerFactory,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    /**
     * @param array<string, mixed> \$options
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$name     = \$builder->getName();
        \$onChange = 'Mautic.configDsnTestDisable(this)';
        \$attr     = [
            'class'    => 'form-control',
            'onchange' => \$onChange,
        ];

        \$builder->add(
            'scheme',
            TextType::class,
            [
                'label'    => 'mautic.config.dsn.scheme',
                'required' => \$options['required'],
                'attr'     => \$attr,
            ]
        );

        \$builder->add(
            'host',
            TextType::class,
            [
                'label'    => 'mautic.config.dsn.host',
                'required' => false,
                'attr'     => \$attr,
            ]
        );

        \$builder->add(
            'port',
            NumberType::class,
            [
                'label'    => 'mautic.config.dsn.port',
                'required' => false,
                'html5'    => true,
                'attr'     => \$attr,
            ]
        );

        \$builder->add(
            'user',
            TextType::class,
            [
                'label'    => 'mautic.config.dsn.user',
                'required' => false,
                'attr'     => \$attr,
            ]
        );

        \$builder->add(
            'password',
            TextType::class,
            [
                'label'    => 'mautic.config.dsn.password',
                'required' => false,
                'attr'     => \$attr,
            ]
        );

        \$builder->add(
            'path',
            TextType::class,
            [
                'label'    => 'mautic.config.dsn.path',
                'required' => false,
                'attr'     => \$attr,
            ]
        );

        \$builder->add(
            'options',
            SortableListType::class,
            [
                'required'        => false,
                'label'           => 'mautic.config.dsn.options',
                'attr'            => [
                    'onchange' => \$onChange,
                ],
                'option_required' => false,
                'with_labels'     => true,
                'key_value_pairs' => true,
            ]
        );

        if (\$options['test_button']['action'] && \$this->getCurrentDsn(\$name)) {
            \$builder->add(
                'test_button',
                StandAloneButtonType::class,
                [
                    'label'    => \$options['test_button']['label'],
                    'required' => false,
                    'attr'     => [
                        'class'   => 'btn btn-info config-dsn-test-button',
                        'onclick' => sprintf('Mautic.configDsnTestExecute(this, \"%s\", \"%s\")', \$options['test_button']['action'], \$name),
                    ],
                ]
            );
        }

        \$builder->addModelTransformer(\$this->dsnTransformerFactory->create(\$name, !\$options['required']));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'label'         => false,
            'error_mapping' => [
                '.' => 'scheme',
            ],
            'test_button'  => [
                'action'   => null,
                'label'    => null,
            ],
        ]);
    }

    /**
     * @phpstan-ignore-next-line
     */
    public function finishView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$view->vars['currentDsn'] = \$this->getCurrentDsn(\$form->getName());
    }

    private function getCurrentDsn(string \$name): ?Dsn
    {
        \$dsn = (string) \$this->coreParametersHelper->get(\$name);

        try {
            \$dsn = Dsn::fromString(\$dsn);
        } catch (\\InvalidArgumentException) {
            return null;
        }

        if (\$dsn->getPassword()) {
            \$dsn = \$dsn->setPassword('SECRET');
        }

        return \$dsn;
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
        return "@bundles/ConfigBundle/Form/Type/DsnType.php";
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
        return new Source("", "@bundles/ConfigBundle/Form/Type/DsnType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Form\\Type\\DsnType.php");
    }
}
