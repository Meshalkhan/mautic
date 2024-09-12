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

/* @bundles/StatsBundle/Aggregate/Collection/Stats/HourStat.php */
class __TwigTemplate_a24dcca0f952d3fd26c1ac846e7db0ff extends Template
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

class HourStat
{
    private int \$count = 0;

    /**
     * @param string \$hour \"2018-12-07 12\" format
     */
    public function __construct(
        private \$hour
    ) {
    }

    /**
     * @return string
     */
    public function getHour()
    {
        return \$this->hour;
    }

    /**
     * @param int \$count
     */
    public function setCount(\$count): void
    {
        \$this->count = (int) \$count;
    }

    public function getCount(): int
    {
        return \$this->count;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StatsBundle/Aggregate/Collection/Stats/HourStat.php";
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
        return new Source("", "@bundles/StatsBundle/Aggregate/Collection/Stats/HourStat.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StatsBundle\\Aggregate\\Collection\\Stats\\HourStat.php");
    }
}
