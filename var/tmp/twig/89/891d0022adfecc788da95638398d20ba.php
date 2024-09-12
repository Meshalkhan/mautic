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

/* @bundles/DynamicContentBundle/EventListener/ChannelSubscriber.php */
class __TwigTemplate_0c60162bb440f22ff8f30c32dcb8a217 extends Template
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

namespace Mautic\\DynamicContentBundle\\EventListener;

use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\ChannelEvent;
use Mautic\\ReportBundle\\Model\\ReportModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ChannelSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            ChannelEvents::ADD_CHANNEL => ['onAddChannel', 0],
        ];
    }

    public function onAddChannel(ChannelEvent \$event): void
    {
        \$event->addChannel(
            'dynamicContent',
            [
                ReportModel::CHANNEL_FEATURE => [
                    'table' => 'dynamic_content',
                ],
            ]
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
        return "@bundles/DynamicContentBundle/EventListener/ChannelSubscriber.php";
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
        return new Source("", "@bundles/DynamicContentBundle/EventListener/ChannelSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\EventListener\\ChannelSubscriber.php");
    }
}
