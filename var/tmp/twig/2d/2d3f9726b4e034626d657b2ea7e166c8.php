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

/* @bundles/SmsBundle/EventListener/StopSubscriber.php */
class __TwigTemplate_4f6426ca77ef8da76509fdb593ffcae9 extends Template
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

namespace Mautic\\SmsBundle\\EventListener;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Model\\DoNotContact as DoNotContactModel;
use Mautic\\SmsBundle\\Event\\ReplyEvent;
use Mautic\\SmsBundle\\SmsEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class StopSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private DoNotContactModel \$doNotContactModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            SmsEvents::ON_REPLY => ['onReply', 0],
        ];
    }

    public function onReply(ReplyEvent \$event): void
    {
        \$message = \$event->getMessage();

        if ('stop' === strtolower(\$message)) {
            // Unsubscribe the contact
            \$this->doNotContactModel->addDncForContact(\$event->getContact()->getId(), 'sms', DoNotContact::UNSUBSCRIBED);
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
        return "@bundles/SmsBundle/EventListener/StopSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/StopSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\EventListener\\StopSubscriber.php");
    }
}
