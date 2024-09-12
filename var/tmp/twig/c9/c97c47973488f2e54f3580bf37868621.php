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

/* @bundles/CampaignBundle/Form/Type/ConfigType.php */
class __TwigTemplate_f3df85cfce02e83692365ea0f56896b3 extends Template
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

namespace Mautic\\CampaignBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class ConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'campaign_time_wait_on_event_false',
            ChoiceType::class,
            [
                'label'      => 'mautic.campaignconfig.campaign_time_wait_on_event_false',
                'label_attr' => ['class' => 'control-label'],
                'data'       => \$options['data']['campaign_time_wait_on_event_false'],
                'choices'    => [
                    'mautic.core.never' => 'null',
                    '15 mn'             => 'PT15M',
                    '30 mn'             => 'PT30M',
                    '45 mn'             => 'PT45M',
                    '1 h'               => 'PT1H',
                    '2 h'               => 'PT2H',
                    '4 h'               => 'PT4H',
                    '8 h'               => 'PT8H',
                    '12 h'              => 'PT12H',
                    '24 h'              => 'PT1D',
                    '3 days'            => 'PT3D',
                    '5 days'            => 'PT5D',
                    '1 week'            => 'PT14D',
                    '3 months'          => 'P3M',
                ],
                'attr'              => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.campaignconfig.campaign_time_wait_on_event_false_tooltip',
                ],
                'required' => false,
            ]
        );

        \$builder->add(
            'campaign_by_range',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.campaignconfig.campaign_by_range',
                'attr'  => [
                    'tooltip' => 'mautic.campaignconfig.campaign_by_range.tooltip',
                ],
                'data'  => (bool) (\$options['data']['campaign_by_range'] ?? false),
            ]
        );

        \$builder->add(
            'campaign_use_summary',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.campaignconfig.use_summary',
                'attr'  => [
                    'tooltip' => 'mautic.campaignconfig.use_summary.tooltip',
                ],
                'data'  => (bool) (\$options['data']['campaign_use_summary'] ?? false),
            ]
        );
    }

    public function getBlockPrefix(): string
    {
        return 'campaignconfig';
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
        return "@bundles/CampaignBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/CampaignBundle/Form/Type/ConfigType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Form\\Type\\ConfigType.php");
    }
}
