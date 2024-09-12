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

/* @bundles/UserBundle/Entity/UserTokenRepository.php */
class __TwigTemplate_d5938b95534d73385d83c415a6066b29 extends Template
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

namespace Mautic\\UserBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<UserToken>
 */
final class UserTokenRepository extends CommonRepository implements UserTokenRepositoryInterface
{
    /**
     * @param string \$secret
     */
    public function isSecretUnique(\$secret): bool
    {
        \$tokens = \$this->createQueryBuilder('ut')
            ->where('ut.secret = :secret')
            ->setParameter('secret', \$secret)
            ->setMaxResults(1)
            ->getQuery()->execute();

        return 0 === count(\$tokens);
    }

    public function verify(UserToken \$token): bool
    {
        /** @var UserToken[] \$userTokens */
        \$userTokens = \$this->createQueryBuilder('ut')
            ->where('ut.user = :user AND ut.authorizator = :authorizator AND ut.secret = :secret AND (ut.expiration IS NULL OR ut.expiration >= :now)')
            ->setParameter('user', \$token->getUser())
            ->setParameter('authorizator', \$token->getAuthorizator())
            ->setParameter('secret', \$token->getSecret())
            ->setParameter('now', new \\DateTime())
            ->setMaxResults(1)
            ->getQuery()->execute();
        \$verified = (0 !== count(\$userTokens));
        if (false === \$verified) {
            return false;
        }
        \$userToken = reset(\$userTokens);
        if (\$userToken->isOneTimeOnly()) {
            \$this->deleteEntity(\$userToken);
        }

        return true;
    }

    public function deleteExpired(\$isDryRun = false): int
    {
        \$qb = \$this->createQueryBuilder('ut');

        if (\$isDryRun) {
            \$qb->select('count(ut.id) as records');
        } else {
            \$qb->delete(UserToken::class, 'ut');
        }

        return (int) \$qb
            ->where('ut.expiration <= :current_datetime')
            ->setParameter('current_datetime', new \\DateTime())
            ->getQuery()
            ->execute();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Entity/UserTokenRepository.php";
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
        return new Source("", "@bundles/UserBundle/Entity/UserTokenRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Entity\\UserTokenRepository.php");
    }
}
