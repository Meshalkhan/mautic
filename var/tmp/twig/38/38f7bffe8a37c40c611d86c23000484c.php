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

/* @bundles/LeadBundle/Form/Type/UpdateLeadActionType.php */
class __TwigTemplate_7e1ea6b4e6237ab7beb1398d0c63059f extends Template
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

use Mautic\\CoreBundle\\Cache\\ResultCacheOptions;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;

/**
 * @extends AbstractType<mixed>
 */
class UpdateLeadActionType extends AbstractType
{
    use EntityFieldsBuildFormTrait;

    public function __construct(
        private FieldModel \$fieldModel
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$leadFields = \$this->fieldModel->getEntities(
            [
                'force' => [
                    [
                        'column' => 'f.isPublished',
                        'expr'   => 'eq',
                        'value'  => true,
                    ],
                ],
                'hydration_mode' => 'HYDRATE_ARRAY',
                'result_cache'   => new ResultCacheOptions(LeadField::CACHE_NAMESPACE),
            ]
        );

        \$options['fields']                      = \$leadFields;
        \$options['ignore_required_constraints'] = true;
        \$options['ignore_date_type']            = true;

        \$this->getFormFields(\$builder, \$options);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'updatelead_action';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/UpdateLeadActionType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/UpdateLeadActionType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\Type\\UpdateLeadActionType.php");
    }
}
