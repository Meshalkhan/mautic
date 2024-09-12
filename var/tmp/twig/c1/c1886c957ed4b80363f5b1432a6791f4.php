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

/* @bundles/LeadBundle/EventListener/ContactExportSchedulerNotificationSubscriber.php */
class __TwigTemplate_9f52de935c7da322f3fb6f69e34af4be extends Template
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

use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\LeadBundle\\Event\\ContactExportSchedulerEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\UserBundle\\Entity\\User;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ContactExportSchedulerNotificationSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private NotificationModel \$notificationModel,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::POST_CONTACT_EXPORT_SCHEDULED  => 'onContactExportScheduled',
        ];
    }

    public function onContactExportScheduled(ContactExportSchedulerEvent \$event): void
    {
        /** @var User \$user */
        \$user    = \$event->getContactExportScheduler()->getUser();
        \$message = \$this->translator->trans('mautic.lead.export.being.prepared', ['%user_email%' => \$user->getEmail()]);

        \$this->notificationModel->addNotification(
            \$message,
            null,
            false,
            null,
            null,
            null,
            \$user
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
        return "@bundles/LeadBundle/EventListener/ContactExportSchedulerNotificationSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ContactExportSchedulerNotificationSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\ContactExportSchedulerNotificationSubscriber.php");
    }
}
