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

/* @bundles/ApiBundle/Entity/oAuth2/RefreshToken.php */
class __TwigTemplate_215a8d0331d22d135d23f76cd44fe8d8 extends Template
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

namespace Mautic\\ApiBundle\\Entity\\oAuth2;

use Doctrine\\ORM\\Mapping as ORM;
use FOS\\OAuthServerBundle\\Model\\RefreshToken as BaseRefreshToken;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class RefreshToken extends BaseRefreshToken
{
    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('oauth2_refreshtokens')
            ->addIndex(['token'], 'oauth2_refresh_token_search');

        \$builder->createField('id', 'integer')
            ->makePrimaryKey()
            ->generatedValue()
            ->build();

        \$builder->createManyToOne('client', 'Client')
            ->addJoinColumn('client_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createManyToOne('user', \\Mautic\\UserBundle\\Entity\\User::class)
            ->addJoinColumn('user_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createField('token', 'string')
            ->unique()
            ->build();

        \$builder->createField('expiresAt', 'bigint')
            ->columnName('expires_at')
            ->nullable()
            ->build();

        \$builder->createField('scope', 'string')
            ->nullable()
            ->build();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Entity/oAuth2/RefreshToken.php";
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
        return new Source("", "@bundles/ApiBundle/Entity/oAuth2/RefreshToken.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Entity\\oAuth2\\RefreshToken.php");
    }
}
