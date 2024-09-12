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

/* @bundles/FormBundle/Form/Type/SortableListTrait.php */
class __TwigTemplate_9bb59cdec1da2278fa4ba7595e643c2c extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\Type\\SortableListType;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;

trait SortableListTrait
{
    public function addSortableList(FormBuilderInterface \$builder, \$options, \$listName = 'list', \$listData = null, \$formName = 'formfield'): void
    {
        \$listOptions = [
            'with_labels' => true,
            'attr'        => [
                'data-show-on' => '{\"'.\$formName.'_properties_syncList_1\": \"\", \"'.\$formName.'_mappedField:data-list-type\": \"empty\"}',
            ],
            'option_required'     => false,
            'constraint_callback' => new Callback(
                function (\$validateMe, ExecutionContextInterface \$context) use (\$listName): void {
                    \$data = \$context->getRoot()->getData();
                    if ((empty(\$data['properties']['syncList']) || empty(\$data['mappedField'])) && !count(\$data['properties'][\$listName]['list'])) {
                        \$context->buildViolation('mautic.form.lists.count')->addViolation();
                    }
                }
            ),
        ];

        if (null !== \$listData) {
            \$listOptions['data'] = \$listData;
        }

        \$builder->add(\$listName, SortableListType::class, \$listOptions);
        \$builder->add(
            'syncList',
            YesNoButtonGroupType::class,
            [
                'attr' => [
                    'data-show-on' => '{\"'.\$formName.'_mappedField:data-list-type\": \"1\"}',
                ],
                'label' => 'mautic.form.field.form.property_list_sync_choices',
                'data'  => !isset(\$options['data']['syncList']) ? false : (bool) \$options['data']['syncList'],
            ]
        );

        \$builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent \$event): void {
            \$formData = \$event->getForm()->getParent()->getData();
            \$form     = \$event->getForm();
            if (empty(\$formData['mappedField'])) {
                // Disable sync list if a contact field is not mapped
                \$data             = \$event->getData();
                \$data['syncList'] = '0';
                \$form->setData(\$data);
            }
        });
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Form/Type/SortableListTrait.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/SortableListTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Form\\Type\\SortableListTrait.php");
    }
}
