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

/* @bundles/AssetBundle/Form/Type/FormSubmitActionDownloadFileType.php */
class __TwigTemplate_2c69a7355822162d2431965379395b75 extends Template
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

use Mautic\\CategoryBundle\\Form\\Type\\CategoryListType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class FormSubmitActionDownloadFileType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'asset',
            AssetListType::class,
            [
                'expanded'    => false,
                'multiple'    => false,
                'label'       => 'mautic.asset.form.submit.assets',
                'label_attr'  => ['class' => 'control-label'],
                'placeholder' => 'mautic.asset.form.submit.latest.category',
                'required'    => false,
                'attr'        => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.asset.form.submit.assets_descr',
                ],
            ]
        );

        \$builder->add(
            'category',
            CategoryListType::class,
            [
                'label'         => 'mautic.asset.form.submit.latest.category',
                'label_attr'    => ['class' => 'control-label'],
                'placeholder'   => false,
                'required'      => false,
                'bundle'        => 'asset',
                'return_entity' => false,
                'attr'          => [
                    'class'        => 'form-control',
                    'tooltip'      => 'mautic.asset.form.submit.latest.category_descr',
                    'data-show-on' => '{\"formaction_properties_asset\":\"\"}',
                ],
            ]
        );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'asset_submitaction_downloadfile';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Form/Type/FormSubmitActionDownloadFileType.php";
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
        return new Source("", "@bundles/AssetBundle/Form/Type/FormSubmitActionDownloadFileType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Form\\Type\\FormSubmitActionDownloadFileType.php");
    }
}
