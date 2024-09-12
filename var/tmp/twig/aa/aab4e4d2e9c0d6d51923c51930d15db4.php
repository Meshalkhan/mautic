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

/* @bundles/CategoryBundle/Form/Type/CategoryListType.php */
class __TwigTemplate_356bded60573bc6b1738051628e6b65e extends Template
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

namespace Mautic\\CategoryBundle\\Form\\Type;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CategoryBundle\\Model\\CategoryModel;
use Mautic\\CoreBundle\\Form\\DataTransformer\\IdToEntityModelTransformer;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @extends AbstractType<mixed>
 */
class CategoryListType extends AbstractType
{
    public function __construct(
        private EntityManager \$em,
        private TranslatorInterface \$translator,
        private CategoryModel \$model,
        private RouterInterface \$router
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        if (true === \$options['return_entity']) {
            \$transformer = new IdToEntityModelTransformer(\$this->em, \\Mautic\\CategoryBundle\\Entity\\Category::class, 'id');
            \$builder->addModelTransformer(\$transformer);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'choices' => function (Options \$options): array {
                \$createNew  = \$this->translator->trans('mautic.category.createnew');
                \$categories = \$this->model->getLookupResults(\$options['bundle'], '', 0);
                \$choices    = [];
                foreach (\$categories as \$l) {
                    \$choices[\$l['title']] = \$l['id'];
                }
                \$choices[\$createNew] = 'new';

                return \$choices;
            },
            'label'             => 'mautic.core.category',
            'label_attr'        => ['class' => 'control-label'],
            'multiple'          => false,
            'placeholder'       => 'mautic.core.form.uncategorized',
            'attr'              => function (Options \$options): array {
                \$modalHeader = \$this->translator->trans('mautic.category.header.new');
                \$newUrl      = \$this->router->generate('mautic_category_action', [
                    'objectAction' => 'new',
                    'bundle'       => \$options['bundle'],
                    'inForm'       => 1,
                ]);

                return [
                    'class'    => 'form-control category-select',
                    'onchange' => \"Mautic.loadAjaxModalBySelectValue(this, 'new', '{\$newUrl}', '{\$modalHeader}');\",
                ];
            },
            'required'      => false,
            'return_entity' => true,
        ]);

        \$resolver->setRequired(['bundle']);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'category';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return ChoiceType::class;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Form/Type/CategoryListType.php";
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
        return new Source("", "@bundles/CategoryBundle/Form/Type/CategoryListType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CategoryBundle\\Form\\Type\\CategoryListType.php");
    }
}
