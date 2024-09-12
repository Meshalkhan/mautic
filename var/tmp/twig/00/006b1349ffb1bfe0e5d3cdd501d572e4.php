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

/* @bundles/LeadBundle/EventListener/ContactExportSchedulerAuditLogSubscriber.php */
class __TwigTemplate_b30fa5ada98db138cc656ad5d84eb8da extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\LeadBundle\\Event\\ContactExportSchedulerEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ContactExportSchedulerAuditLogSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private AuditLogModel \$auditLogModel,
        private IpLookupHelper \$ipLookupHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::POST_CONTACT_EXPORT_SCHEDULED  => 'onContactExportScheduled',
            LeadEvents::POST_CONTACT_EXPORT_SEND_EMAIL => 'onContactExportEmailSent',
        ];
    }

    public function onContactExportScheduled(ContactExportSchedulerEvent \$event): void
    {
        \$this->auditLogModel->writeToLog(
            [
                'bundle'    => 'lead',
                'object'    => 'ContactExportScheduler',
                'objectId'  => \$event->getContactExportScheduler()->getId(),
                'action'    => 'create',
                'details'   => \$event->getContactExportScheduler()->getChanges(),
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ]
        );
    }

    public function onContactExportEmailSent(ContactExportSchedulerEvent \$event): void
    {
        \$this->auditLogModel->writeToLog(
            [
                'bundle'    => 'lead',
                'object'    => 'ContactExportScheduler',
                'objectId'  => \$event->getContactExportScheduler()->getId(),
                'action'    => 'sendEmail',
                'details'   => \$event->getContactExportScheduler()->getChanges(),
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/ContactExportSchedulerAuditLogSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ContactExportSchedulerAuditLogSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\ContactExportSchedulerAuditLogSubscriber.php");
    }
}
