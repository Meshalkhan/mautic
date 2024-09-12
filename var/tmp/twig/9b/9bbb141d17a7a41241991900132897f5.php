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

/* @bundles/StageBundle/Form/Type/StageListType.php */
class __TwigTemplate_c65d868d0f9eb8653b6d3100044d8815 extends Template
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

namespace Mautic\\StageBundle\\Form\\Type;

use Mautic\\StageBundle\\Entity\\Stage;
use Mautic\\StageBundle\\Model\\StageModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<Stage>
 */
class StageListType extends AbstractType
{
    /**
     * @var array<string,int>
     */
    private array \$choices = [];

    public function __construct(private StageModel \$stageModel)
    {
        \$this->stageModel = \$stageModel;
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'choices'           => \$this->getStageChoices(),
            'expanded'          => false,
            'multiple'          => true,
            'required'          => false,
            'placeholder'       => 'mautic.core.form.chooseone',
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }

    /**
     * @return array<string,int>
     */
    private function getStageChoices(): array
    {
        if (\$this->choices) {
            return \$this->choices;
        }

        \$stages = \$this->stageModel->getRepository()->getEntities([
            'filter' => [
                'force' => [
                    [
                        'column' => 's.isPublished',
                        'expr'   => 'eq',
                        'value'  => true,
                    ],
                ],
            ],
        ]);

        /** @var Stage \$stage */
        foreach (\$stages as \$stage) {
            \$this->choices[\$stage->getName()] = \$stage->getId();
        }

        // sort by language
        ksort(\$this->choices);

        return \$this->choices;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/Form/Type/StageListType.php";
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
        return new Source("", "@bundles/StageBundle/Form/Type/StageListType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StageBundle\\Form\\Type\\StageListType.php");
    }
}
