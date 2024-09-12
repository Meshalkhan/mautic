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

/* @bundles/LeadBundle/Form/Type/DashboardLeadsInTimeWidgetType.php */
class __TwigTemplate_93a5891c022b6d389e468dcd0935c9fa extends Template
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

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class DashboardLeadsInTimeWidgetType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'flag',
            ChoiceType::class,
            [
                'label'             => 'mautic.lead.list.filter',
                'choices'           => [
                    'mautic.lead.show.all'                               => '',
                    'mautic.lead.show.identified'                        => 'identified',
                    'mautic.lead.show.anonymous'                         => 'anonymous',
                    'mautic.lead.show.identified.vs.anonymous'           => 'identifiedVsAnonymous',
                    'mautic.lead.show.top'                               => 'top',
                    'mautic.lead.show.top.leads.identified.vs.anonymous' => 'topIdentifiedVsAnonymous',
                ],
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'empty_data' => '',
                'required'   => false,
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'lead_dashboard_leads_in_time_widget';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/DashboardLeadsInTimeWidgetType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/DashboardLeadsInTimeWidgetType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\Type\\DashboardLeadsInTimeWidgetType.php");
    }
}
