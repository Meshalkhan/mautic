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

/* @bundles/UserBundle/Security/SAML/User/UserCreator.php */
class __TwigTemplate_734e2ef9cd8e42ec95d306a1683174f4 extends Template
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

namespace Mautic\\UserBundle\\Security\\SAML\\User;

use Doctrine\\ORM\\EntityManagerInterface;
use LightSaml\\Model\\Protocol\\Response;
use LightSaml\\SpBundle\\Security\\User\\UserCreatorInterface;
use Mautic\\CoreBundle\\Helper\\EncryptionHelper;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Component\\PasswordHasher\\Hasher\\UserPasswordHasher;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

class UserCreator implements UserCreatorInterface
{
    private int \$defaultRole;

    private array \$requiredFields = [
        'username',
        'firstname',
        'lastname',
        'email',
    ];

    public function __construct(
        private EntityManagerInterface \$entityManager,
        private UserMapper \$userMapper,
        private UserModel \$userModel,
        private UserPasswordHasher \$hasher,
        \$defaultRole
    ) {
        \$this->defaultRole   = (int) \$defaultRole;
    }

    /**
     * @return UserInterface|null
     */
    public function createUser(Response \$response): User
    {
        if (empty(\$this->defaultRole)) {
            throw new BadCredentialsException('User does not exist.');
        }

        /** @var Role \$defaultRole */
        \$defaultRole = \$this->entityManager->getReference(Role::class, \$this->defaultRole);

        \$user = \$this->userMapper->getUser(\$response);
        \$user->setPassword(\$this->userModel->checkNewPassword(\$user, \$this->hasher, EncryptionHelper::generateKey()));
        \$user->setRole(\$defaultRole);

        \$this->validateUser(\$user);

        \$this->userModel->saveEntity(\$user);

        return \$user;
    }

    /**
     * @throws BadCredentialsException
     */
    private function validateUser(User \$user): void
    {
        // Validate that the user has all that's required
        foreach (\$this->requiredFields as \$field) {
            \$getter = 'get'.ucfirst(\$field);

            if (!\$user->\$getter()) {
                throw new BadCredentialsException('User does not include required fields.');
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Security/SAML/User/UserCreator.php";
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
        return new Source("", "@bundles/UserBundle/Security/SAML/User/UserCreator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Security\\SAML\\User\\UserCreator.php");
    }
}
