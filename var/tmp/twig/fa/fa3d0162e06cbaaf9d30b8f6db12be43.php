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

/* @bundles/PluginBundle/Entity/IntegrationRepository.php */
class __TwigTemplate_3bf918c5fde4519354e1de01e2eceff4 extends Template
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

namespace Mautic\\PluginBundle\\Entity;

use Doctrine\\ORM\\Query;
use Mautic\\CoreBundle\\Cache\\ResultCacheHelper;
use Mautic\\CoreBundle\\Cache\\ResultCacheOptions;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Integration>
 */
class IntegrationRepository extends CommonRepository
{
    /**
     * @return mixed[]
     */
    public function getIntegrations(): array
    {
        \$query = \$this->createQueryBuilder('i')
            ->join('i.plugin', 'p')
            ->getQuery();
        \$this->enableCache(\$query);

        \$services = \$query->getResult();

        \$results = [];
        foreach (\$services as \$s) {
            \$results[\$s->getName()] = \$s;
        }

        return \$results;
    }

    /**
     * Get core (no plugin) integrations.
     *
     * @return mixed[]
     */
    public function getCoreIntegrations(): array
    {
        \$query = \$this->createQueryBuilder('i')
            ->getQuery();
        \$this->enableCache(\$query);

        \$services = \$query->getResult();

        \$results = [];
        foreach (\$services as \$s) {
            \$results[\$s->getName()] = \$s;
        }

        return \$results;
    }

    public function findOneByName(string \$name): ?Integration
    {
        \$query = \$this->createQueryBuilder('i')
            ->where('i.name = :name')
            ->setParameter('name', \$name)
            ->setMaxResults(1)
            ->getQuery();
        \$this->enableCache(\$query);

        return \$query->getOneOrNullResult();
    }

    private function enableCache(Query \$query): void
    {
        ResultCacheHelper::enableOrmQueryCache(\$query, new ResultCacheOptions(Integration::CACHE_NAMESPACE));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Entity/IntegrationRepository.php";
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
        return new Source("", "@bundles/PluginBundle/Entity/IntegrationRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Entity\\IntegrationRepository.php");
    }
}
