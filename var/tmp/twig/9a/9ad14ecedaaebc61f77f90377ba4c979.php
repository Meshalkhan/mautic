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

/* @bundles/EmailBundle/EventListener/ProcessUnsubscribeSubscriber.php */
class __TwigTemplate_0f5ccd6889b513b5e868125a77739ba5 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\EmailBundle\\Event\\MonitoredEmailEvent;
use Mautic\\EmailBundle\\Event\\ParseEmailEvent;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscribe;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ProcessUnsubscribeSubscriber implements EventSubscriberInterface
{
    public const BUNDLE     = 'EmailBundle';

    public const FOLDER_KEY = 'unsubscribes';

    public static function getSubscribedEvents(): array
    {
        return [
            EmailEvents::MONITORED_EMAIL_CONFIG => ['onEmailConfig', 0],
            EmailEvents::EMAIL_PARSE            => ['onEmailParse', 0],
            EmailEvents::EMAIL_ON_SEND          => ['onEmailSend', 0],
        ];
    }

    public function __construct(
        private Unsubscribe \$unsubscriber,
        private FeedbackLoop \$looper
    ) {
    }

    public function onEmailConfig(MonitoredEmailEvent \$event): void
    {
        \$event->addFolder(self::BUNDLE, self::FOLDER_KEY, 'mautic.email.config.monitored_email.unsubscribe_folder');
    }

    public function onEmailParse(ParseEmailEvent \$event): void
    {
        if (\$event->isApplicable(self::BUNDLE, self::FOLDER_KEY)) {
            // Process the messages
            \$messages = \$event->getMessages();
            foreach (\$messages as \$message) {
                if (!\$this->unsubscriber->process(\$message)) {
                    \$this->looper->process(\$message);
                }
            }
        }
    }

    /**
     * Add an unsubscribe email to the List-Unsubscribe header if applicable.
     */
    public function onEmailSend(EmailSendEvent \$event): void
    {
        \$helper = \$event->getHelper();
        if (\$helper && \$unsubscribeEmail = \$helper->generateUnsubscribeEmail()) {
            \$headers          = \$event->getTextHeaders();
            \$existing         = \$headers['List-Unsubscribe'] ?? '';
            \$unsubscribeEmail = \"<mailto:\$unsubscribeEmail>\";
            if (\$existing) {
                if (!str_contains(\$existing, \$unsubscribeEmail)) {
                    \$updatedHeader = \$existing.', '.\$unsubscribeEmail;
                } else {
                    \$updatedHeader = \$existing;
                }
            } else {
                \$updatedHeader = \$unsubscribeEmail;
            }

            \$event->addTextHeader('List-Unsubscribe', \$updatedHeader);
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
        return "@bundles/EmailBundle/EventListener/ProcessUnsubscribeSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/ProcessUnsubscribeSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\EventListener\\ProcessUnsubscribeSubscriber.php");
    }
}
