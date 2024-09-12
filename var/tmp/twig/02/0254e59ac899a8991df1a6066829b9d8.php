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

/* @bundles/ChannelBundle/Event/MessageQueueProcessEvent.php */
class __TwigTemplate_06fba25ad4003310cf4b177be2a7427e extends Template
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
use Mautic\\CoreBundle\\Event\\CommonEvent;

class MessageQueueProcessEvent extends CommonEvent
{
    public function __construct(MessageQueue \$entity)
    {
        \$this->entity = \$entity;
    }

    /**
     * @return MessageQueue
     */
    public function getMessageQueue()
    {
        return \$this->entity;
    }

    public function checkContext(\$channel): bool
    {
        return \$channel === \$this->entity->getChannel();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Event/MessageQueueProcessEvent.php";
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
        return new Source("", "@bundles/ChannelBundle/Event/MessageQueueProcessEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Event\\MessageQueueProcessEvent.php");
    }
}
