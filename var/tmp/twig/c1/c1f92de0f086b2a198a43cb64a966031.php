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

/* @bundles/StatsBundle/Aggregate/Collector.php */
class __TwigTemplate_b1b96f70cce9345251b73e2f0dc84a2a extends Template
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

namespace Mautic\\StatsBundle\\Aggregate;

use Mautic\\StatsBundle\\Aggregate\\Collection\\StatCollection;
use Mautic\\StatsBundle\\Event\\AggregateStatRequestEvent;
use Mautic\\StatsBundle\\Event\\Options\\FetchOptions;
use Mautic\\StatsBundle\\StatEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class Collector
{
    public function __construct(
        private EventDispatcherInterface \$eventDispatcher
    ) {
    }

    /**
     * @param string \$statName
     *
     * @return StatCollection
     */
    public function fetchStats(\$statName, \\DateTime \$fromDateTime, \\DateTime \$toDateTime, FetchOptions \$fetchOptions = null)
    {
        if (null === \$fetchOptions) {
            \$fetchOptions = new FetchOptions();
        }

        \$event = new AggregateStatRequestEvent(\$statName, \$fromDateTime, \$toDateTime, \$fetchOptions);

        \$this->eventDispatcher->dispatch(\$event, StatEvents::AGGREGATE_STAT_REQUEST);

        return \$event->getStatCollection();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Aggregate/Collector.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collector.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StatsBundle\\Aggregate\\Collector.php");
    }
}
