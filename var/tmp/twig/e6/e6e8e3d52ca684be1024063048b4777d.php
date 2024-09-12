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

/* @bundles/SmsBundle/EventListener/BroadcastSubscriber.php */
class __TwigTemplate_2571faa863a4ffd6c7fa4df14a6c4820 extends Template
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

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\ChannelBroadcastEvent;
use Mautic\\SmsBundle\\Broadcast\\BroadcastExecutioner;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class BroadcastSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private BroadcastExecutioner \$broadcastExecutioner
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ChannelEvents::CHANNEL_BROADCAST => ['onBroadcast', 0],
        ];
    }

    public function onBroadcast(ChannelBroadcastEvent \$event): void
    {
        if (!\$event->checkContext('sms')) {
            return;
        }

        \$this->broadcastExecutioner->execute(\$event);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/EventListener/BroadcastSubscriber.php";
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
        return new Source("", "@bundles/SmsBundle/EventListener/BroadcastSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\EventListener\\BroadcastSubscriber.php");
    }
}
