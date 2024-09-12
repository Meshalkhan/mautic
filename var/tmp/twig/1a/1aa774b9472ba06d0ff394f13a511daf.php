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

/* @bundles/IntegrationsBundle/Event/CompletedSyncIterationEvent.php */
class __TwigTemplate_46670bad788c7a028521ce2eea0baf09 extends Template
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

namespace Mautic\\IntegrationsBundle\\Event;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\OrderResultsDAO;
use Symfony\\Contracts\\EventDispatcher\\Event;

class CompletedSyncIterationEvent extends Event
{
    public function __construct(
        private OrderResultsDAO \$orderResultsDAO,
        private int \$iteration,
        private InputOptionsDAO \$inputOptionsDAO,
        private MappingManualDAO \$mappingManualDAO
    ) {
    }

    public function getIntegration(): string
    {
        return \$this->mappingManualDAO->getIntegration();
    }

    public function getOrderResults(): OrderResultsDAO
    {
        return \$this->orderResultsDAO;
    }

    public function getIteration(): int
    {
        return \$this->iteration;
    }

    public function getInputOptions(): InputOptionsDAO
    {
        return \$this->inputOptionsDAO;
    }

    public function getMappingManual(): MappingManualDAO
    {
        return \$this->mappingManualDAO;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Event/CompletedSyncIterationEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/CompletedSyncIterationEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Event\\CompletedSyncIterationEvent.php");
    }
}
