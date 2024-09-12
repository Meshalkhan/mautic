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

/* @bundles/LeadBundle/EventListener/ContactExportSchedulerLoggerSubscriber.php */
class __TwigTemplate_310f179f8427e4fd08cda5804a07766c extends Template
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

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Entity\\ContactExportScheduler;
use Mautic\\LeadBundle\\Event\\ContactExportSchedulerEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ContactExportSchedulerLoggerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private LoggerInterface \$logger
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::POST_CONTACT_EXPORT_SCHEDULED  => 'onContactExportScheduled',
            LeadEvents::POST_CONTACT_EXPORT_SEND_EMAIL => 'onContactExportEmailSent',
        ];
    }

    public function onContactExportScheduled(ContactExportSchedulerEvent \$event): void
    {
        \$utcScheduledDateTimeStr = \$this->getContactExportScheduledDateTimeStr(\$event->getContactExportScheduler());

        \$this->logger->debug(
            'Contact export #ID '.\$event->getContactExportScheduler()->getId()
            .' scheduled at '.\$utcScheduledDateTimeStr.' UTC'
        );
    }

    public function onContactExportEmailSent(ContactExportSchedulerEvent \$event): void
    {
        \$utcScheduledDateTimeStr = \$this->getContactExportScheduledDateTimeStr(\$event->getContactExportScheduler());

        \$this->logger->debug(
            'Contact export #ID '.\$event->getContactExportScheduler()->getId()
            .' scheduled at '.\$utcScheduledDateTimeStr.' UTC has been processed at '
            .(new \\DateTime())->setTimezone(new \\DateTimeZone('UTC'))->format(DateTimeHelper::FORMAT_DB)
            .' UTC'
        );
    }

    private function getContactExportScheduledDateTimeStr(ContactExportScheduler \$contactExportScheduler): string
    {
        /** @var \\DateTimeImmutable \$scheduledDateTime */
        \$scheduledDateTime = \$contactExportScheduler->getScheduledDateTime();

        return \$scheduledDateTime->setTimezone(new \\DateTimeZone('UTC'))->format(DateTimeHelper::FORMAT_DB);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/ContactExportSchedulerLoggerSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ContactExportSchedulerLoggerSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\ContactExportSchedulerLoggerSubscriber.php");
    }
}
