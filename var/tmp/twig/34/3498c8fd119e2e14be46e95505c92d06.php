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

/* @bundles/PluginBundle/Form/Type/CompanyFieldsType.php */
class __TwigTemplate_e9053a69381098e6ae380f97274f42fb extends Template
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

namespace Mautic\\PluginBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class CompanyFieldsType extends AbstractType
{
    use FieldsTypeTrait;

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$this->buildFormFields(\$builder, \$options, \$options['integration_fields'], \$options['mautic_fields'], 'company', \$options['limit'], \$options['start']);
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$this->configureFieldOptions(\$resolver, 'company');
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'integration_company_fields';
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$this->buildFieldView(\$view, \$options);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Form/Type/CompanyFieldsType.php";
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
        return new Source("", "@bundles/PluginBundle/Form/Type/CompanyFieldsType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Form\\Type\\CompanyFieldsType.php");
    }
}
