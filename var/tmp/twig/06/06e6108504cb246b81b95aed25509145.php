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

/* @bundles/ApiBundle/Entity/oAuth2/ClientRepository.php */
class __TwigTemplate_034b859d2e90406f7c7dae5584c3e563 extends Template
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

use Doctrine\\ORM\\Tools\\Pagination\\Paginator;
use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\UserBundle\\Entity\\User;

/**
 * @extends CommonRepository<Client>
 */
class ClientRepository extends CommonRepository
{
    /**
     * @return array
     */
    public function getUserClients(User \$user)
    {
        \$query = \$this->createQueryBuilder(\$this->getTableAlias());

        \$query->join('c.users', 'u')
            ->where(\$query->expr()->eq('u.id', ':userId'))
            ->setParameter('userId', \$user->getId());

        return \$query->getQuery()->getResult();
    }

    /**
     * @return Paginator<Client>
     */
    public function getEntities(array \$args = []): Paginator
    {
        \$q = \$this
            ->createQueryBuilder('c');

        \$query = \$q->getQuery();

        return new Paginator(\$query);
    }

    protected function addCatchAllWhereClause(\$q, \$filter): array
    {
        return \$this->addStandardCatchAllWhereClause(\$q, \$filter, [
            'c.name',
            'c.redirectUris',
        ]);
    }

    protected function getDefaultOrder(): array
    {
        return [
            ['c.name', 'ASC'],
        ];
    }

    public function getTableAlias(): string
    {
        return 'c';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Entity/oAuth2/ClientRepository.php";
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
        return new Source("", "@bundles/ApiBundle/Entity/oAuth2/ClientRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Entity\\oAuth2\\ClientRepository.php");
    }
}
