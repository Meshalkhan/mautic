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

/* @bundles/UserBundle/Security/UserTokenSetter.php */
class __TwigTemplate_ecf4db2ddeb6db982a925d94190cc8c9 extends Template
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

declare(strict_types=1);

namespace Mautic\\UserBundle\\Security;

use Mautic\\UserBundle\\Entity\\UserRepository;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;

final class UserTokenSetter implements UserTokenSetterInterface
{
    public function __construct(private UserRepository \$userRepository, private TokenStorageInterface \$tokenStorage)
    {
    }

    public function setUser(int \$userId): void
    {
        \$user  = \$this->userRepository->getEntity(\$userId);
        \$token = \$this->tokenStorage->getToken() ?? new DummyToken();

        \$token->setUser(\$user);
        \$this->tokenStorage->setToken(\$token);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Security/UserTokenSetter.php";
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
        return new Source("", "@bundles/UserBundle/Security/UserTokenSetter.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Security\\UserTokenSetter.php");
    }
}
