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

/* @bundles/ReportBundle/Event/ReportScheduleSendEvent.php */
class __TwigTemplate_f8e2768bd67f9b19414571a4731aa9c1 extends Template
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

use Mautic\\ReportBundle\\Entity\\Scheduler;
use Symfony\\Contracts\\EventDispatcher\\Event;

class ReportScheduleSendEvent extends Event
{
    /**
     * @param string \$file
     */
    public function __construct(
        private Scheduler \$scheduler,
        private \$file
    ) {
    }

    /**
     * @return Scheduler
     */
    public function getScheduler()
    {
        return \$this->scheduler;
    }

    /**
     * @return string
     */
    public function getFile()
    {
        return \$this->file;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Event/ReportScheduleSendEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ReportScheduleSendEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Event\\ReportScheduleSendEvent.php");
    }
}
