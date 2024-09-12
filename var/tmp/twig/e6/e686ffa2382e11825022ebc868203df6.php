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

/* @bundles/StatsBundle/Aggregate/Collection/Stats/DayStat.php */
class __TwigTemplate_e7ad4f28e5a8814a9758c273b3d978ea extends Template
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

namespace Mautic\\StatsBundle\\Aggregate\\Collection\\Stats;

class DayStat implements StatInterface
{
    /**
     * @var HourStat[]
     */
    private array \$stats = [];

    /**
     * @param string \$day \"2019-11-07\" format
     */
    public function __construct(
        private \$day
    ) {
    }

    /**
     * @param int \$hour
     *
     * @return HourStat
     *
     * @throws \\Exception
     */
    public function getHour(\$hour)
    {
        \$key = (new \\DateTime(\"{\$this->day} \$hour:00:00\"))->format('Y-m-d H');

        if (!isset(\$this->stats[\$key])) {
            \$this->stats[\$key] = new HourStat(\$key);
        }

        return \$this->stats[\$key];
    }

    /**
     * @return HourStat[]
     */
    public function getStats()
    {
        return \$this->stats;
    }

    /**
     * @return int
     */
    public function getSum()
    {
        \$sum = 0;
        foreach (\$this->stats as \$stat) {
            \$sum += \$stat->getCount();
        }

        return \$sum;
    }

    public function getCount(): int
    {
        return count(\$this->stats);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Aggregate/Collection/Stats/DayStat.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/Stats/DayStat.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StatsBundle\\Aggregate\\Collection\\Stats\\DayStat.php");
    }
}
