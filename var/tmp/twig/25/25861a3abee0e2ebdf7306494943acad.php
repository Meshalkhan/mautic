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

/* @bundles/CoreBundle/Cache/ResultCacheHelper.php */
class __TwigTemplate_2021065299cdb250cfe46a87dc11d921 extends Template
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

namespace Mautic\\CoreBundle\\Cache;

use Doctrine\\Common\\Cache\\CacheProvider;
use Doctrine\\Common\\Cache\\Psr6\\DoctrineProvider;
use Doctrine\\DBAL\\Cache\\QueryCacheProfile;
use Doctrine\\DBAL\\Configuration;
use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Query\\QueryBuilder;
use Doctrine\\DBAL\\Result;
use Doctrine\\ORM\\Query;

class ResultCacheHelper
{
    /**
     * @return bool Returns true if cache was available and enabled on the \$query
     */
    public static function enableOrmQueryCache(Query \$query, ResultCacheOptions \$resultCacheOptions): bool
    {
        \$cache = self::getCache(\$query->getEntityManager()->getConfiguration());

        if (!\$cache) {
            return false;
        }

        \$query->setResultCacheProfile(self::createCacheProfile(\$resultCacheOptions, \$cache));

        return true;
    }

    /**
     * Executes the query using cache (if available) and returns its result.
     */
    public static function executeCachedDbalQuery(Connection \$connection, QueryBuilder \$queryBuilder, ResultCacheOptions \$resultCacheOptions): Result
    {
        \$cache = self::getCache(\$connection->getConfiguration());

        if (!\$cache) {
            return \$queryBuilder->executeQuery();
        }

        return \$connection->executeCacheQuery(
            \$queryBuilder->getSQL(),
            \$queryBuilder->getParameters(),
            \$queryBuilder->getParameterTypes(),
            self::createCacheProfile(\$resultCacheOptions, \$cache)
        );
    }

    public static function getCache(Configuration \$configuration): ?CacheProvider
    {
        \$cache = \$configuration->getResultCache();

        if (!\$cache) {
            return null;
        }

        \$cache = DoctrineProvider::wrap(\$cache);

        if (!\$cache instanceof CacheProvider) {
            return null;
        }

        return \$cache;
    }

    private static function createCacheProfile(ResultCacheOptions \$resultCacheOptions, CacheProvider \$cache): QueryCacheProfile
    {
        \$cache = clone \$cache;
        \$cache->setNamespace(\$resultCacheOptions->getNamespace());

        return new QueryCacheProfile((int) \$resultCacheOptions->getTtl(), \$resultCacheOptions->getId(), \$cache);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Cache/ResultCacheHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Cache/ResultCacheHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Cache\\ResultCacheHelper.php");
    }
}
