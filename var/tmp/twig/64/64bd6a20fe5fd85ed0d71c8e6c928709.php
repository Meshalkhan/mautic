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

/* @bundles/UserBundle/EventListener/SAMLSubscriber.php */
class __TwigTemplate_bd18152b6005ac367499faf779c397ef extends Template
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

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\RedirectResponse;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;
use Symfony\\Component\\Routing\\RouterInterface;

class SAMLSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper,
        private RouterInterface \$router
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 256],
        ];
    }

    /**
     * Block access to SAML URLs if SAML is disabled.
     */
    public function onKernelRequest(RequestEvent \$event): void
    {
        if (!\$event->isMainRequest()) {
            return;
        }

        \$request = \$event->getRequest();
        \$route   = (string) \$request->attributes->get('_route');
        \$url     = (string) \$request->getRequestUri();
        if (!str_contains(\$route, 'lightsaml') && !str_contains(\$url, '/saml/')) {
            return;
        }

        \$samlEnabled = (bool) \$this->coreParametersHelper->get('saml_idp_metadata');
        if (\$samlEnabled) {
            return;
        }

        // Redirect to standard login page if SAML is disabled
        \$event->setResponse(
            new RedirectResponse(\$this->router->generate('login'))
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/EventListener/SAMLSubscriber.php";
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
        return new Source("", "@bundles/UserBundle/EventListener/SAMLSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\EventListener\\SAMLSubscriber.php");
    }
}
