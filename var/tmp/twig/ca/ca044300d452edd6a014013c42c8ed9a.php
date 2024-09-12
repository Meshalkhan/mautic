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

/* @bundles/EmailBundle/Form/Type/AbTestPropertiesType.php */
class __TwigTemplate_43878d6e175e6124637deeab12612a58 extends Template
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

namespace Mautic\\EmailBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0. Use \\Mautic\\PageBundle\\Form\\Type\\AbTestPropertiesType instead.
 *
 * @extends AbstractType<mixed>
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
        return 'email_abtest_settings';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Form/Type/AbTestPropertiesType.php";
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
        return new Source("", "@bundles/EmailBundle/Form/Type/AbTestPropertiesType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Form\\Type\\AbTestPropertiesType.php");
    }
}
