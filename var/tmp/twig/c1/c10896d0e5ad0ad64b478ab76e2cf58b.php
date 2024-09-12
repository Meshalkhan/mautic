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

/* @bundles/ReportBundle/Scheduler/Option/ExportOption.php */
class __TwigTemplate_c2634053b5d451f9fc3f19baecdf01d8 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Option;

class ExportOption
{
    private int \$reportId;

    /**
     * @param int|null \$reportId
     */
    public function __construct(\$reportId)
    {
        if (!is_null(\$reportId) && !is_numeric(\$reportId)) {
            throw new \\InvalidArgumentException();
        }

        \$this->reportId = (int) \$reportId;
    }

    public function getReportId(): int
    {
        return \$this->reportId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Option/ExportOption.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Option/ExportOption.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Scheduler\\Option\\ExportOption.php");
    }
}
