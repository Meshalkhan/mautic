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

/* @bundles/LeadBundle/Event/ContactExportSchedulerEvent.php */
class __TwigTemplate_a2d53f6788b11b21fb56945b0ba7e417 extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Event;

use Mautic\\LeadBundle\\Entity\\ContactExportScheduler;
use Symfony\\Contracts\\EventDispatcher\\Event;

class ContactExportSchedulerEvent extends Event
{
    private string \$filePath;

    public function __construct(
        private ContactExportScheduler \$contactExportScheduler
    ) {
    }

    public function getContactExportScheduler(): ContactExportScheduler
    {
        return \$this->contactExportScheduler;
    }

    public function getFilePath(): string
    {
        return \$this->filePath;
    }

    public function setFilePath(string \$filePath): void
    {
        \$this->filePath = \$filePath;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/ContactExportSchedulerEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ContactExportSchedulerEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\ContactExportSchedulerEvent.php");
    }
}
