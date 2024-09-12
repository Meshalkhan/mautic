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

/* @bundles/LeadBundle/Form/Type/DashboardSegmentsBuildTime.php */
class __TwigTemplate_d79b1eafd8cf2b7f15cd2070a7ea0d65 extends Template
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

use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class DashboardSegmentsBuildTime extends AbstractType
{
    public function __construct(
        private ListModel \$segmentModel
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'order',
            ChoiceType::class,
            [
                'label'             => 'mautic.core.order',
                'choices'           => [
                    'mautic.widget.segments.build.time.shortest' => 'ASC',
                    'mautic.widget.segments.build.time.longest'  => 'DESC',
                ],
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'empty_data' => '',
                'required'   => false,
            ]
        );

        \$lists    = \$this->segmentModel->getUserLists();
        \$segments = [];
        foreach (\$lists as \$list) {
            \$segments[\$list['name']] = \$list['id'];
        }

        \$builder->add('segments', ChoiceType::class, [
            'label'             => 'mautic.lead.list.filter',
            'multiple'          => true,
            'choices'           => \$segments,
            'label_attr'        => ['class' => 'control-label'],
            'attr'              => ['class' => 'form-control'],
            'required'          => false,
        ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/DashboardSegmentsBuildTime.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/DashboardSegmentsBuildTime.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\Type\\DashboardSegmentsBuildTime.php");
    }
}
