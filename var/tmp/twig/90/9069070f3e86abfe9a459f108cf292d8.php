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

/* @bundles/PageBundle/Form/Type/AbTestPropertiesType.php */
class __TwigTemplate_84fad09ad8242f7d54b19991523f27a0 extends Template
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

namespace Mautic\\PageBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class AbTestPropertiesType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$options = ['label' => false];
        if (isset(\$options['formTypeOptions'])) {
            \$options = array_merge(\$options, \$options['formTypeOptions']);
        }
        \$builder->add('properties', \$options['formType'], \$options);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefined([
            'formType',
            'formTypeOptions',
        ]);
    }

    public function getBlockPrefix()
    {
        return 'page_abtest_settings';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Form/Type/AbTestPropertiesType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/AbTestPropertiesType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Form\\Type\\AbTestPropertiesType.php");
    }
}
