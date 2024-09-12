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

/* @bundles/InstallBundle/InstallFixtures/ORM/LoadReportData.php */
class __TwigTemplate_75ed6303b1ae5a8ff3d0ce37bf110596 extends Template
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

namespace Mautic\\InstallBundle\\InstallFixtures\\ORM;

use Doctrine\\Bundle\\FixturesBundle\\FixtureGroupInterface;
use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CoreBundle\\Helper\\CsvHelper;
use Mautic\\CoreBundle\\Helper\\Serializer;
use Mautic\\ReportBundle\\Entity\\Report;

class LoadReportData extends AbstractFixture implements OrderedFixtureInterface, FixtureGroupInterface
{
    public static function getGroups(): array
    {
        return ['group_install', 'group_mautic_install_data'];
    }

    public function load(ObjectManager \$manager): void
    {
        \$reports = CsvHelper::csv_to_array(__DIR__.'/fakereportdata.csv');
        foreach (\$reports as \$count => \$rows) {
            \$report = new Report();
            \$key    = \$count + 1;
            foreach (\$rows as \$col => \$val) {
                if ('NULL' != \$val) {
                    \$setter = 'set'.ucfirst(\$col);
                    if (in_array(\$col, ['columns', 'filters', 'graphs', 'tableOrder'])) {
                        \$val = Serializer::decode(stripslashes(\$val));
                    }
                    \$report->\$setter(\$val);
                }
            }

            \$manager->persist(\$report);

            \$this->setReference('report-'.\$key, \$report);
        }
        \$manager->flush();
    }

    public function getOrder()
    {
        return 5;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/InstallFixtures/ORM/LoadReportData.php";
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
        return new Source("", "@bundles/InstallBundle/InstallFixtures/ORM/LoadReportData.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\InstallFixtures\\ORM\\LoadReportData.php");
    }
}
