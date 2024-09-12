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

/* @bundles/ReportBundle/Entity/Scheduler.php */
class __TwigTemplate_b2672997251afb75c2511f8f7eea7211 extends Template
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

use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class Scheduler
{
    /**
     * @var int
     */
    private \$id;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('reports_schedulers')
            ->setCustomRepositoryClass(SchedulerRepository::class);

        \$builder->addId();

        \$builder->createManyToOne('report', Report::class)
            ->addJoinColumn('report_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->createField('scheduleDate', Types::DATETIME_MUTABLE)
            ->columnName('schedule_date')
            ->nullable(false)
            ->build();
    }

    public function __construct(
        private Report \$report,
        private \\DateTimeInterface \$scheduleDate
    ) {
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return Report
     */
    public function getReport()
    {
        return \$this->report;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getScheduleDate()
    {
        return \$this->scheduleDate;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Entity/Scheduler.php";
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
        return new Source("", "@bundles/ReportBundle/Entity/Scheduler.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Entity\\Scheduler.php");
    }
}
