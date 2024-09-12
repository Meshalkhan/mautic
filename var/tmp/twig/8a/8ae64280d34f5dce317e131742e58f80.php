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

/* @bundles/UserBundle/EventListener/SecuritySubscriber.php */
class __TwigTemplate_d7342c36f67a389995005a53162ce2ab extends Template
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

namespace Mautic\\UserBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Model\\AuditLogModel;
use Mautic\\UserBundle\\Event\\LoginEvent;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class SecuritySubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IpLookupHelper \$ipLookupHelper,
        private AuditLogModel \$auditLogModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            UserEvents::USER_LOGIN => ['onSecurityInteractiveLogin', 0],
        ];
    }

    public function onSecurityInteractiveLogin(LoginEvent \$event): void
    {
        \$userId   = (int) \$event->getUser()->getId();
        \$useName  = \$event->getUser()->getUsername();

        \$log     = [
            'bundle'    => 'user',
            'object'    => 'security',
            'objectId'  => \$userId,
            'action'    => 'login',
            'details'   => ['username' => \$useName],
            'ipAddress' => \$this->ipLookupHelper->getIpAddressFromRequest(),
        ];

        \$this->auditLogModel->writeToLog(\$log);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/EventListener/SecuritySubscriber.php";
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
        return new Source("", "@bundles/UserBundle/EventListener/SecuritySubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\EventListener\\SecuritySubscriber.php");
    }
}
