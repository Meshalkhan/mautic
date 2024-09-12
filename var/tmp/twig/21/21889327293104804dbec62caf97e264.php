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

/* @bundles/PointBundle/Form/Type/GenericPointSettingsType.php */
class __TwigTemplate_27391e2cfd3070c2eb8d72267dd53368 extends Template
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

namespace Mautic\\PointBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\NumberType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\NotEqualTo;

/**
 * @extends AbstractType<array<mixed>>
 */
class GenericPointSettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$default = (empty(\$options['data']['delta'])) ? 0 : (int) \$options['data']['delta'];
        \$builder->add(
            'delta',
            NumberType::class,
            [
                'label'      => 'mautic.point.action.delta',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.point.action.delta.help',
                ],
                'scale'       => 0,
                'data'        => \$default,
                'constraints' => [
                    new NotEqualTo(
                        [
                            'value'   => '0',
                            'message' => 'mautic.core.value.required',
                        ]
                    ),
                ],
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'genericpoint_settings';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Form/Type/GenericPointSettingsType.php";
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
        return new Source("", "@bundles/PointBundle/Form/Type/GenericPointSettingsType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Form\\Type\\GenericPointSettingsType.php");
    }
}
