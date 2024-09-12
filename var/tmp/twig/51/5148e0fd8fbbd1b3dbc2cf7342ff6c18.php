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

/* @bundles/PointBundle/Form/Type/PointActionType.php */
class __TwigTemplate_85ce563e4a117d69d25abeb62b53eae2 extends Template
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

namespace Mautic\\PointBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class PointActionType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$masks           = [];
        \$formTypeOptions = [
            'label' => false,
        ];
        if (!empty(\$options['formTypeOptions'])) {
            \$formTypeOptions = array_merge(\$formTypeOptions, \$options['formTypeOptions']);
        }
        \$builder->add('properties', \$options['formType'], \$formTypeOptions);

        if (isset(\$options['settings']['formTypeCleanMasks'])) {
            \$masks['properties'] = \$options['settings']['formTypeCleanMasks'];
        }

        \$builder->addEventSubscriber(new CleanFormSubscriber(\$masks));
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'formType'        => GenericPointSettingsType::class,
            'formTypeOptions' => [],
        ]);
    }

    public function getBlockPrefix()
    {
        return 'pointaction';
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
        return "@bundles/PointBundle/Form/Type/PointActionType.php";
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
        return new Source("", "@bundles/PointBundle/Form/Type/PointActionType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Form\\Type\\PointActionType.php");
    }
}
