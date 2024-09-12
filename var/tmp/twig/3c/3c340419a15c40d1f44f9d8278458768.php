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

/* @bundles/ApiBundle/Entity/oAuth2/AccessToken.php */
class __TwigTemplate_387812471775daa0ea2475ddbe7b5e35 extends Template
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

namespace Mautic\\ApiBundle\\Entity\\oAuth2;

use Doctrine\\ORM\\Mapping as ORM;
use FOS\\OAuthServerBundle\\Model\\AccessToken as BaseAccessToken;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class AccessToken extends BaseAccessToken
{
    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('oauth2_accesstokens')
            ->addIndex(['token'], 'oauth2_access_token_search');

        \$builder->createField('id', 'integer')
            ->makePrimaryKey()
            ->generatedValue()
            ->build();

        \$builder->createManyToOne('client', 'Client')
            ->addJoinColumn('client_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createManyToOne('user', \\Mautic\\UserBundle\\Entity\\User::class)
            ->addJoinColumn('user_id', 'id', true, false, 'CASCADE')
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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ApiBundle/Entity/oAuth2/AccessToken.php";
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
        return new Source("", "@bundles/ApiBundle/Entity/oAuth2/AccessToken.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Entity\\oAuth2\\AccessToken.php");
    }
}
