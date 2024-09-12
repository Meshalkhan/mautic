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

/* @bundles/LeadBundle/Entity/StagesChangeLogRepository.php */
class __TwigTemplate_cf8b0e8ff33d1df85fc2de8b50d92183 extends Template
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
 * @extends CommonRepository<StagesChangeLog>
 */
class StagesChangeLogRepository extends CommonRepository
{
    use TimelineTrait;

    /**
     * Get a lead's stage log.
     *
     * @param int|null \$leadId
     *
     * @return array
     */
    public function getLeadTimelineEvents(\$leadId = null, array \$options = [])
    {
        \$query = \$this->getEntityManager()->getConnection()->createQueryBuilder()
            ->from(MAUTIC_TABLE_PREFIX.'lead_stages_change_log', 'ls')
            ->select('ls.id, ls.stage_id as reference, ls.event_name as eventName, ls.action_name as actionName, ls.date_added as dateAdded, ls.lead_id');

        if (\$leadId) {
            \$query->where('ls.lead_id = '.(int) \$leadId);
        }

        if (isset(\$options['search']) && \$options['search']) {
            \$query->andWhere(\$query->expr()->or(
                \$query->expr()->like('ls.event_name', \$query->expr()->literal('%'.\$options['search'].'%')),
                \$query->expr()->like('ls.action_name', \$query->expr()->literal('%'.\$options['search'].'%'))
            ));
        }

        return \$this->getTimelineResults(\$query, \$options, 'ls.event_name', 'ls.date_added', [], ['dateAdded']);
    }

    /**
     * Updates lead ID (e.g. after a lead merge).
     *
     * @param int \$fromLeadId
     * @param int \$toLeadId
     */
    public function updateLead(\$fromLeadId, \$toLeadId): void
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->update(MAUTIC_TABLE_PREFIX.'lead_stages_change_log')
            ->set('lead_id', (int) \$toLeadId)
            ->where('lead_id = '.(int) \$fromLeadId)
            ->executeStatement();
    }

    /**
     * Get the current stage assigned to a lead.
     *
     * @param int \$leadId
     */
    public function getCurrentLeadStage(\$leadId): ?int
    {
        \$query = \$this->getEntityManager()->getConnection()->createQueryBuilder();

        \$query->select('stage_id as stage')
            ->from(MAUTIC_TABLE_PREFIX.'lead_stages_change_log', 'ls')
            ->where(\$query->expr()->eq('lead_id', ':value'))
            ->setParameter('value', \$leadId)
            ->orderBy('date_added', 'DESC');

        \$result = \$query->executeQuery()->fetchAssociative();

        return (isset(\$result['stage'])) ? (int) \$result['stage'] : null;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/StagesChangeLogRepository.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/StagesChangeLogRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Entity\\StagesChangeLogRepository.php");
    }
}
