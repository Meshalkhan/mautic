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

/* @bundles/UserBundle/Entity/PermissionRepository.php */
class __TwigTemplate_fb6cb6b949130818454d66ddacccf5f4 extends Template
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

use Doctrine\\ORM\\Query;
use Mautic\\CoreBundle\\Cache\\ResultCacheHelper;
use Mautic\\CoreBundle\\Cache\\ResultCacheOptions;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Permission>
 */
class PermissionRepository extends CommonRepository
{
    /**
     * Delete all permissions for a specific role.
     */
    public function purgeRolePermissions(Role \$role): void
    {
        \$query = \$this
            ->createQueryBuilder('p')
            ->delete(Permission::class, 'p')
            ->where('p.role = :role')
            ->setParameter('role', \$role)
            ->getQuery();
        \$query->execute();
    }

    /**
     * Retrieves array of permissions for a set role.  If \$forForm, then the array will contain.
     *
     * @param bool \$forForm
     */
    public function getPermissionsByRole(Role \$role, \$forForm = false): array
    {
        \$query = \$this
            ->createQueryBuilder('p')
            ->where('p.role = :role')
            ->orderBy('p.bundle')
            ->setParameter(':role', \$role)
            ->getQuery();
        ResultCacheHelper::enableOrmQueryCache(\$query, new ResultCacheOptions(Permission::CACHE_NAMESPACE));
        \$results = \$query->getResult(Query::HYDRATE_ARRAY);

        // rearrange the array to meet needs
        \$permissions = [];
        foreach (\$results as \$r) {
            if (\$forForm) {
                \$permissions[\$r['bundle']][\$r['id']] = [
                    'name'    => \$r['name'],
                    'bitwise' => \$r['bitwise'],
                ];
            } else {
                \$permissions[\$r['bundle']][\$r['name']] = \$r['bitwise'];
            }
        }

        return \$permissions;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Entity/PermissionRepository.php";
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
        return new Source("", "@bundles/UserBundle/Entity/PermissionRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Entity\\PermissionRepository.php");
    }
}
