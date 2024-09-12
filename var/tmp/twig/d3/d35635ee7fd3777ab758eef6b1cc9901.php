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

/* @bundles/CampaignBundle/Form/Type/CampaignEventLeadChangeType.php */
class __TwigTemplate_e9d953da0c071e19d205fb407be10f0d extends Template
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

namespace Mautic\\CampaignBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\ButtonGroupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 *
 * @extends AbstractType<mixed>
 */
class CampaignEventLeadChangeType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$data = \$options['data']['action'] ?? 'added';
        \$builder->add('action', ButtonGroupType::class, [
            'choices' => [
                'mautic.campaign.form.trigger_leadchanged_added'   => 'added',
                'mautic.campaign.form.trigger_leadchanged_removed' => 'removed',
            ],
            'expanded'          => true,
            'multiple'          => false,
            'label_attr'        => ['class' => 'control-label'],
            'label'             => 'mautic.campaign.form.trigger_leadchanged',
            'placeholder'       => false,
            'required'          => false,
            'data'              => \$data,
        ]);

        \$builder->add('campaigns', CampaignListType::class, [
            'label'      => 'mautic.campaign.form.limittocampaigns',
            'label_attr' => ['class' => 'control-label'],
            'attr'       => [
                'class'   => 'form-control',
                'tooltip' => 'mautic.campaign.form.limittocampaigns_descr',
            ],
            'required' => false,
        ]);
    }

    public function getBlockPrefix()
    {
        return 'campaignevent_leadchange';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Form/Type/CampaignEventLeadChangeType.php";
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
        return new Source("", "@bundles/CampaignBundle/Form/Type/CampaignEventLeadChangeType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Form\\Type\\CampaignEventLeadChangeType.php");
    }
}
