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

/* @bundles/CampaignBundle/EventListener/CampaignSubscriber.php */
class __TwigTemplate_088f93432acaf8f94811559d5214d7ce extends Template
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

namespace Mautic\\CampaignBundle\\EventListener;

use Mautic\\CampaignBundle\\CampaignEvents;
use Mautic\\CampaignBundle\\Event as Events;
use Mautic\\CampaignBundle\\Service\\CampaignAuditService;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class CampaignSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel,
        private CampaignAuditService \$campaignAuditService,
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CampaignEvents::CAMPAIGN_POST_SAVE     => ['onCampaignPostSave', 0],
            CampaignEvents::CAMPAIGN_POST_DELETE   => ['onCampaignDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onCampaignPostSave(Events\\CampaignEvent \$event): void
    {
        \$campaign = \$event->getCampaign();
        \$details  = \$event->getChanges();

        if (\$campaign->isPublished()) {
            \$this->campaignAuditService->addWarningForUnpublishedEmails(\$campaign);
        }

        // don't set leads
        unset(\$details['leads']);

        if (!empty(\$details)) {
            \$log = [
                'bundle'    => 'campaign',
                'object'    => 'campaign',
                'objectId'  => \$campaign->getId(),
                'action'    => (\$event->isNew()) ? 'create' : 'update',
                'details'   => \$details,
                'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
            ];
            \$this->auditLogModel->writeToLog(\$log);
        }
    }

    /**
     * Add a delete entry to the audit log.
     */
    public function onCampaignDelete(Events\\CampaignEvent \$event): void
    {
        \$campaign = \$event->getCampaign();
        \$log      = [
            'bundle'    => 'campaign',
            'object'    => 'campaign',
            'objectId'  => \$campaign->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$campaign->getName()],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];
        \$this->auditLogModel->writeToLog(\$log);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/EventListener/CampaignSubscriber.php";
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
        return new Source("", "@bundles/CampaignBundle/EventListener/CampaignSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\EventListener\\CampaignSubscriber.php");
    }
}
