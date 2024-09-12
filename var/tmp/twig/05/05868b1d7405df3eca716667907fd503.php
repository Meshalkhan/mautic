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

/* @bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationHelper.php */
class __TwigTemplate_ca150abef7bdcd88ea926a9abef3b8c8 extends Template
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

use Doctrine\\ORM\\ORMException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException;
use Mautic\\IntegrationsBundle\\Sync\\Notification\\Writer;

class UserNotificationHelper
{
    public function __construct(
        private Writer \$writer,
        private UserNotificationBuilder \$userNotificationBuilder
    ) {
    }

    /**
     * @throws ORMException
     * @throws ObjectNotSupportedException
     */
    public function writeNotification(
        string \$message,
        string \$integrationDisplayName,
        string \$objectDisplayName,
        string \$mauticObject,
        int \$id,
        string \$linkText,
        string \$deduplicateValue = null,
        \\DateTime \$deduplicateDateTimeFrom = null
    ): void {
        \$link    = \$this->userNotificationBuilder->buildLink(\$mauticObject, \$id, \$linkText);
        \$userIds = \$this->userNotificationBuilder->getUserIds(\$mauticObject, \$id);

        foreach (\$userIds as \$userId) {
            \$this->writer->writeUserNotification(
                \$this->userNotificationBuilder->formatHeader(\$integrationDisplayName, \$objectDisplayName),
                \$this->userNotificationBuilder->formatMessage(\$message, \$link),
                \$userId,
                \$deduplicateValue,
                \$deduplicateDateTimeFrom
            );
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Notification/Helper/UserNotificationHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\Notification\\Helper\\UserNotificationHelper.php");
    }
}
