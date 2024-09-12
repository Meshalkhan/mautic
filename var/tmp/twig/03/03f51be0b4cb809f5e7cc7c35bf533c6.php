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

/* @bundles/ReportBundle/Form/Type/DynamicFiltersType.php */
class __TwigTemplate_3a1979f747d1d25cfe2ce95f2d28da51 extends Template
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

namespace Mautic\\ReportBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\ButtonGroupType;
use Mautic\\ReportBundle\\Entity\\Report;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateTimeType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\DateType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class DynamicFiltersType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        foreach (\$options['report']->getFilters() as \$filter) {
            if (isset(\$filter['dynamic']) && 1 === \$filter['dynamic']) {
                \$column     = \$filter['column'];
                \$definition = \$options['filterDefinitions']->definitions[\$column];
                \$args       = [
                    'label'      => \$definition['label'],
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'    => 'form-control',
                        'onchange' => \"Mautic.filterTableData('report.\".\$options['report']->getId().\"','\".\$column.\"',mQuery(this).val(),'list','.report-content');\",
                    ],
                    'required' => false,
                ];

                switch (\$definition['type']) {
                    case 'bool':
                    case 'boolean':
                        \$type            = ButtonGroupType::class;
                        \$args['choices'] = [
                            [
                                'mautic.core.form.no'      => false,
                                'mautic.core.form.yes'     => true,
                                'mautic.core.filter.clear' => '2',
                            ],
                        ];

                        if (isset(\$options['data'][\$definition['alias']])) {
                            \$args['data'] = (1 == (int) \$options['data'][\$definition['alias']]);
                        } else {
                            \$args['data'] = (int) \$filter['value'];
                        }
                        break;
                    case 'date':
                        \$type           = DateType::class;
                        \$args['input']  = 'string';
                        \$args['widget'] = 'single_text';
                        \$args['html5']  = false;
                        \$args['format'] = 'y-MM-dd';
                        \$args['attr']['class'] .= ' datepicker';
                        break;
                    case 'datetime':
                        \$type           = DateTimeType::class;
                        \$args['input']  = 'string';
                        \$args['widget'] = 'single_text';
                        \$args['html5']  = false;
                        \$args['format'] = 'y-MM-dd HH:mm:ss';
                        \$args['attr']['class'] .= ' datetimepicker';
                        break;
                    case 'multiselect':
                        \$args['multiple']         = true;
                        // no break
                    case 'select':
                        \$type            = ChoiceType::class;
                        \$args['choices'] = array_flip(\$definition['list']);
                        break;
                    default:
                        \$type = TextType::class;
                        break;
                }

                \$builder->add(\$definition['alias'], \$type, \$args);
            }
        }
    }

    public function getBlockPrefix()
    {
        return 'report_dynamicfilters';
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'filterDefinitions' => [],
                'report'            => new Report(),
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
        return "@bundles/ReportBundle/Form/Type/DynamicFiltersType.php";
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
        return new Source("", "@bundles/ReportBundle/Form/Type/DynamicFiltersType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Form\\Type\\DynamicFiltersType.php");
    }
}
