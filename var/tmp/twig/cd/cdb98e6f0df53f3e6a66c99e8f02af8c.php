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

/* @bundles/PointBundle/Form/Type/TriggerEventType.php */
class __TwigTemplate_cd8e0a8d61ebdbbeb8c1ae39d044a7c2 extends Template
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

namespace Mautic\\PointBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\EventListener\\CleanFormSubscriber;
use Mautic\\CoreBundle\\Form\\Type\\FormButtonsType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class TriggerEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$masks = ['description' => 'html'];

        \$builder->add(
            'name',
            TextType::class,
            [
                'label'      => 'mautic.core.name',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
            ]
        );

        \$builder->add(
            'description',
            TextareaType::class,
            [
                'label'      => 'mautic.core.description',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control editor'],
                'required'   => false,
            ]
        );

        if (!empty(\$options['settings']['formType'])) {
            \$properties = (!empty(\$options['data']['properties'])) ? \$options['data']['properties'] : null;

            \$formTypeOptions = [
                'label' => false,
                'data'  => \$properties,
            ];
            if (!empty(\$options['settings']['formTypeOptions'])) {
                \$formTypeOptions = array_merge(\$formTypeOptions, \$options['settings']['formTypeOptions']);
            }

            if (isset(\$options['settings']['formTypeCleanMasks'])) {
                \$masks['properties'] = \$options['settings']['formTypeCleanMasks'];
            }

            \$builder->add('properties', \$options['settings']['formType'], \$formTypeOptions);
        }

        \$builder->add('type', HiddenType::class);

        \$update = !empty(\$properties);
        if (!empty(\$update)) {
            \$btnValue = 'mautic.core.form.update';
            \$btnIcon  = 'ri-edit-line';
        } else {
            \$btnValue = 'mautic.core.form.add';
            \$btnIcon  = 'ri-add-line';
        }

        \$builder->add(
            'buttons',
            FormButtonsType::class,
            [
                'save_text'       => \$btnValue,
                'save_icon'       => \$btnIcon,
                'apply_text'      => false,
                'container_class' => 'bottom-form-buttons',
            ]
        );

        \$builder->add(
            'triggerId',
            HiddenType::class,
            [
                'mapped' => false,
            ]
        );

        \$builder->addEventSubscriber(new CleanFormSubscriber(\$masks));

        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(['settings' => false]);
        \$resolver->setRequired(['settings']);
    }

    public function getBlockPrefix()
    {
        return 'pointtriggerevent';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Form/Type/TriggerEventType.php";
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
        return new Source("", "@bundles/PointBundle/Form/Type/TriggerEventType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Form\\Type\\TriggerEventType.php");
    }
}
