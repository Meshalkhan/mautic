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

/* @bundles/LeadBundle/Form/Type/LeadListType.php */
class __TwigTemplate_49b756036f1e4170ce7ff8e91e499373 extends Template
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
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class LeadListType extends AbstractType
{
    public function __construct(
        private ListModel \$segmentModel
    ) {
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'choices' => function (Options \$options): array {
                \$lists = (empty(\$options['global_only'])) ? \$this->segmentModel->getUserLists() : \$this->segmentModel->getGlobalLists();
                \$lists = (empty(\$options['preference_center_only'])) ? \$lists : \$this->segmentModel->getPreferenceCenterLists();

                \$choices = [];
                foreach (\$lists as \$l) {
                    if (empty(\$options['preference_center_only'])) {
                        \$choices[\$l['name']] = \$l['id'];
                    } else {
                        \$choices[empty(\$l['publicName']) ? \$l['name'] : \$l['publicName']] = \$l['id'];
                    }
                }

                return \$choices;
            },
            'global_only'            => false,
            'preference_center_only' => false,
            'required'               => false,
        ]);
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return ChoiceType::class;
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'leadlist_choices';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/LeadListType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/LeadListType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\Type\\LeadListType.php");
    }
}
