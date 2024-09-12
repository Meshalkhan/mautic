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

/* @bundles/AssetBundle/Form/Type/ConfigType.php */
class __TwigTemplate_0da487c5a450bd333a02a8a501dd2d86 extends Template
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

namespace Mautic\\AssetBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\DataTransformer\\ArrayStringTransformer;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class ConfigType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'upload_dir',
            TextType::class,
            [
                'label'      => 'mautic.asset.config.form.upload.dir',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.asset.config.form.upload.dir.tooltip',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'mautic.core.value.required',
                    ]),
                ],
            ]
        );

        \$builder->add(
            'max_size',
            TextType::class,
            [
                'label'      => 'mautic.asset.config.form.max.size',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.asset.config.form.max.size.tooltip',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'mautic.core.value.required',
                    ]),
                ],
            ]
        );

        \$arrayStringTransformer = new ArrayStringTransformer();
        \$builder->add(
            \$builder->create(
                'allowed_extensions',
                TextType::class,
                [
                    'label'      => 'mautic.asset.config.form.allowed.extensions',
                    'label_attr' => ['class' => 'control-label'],
                    'attr'       => [
                        'class'   => 'form-control',
                        'tooltip' => 'mautic.asset.config.form.allowed.extensions.tooltip',
                    ],
                    'required' => false,
                ]
            )->addViewTransformer(\$arrayStringTransformer)
        );
    }

    public function getBlockPrefix()
    {
        return 'assetconfig';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Form/Type/ConfigType.php";
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
        return new Source("", "@bundles/AssetBundle/Form/Type/ConfigType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Form\\Type\\ConfigType.php");
    }
}
