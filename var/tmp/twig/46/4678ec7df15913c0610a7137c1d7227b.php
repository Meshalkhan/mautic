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

/* @bundles/LeadBundle/EventListener/ReportDNCSubscriber.php */
class __TwigTemplate_38ce520d09fcb51b504f1e157731dc06 extends Template
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

use Mautic\\ChannelBundle\\Helper\\ChannelListHelper;
use Mautic\\LeadBundle\\Model\\CompanyReportData;
use Mautic\\LeadBundle\\Report\\FieldsBuilder;
use Mautic\\ReportBundle\\Event\\ReportBuilderEvent;
use Mautic\\ReportBundle\\Event\\ReportDataEvent;
use Mautic\\ReportBundle\\Event\\ReportGeneratorEvent;
use Mautic\\ReportBundle\\ReportEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ReportDNCSubscriber implements EventSubscriberInterface
{
    public const DNC = 'contact.dnc';

    public function __construct(
        private FieldsBuilder \$fieldsBuilder,
        private CompanyReportData \$companyReportData,
        private TranslatorInterface \$translator,
        private RouterInterface \$router,
        private ChannelListHelper \$channelListHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ReportEvents::REPORT_ON_BUILD    => ['onReportBuilder', 0],
            ReportEvents::REPORT_ON_GENERATE => ['onReportGenerate', 0],
            ReportEvents::REPORT_ON_DISPLAY  => ['onReportDisplay', 0],
        ];
    }

    /**
     * Add available tables and columns to the report builder lookup.
     */
    public function onReportBuilder(ReportBuilderEvent \$event): void
    {
        if (!\$event->checkContext([self::DNC])) {
            return;
        }

        \$columns            = \$this->fieldsBuilder->getLeadFieldsColumns('l.');
        \$companyColumns     = \$this->companyReportData->getCompanyData();
        \$leadFilters        = \$this->fieldsBuilder->getLeadFilter('l.', 's.');

        \$dncColumns = [
            'dnc.reason' => [
                'label' => 'mautic.lead.report.dnc_reason',
                'type'  => 'select',
                'list'  => \$this->getDncReasons(),
            ],
            'dnc.comments' => [
                'label' => 'mautic.lead.report.dnc_comment',
                'type'  => 'text',
            ],
            'dnc.date_added' => [
                'label' => 'mautic.lead.report.dnc_date_added',
                'type'  => 'datetime',
            ],
            'dnc.channel' => [
                'label' => 'mautic.lead.report.dnc_channel',
                'type'  => 'html',
            ],
            'dnc.channel_id' => [
                'label' => 'mautic.lead.report.dnc_channel_id',
                'type'  => 'html',
            ],
        ];

        \$data = [
            'display_name' => 'mautic.lead.report.dnc',
            'columns'      => array_merge(\$columns, \$companyColumns, \$dncColumns),
            'filters'      => array_merge(\$columns, \$companyColumns, \$dncColumns, \$leadFilters),
        ];
        \$event->addTable(self::DNC, \$data, ReportSubscriber::GROUP_CONTACTS);
    }

    /**
     * Initialize the QueryBuilder object to generate reports from.
     */
    public function onReportGenerate(ReportGeneratorEvent \$event): void
    {
        if (!\$event->checkContext([self::DNC])) {
            return;
        }

        \$qb = \$event->getQueryBuilder();
        \$qb->from(MAUTIC_TABLE_PREFIX.'lead_donotcontact', 'dnc');
        \$qb->leftJoin('dnc', MAUTIC_TABLE_PREFIX.'leads', 'l', 'l.id = dnc.lead_id');

        if (\$event->hasColumn(['u.first_name', 'u.last_name']) || \$event->hasFilter(['u.first_name', 'u.last_name'])) {
            \$qb->leftJoin('l', MAUTIC_TABLE_PREFIX.'users', 'u', 'u.id = l.owner_id');
        }

        if (\$event->hasColumn('i.ip_address') || \$event->hasFilter('i.ip_address')) {
            \$event->addLeadIpAddressLeftJoin(\$qb);
        }

        if (\$this->companyReportData->eventHasCompanyColumns(\$event)) {
            \$qb->leftJoin('l', MAUTIC_TABLE_PREFIX.'companies_leads', 'companies_lead', 'l.id = companies_lead.lead_id');
            \$qb->leftJoin('companies_lead', MAUTIC_TABLE_PREFIX.'companies', 'comp', 'companies_lead.company_id = comp.id');
        }

        if (\$event->hasFilter('s.leadlist_id')) {
            \$qb->join('l', MAUTIC_TABLE_PREFIX.'lead_lists_leads', 's', 's.lead_id = l.id AND s.manually_removed = 0');
        }

        \$event->setQueryBuilder(\$qb);
    }

    public function onReportDisplay(ReportDataEvent \$event): void
    {
        if (!\$event->checkContext([self::DNC])) {
            return;
        }

        \$data = \$event->getData();

        if (isset(\$data[0]['reason']) || isset(\$data[0]['channel']) || isset(\$data[0]['channel_id'])) {
            foreach (\$data as &\$row) {
                if (isset(\$row['reason'])) {
                    \$row['reason'] = \$this->getDncReasonLabel(\$row['reason']);
                }

                if (isset(\$row['channel']) && isset(\$row['channel_id'])) {
                    \$href              = \$this->router->generate('mautic_'.\$row['channel'].'_action', ['objectAction' => 'view', 'objectId' => \$row['channel_id']]);
                    \$row['channel']    = '<a href=\"'.\$href.'\" data-toggle=\"ajax\">'.\$this->channelListHelper->getChannelLabel(\$row['channel']).'</a>';
                    \$row['channel_id'] = '<a href=\"'.\$href.'\" data-toggle=\"ajax\">'.\$row['channel_id'].'</a>';
                }
                if (isset(\$row['channel'])) {
                    \$row['channel'] = \$this->channelListHelper->getChannelLabel(\$row['channel']);
                }
            }

            \$event->setData(\$data);
        }
    }

    private function getDncReasons(): array
    {
        return [
            0 => \$this->translator->trans('mautic.lead.report.dnc_contactable'),
            1 => \$this->translator->trans('mautic.lead.report.dnc_unsubscribed'),
            2 => \$this->translator->trans('mautic.lead.report.dnc_bounced'),
            3 => \$this->translator->trans('mautic.lead.report.dnc_manual'),
        ];
    }

    /**
     * @param int \$reasonId
     *
     * @return string
     *
     * @throws \\UnexpectedValueException
     */
    private function getDncReasonLabel(\$reasonId)
    {
        if (isset(\$this->getDncReasons()[\$reasonId])) {
            return \$this->getDncReasons()[\$reasonId];
        }

        throw new \\UnexpectedValueException(\"There is no DNC reason with ID '{\$reasonId}'\");
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/ReportDNCSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ReportDNCSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\ReportDNCSubscriber.php");
    }
}
