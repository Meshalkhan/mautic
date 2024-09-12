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

/* @bundles/LeadBundle/Form/Type/CampaignConditionLeadPageHitType.php */
class __TwigTemplate_06b63d3c91568bdf600bc8c3b2e64520 extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\DataTransformer\\SecondsConversionTransformer;
use Mautic\\PageBundle\\Form\\Type\\PageListType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;

/**
 * @extends AbstractType<mixed>
 */
class CampaignConditionLeadPageHitType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('page_url', TextType::class, [
            'label'      => 'mautic.page.point.action.form.page.url',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'       => 'form-control',
                'tooltip'     => 'mautic.page.point.action.form.page.url.descr',
                'placeholder' => 'https://',
            ],
            'required' => false,
        ]);

        \$builder->add('page', PageListType::class, [
            'label'      => 'mautic.page.campaign.condition.form.page',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.page.campaign.condition.form.page.descr',
            ],
            'multiple'     => false,
            'required'     => false,
            'placeholder'  => 'Choose Page',
        ]);

        \$builder->add(
            'startDate',
            TextType::class,
            [
                'label'  => 'mautic.page.campaign.condition.form.startdate',
                'attr'   => [
                    'class'       => 'form-control',
                    'preaddon'    => 'fa fa-calendar',
                    'data-toggle' => 'datetime',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'endDate',
            TextType::class,
            [
                'label'  => 'mautic.page.campaign.condition.form.enddate',
                'attr'   => [
                    'class'       => 'form-control',
                    'preaddon'    => 'fa fa-calendar',
                    'data-toggle' => 'datetime',
                ],
                'required' => false,
            ]
        );

        \$formModifier = function (FormInterface \$form, \$data) use (\$builder): void {
            \$unit = 's';
            \$form->add('accumulative_time_unit', HiddenType::class, [
                'data' => \$unit,
            ]);

            \$secondsTransformer = new SecondsConversionTransformer(\$unit);
            \$form->add(
                \$builder->create('accumulative_time', TextType::class, [
                    'label'      => 'mautic.page.campaign.condition.form.timespent',
                    'required'   => false,
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'   => 'form-control',
                    ],
                    'auto_initialize' => false,
                ])
                    ->addViewTransformer(\$secondsTransformer)
                    ->getForm()
            );

            \$unit               =  's';
            \$secondsTransformer = new SecondsConversionTransformer(\$unit);
            \$form->add('returns_within_unit', HiddenType::class, [
                'data' => \$unit,
            ]);
        };

        \$builder->addEventListener(FormEvents::PRE_SET_DATA,
            function (FormEvent \$event) use (\$formModifier): void {
                \$data = \$event->getData();
                \$formModifier(\$event->getForm(), \$data);
            }
        );

        \$builder->addEventListener(FormEvents::PRE_SUBMIT,
            function (FormEvent \$event) use (\$formModifier): void {
                \$data = \$event->getData();
                \$formModifier(\$event->getForm(), \$data);
            }
        );
    }

    public function getBlockPrefix()
    {
        return 'campaigncondition_lead_pageHit';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/CampaignConditionLeadPageHitType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/CampaignConditionLeadPageHitType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\Type\\CampaignConditionLeadPageHitType.php");
    }
}
