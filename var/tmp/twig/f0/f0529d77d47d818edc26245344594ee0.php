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

/* @bundles/FormBundle/Form/Type/FormFieldSelectType.php */
class __TwigTemplate_a01a64ef12a9fc5204c8bf94a0fa3649 extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class FormFieldSelectType extends AbstractType
{
    use SortableListTrait;

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        if ('select' === \$options['field_type']) {
            \$this->addSortableList(\$builder, \$options);
        }

        \$builder->add(
            'placeholder',
            TextType::class,
            [
                'label'      => 'mautic.form.field.form.emptyvalue',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
            ]
        );

        if (!empty(\$options['parentData'])) {
            \$default = (empty(\$options['parentData']['properties']['multiple'])) ? false : true;
        } else {
            \$default = false;
        }
        \$builder->add(
            'multiple',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.form.field.form.multiple',
                'data'  => \$default,
            ]
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'field_type' => 'select',
                'parentData' => [],
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'formfield_select';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Form/Type/FormFieldSelectType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/FormFieldSelectType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Form\\Type\\FormFieldSelectType.php");
    }
}
