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

/* @bundles/IntegrationsBundle/Sync/Notification/BulkNotification.php */
class __TwigTemplate_41c4059185ec33486c1351154d78395d extends Template
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

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Service\\BulkNotificationInterface;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Helper\\UserNotificationBuilder;
use Mautic\\UserBundle\\Entity\\User;

class BulkNotification
{
    public function __construct(
        private BulkNotificationInterface \$bulkNotification,
        private UserNotificationBuilder \$userNotificationBuilder,
        private EntityManagerInterface \$entityManager
    ) {
    }

    public function addNotification(
        string \$deduplicateValue,
        string \$message,
        string \$integrationDisplayName,
        string \$objectDisplayName,
        string \$mauticObject,
        int \$id,
        string \$linkText
    ): void {
        \$link    = \$this->userNotificationBuilder->buildLink(\$mauticObject, \$id, \$linkText);
        \$userIds = \$this->userNotificationBuilder->getUserIds(\$mauticObject, \$id);

        foreach (\$userIds as \$userId) {
            /** @var User \$user */
            \$user = \$this->entityManager->getReference(User::class, \$userId);
            \$this->bulkNotification->addNotification(
                \$deduplicateValue,
                \$this->userNotificationBuilder->formatMessage(\$message, \$link),
                null,
                \$this->userNotificationBuilder->formatHeader(\$integrationDisplayName, \$objectDisplayName),
                'fa-refresh',
                null,
                \$user
            );
        }
    }

    /**
     * @param \\DateTime|null \$deduplicateDateTimeFrom If last 24 hours for deduplication does not fit, change it here
     */
    public function flush(\\DateTime \$deduplicateDateTimeFrom = null): void
    {
        \$this->bulkNotification->flush(\$deduplicateDateTimeFrom);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Notification/BulkNotification.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/BulkNotification.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\Notification\\BulkNotification.php");
    }
}
