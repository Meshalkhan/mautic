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

/* @bundles/CoreBundle/Form/Type/SlotImageCardType.php */
class __TwigTemplate_707e19fa5b3a3c97a71d4adf4db85fe5 extends Template
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

use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

class SlotImageCardType extends SlotType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'caption',
            TextType::class,
            [
                'label'      => 'mautic.core.image.caption',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'cardcaption',
                ],
            ]
        );

        \$builder->add(
            'align',
            ButtonGroupType::class,
            [
                'label'             => 'mautic.core.image.position',
                'label_attr'        => ['class' => 'control-label'],
                'required'          => false,
                'attr'              => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'align',
                ],
                'choices'           => [
                    'mautic.core.left'   => 0,
                    'mautic.core.center' => 1,
                    'mautic.core.right'  => 2,
                ],
            ]
        );

        \$builder->add(
            'text-align',
            ButtonGroupType::class,
            [
                'label'             => 'mautic.core.caption.position',
                'label_attr'        => ['class' => 'control-label'],
                'required'          => false,
                'attr'              => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'text-align',
                ],
                'choices'           => [
                    'mautic.core.left'   => 0,
                    'mautic.core.center' => 1,
                    'mautic.core.right'  => 2,
                ],
            ]
        );

        \$builder->add(
            'background-color',
            TextType::class,
            [
                'label'      => 'mautic.core.background.color',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'background-color',
                    'data-toggle'     => 'color',
                ],
            ]
        );

        \$builder->add(
            'caption-color',
            TextType::class,
            [
                'label'      => 'mautic.core.caption.color',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'caption-color',
                    'data-toggle'     => 'color',
                ],
            ]
        );

        \$builder->add(
            'color',
            TextType::class,
            [
                'label'      => 'mautic.core.text.color',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'           => 'form-control',
                    'data-slot-param' => 'color',
                    'data-toggle'     => 'color',
                ],
            ]
        );

        parent::buildForm(\$builder, \$options);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'slot_imagecard';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/Type/SlotImageCardType.php";
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
        return new Source("", "@bundles/CoreBundle/Form/Type/SlotImageCardType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Form\\Type\\SlotImageCardType.php");
    }
}
