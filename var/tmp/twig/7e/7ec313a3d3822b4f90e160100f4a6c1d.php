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

/* @bundles/ApiBundle/Controller/oAuth2/SecurityController.php */
class __TwigTemplate_b88c0ace975711df0589fddd61dc0a12 extends Template
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

use Mautic\\CoreBundle\\Controller\\CommonController;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Exception;
use Symfony\\Component\\Security\\Core\\Security;

class SecurityController extends CommonController
{
    public function loginAction(Request \$request): Response
    {
        \$session = \$request->getSession();

        // get the login error if there is one
        if (\$request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            \$error = \$request->attributes->get(Security::AUTHENTICATION_ERROR);
        } else {
            \$error = \$session->get(Security::AUTHENTICATION_ERROR);
            \$session->remove(Security::AUTHENTICATION_ERROR);
        }
        if (!empty(\$error)) {
            if (\$error instanceof Exception\\BadCredentialsException) {
                \$msg = 'mautic.user.auth.error.invalidlogin';
            } else {
                \$msg = \$error->getMessage();
            }
            \$this->addFlashMessage(\$msg, [], 'error', null, false);
        }

        if (\$session->has('_security.target_path')) {
            if (str_contains(\$session->get('_security.target_path'), \$this->generateUrl('fos_oauth_server_authorize'))) {
                \$session->set('_fos_oauth_server.ensure_logout', true);
            }
        }

        return \$this->render(
            '@MauticApi/Security/login.html.twig',
            [
                'last_username' => \$session->get(Security::LAST_USERNAME),
                'route'         => 'mautic_oauth2_server_auth_login_check',
            ]
        );
    }

    public function loginCheckAction(): Response
    {
        return new Response('', 400);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Controller/oAuth2/SecurityController.php";
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
        return new Source("", "@bundles/ApiBundle/Controller/oAuth2/SecurityController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Controller\\oAuth2\\SecurityController.php");
    }
}
