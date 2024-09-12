<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/LeadBundle/EventListener/ContactExportSchedulerNotificationSubscriber.php */
class __TwigTemplate_2d8707ad506138ecc6b3f83457060355 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/EventListener/ContactExportSchedulerNotificationSubscriber.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/LeadBundle/EventListener/ContactExportSchedulerNotificationSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\ContactExportSchedulerNotificationSubscriber.php");
    }
}
