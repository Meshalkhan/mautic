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

/* @bundles/NotificationBundle/Event/SendingNotificationEvent.php */
class __TwigTemplate_fd294e62fef510ffc483bef473216f09 extends Template
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

namespace Mautic\\NotificationBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\NotificationBundle\\Entity\\Notification;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 */
class SendingNotificationEvent extends CommonEvent
{
    /**
     * @var Notification
     */
    protected \$entity;

    public function __construct(
        Notification \$notification,
        protected Lead \$lead
    ) {
        \$this->entity = \$notification;
    }

    /**
     * @return Notification
     */
    public function getNotification()
    {
        return \$this->entity;
    }

    /**
     * @return \$this
     */
    public function setNotifiction(Notification \$notification)
    {
        \$this->entity = \$notification;

        return \$this;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return \$this
     */
    public function setLead(Lead \$lead)
    {
        \$this->lead = \$lead;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Event/SendingNotificationEvent.php";
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
        return new Source("", "@bundles/NotificationBundle/Event/SendingNotificationEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Event\\SendingNotificationEvent.php");
    }
}
