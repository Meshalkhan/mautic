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

/* @bundles/ReportBundle/Event/AbstractReportEvent.php */
class __TwigTemplate_33ffa97fb6e60c533b8dacee37ee7de6 extends Template
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

namespace Mautic\\ReportBundle\\Event;

use Mautic\\ReportBundle\\Entity\\Report;
use Symfony\\Contracts\\EventDispatcher\\Event;

class AbstractReportEvent extends Event
{
    protected ?string \$context = null;

    /**
     * Report entity.
     *
     * @var Report
     */
    protected \$report;

    /**
     * @return Report
     */
    public function getReport()
    {
        return \$this->report;
    }

    public function getContext(): ?string
    {
        return \$this->context;
    }

    /**
     * @return bool
     */
    public function checkContext(\$context)
    {
        if (empty(\$this->context)) {
            return true;
        }

        if (is_array(\$context)) {
            \$res = array_filter(\$context, fn (\$elem) => 0 === stripos(\$this->context, (string) \$elem));

            return count(\$res) > 0;
        } elseif (\$this->context == \$context) {
            return true;
        } elseif (0 === stripos(\$this->context, (string) \$context)) {
            return true;
        } else {
            return false;
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Event/AbstractReportEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/AbstractReportEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Event\\AbstractReportEvent.php");
    }
}
