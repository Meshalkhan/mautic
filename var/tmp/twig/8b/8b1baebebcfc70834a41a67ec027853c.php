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

/* @bundles/LeadBundle/Form/Type/FormSubmitActionPointsChangeType.php */
class __TwigTemplate_02dc7b330f16895395bc545fab093e9c extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Mautic\\PointBundle\\Form\\Type\\GroupListType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class FormSubmitActionPointsChangeType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'operator',
            ChoiceType::class,
            [
                'label'             => 'mautic.lead.lead.submitaction.operator',
                'attr'              => ['class' => 'form-control'],
                'label_attr'        => ['class' => 'control-label'],
                'choices'           => [
                    'mautic.lead.lead.submitaction.operator_plus'   => 'plus',
                    'mautic.lead.lead.submitaction.operator_minus'  => 'minus',
                    'mautic.lead.lead.submitaction.operator_times'  => 'times',
                    'mautic.lead.lead.submitaction.operator_divide' => 'divide',
                ],
            ]
        );

        \$default = (empty(\$options['data']['points'])) ? 0 : (int) \$options['data']['points'];
        \$builder->add(
            'points',
            NumberType::class,
            [
                'label'      => 'mautic.lead.lead.submitaction.points',
                'attr'       => ['class' => 'form-control'],
                'label_attr' => ['class' => 'control-label'],
                'scale'      => 0,
                'data'       => \$default,
            ]
        );

        \$builder->add('group', GroupListType::class, [
            'label'            => 'mautic.lead.campaign.event.point_group',
            'label_attr'       => ['class' => 'control-label'],
            'attr'             => [
                'class'    => 'form-control',
                'tooltip'  => 'mautic.lead.campaign.event.point_group.help',
            ],
            'required'         => false,
            'by_reference'     => false,
            'return_entity'    => false,
        ]);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'lead_submitaction_pointschange';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/FormSubmitActionPointsChangeType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/FormSubmitActionPointsChangeType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\Type\\FormSubmitActionPointsChangeType.php");
    }
}
