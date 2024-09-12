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

/* @bundles/ReportBundle/Model/ScheduleModel.php */
class __TwigTemplate_b1de595e040bbd18b4adbb94de10f215 extends Template
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

namespace Mautic\\ReportBundle\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\ReportBundle\\Entity\\Report;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Entity\\SchedulerRepository;
use Mautic\\ReportBundle\\Scheduler\\Model\\SchedulerPlanner;
use Mautic\\ReportBundle\\Scheduler\\Option\\ExportOption;

class ScheduleModel
{
    /**
     * @var SchedulerRepository
     */
    private \\Doctrine\\ORM\\EntityRepository \$schedulerRepository;

    public function __construct(
        private EntityManager \$entityManager,
        private SchedulerPlanner \$schedulerPlanner
    ) {
        \$this->schedulerRepository = \$entityManager->getRepository(Scheduler::class);
    }

    /**
     * @return Scheduler[]
     */
    public function getScheduledReportsForExport(ExportOption \$exportOption)
    {
        return \$this->schedulerRepository->getScheduledReportsForExport(\$exportOption);
    }

    public function reportWasScheduled(Report \$report): void
    {
        \$this->schedulerPlanner->computeScheduler(\$report);
    }

    public function turnOffScheduler(Report \$report): void
    {
        \$report->setIsScheduled(false);
        \$this->entityManager->persist(\$report);
        \$this->entityManager->flush();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Model/ScheduleModel.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ScheduleModel.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Model\\ScheduleModel.php");
    }
}
