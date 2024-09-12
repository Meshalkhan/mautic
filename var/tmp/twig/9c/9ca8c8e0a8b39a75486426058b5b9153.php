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

/* @bundles/CoreBundle/Form/Type/FormButtonsType.php */
class __TwigTemplate_70f5e9f32a0c9ffc0445fbecf99f3167 extends Template
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

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class FormButtonsType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        foreach (\$options['pre_extra_buttons'] as \$btn) {
            \$type = (empty(\$btn['type'])) ? ButtonType::class : SubmitType::class;
            \$builder->add(
                \$btn['name'],
                \$type,
                [
                    'label' => \$btn['label'],
                    'attr'  => \$btn['attr'],
                ]
            );
        }

        if (!empty(\$options['apply_text'])) {
            \$builder->add(
                'apply',
                \$options['apply_type'],
                [
                    'label' => \$options['apply_text'],
                    'attr'  => array_merge(
                        \$options['apply_attr'],
                        [
                            'class'   => \$options['apply_class'],
                            'icon'    => \$options['apply_icon'],
                            'onclick' => \$options['apply_onclick'],
                        ]
                    ),
                ]
            );
        }

        if (!empty(\$options['save_text'])) {
            \$builder->add(
                'save',
                \$options['save_type'],
                [
                    'label' => \$options['save_text'],
                    'attr'  => array_merge(
                        \$options['save_attr'],
                        [
                            'class'   => \$options['save_class'],
                            'icon'    => \$options['save_icon'],
                            'onclick' => \$options['save_onclick'],
                        ]
                    ),
                ]
            );
        }

        if (!empty(\$options['cancel_text'])) {
            \$builder->add(
                'cancel',
                \$options['cancel_type'],
                [
                    'label' => \$options['cancel_text'],
                    'attr'  => array_merge(
                        \$options['cancel_attr'],
                        [
                            'class'   => \$options['cancel_class'],
                            'icon'    => \$options['cancel_icon'],
                            'onclick' => \$options['cancel_onclick'],
                        ]
                    ),
                ]
            );
        }

        foreach (\$options['post_extra_buttons'] as \$btn) {
            \$type = (empty(\$btn['type'])) ? ButtonType::class : SubmitType::class;
            \$builder->add(
                \$btn['name'],
                \$type,
                [
                    'label' => \$btn['label'],
                    'attr'  => \$btn['attr'],
                ]
            );
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'apply_text'         => 'mautic.core.form.apply',
                'apply_icon'         => 'ri-check-line',
                'apply_class'        => 'btn btn-default btn-apply',
                'apply_onclick'      => false,
                'apply_attr'         => [],
                'apply_type'         => SubmitType::class,
                'save_text'          => 'mautic.core.form.saveandclose',
                'save_icon'          => 'ri-save-line',
                'save_class'         => 'btn btn-default btn-save',
                'save_onclick'       => false,
                'save_attr'          => [],
                'save_type'          => SubmitType::class,
                'cancel_text'        => 'mautic.core.form.cancel',
                'cancel_icon'        => 'ri-close-line',
                'cancel_class'       => 'btn btn-default btn-cancel',
                'cancel_onclick'     => false,
                'cancel_attr'        => [],
                'cancel_type'        => SubmitType::class,
                'mapped'             => false,
                'label'              => false,
                'required'           => false,
                'pre_extra_buttons'  => [],
                'post_extra_buttons' => [],
                'container_class'    => 'bottom-form-buttons',
            ]
        );
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$view->vars['containerClass'] = \$options['container_class'];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/Type/FormButtonsType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/FormButtonsType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Form\\Type\\FormButtonsType.php");
    }
}
