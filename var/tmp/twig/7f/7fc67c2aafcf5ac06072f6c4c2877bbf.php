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

/* @bundles/IntegrationsBundle/Sync/Notification/Notifier.php */
class __TwigTemplate_3597c5c05bf18e230a4eb9ffbde1f110 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Notification;

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Helper\\ConfigIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Helper\\SyncIntegrationsHelper;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormSyncInterface;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\NotificationDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\HandlerNotSupportedException;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Handler\\HandlerContainer;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class Notifier
{
    public function __construct(
        private HandlerContainer \$handlerContainer,
        private SyncIntegrationsHelper \$syncIntegrationsHelper,
        private ConfigIntegrationsHelper \$configIntegrationsHelper,
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * @param NotificationDAO[] \$notifications
     * @param string            \$integrationHandler
     *
     * @throws HandlerNotSupportedException
     * @throws IntegrationNotFoundException
     */
    public function noteMauticSyncIssue(array \$notifications, \$integrationHandler = MauticSyncDataExchange::NAME): void
    {
        foreach (\$notifications as \$notification) {
            \$handler = \$this->handlerContainer->getHandler(\$integrationHandler, \$notification->getMauticObject());

            \$integrationDisplayName = \$this->syncIntegrationsHelper->getIntegration(\$notification->getIntegration())->getDisplayName();
            \$objectDisplayName      = \$this->getObjectDisplayName(\$notification->getIntegration(), \$notification->getIntegrationObject());

            \$handler->writeEntry(\$notification, \$integrationDisplayName, \$objectDisplayName);
        }
    }

    /**
     * Finalizes notifications such as pushing summary entries to the user notifications.
     */
    public function finalizeNotifications(): void
    {
        foreach (\$this->handlerContainer->getHandlers() as \$handler) {
            \$handler->finalize();
        }
    }

    private function getObjectDisplayName(string \$integration, string \$object): string
    {
        try {
            \$configIntegration = \$this->configIntegrationsHelper->getIntegration(\$integration);
        } catch (IntegrationNotFoundException) {
            return ucfirst(\$object);
        }

        if (!\$configIntegration instanceof ConfigFormSyncInterface) {
            return ucfirst(\$object);
        }

        \$objects = \$configIntegration->getSyncConfigObjects();

        if (!isset(\$objects[\$object])) {
            return ucfirst(\$object);
        }

        return \$this->translator->trans(\$objects[\$object]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Notification/Notifier.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Notifier.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\Notification\\Notifier.php");
    }
}
