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

/* @bundles/ChannelBundle/Event/MessageQueueEvent.php */
class __TwigTemplate_7ab17bc3788323afee94a67eb8990b29 extends Template
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

class MessageQueueEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(MessageQueue \$entity, \$isNew = false)
    {
        \$this->entity = \$entity;
        \$this->isNew  = \$isNew;
    }

    /**
     * @return MessageQueue
     */
    public function getMessageQueue()
    {
        return \$this->entity;
    }

    /**
     * @param MessageQueue \$entity
     */
    public function setMessageQueue(\$entity): void
    {
        \$this->entity = \$entity;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Event/MessageQueueEvent.php";
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
        return new Source("", "@bundles/ChannelBundle/Event/MessageQueueEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Event\\MessageQueueEvent.php");
    }
}
