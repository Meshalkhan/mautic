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

/* @bundles/IntegrationsBundle/Event/SyncEvent.php */
class __TwigTemplate_f629cac2fd8ff2d979fd32be58b5600c extends Template
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

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Symfony\\Contracts\\EventDispatcher\\Event;

class SyncEvent extends Event
{
    public function __construct(
        private InputOptionsDAO \$inputOptionsDAO
    ) {
    }

    public function getIntegrationName(): string
    {
        return \$this->inputOptionsDAO->getIntegration();
    }

    public function isIntegration(string \$integrationName): bool
    {
        return \$this->getIntegrationName() === \$integrationName;
    }

    public function getFromDateTime(): ?\\DateTimeInterface
    {
        return \$this->inputOptionsDAO->getStartDateTime();
    }

    public function getToDateTime(): ?\\DateTimeInterface
    {
        return \$this->inputOptionsDAO->getEndDateTime();
    }

    public function getInputOptions(): InputOptionsDAO
    {
        return \$this->inputOptionsDAO;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Event/SyncEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/SyncEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Event\\SyncEvent.php");
    }
}
