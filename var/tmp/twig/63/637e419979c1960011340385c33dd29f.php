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

/* @bundles/IntegrationsBundle/Form/Type/Auth/BasicAuthKeysTrait.php */
class __TwigTemplate_0e79107fd47155a5762e2c61f2548fd8 extends Template
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

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Form\\Type\\Auth;

use Mautic\\IntegrationsBundle\\Form\\Type\\NotBlankIfPublishedConstraintTrait;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;

trait BasicAuthKeysTrait
{
    use NotBlankIfPublishedConstraintTrait;

    /**
     * @param string \$usernameLabel
     * @param string \$passwordLabel
     */
    private function addKeyFields(FormBuilderInterface \$builder, \$usernameLabel = 'mautic.core.username', \$passwordLabel = 'mautic.core.password'): void
    {
        \$builder->add(
            'username',
            TextType::class,
            [
                'label'       => \$usernameLabel,
                'label_attr'  => ['class' => 'control-label'],
                'required'    => true,
                'attr'        => [
                    'class' => 'form-control',
                ],
                'constraints' => [\$this->getNotBlankConstraint()],
            ]
        );

        \$builder->add(
            'password',
            PasswordType::class,
            [
                'label'       => \$passwordLabel,
                'label_attr'  => ['class' => 'control-label'],
                'required'    => true,
                'attr'        => [
                    'class' => 'form-control',
                ],
                'constraints' => [\$this->getNotBlankConstraint()],
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
        return "@bundles/IntegrationsBundle/Form/Type/Auth/BasicAuthKeysTrait.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Form/Type/Auth/BasicAuthKeysTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Form\\Type\\Auth\\BasicAuthKeysTrait.php");
    }
}
