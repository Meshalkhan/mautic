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

/* @bundles/LeadBundle/Segment/Query/LeadBatchLimiterTrait.php */
class __TwigTemplate_33030de56f717fe1ebfb918562d3c6e8 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Query;

trait LeadBatchLimiterTrait
{
    /**
     * @param array<string, mixed> \$batchLimiters
     */
    private function addMinMaxLimiters(QueryBuilder \$queryBuilder, array \$batchLimiters, string \$tableName, string \$columnName = 'lead_id'): void
    {
        \$leadsTableAlias = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.\$tableName);

        if (!empty(\$batchLimiters['minId']) && !empty(\$batchLimiters['maxId'])) {
            \$queryBuilder->andWhere(
                \$queryBuilder->expr()->comparison(\$leadsTableAlias.'.'.\$columnName, 'BETWEEN', \"{\$batchLimiters['minId']} and {\$batchLimiters['maxId']}\")
            );
        } elseif (!empty(\$batchLimiters['maxId'])) {
            \$queryBuilder->andWhere(
                \$queryBuilder->expr()->lte(\$leadsTableAlias.'.'.\$columnName, (int) \$batchLimiters['maxId'])
            );
        } elseif (!empty(\$batchLimiters['minId'])) {
            \$queryBuilder->andWhere(
                \$queryBuilder->expr()->gte(\$leadsTableAlias.'.'.\$columnName, (int) \$batchLimiters['minId'])
            );
        }
    }

    /**
     * @param array<string, mixed> \$batchLimiters
     */
    private function addLeadLimiter(QueryBuilder \$queryBuilder, array \$batchLimiters, string \$tableName, string \$columnName = 'lead_id'): void
    {
        \$leadsTableAlias = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.\$tableName);

        if (empty(\$batchLimiters['lead_id'])) {
            return;
        }

        \$queryBuilder->andWhere(\$leadsTableAlias.'.'.\$columnName.' = '.\$batchLimiters['lead_id']);
    }

    /**
     * @param array<string, mixed> \$batchLimiters
     */
    private function addLeadAndMinMaxLimiters(QueryBuilder \$queryBuilder, array \$batchLimiters, string \$tableName, string \$columnName = 'lead_id'): void
    {
        \$this->addLeadLimiter(\$queryBuilder, \$batchLimiters, \$tableName, \$columnName);
        \$this->addMinMaxLimiters(\$queryBuilder, \$batchLimiters, \$tableName, \$columnName);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Query/LeadBatchLimiterTrait.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/LeadBatchLimiterTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Query\\LeadBatchLimiterTrait.php");
    }
}
