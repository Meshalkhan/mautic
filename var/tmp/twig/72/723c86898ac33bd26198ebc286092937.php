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

/* @bundles/EmailBundle/EventListener/GraphAggregateStatsSubscriber.php */
class __TwigTemplate_a7c88f478edd240a36f26ef5887e4d51 extends Template
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

use Mautic\\EmailBundle\\Helper\\StatsCollectionHelper;
use Mautic\\StatsBundle\\Event\\AggregateStatRequestEvent;
use Mautic\\StatsBundle\\StatEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class GraphAggregateStatsSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private StatsCollectionHelper \$statsCollectionHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            StatEvents::AGGREGATE_STAT_REQUEST => ['onStatRequest', 0],
        ];
    }

    public function onStatRequest(AggregateStatRequestEvent \$event): void
    {
        if (!\$event->checkContextPrefix(StatsCollectionHelper::GENERAL_STAT_PREFIX.'-')) {
            return;
        }

        \$this->statsCollectionHelper->generateStats(
            \$event->getStatName(),
            \$event->getFromDateTime(),
            \$event->getToDateTime(),
            \$event->getOptions(),
            \$event->getStatCollection()
        );

        \$event->statsCollected();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/EventListener/GraphAggregateStatsSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/GraphAggregateStatsSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\EventListener\\GraphAggregateStatsSubscriber.php");
    }
}
