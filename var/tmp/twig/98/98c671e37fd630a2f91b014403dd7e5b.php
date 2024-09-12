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

/* @bundles/UserBundle/Form/Type/UserListType.php */
class __TwigTemplate_f1059cf10eadb525a4350a933714c3d6 extends Template
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

namespace Mautic\\UserBundle\\Form\\Type;

use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class UserListType extends AbstractType
{
    /**
     * @var array<string,int>
     */
    private array \$choices = [];

    public function __construct(
        private UserModel \$userModel
    ) {
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'choices'           => \$this->getUserChoices(),
                'expanded'          => false,
                'multiple'          => true,
                'required'          => false,
                'placeholder'       => 'mautic.core.form.chooseone',
            ]
        );
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return ChoiceType::class;
    }

    /**
     * @return array<string,int>
     */
    private function getUserChoices(): array
    {
        if (\$this->choices) {
            return \$this->choices;
        }

        \$users = \$this->userModel->getRepository()->getEntities(
            [
                'filter' => [
                    'force' => [
                        [
                            'column' => 'u.isPublished',
                            'expr'   => 'eq',
                            'value'  => true,
                        ],
                    ],
                ],
            ]
        );

        foreach (\$users as \$user) {
            \$this->choices[\$user->getName(true)] = \$user->getId();
        }

        // sort by user name
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
        return "@bundles/UserBundle/Form/Type/UserListType.php";
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
        return new Source("", "@bundles/UserBundle/Form/Type/UserListType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Form\\Type\\UserListType.php");
    }
}
