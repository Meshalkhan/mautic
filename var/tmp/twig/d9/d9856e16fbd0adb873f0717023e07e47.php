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

/* @bundles/NotificationBundle/Event/NotificationClickEvent.php */
class __TwigTemplate_27f0af023ce17aee034fd1c64823c613 extends Template
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
use Mautic\\NotificationBundle\\Entity\\Stat;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 */
class NotificationClickEvent extends CommonEvent
{
    private Notification \$notification;

    public function __construct(
        Stat \$stat,
        private \$request
    ) {
        \$this->entity       = \$stat;
        \$this->notification = \$stat->getNotification();
    }

    /**
     * Returns the Notification entity.
     *
     * @return Notification
     */
    public function getNotification()
    {
        return \$this->notification;
    }

    /**
     * Get notification request.
     *
     * @return string
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * @return Stat
     */
    public function getStat()
    {
        return \$this->entity;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Event/NotificationClickEvent.php";
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
        return new Source("", "@bundles/NotificationBundle/Event/NotificationClickEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Event\\NotificationClickEvent.php");
    }
}
