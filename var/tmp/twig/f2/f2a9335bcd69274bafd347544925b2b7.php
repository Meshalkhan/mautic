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

/* @bundles/LeadBundle/EventListener/MaintenanceSubscriber.php */
class __TwigTemplate_5c14617580d2479e11650bdca209c466 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\MaintenanceEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class MaintenanceSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private Connection \$db,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CoreEvents::MAINTENANCE_CLEANUP_DATA => ['onDataCleanup', 0],
        ];
    }

    public function onDataCleanup(MaintenanceEvent \$event): void
    {
        \$qb = \$this->db->createQueryBuilder()
            ->setParameter('date', \$event->getDate()->format('Y-m-d H:i:s'));

        if (\$event->isDryRun()) {
            \$qb->select('count(*) as records')
              ->from(MAUTIC_TABLE_PREFIX.'leads', 'l')
              ->where(\$qb->expr()->lte('l.last_active', ':date'));

            if (false === \$event->isGdpr()) {
                \$qb->andWhere(\$qb->expr()->isNull('l.date_identified'));
            } else {
                \$qb->orWhere(
                    \$qb->expr()->and(
                        \$qb->expr()->lte('l.date_added', ':date2'),
                        \$qb->expr()->isNull('l.last_active')
                    ));
                \$qb->setParameter('date2', \$event->getDate()->format('Y-m-d H:i:s'));
            }
            \$rows = \$qb->executeQuery()->fetchOne();
        } else {
            \$qb->select('l.id')->from(MAUTIC_TABLE_PREFIX.'leads', 'l')
              ->where(\$qb->expr()->lte('l.last_active', ':date'));

            if (false === \$event->isGdpr()) {
                \$qb->andWhere(\$qb->expr()->isNull('l.date_identified'));
            } else {
                \$qb->orWhere(
                    \$qb->expr()->and(
                        \$qb->expr()->lte('l.date_added', ':date2'),
                        \$qb->expr()->isNull('l.last_active')
                    ));
                \$qb->setParameter('date2', \$event->getDate()->format('Y-m-d H:i:s'));
            }

            \$rows = 0;
            \$qb->setMaxResults(10000)->setFirstResult(0);

            \$qb2 = \$this->db->createQueryBuilder();
            while (true) {
                \$leadsIds = array_column(\$qb->executeQuery()->fetchAllAssociative(), 'id');
                if (0 === sizeof(\$leadsIds)) {
                    break;
                }
                foreach (\$leadsIds as \$leadId) {
                    \$rows += \$qb2->delete(MAUTIC_TABLE_PREFIX.'leads')
                      ->where(
                          \$qb2->expr()->eq(
                              'id', \$leadId
                          )
                      )->executeStatement();
                }
            }
        }

        \$event->setStat(\$this->translator->trans('mautic.maintenance.visitors'), \$rows, \$qb->getSQL(), \$qb->getParameters());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/MaintenanceSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/MaintenanceSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\MaintenanceSubscriber.php");
    }
}
