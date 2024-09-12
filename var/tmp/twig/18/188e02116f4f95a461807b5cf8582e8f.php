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

/* @bundles/ApiBundle/Controller/oAuth2/AuthorizeController.php */
class __TwigTemplate_dc21f20abe00d02c2e0c8af604a916b9 extends Template
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

namespace Mautic\\ApiBundle\\Controller\\oAuth2;

use FOS\\OAuthServerBundle\\Event\\PreAuthorizationEvent;
use FOS\\OAuthServerBundle\\Form\\Handler\\AuthorizeFormHandler;
use FOS\\OAuthServerBundle\\Model\\ClientManagerInterface;
use OAuth2\\OAuth2;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Twig\\Environment;

class AuthorizeController extends \\FOS\\OAuthServerBundle\\Controller\\AuthorizeController
{
    /**
     * This constructor must be duplicated from the extended class so our custom code could access the properties.
     */
    public function __construct(
        RequestStack \$requestStack,
        private Form \$authorizeForm,
        private AuthorizeFormHandler \$authorizeFormHandler,
        private OAuth2 \$oAuth2Server,
        private TokenStorageInterface \$tokenStorage,
        UrlGeneratorInterface \$router,
        ClientManagerInterface \$clientManager,
        private EventDispatcherInterface \$eventDispatcher,
        private Environment \$twig,
        SessionInterface \$session = null
    ) {
        parent::__construct(
            \$requestStack,
            \$authorizeForm,
            \$authorizeFormHandler,
            \$oAuth2Server,
            \$tokenStorage,
            \$router,
            \$clientManager,
            \$eventDispatcher,
            \$twig,
            \$session
        );
    }

    /**
     * @return \\FOS\\OAuthServerBundle\\Controller\\Response|Response
     *
     * @throws \\OAuth2\\OAuth2RedirectException
     * @throws AccessDeniedException
     */
    public function authorizeAction(Request \$request)
    {
        \$user = \$this->tokenStorage->getToken()->getUser();

        if (!\$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        if (true === \$request->getSession()->get('_fos_oauth_server.ensure_logout')) {
            \$request->getSession()->invalidate(600);
            \$request->getSession()->set('_fos_oauth_server.ensure_logout', true);
        }

        \$event = \$this->eventDispatcher->dispatch(
            new PreAuthorizationEvent(\$user, \$this->getClient())
        );

        if (\$event->isAuthorizedClient()) {
            \$scope = \$request->get('scope', null);

            return \$this->oAuth2Server->finishClientAuthorization(true, \$user, \$request, \$scope);
        }

        if (true === \$this->authorizeFormHandler->process()) {
            return \$this->processSuccess(\$user, \$this->authorizeFormHandler, \$request);
        }

        \$contents =  \$this->twig->render(
            '@MauticApi/Authorize/oAuth2/authorize.html.twig',
            [
                'form'   => \$this->authorizeForm->createView(),
                'client' => \$this->getClient(),
            ]
        );

        return new Response(\$contents);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Controller/oAuth2/AuthorizeController.php";
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
        return new Source("", "@bundles/ApiBundle/Controller/oAuth2/AuthorizeController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Controller\\oAuth2\\AuthorizeController.php");
    }
}
