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

/* @bundles/NotificationBundle/Event/NotificationEvent.php */
class __TwigTemplate_b33e65d97ab049b4eb8d74c780253fbf extends Template
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
use Mautic\\NotificationBundle\\Entity\\Notification;

class NotificationEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Notification \$notification, \$isNew = false)
    {
        \$this->entity = \$notification;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Notification entity.
     *
     * @return Notification
     */
    public function getNotification()
    {
        return \$this->entity;
    }

    /**
     * Sets the Notification entity.
     */
    public function setNotification(Notification \$notification): void
    {
        \$this->entity = \$notification;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Event/NotificationEvent.php";
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
        return new Source("", "@bundles/NotificationBundle/Event/NotificationEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Event\\NotificationEvent.php");
    }
}
