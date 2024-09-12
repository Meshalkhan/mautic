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

/* @bundles/FormBundle/Form/Type/FormFieldTextType.php */
class __TwigTemplate_b2a5cf8d4ddab701a92b2ac40a8abdb6 extends Template
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

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class FormFieldTextType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$editor = (\$options['editor']) ? ' editor editor-advanced' : '';

        \$builder->add('text', TextareaType::class, [
            'label'      => 'mautic.form.field.type.freetext',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => ['class' => 'form-control'.\$editor],
            'required'   => true,
        ]);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'editor' => false,
        ]);
    }

    public function getBlockPrefix()
    {
        return 'formfield_text';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Form/Type/FormFieldTextType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/FormFieldTextType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Form\\Type\\FormFieldTextType.php");
    }
}
