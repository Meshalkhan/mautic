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

/* @bundles/PageBundle/Form/Type/TrackingPixelSendType.php */
class __TwigTemplate_26831f51777697de435f9d4eecfc0380 extends Template
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

namespace Mautic\\PageBundle\\Form\\Type;

use Mautic\\PageBundle\\Helper\\TrackingHelper;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<array<mixed>>
 */
class TrackingPixelSendType extends AbstractType
{
    public function __construct(
        protected TrackingHelper \$trackingHelper
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$trackingServices = \$this->trackingHelper->getEnabledServices();

        \$builder->add('services', ChoiceType::class, [
            'label'      => 'mautic.page.tracking.form.services',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class' => 'form-control',
            ],
            'expanded'    => false,
            'multiple'    => true,
            'choices'     => array_flip(\$trackingServices),
            'placeholder' => 'mautic.core.form.chooseone',
            'constraints' => [
                new NotBlank(
                    ['message' => 'mautic.core.ab_test.winner_criteria.not_blank']
                ),
            ],
        ]);

        \$builder->add(
            'category',
            TextType::class,
            [
                'label'      => 'mautic.page.tracking.form.category',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.page.tracking.form.category.tooltip',
                ],
                'required'    => true,
                'constraints' => [
                    new NotBlank(),
                ],
            ]
        );

        \$builder->add(
            'action',
            TextType::class,
            [
                'label'      => 'mautic.page.tracking.form.action',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'required'    => true,
                'constraints' => [
                    new NotBlank(),
                ],
            ]
        );

        \$builder->add(
            'label',
            TextType::class,
            [
                'label'      => 'mautic.page.tracking.form.label',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class' => 'form-control',
                ],
                'required'    => true,
                'constraints' => [
                    new NotBlank(),
                ],
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'tracking_pixel_send_action';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Form/Type/TrackingPixelSendType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/TrackingPixelSendType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Form\\Type\\TrackingPixelSendType.php");
    }
}
