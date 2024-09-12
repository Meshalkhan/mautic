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

/* @bundles/LeadBundle/Entity/ImportRepository.php */
class __TwigTemplate_0586624c98203a660d9dcfbb004bf7e9 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Import>
 */
class ImportRepository extends CommonRepository
{
    /**
     * Count how many imports with the status is there.
     *
     * @param float \$ghostDelay when is the import ghost? In hours
     * @param int   \$limit
     *
     * @return array
     */
    public function getGhostImports(\$ghostDelay = 2, \$limit = null)
    {
        \$q = \$this->getQueryForStatuses([Import::IN_PROGRESS]);
        \$q->select(\$this->getTableAlias())
            ->andWhere(\$q->expr()->lt(\$this->getTableAlias().'.dateModified', ':delay'))
            ->setParameter('delay', (new \\DateTime())->modify('-'.\$ghostDelay.' hours'));

        if (null !== \$limit) {
            \$q->setFirstResult(0)
                ->setMaxResults(\$limit);
        }

        return \$q->getQuery()->getResult();
    }

    /**
     * Count how many imports with the status is there.
     *
     * @param int \$limit
     *
     * @return array
     */
    public function getImportsWithStatuses(array \$statuses, \$limit = null)
    {
        \$q = \$this->getQueryForStatuses(\$statuses);
        \$q->select(\$this->getTableAlias())
            ->orderBy(\$this->getTableAlias().'.priority', 'ASC')
            ->addOrderBy(\$this->getTableAlias().'.dateAdded', 'DESC');

        if (null !== \$limit) {
            \$q->setFirstResult(0)
                ->setMaxResults(\$limit);
        }

        return \$q->getQuery()->getResult();
    }

    /**
     * Count how many imports with the status is there.
     */
    public function countImportsWithStatuses(array \$statuses): int
    {
        \$q = \$this->getQueryForStatuses(\$statuses);
        \$q->select('COUNT(DISTINCT '.\$this->getTableAlias().'.id) as theCount');

        \$results = \$q->getQuery()->getSingleResult();

        if (isset(\$results['theCount'])) {
            return (int) \$results['theCount'];
        }

        return 0;
    }

    public function countImportsInProgress(): int
    {
        return \$this->countImportsWithStatuses([Import::IN_PROGRESS]);
    }

    public function getQueryForStatuses(\$statuses)
    {
        \$q = \$this->createQueryBuilder(\$this->getTableAlias());

        return \$q->where(\$q->expr()->in(\$this->getTableAlias().'.status', \$statuses));
    }

    public function getTableAlias(): string
    {
        return 'i';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/ImportRepository.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/ImportRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Entity\\ImportRepository.php");
    }
}
