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

/* @bundles/LeadBundle/Deduplicate/DeduperTrait.php */
class __TwigTemplate_cc2b5015f8225d09d395e3f1155a9cde extends Template
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

namespace Mautic\\LeadBundle\\Deduplicate;

use Mautic\\LeadBundle\\Model\\FieldModel;

trait DeduperTrait
{
    private \$object = 'lead';

    /**
     * @var FieldModel
     */
    private \$fieldModel;

    /**
     * @var array
     */
    private \$availableFields;

    public function getUniqueData(array \$queryFields): array
    {
        \$uniqueLeadFields    = \$this->fieldModel->getUniqueIdentifierFields(['object' => \$this->object]);
        \$uniqueLeadFieldData = [];
        \$inQuery             = array_intersect_key(\$queryFields, \$this->getAvailableFields());
        foreach (\$inQuery as \$k => \$v) {
            // Don't use empty values when checking for duplicates
            if (empty(\$v)) {
                continue;
            }

            if (array_key_exists(\$k, \$uniqueLeadFields)) {
                \$uniqueLeadFieldData[\$k] = \$v;
            }
        }

        return \$uniqueLeadFieldData;
    }

    /**
     * @return array
     */
    private function getAvailableFields()
    {
        if (null === \$this->availableFields) {
            \$this->availableFields = \$this->fieldModel->getFieldList(
                false,
                false,
                [
                    'isPublished' => true,
                    'object'      => \$this->object,
                ]
            );
        }

        return \$this->availableFields;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Deduplicate/DeduperTrait.php";
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
        return new Source("", "@bundles/LeadBundle/Deduplicate/DeduperTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Deduplicate\\DeduperTrait.php");
    }
}
