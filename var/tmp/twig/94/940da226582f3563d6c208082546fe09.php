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

/* @bundles/SmsBundle/Entity/StatRepository.php */
class __TwigTemplate_2da0b119b03d7223df44b13c1f97e531 extends Template
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

namespace Mautic\\SmsBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Entity\\TimelineTrait;

/**
 * @extends CommonRepository<Stat>
 */
class StatRepository extends CommonRepository
{
    use TimelineTrait;

    /**
     * @return mixed
     *
     * @throws \\Doctrine\\ORM\\NoResultException
     * @throws \\Doctrine\\ORM\\NonUniqueResultException
     */
    public function getSmsStatus(\$trackingHash)
    {
        \$q = \$this->createQueryBuilder('s');
        \$q->select('s')
            ->leftJoin('s.lead', 'l')
            ->leftJoin('s.sms', 'e')
            ->where(
                \$q->expr()->eq('s.trackingHash', ':hash')
            )
            ->setParameter('hash', \$trackingHash);

        \$result = \$q->getQuery()->getResult();

        return (!empty(\$result)) ? \$result[0] : null;
    }

    public function getSentStats(\$smsId, \$listId = null): array
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->select('s.lead_id')
            ->from(MAUTIC_TABLE_PREFIX.'sms_messages_stats', 's')
            ->where('s.sms_id = :sms')
            ->setParameter('sms', \$smsId);

        if (\$listId) {
            \$q->andWhere('s.list_id = :list')
                ->setParameter('list', \$listId);
        }

        \$result = \$q->executeQuery()->fetchAllAssociative();

        // index by lead
        \$stats = [];
        foreach (\$result as \$r) {
            \$stats[\$r['lead_id']] = \$r['lead_id'];
        }

        unset(\$result);

        return \$stats;
    }

    /**
     * @param int|array \$smsIds
     * @param int       \$listId
     *
     * @return int
     */
    public function getSentCount(\$smsIds = null, \$listId = null)
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();

        \$q->select('count(s.id) as sent_count')
            ->from(MAUTIC_TABLE_PREFIX.'sms_message_stats', 's');

        if (\$smsIds) {
            if (!is_array(\$smsIds)) {
                \$smsIds = [(int) \$smsIds];
            }
            \$q->where(
                \$q->expr()->in('s.sms_id', \$smsIds)
            );
        }

        if (\$listId) {
            \$q->andWhere('s.list_id = '.(int) \$listId);
        }

        \$q->andWhere('s.is_failed = :false')
            ->setParameter('false', false, 'boolean');

        \$results = \$q->executeQuery()->fetchAllAssociative();

        return (isset(\$results[0])) ? \$results[0]['sent_count'] : 0;
    }

    /**
     * Get a lead's email stat.
     *
     * @param int \$leadId
     *
     * @return array
     *
     * @throws \\Doctrine\\ORM\\NoResultException
     * @throws \\Doctrine\\ORM\\NonUniqueResultException
     */
    public function getLeadStats(\$leadId, array \$options = [])
    {
        \$query = \$this->getEntityManager()->getConnection()->createQueryBuilder();
        \$query->from(MAUTIC_TABLE_PREFIX.'sms_message_stats', 's')
            ->leftJoin('s', MAUTIC_TABLE_PREFIX.'sms_messages', 'e', 's.sms_id = e.id');

        if (\$leadId) {
            \$query->andWhere(
                \$query->expr()->eq('s.lead_id', (int) \$leadId)
            );
        }

        if (!empty(\$options['basic_select'])) {
            \$query->select(
                's.sms_id, s.id, s.date_sent as dateSent, e.name, e.name as sms_name,  s.is_failed as isFailed'
            );
        } else {
            \$query->select(
                's.sms_id, s.id, s.date_sent as dateSent, e.name, e.name as sms_name, e.message, e.sms_type as type, s.is_failed as isFailed, s.list_id, l.name as list_name, s.tracking_hash as idHash, s.lead_id, s.details'
            )
                ->leftJoin('s', MAUTIC_TABLE_PREFIX.'lead_lists', 'l', 's.list_id = l.id');
        }

        if (isset(\$options['state'])) {
            \$state = \$options['state'];
            if ('failed' == \$state) {
                \$query->andWhere(
                    \$query->expr()->eq('s.is_failed', 1)
                );
            }
        }
        \$state = 'sent';

        if (isset(\$options['search']) && \$options['search']) {
            \$query->andWhere(
                \$query->expr()->or(
                    \$query->expr()->like('e.name', \$query->expr()->literal('%'.\$options['search'].'%'))
                )
            );
        }

        if (isset(\$options['fromDate']) && \$options['fromDate']) {
            \$dt = new DateTimeHelper(\$options['fromDate']);
            \$query->andWhere(
                \$query->expr()->gte('s.date_sent', \$query->expr()->literal(\$dt->toUtcString()))
            );
        }

        return \$this->getTimelineResults(
            \$query,
            \$options,
            'e.name',
            's.date_'.\$state
        );
    }

    /**
     * Updates lead ID (e.g. after a lead merge).
     */
    public function updateLead(\$fromLeadId, \$toLeadId): void
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->update(MAUTIC_TABLE_PREFIX.'sms_message_stats')
            ->set('sms_id', (int) \$toLeadId)
            ->where('sms_id = '.(int) \$fromLeadId)
            ->executeStatement();
    }

    /**
     * Delete a stat.
     */
    public function deleteStat(\$id): void
    {
        \$this->_em->getConnection()->delete(MAUTIC_TABLE_PREFIX.'sms_message_stats', ['id' => (int) \$id]);
    }

    public function getTableAlias(): string
    {
        return 's';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Entity/StatRepository.php";
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
        return new Source("", "@bundles/SmsBundle/Entity/StatRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Entity\\StatRepository.php");
    }
}
