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

/* @bundles/LeadBundle/Form/Type/ConfigCompanyType.php */
class __TwigTemplate_04a6283cc0c6af45c5f1527ac84cad0d extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Doctrine\\DBAL\\Query\\Expression\\CompositeExpression;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class ConfigCompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'company_unique_identifiers_operator',
            ChoiceType::class,
            [
                'choices'           => [
                    'mautic.core.config.contact_unique_identifiers_operator.or'    => CompositeExpression::TYPE_OR,
                    'mautic.core.config.contact_unique_identifiers_operator.and'   => CompositeExpression::TYPE_AND,
                ],
                'label'             => 'mautic.core.config.unique_identifiers_operator',
                'required'          => false,
                'attr'              => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.core.config.unique_identifiers_operator.tooltip',
                ],
                'placeholder'       => false,
            ]
        );
    }

    public function getBlockPrefix()
    {
        return 'companyconfig';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/ConfigCompanyType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/ConfigCompanyType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\Type\\ConfigCompanyType.php");
    }
}
