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

/* @bundles/ChannelBundle/Event/MessageQueueBatchProcessEvent.php */
class __TwigTemplate_2808abc6157db9284961d3226bd6f3e4 extends Template
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

namespace Mautic\\ChannelBundle\\Event;

use Mautic\\ChannelBundle\\Entity\\MessageQueue;
use Symfony\\Contracts\\EventDispatcher\\Event;

class MessageQueueBatchProcessEvent extends Event
{
    /**
     * @param MessageQueue[] \$messages
     */
    public function __construct(
        private array \$messages,
        private \$channel,
        private \$channelId
    ) {
    }

    public function checkContext(\$channel): bool
    {
        return \$channel === \$this->channel;
    }

    /**
     * @return array
     */
    public function getMessages()
    {
        return \$this->messages;
    }

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return \$this->channel;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return \$this->channelId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Event/MessageQueueBatchProcessEvent.php";
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
        return new Source("", "@bundles/ChannelBundle/Event/MessageQueueBatchProcessEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Event\\MessageQueueBatchProcessEvent.php");
    }
}
