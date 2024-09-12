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

/* @bundles/CampaignBundle/Executioner/Scheduler/Mode/DateTime.php */
class __TwigTemplate_b2ba602be5fab460b0c700835ac050d4 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Scheduler\\Mode;

use Mautic\\CampaignBundle\\Entity\\Event;
use Psr\\Log\\LoggerInterface;

class DateTime implements ScheduleModeInterface
{
    public function __construct(
        private LoggerInterface \$logger
    ) {
    }

    public function getExecutionDateTime(Event \$event, \\DateTimeInterface \$compareFromDateTime, \\DateTimeInterface \$comparedToDateTime): \\DateTimeInterface
    {
        \$triggerDate = \$event->getTriggerDate();

        if (null === \$triggerDate) {
            \$this->logger->debug('CAMPAIGN: Trigger date is null');

            return \$compareFromDateTime;
        }

        if (\$compareFromDateTime >= \$triggerDate) {
            \$this->logger->debug(
                'CAMPAIGN: ('.\$event->getId().') Date to execute ('.\$triggerDate->format('Y-m-d H:i:s T').') compared to now ('
                .\$compareFromDateTime->format('Y-m-d H:i:s T').') and is thus overdue'
            );

            return \$compareFromDateTime;
        }

        return \$triggerDate;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Scheduler/Mode/DateTime.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Scheduler/Mode/DateTime.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Executioner\\Scheduler\\Mode\\DateTime.php");
    }
}
