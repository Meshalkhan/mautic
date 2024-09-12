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

/* @bundles/CoreBundle/Service/BulkNotification.php */
class __TwigTemplate_9dff5298408f41f8e20dd1bcb5b80e1e extends Template
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

namespace Mautic\\CoreBundle\\Service;

use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\UserBundle\\Entity\\User;

final class BulkNotification implements BulkNotificationInterface
{
    /**
     * @var mixed[]
     */
    private array \$notifications = [];

    public function __construct(
        private NotificationModel \$notificationModel
    ) {
    }

    public function addNotification(
        string \$deduplicateValue,
        string \$message,
        string \$type = null,
        string \$header = null,
        string \$iconClass = null,
        \\DateTime \$datetime = null,
        User \$user = null
    ): void {
        if (isset(\$this->notifications[\$deduplicateValue])) {
            return;
        }

        \$this->notifications[\$deduplicateValue] = [
            'message'   => \$message,
            'type'      => \$type,
            'header'    => \$header,
            'iconClass' => \$iconClass,
            'datetime'  => \$datetime,
            'user'      => \$user,
        ];
    }

    /**
     * @param \\DateTime|null \$deduplicateDateTimeFrom If last 24 hours for deduplication does not fit, change it here
     */
    public function flush(\\DateTime \$deduplicateDateTimeFrom = null): void
    {
        foreach (\$this->notifications as \$deduplicateValue => \$data) {
            \$this->notificationModel->addNotification(
                \$data['message'],
                \$data['type'],
                false,
                \$data['header'],
                \$data['iconClass'],
                \$data['datetime'],
                \$data['user'],
                \$deduplicateValue,
                \$deduplicateDateTimeFrom
            );
            unset(\$this->notifications[\$deduplicateValue]);
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
        return "@bundles/CoreBundle/Service/BulkNotification.php";
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
        return new Source("", "@bundles/CoreBundle/Service/BulkNotification.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Service\\BulkNotification.php");
    }
}
