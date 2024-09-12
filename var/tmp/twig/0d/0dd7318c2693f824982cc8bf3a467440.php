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

/* @bundles/IntegrationsBundle/Sync/Notification/Writer.php */
class __TwigTemplate_e8fbfa04d9a8e149474cb1fef39152ff extends Template
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
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\UserBundle\\Entity\\User;

class Writer
{
    public function __construct(
        private NotificationModel \$notificationModel,
        private AuditLogModel \$auditLogModel,
        private EntityManagerInterface \$em
    ) {
    }

    /**
     * @throws \\Doctrine\\ORM\\ORMException
     */
    public function writeUserNotification(string \$header, string \$message, int \$userId, string \$deduplicateValue = null, \\DateTime \$deduplicateDateTimeFrom = null): void
    {
        \$this->notificationModel->addNotification(
            \$message,
            null,
            false,
            \$header,
            'fa-refresh',
            null,
            \$this->em->getReference(User::class, \$userId),
            \$deduplicateValue,
            \$deduplicateDateTimeFrom
        );
    }

    public function writeAuditLogEntry(string \$bundle, string \$object, ?int \$objectId, string \$action, array \$details): void
    {
        \$log = [
            'bundle'   => \$bundle,
            'object'   => \$object,
            'objectId' => \$objectId,
            'action'   => \$action,
            'details'  => \$details,
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
        return "@bundles/IntegrationsBundle/Sync/Notification/Writer.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Writer.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\Notification\\Writer.php");
    }
}
