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

/* @bundles/UserBundle/Entity/UserToken.php */
class __TwigTemplate_20f61489e864a244297ab45d0d2b3e37 extends Template
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

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class UserToken
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var User
     */
    private \$user;

    /**
     * @var string
     */
    private \$authorizator;

    /**
     * @var string
     */
    private \$secret;

    /**
     * @var \\DateTimeInterface|null
     */
    private \$expiration;

    /**
     * @var bool
     */
    private \$oneTimeOnly = true;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('user_tokens')
            ->setCustomRepositoryClass(UserTokenRepository::class);

        \$builder->addId();

        \$builder->createManyToOne('user', User::class)
            ->addJoinColumn('user_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createField('authorizator', 'string')
            ->length(32)
            ->build();

        \$builder->createField('secret', 'string')
            ->length(120)
            ->unique()
            ->build();

        \$builder->createField('expiration', 'datetime')
            ->nullable()
            ->build();

        \$builder->createField('oneTimeOnly', 'boolean')
            ->columnName('one_time_only')
            ->build();
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return \$this->user;
    }

    /**
     * @param User \$user
     *
     * @return UserToken
     */
    public function setUser(\$user)
    {
        \$this->user = \$user;

        return \$this;
    }

    /**
     * @return string
     */
    public function getAuthorizator()
    {
        return \$this->authorizator;
    }

    /**
     * @param string \$authorizator
     *
     * @return UserToken
     */
    public function setAuthorizator(\$authorizator)
    {
        \$this->authorizator = \$authorizator;

        return \$this;
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return \$this->secret;
    }

    /**
     * Use \\Mautic\\UserBundle\\Entity\\UserTokenRepositoryInterface::generateSecret to get valid secret.
     *
     * @param string \$secret
     *
     * @return UserToken
     */
    public function setSecret(\$secret)
    {
        \$this->secret = \$secret;

        return \$this;
    }

    /**
     * @return \\DateTimeInterface|null
     */
    public function getExpiration()
    {
        return \$this->expiration;
    }

    /**
     * @param \\DateTime|null \$expiration
     *
     * @return UserToken
     */
    public function setExpiration(\$expiration = null)
    {
        \$this->expiration = \$expiration;

        return \$this;
    }

    /**
     * @return bool
     */
    public function isOneTimeOnly()
    {
        return \$this->oneTimeOnly;
    }

    /**
     * @param bool \$oneTimeOnly
     *
     * @return UserToken
     */
    public function setOneTimeOnly(\$oneTimeOnly = true)
    {
        \$this->oneTimeOnly = \$oneTimeOnly;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Entity/UserToken.php";
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
        return new Source("", "@bundles/UserBundle/Entity/UserToken.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Entity\\UserToken.php");
    }
}
