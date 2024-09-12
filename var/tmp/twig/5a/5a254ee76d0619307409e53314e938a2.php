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

/* @bundles/ReportBundle/Entity/SchedulerRepository.php */
class __TwigTemplate_de7b2ec60cb73836a45dbe36db2e69cc extends Template
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

namespace Mautic\\ReportBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;

/**
 * @extends CommonRepository<Scheduler>
 */
class SchedulerRepository extends CommonRepository
{
    /**
     * @return Scheduler|null
     */
    public function getSchedulerByReport(Report \$report)
    {
        return \$this->findOneBy(['report' => \$report]);
    }

    /**
     * @return array|Scheduler[]
     */
    public function getScheduledReportsForExport(ExportOption \$exportOption)
    {
        \$qb = \$this->createQueryBuilder('scheduler');
        \$qb->addSelect('report')
            ->leftJoin('scheduler.report', 'report');

        \$date = new \\DateTime();
        \$qb->andWhere('scheduler.scheduleDate <= :scheduleDate')
            ->setParameter('scheduleDate', \$date);

        if (\$exportOption->getReportId()) {
            \$qb->andWhere('report.id = :id')
                ->setParameter('id', \$exportOption->getReportId());
        }

        return \$qb->getQuery()->getResult();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Entity/SchedulerRepository.php";
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
        return new Source("", "@bundles/ReportBundle/Entity/SchedulerRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Entity\\SchedulerRepository.php");
    }
}
