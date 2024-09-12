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

/* @bundles/CampaignBundle/Executioner/Result/Responses.php */
class __TwigTemplate_42a8e168fe8eb4ad913de0ec892e524b extends Template
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

namespace Mautic\\CampaignBundle\\Executioner\\Result;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;

class Responses
{
    private array \$actionResponses = [];

    private array \$conditionResponses = [];

    public function setFromLogs(ArrayCollection \$logs): void
    {
        /** @var LeadEventLog \$log */
        foreach (\$logs as \$log) {
            \$metadata = \$log->getMetadata();
            \$response = \$metadata;

            if (isset(\$metadata['timeline']) && 1 === count(\$metadata)) {
                // Legacy listeners set a string in CampaignExecutionEvent::setResult that Lead::appendToMetadata put into
                // under a timeline key for BC support. To keep BC for decisions, we have to extract that back out for the bubble
                // up responses

                \$response = \$metadata['timeline'];
            }

            \$this->setResponse(\$log->getEvent(), \$response);
        }
    }

    /**
     * @param mixed \$response
     */
    public function setResponse(Event \$event, \$response): void
    {
        switch (\$event->getEventType()) {
            case Event::TYPE_ACTION:
                if (!isset(\$this->actionResponses[\$event->getType()])) {
                    \$this->actionResponses[\$event->getType()] = [];
                }
                \$this->actionResponses[\$event->getType()][\$event->getId()] = \$response;
                break;
            case Event::TYPE_CONDITION:
                if (!isset(\$this->conditionResponses[\$event->getType()])) {
                    \$this->conditionResponses[\$event->getType()] = [];
                }
                \$this->conditionResponses[\$event->getType()][\$event->getId()] = \$response;
                break;
        }
    }

    /**
     * @param string|null \$type
     *
     * @return array
     */
    public function getActionResponses(\$type = null)
    {
        if (\$type) {
            return \$this->actionResponses[\$type] ?? [];
        }

        return \$this->actionResponses;
    }

    /**
     * @param string|null \$type
     *
     * @return array
     */
    public function getConditionResponses(\$type = null)
    {
        if (\$type) {
            return \$this->conditionResponses[\$type] ?? [];
        }

        return \$this->conditionResponses;
    }

    public function containsResponses(): int
    {
        return count(\$this->actionResponses) + count(\$this->conditionResponses);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/Result/Responses.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/Result/Responses.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Executioner\\Result\\Responses.php");
    }
}
