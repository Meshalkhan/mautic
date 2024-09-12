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

/* @bundles/EmailBundle/Entity/StatDeviceRepository.php */
class __TwigTemplate_89a576093a4c6048683e572b6a3fd1f4 extends Template
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

namespace Mautic\\EmailBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;

/**
 * @extends CommonRepository<StatDevice>
 */
class StatDeviceRepository extends CommonRepository
{
    public function getDeviceStats(\$emailIds, \\DateTime \$fromDate = null, \\DateTime \$toDate = null): array
    {
        \$qb = \$this->getEntityManager()->getConnection()->createQueryBuilder();

        \$qb->select('count(es.id) as count, d.device as device, es.list_id')
            ->from(MAUTIC_TABLE_PREFIX.'email_stats_devices', 'ed')
            ->join('ed', MAUTIC_TABLE_PREFIX.'lead_devices', 'd', 'd.id = ed.device_id')
            ->join('ed', MAUTIC_TABLE_PREFIX.'email_stats', 'es', 'es.id = ed.stat_id');
        if (null != \$emailIds) {
            if (!is_array(\$emailIds)) {
                \$emailIds = [(int) \$emailIds];
            }
            \$qb->where(
                \$qb->expr()->in('es.email_id', \$emailIds)
            );
        }

        \$qb->groupBy('es.list_id, d.device');

        if (null !== \$fromDate) {
            // make sure the date is UTC
            \$dt = new DateTimeHelper(\$fromDate);
            \$qb->andWhere(
                \$qb->expr()->gte('es.date_read', \$qb->expr()->literal(\$dt->toUtcString()))
            );
        }
        if (null !== \$toDate) {
            // make sure the date is UTC
            \$dt = new DateTimeHelper(\$toDate);
            \$qb->andWhere(
                \$qb->expr()->lte('es.date_read', \$qb->expr()->literal(\$dt->toUtcString()))
            );
        }

        return \$qb->executeQuery()->fetchAllAssociative();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Entity/StatDeviceRepository.php";
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
        return new Source("", "@bundles/EmailBundle/Entity/StatDeviceRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Entity\\StatDeviceRepository.php");
    }
}
