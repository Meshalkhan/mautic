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

/* @bundles/LeadBundle/Event/LeadListFilteringEvent.php */
class __TwigTemplate_4f8eef10ad708449768571fb64621180 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;

/**
 * Please refer to LeadListRepository.php, inside getListFilterExprCombined method, for examples.
 */
class LeadListFilteringEvent extends CommonEvent
{
    protected bool \$isFilteringDone;

    protected string \$subQuery;

    private string \$leadsTableAlias;

    /**
     * @param array        \$details
     * @param int          \$leadId
     * @param string       \$alias
     * @param string       \$func
     * @param QueryBuilder \$queryBuilder
     */
    public function __construct(
        protected \$details,
        protected \$leadId,
        protected \$alias,
        protected \$func,
        protected \$queryBuilder,
        EntityManager \$entityManager
    ) {
        \$this->em              = \$entityManager;
        \$this->isFilteringDone = false;
        \$this->subQuery        = '';
        \$this->leadsTableAlias = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
    }

    /**
     * @return array
     */
    public function getDetails()
    {
        return \$this->details;
    }

    /**
     * @return int
     */
    public function getLeadId()
    {
        return \$this->leadId;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return \$this->alias;
    }

    /**
     * @return string
     */
    public function getFunc()
    {
        return \$this->func;
    }

    /**
     * @return EntityManagerInterface
     */
    public function getEntityManager()
    {
        return \$this->em;
    }

    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        return \$this->queryBuilder;
    }

    /**
     * @param bool \$status
     */
    public function setFilteringStatus(\$status): void
    {
        \$this->isFilteringDone = \$status;
    }

    /**
     * @param string \$query
     */
    public function setSubQuery(\$query): void
    {
        \$this->subQuery = \$query;

        \$this->setFilteringStatus(true);
    }

    public function isFilteringDone(): bool
    {
        return \$this->isFilteringDone;
    }

    public function getSubQuery(): string
    {
        return \$this->subQuery;
    }

    /**
     * @param array \$details
     */
    public function setDetails(\$details): void
    {
        \$this->details = \$details;
    }

    public function getLeadsTableAlias(): string
    {
        return \$this->leadsTableAlias;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadListFilteringEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadListFilteringEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\LeadListFilteringEvent.php");
    }
}
