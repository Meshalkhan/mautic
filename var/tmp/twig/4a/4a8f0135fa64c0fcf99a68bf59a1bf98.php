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

/* @bundles/WebhookBundle/Event/WebhookBuilderEvent.php */
class __TwigTemplate_377df09d9600d0db8a7d5431ac3f8f0c extends Template
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

namespace Mautic\\WebhookBundle\\Event;

use Symfony\\Component\\Process\\Exception\\InvalidArgumentException;
use Symfony\\Contracts\\EventDispatcher\\Event;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class WebhookBuilderEvent extends Event
{
    private array \$events = [];

    public function __construct(
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * Add an event for the event list.
     *
     * @param string \$key   - a unique identifier; it is recommended that it be namespaced i.e. lead.mytrigger
     * @param array  \$event - can contain the following keys:
     *                      'label'       => (required) what to display in the list
     *                      'description' => (optional) short description of event
     */
    public function addEvent(\$key, array \$event): void
    {
        if (array_key_exists(\$key, \$this->events)) {
            throw new InvalidArgumentException(\"The key, '\$key' is already used by another webhook event. Please use a different key.\");
        }

        \$event['label']       = \$this->translator->trans(\$event['label']);
        \$event['description'] = (isset(\$event['description'])) ? \$this->translator->trans(\$event['description']) : '';

        \$this->events[\$key] = \$event;
    }

    /**
     * Get webhook events.
     *
     * @return array
     */
    public function getEvents()
    {
        static \$sorted = false;

        if (empty(\$sorted)) {
            uasort(\$this->events, fn (\$a, \$b): int => strnatcasecmp(
                \$a['label'], \$b['label']));
            \$sorted = true;
        }

        return \$this->events;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Event/WebhookBuilderEvent.php";
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
        return new Source("", "@bundles/WebhookBundle/Event/WebhookBuilderEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Event\\WebhookBuilderEvent.php");
    }
}
