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

/* @bundles/IntegrationsBundle/Sync/Notification/Helper/OwnerProvider.php */
class __TwigTemplate_5d5ff7505976c5f8fbe2e763dc964c3d extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper;

use Mautic\\IntegrationsBundle\\Event\\InternalObjectOwnerEvent;
use Mautic\\IntegrationsBundle\\IntegrationEvents;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\ObjectInterface;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectProvider;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class OwnerProvider
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher,
        private ObjectProvider \$objectProvider
    ) {
    }

    /**
     * @param int[] \$objectIds
     *
     * @return ObjectInterface
     *
     * @throws ObjectNotSupportedException
     */
    public function getOwnersForObjectIds(string \$objectName, array \$objectIds): array
    {
        if (empty(\$objectIds)) {
            return [];
        }

        try {
            \$object = \$this->objectProvider->getObjectByName(\$objectName);
        } catch (ObjectNotFoundException) {
            // Throw this exception for BC.
            throw new ObjectNotSupportedException(MauticSyncDataExchange::NAME, \$objectName);
        }

        \$event = new InternalObjectOwnerEvent(\$object, \$objectIds);

        \$this->dispatcher->dispatch(\$event, IntegrationEvents::INTEGRATION_FIND_OWNER_IDS);

        return \$event->getOwners();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Notification/Helper/OwnerProvider.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Helper/OwnerProvider.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\Notification\\Helper\\OwnerProvider.php");
    }
}
