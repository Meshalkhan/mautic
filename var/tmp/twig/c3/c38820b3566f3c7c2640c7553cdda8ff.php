<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/ChannelBundle/Entity/MessageQueueRepository.php */
class __TwigTemplate_29da801e443db940d96cf47362d9cd8a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\ChannelBundle\\Entity;

use Doctrine\\DBAL\\ArrayParameterType;
use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\LeadBundle\\Entity\\TimelineTrait;

/**
 * @extends CommonRepository<MessageQueue>
 */
class MessageQueueRepository extends CommonRepository
{
    use TimelineTrait;

    public function findMessage(\$channel, \$channelId, \$leadId)
    {
        \$results = \$this->createQueryBuilder('mq')
            ->where('IDENTITY(mq.lead) = :leadId')
            ->andWhere('mq.channel = :channel')
            ->andWhere('mq.channelId = :channelId')
            ->setParameter('leadId', \$leadId)
            ->setParameter('channel', \$channel)
            ->setParameter('channelId', \$channelId)
            ->getQuery()
            ->getResult();

        return (\$results) ? \$results[0] : null;
    }

    /**
     * @return array<int, MessageQueue>
     */
    public function getQueuedMessages(\$limit, \$processStarted, \$channel = null, \$channelId = null)
    {
        \$q = \$this->createQueryBuilder('mq');

        \$q->where(\$q->expr()->eq('mq.success', ':success'))
            ->andWhere(\$q->expr()->lt('mq.attempts', 'mq.maxAttempts'))
            ->andWhere('mq.lastAttempt is null or mq.lastAttempt < :processStarted')
            ->andWhere('mq.scheduledDate <= :processStarted')
            ->setParameter('success', false, 'boolean')
            ->setParameter('processStarted', \$processStarted)
            ->indexBy('mq', 'mq.id');

        \$q->orderBy('mq.priority, mq.scheduledDate', \\Doctrine\\Common\\Collections\\Criteria::ASC);

        if (\$limit) {
            \$q->setMaxResults((int) \$limit);
        }

        if (\$channel) {
            \$q->andWhere(\$q->expr()->eq('mq.channel', ':channel'))
                ->setParameter('channel', \$channel);

            if (\$channelId) {
                \$q->andWhere(\$q->expr()->eq('mq.channelId', (int) \$channelId));
            }
        }

        return \$q->getQuery()->getResult();
    }

    public function getQueuedChannelCount(\$channel, array \$ids = null): int
    {
        \$q = \$this->getEntityManager()->getConnection()->createQueryBuilder();

        \$expr = \$q->expr()->and(
            \$q->expr()->eq(\$this->getTableAlias().'.channel', ':channel'),
            \$q->expr()->neq(\$this->getTableAlias().'.status', ':status')
        );

        if (!empty(\$ids)) {
            \$expr = \$expr->with(
                \$q->expr()->in(\$this->getTableAlias().'.channel_id', \$ids)
            );
        }

        return (int) \$q->select('count(*)')
            ->from(MAUTIC_TABLE_PREFIX.'message_queue', \$this->getTableAlias())
            ->where(\$expr)
            ->setParameter('channel', \$channel)
            ->setParameter('status', MessageQueue::STATUS_SENT)
            ->setParameter('ids', \$ids, ArrayParameterType::INTEGER)
            ->executeQuery()
            ->fetchOne();
    }

    /**
     * Get a lead's point log.
     *
     * @param int|null \$leadId
     *
     * @return array
     */
    public function getLeadTimelineEvents(\$leadId = null, array \$options = [])
    {
        \$query = \$this->getEntityManager()->getConnection()->createQueryBuilder()
            ->from(MAUTIC_TABLE_PREFIX.'message_queue', 'mq')
            ->select('mq.id, mq.lead_id, mq.channel as channelName, mq.channel_id as channelId,
            mq.priority as priority, mq.attempts, mq.success, mq.status, mq.date_published as dateAdded,
            mq.scheduled_date as scheduledDate, mq.last_attempt as lastAttempt, mq.date_sent as dateSent');

        if (\$leadId) {
            \$query->where('mq.lead_id = '.(int) \$leadId);
        }

        if (isset(\$options['search']) && \$options['search']) {
            \$query->andWhere(\$query->expr()->or(
                \$query->expr()->like('mq.channel', \$query->expr()->literal('%'.\$options['search'].'%'))
            ));
        }

        return \$this->getTimelineResults(\$query, \$options, 'mq.channel', 'mq.date_published', [], ['dateAdded']);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ChannelBundle/Entity/MessageQueueRepository.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/ChannelBundle/Entity/MessageQueueRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Entity\\MessageQueueRepository.php");
    }
}
