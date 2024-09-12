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

/* @bundles/EmailBundle/EventListener/EmailToUserSubscriber.php */
class __TwigTemplate_be84135e1a64cf0057685eb04df5c928 extends Template
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
use Mautic\\EmailBundle\\Exception\\EmailCouldNotBeSentException;
use Mautic\\EmailBundle\\Model\\SendEmailToUser;
use Mautic\\PointBundle\\Event\\TriggerExecutedEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class EmailToUserSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private SendEmailToUser \$sendEmailToUser
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [EmailEvents::ON_SENT_EMAIL_TO_USER => ['onEmailToUser', 0]];
    }

    public function onEmailToUser(TriggerExecutedEvent \$event): TriggerExecutedEvent
    {
        \$triggerEvent = \$event->getTriggerEvent();
        \$config       = \$triggerEvent->getProperties();
        \$lead         = \$event->getLead();

        try {
            \$this->sendEmailToUser->sendEmailToUsers(\$config, \$lead);
            \$event->setSucceded();
        } catch (EmailCouldNotBeSentException) {
            \$event->setFailed();
        }

        return \$event;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/EventListener/EmailToUserSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/EmailToUserSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\EventListener\\EmailToUserSubscriber.php");
    }
}
