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

/* @bundles/LeadBundle/Form/Type/TagType.php */
class __TwigTemplate_359f9a2fd7a3d652dc5c763a3669ff47 extends Template
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

use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\EntityRepository;
use Mautic\\LeadBundle\\Entity\\Tag;
use Mautic\\LeadBundle\\Form\\DataTransformer\\TagEntityModelTransformer;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<Tag>
 */
class TagType extends AbstractType
{
    public function __construct(
        private EntityManager \$em
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        if (\$options['add_transformer']) {
            \$transformer = new TagEntityModelTransformer(
                \$this->em,
                Tag::class,
                \$options['multiple']
            );

            \$builder->addModelTransformer(\$transformer);
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'label'           => 'mautic.lead.tags',
                'class'           => Tag::class,
                'query_builder'   => fn (EntityRepository \$er) => \$er->createQueryBuilder('t')->orderBy('t.tag', \\Doctrine\\Common\\Collections\\Criteria::ASC),
                'choice_label'    => 'tag',
                'multiple'        => true,
                'required'        => false,
                'disabled'        => false,
                'add_transformer' => false,
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'lead_tag';
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return EntityType::class;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/TagType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/TagType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\Type\\TagType.php");
    }
}
