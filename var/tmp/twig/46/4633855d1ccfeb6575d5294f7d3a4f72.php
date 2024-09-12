<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/UserBundle/Model/UserToken/UserTokenService.php */
class __TwigTemplate_33fd698dfbd6d285246a9b749123e957 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\UserBundle\\Model\\UserToken;

use Mautic\\CoreBundle\\Helper\\RandomHelper\\RandomHelperInterface;
use Mautic\\UserBundle\\Entity\\UserToken;
use Mautic\\UserBundle\\Entity\\UserTokenRepositoryInterface;

final class UserTokenService implements UserTokenServiceInterface
{
    public function __construct(
        private RandomHelperInterface \$randomHelper,
        private UserTokenRepositoryInterface \$userTokenRepository
    ) {
    }

    /**
     * @param int \$secretLength
     *
     * @return UserToken
     */
    public function generateSecret(UserToken \$token, \$secretLength = 32)
    {
        do {
            \$randomSecret   = \$this->randomHelper->generate(\$secretLength);
            \$isSecretUnique = \$this->userTokenRepository->isSecretUnique(\$randomSecret);
        } while (false === \$isSecretUnique);

        return \$token->setSecret(\$randomSecret);
    }

    /**
     * @return bool
     */
    public function verify(UserToken \$token)
    {
        return \$this->userTokenRepository->verify(\$token);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Model/UserToken/UserTokenService.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/UserBundle/Model/UserToken/UserTokenService.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Model\\UserToken\\UserTokenService.php");
    }
}
