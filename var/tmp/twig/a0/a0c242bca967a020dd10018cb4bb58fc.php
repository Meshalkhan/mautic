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

/* @bundles/EmailBundle/EventListener/ProcessBounceSubscriber.php */
class __TwigTemplate_124311d7379ed6153e3269274d6a1485 extends Template
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
use Mautic\\EmailBundle\\Event\\MonitoredEmailEvent;
use Mautic\\EmailBundle\\Event\\ParseEmailEvent;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ProcessBounceSubscriber implements EventSubscriberInterface
{
    public const BUNDLE     = 'EmailBundle';

    public const FOLDER_KEY = 'bounces';

    public static function getSubscribedEvents(): array
    {
        return [
            EmailEvents::MONITORED_EMAIL_CONFIG => ['onEmailConfig', 0],
            EmailEvents::EMAIL_PARSE            => ['onEmailParse', 0],
        ];
    }

    public function __construct(
        private Bounce \$bouncer
    ) {
    }

    public function onEmailConfig(MonitoredEmailEvent \$event): void
    {
        \$event->addFolder(self::BUNDLE, self::FOLDER_KEY, 'mautic.email.config.monitored_email.bounce_folder');
    }

    public function onEmailParse(ParseEmailEvent \$event): void
    {
        if (\$event->isApplicable(self::BUNDLE, self::FOLDER_KEY)) {
            // Process the messages
            \$messages = \$event->getMessages();
            foreach (\$messages as \$message) {
                \$this->bouncer->process(\$message);
            }
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
        return "@bundles/EmailBundle/EventListener/ProcessBounceSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/ProcessBounceSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\EventListener\\ProcessBounceSubscriber.php");
    }
}
