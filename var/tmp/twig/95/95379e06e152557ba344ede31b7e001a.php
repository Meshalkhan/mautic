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

/* @bundles/StageBundle/EventListener/StageSubscriber.php */
class __TwigTemplate_8f7d4089a37eff3d14f9e802f02cc5d4 extends Template
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

namespace Mautic\\StageBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\StageBundle\\Event as Events;
use Mautic\\StageBundle\\StageEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class StageSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            StageEvents::STAGE_POST_SAVE   => ['onStagePostSave', 0],
            StageEvents::STAGE_POST_DELETE => ['onStageDelete', 0],
        ];
    }

    /**
     * Add an entry to the audit log.
     */
    public function onStagePostSave(Events\\StageEvent \$event): void
    {
        \$stage = \$event->getStage();
        if (\$details = \$event->getChanges()) {
            \$log = [
                'bundle'    => 'stage',
                'object'    => 'stage',
                'objectId'  => \$stage->getId(),
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
    public function onStageDelete(Events\\StageEvent \$event): void
    {
        \$stage = \$event->getStage();
        \$log   = [
            'bundle'    => 'stage',
            'object'    => 'stage',
            'objectId'  => \$stage->deletedId,
            'action'    => 'delete',
            'details'   => ['name' => \$stage->getName()],
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
        return "@bundles/StageBundle/EventListener/StageSubscriber.php";
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
        return new Source("", "@bundles/StageBundle/EventListener/StageSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StageBundle\\EventListener\\StageSubscriber.php");
    }
}
