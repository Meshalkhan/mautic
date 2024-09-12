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

/* @bundles/DynamicContentBundle/Form/Type/DwcEntryFiltersType.php */
class __TwigTemplate_8d1e46509e1e37f94c7b28a5318e226c extends Template
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

namespace Mautic\\DynamicContentBundle\\Form\\Type;

use Mautic\\LeadBundle\\Form\\Type\\FilterTrait;
use Mautic\\LeadBundle\\Model\\ListModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\Exception\\AccessException;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @extends AbstractType<mixed>
 */
class DwcEntryFiltersType extends AbstractType
{
    use FilterTrait;

    public function __construct(
        private TranslatorInterface \$translator,
        private ListModel \$listModel
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'glue',
            ChoiceType::class,
            [
                'label'   => false,
                'choices' => [
                    'mautic.lead.list.form.glue.and' => 'and',
                    'mautic.lead.list.form.glue.or'  => 'or',
                ],
                'attr'              => [
                    'class'    => 'form-control not-chosen glue-select',
                    'onchange' => 'Mautic.updateFilterPositioning(this)',
                ],
            ]
        );

        \$formModifier = function (FormEvent \$event, \$eventName): void {
            \$this->buildFiltersForm(\$eventName, \$event, \$this->translator);
        };

        \$builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent \$event) use (\$formModifier): void {
                \$formModifier(\$event, FormEvents::PRE_SET_DATA);
            }
        );

        \$builder->addEventListener(
            FormEvents::PRE_SUBMIT,
            function (FormEvent \$event) use (\$formModifier): void {
                \$formModifier(\$event, FormEvents::PRE_SUBMIT);
            }
        );

        \$builder->add('field', HiddenType::class);
        \$builder->add('object', HiddenType::class);
        \$builder->add('type', HiddenType::class);
    }

    /**
     * @throws AccessException
     */
    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setRequired(
            [
                'countries',
                'regions',
                'timezones',
                'locales',
                'fields',
                'deviceTypes',
                'deviceBrands',
                'deviceOs',
                'tags',
                'lists',
            ]
        );

        \$resolver->setDefaults(
            [
                'label'          => false,
                'error_bubbling' => false,
                // @see \\Mautic\\LeadBundle\\Controller\\AjaxController::loadSegmentFilterFormAction()
                'lists'          => \$this->listModel->getChoiceFields()['lead']['leadlist']['properties']['list'],
            ]
        );
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$view->vars['fields'] = \$options['fields'];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Form/Type/DwcEntryFiltersType.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Form/Type/DwcEntryFiltersType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Form\\Type\\DwcEntryFiltersType.php");
    }
}
