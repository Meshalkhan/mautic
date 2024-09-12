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

/* @bundles/LeadBundle/Entity/LeadCategoryRepository.php */
class __TwigTemplate_11517e1b058055053e4ad0e411f41325 extends Template
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
 * @extends CommonRepository<LeadCategory>
 */
class LeadCategoryRepository extends CommonRepository
{
    /**
     * @return array<mixed, array<string, mixed>>
     */
    public function getLeadCategories(Lead \$lead): array
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder()
            ->select('lc.id, lc.category_id, lc.date_added, lc.manually_added, lc.manually_removed, c.alias, c.title')
            ->from(MAUTIC_TABLE_PREFIX.'lead_categories', 'lc')
            ->join('lc', MAUTIC_TABLE_PREFIX.'categories', 'c', 'c.id = lc.category_id')
            ->where('lc.lead_id = :lead')
            ->andWhere('lc.manually_removed = 0')
            ->setParameter('lead', \$lead->getId());

        \$results = \$q->executeQuery()
            ->fetchAllAssociative();

        \$categories = [];
        foreach (\$results as \$category) {
            \$categories[\$category['category_id']] = \$category;
        }

        return \$categories;
    }

    /**
     * @return mixed[]
     */
    public function getUnsubscribedLeadCategories(Lead \$lead): array
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder()
            ->select('lc.id, lc.category_id, lc.date_added, lc.manually_added, lc.manually_removed, c.alias, c.title')
            ->from(MAUTIC_TABLE_PREFIX.'lead_categories', 'lc')
            ->join('lc', MAUTIC_TABLE_PREFIX.'categories', 'c', 'c.id = lc.category_id')
            ->where('lc.lead_id = :lead')
            ->andWhere('lc.manually_removed = 1')
            ->setParameter('lead', \$lead->getId());

        \$results = \$q->executeQuery()->fetchAllAssociative();

        \$categories = [];
        foreach (\$results as \$category) {
            \$categories[\$category['category_id']] = \$category;
        }

        return \$categories;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/LeadCategoryRepository.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/LeadCategoryRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Entity\\LeadCategoryRepository.php");
    }
}
