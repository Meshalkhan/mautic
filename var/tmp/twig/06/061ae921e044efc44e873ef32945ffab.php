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

/* @bundles/DashboardBundle/Form/Type/UploadType.php */
class __TwigTemplate_371fbcdaba58f718a5dc27a4f841aeef extends Template
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

namespace Mautic\\DashboardBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class UploadType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'file',
            FileType::class,
            [
                'label' => 'mautic.lead.import.file',
                'attr'  => [
                    'accept' => '.json',
                    'class'  => 'form-control',
                ],
            ]
        );

        \$builder->add(
            'start',
            SubmitType::class,
            [
                'attr' => [
                    'class'   => 'btn btn-primary',
                    'icon'    => 'ri-upload-line',
                    'onclick' => \"mQuery(this).prop('disabled', true); mQuery('form[name=\\'dashboard_upload\\']').submit();\",
                ],
                'label' => 'mautic.lead.import.upload',
            ]);
        if (!empty(\$options['action'])) {
            \$builder->setAction(\$options['action']);
        }
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'dashboard_upload';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Form/Type/UploadType.php";
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
        return new Source("", "@bundles/DashboardBundle/Form/Type/UploadType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DashboardBundle\\Form\\Type\\UploadType.php");
    }
}
