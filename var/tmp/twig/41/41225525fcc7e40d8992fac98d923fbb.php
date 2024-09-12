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

/* @bundles/IntegrationsBundle/Event/KeysSaveEvent.php */
class __TwigTemplate_d746d1a8ffd65614a95efb72c71e1c0c extends Template
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

use Mautic\\PluginBundle\\Entity\\Integration;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class KeysSaveEvent extends Event
{
    /**
     * @var array<string,string>
     */
    private array \$newKeys;

    /**
     * @param array<string,string> \$oldKeys
     */
    public function __construct(private Integration \$integrationConfiguration, private array \$oldKeys)
    {
        \$this->newKeys = \$integrationConfiguration->getApiKeys();
    }

    public function getIntegrationConfiguration(): Integration
    {
        return \$this->integrationConfiguration;
    }

    /**
     * @return array<string,string>
     */
    public function getOldKeys(): array
    {
        return \$this->oldKeys;
    }

    /**
     * @return array<string,string>
     */
    public function getNewKeys(): array
    {
        return \$this->newKeys;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Event/KeysSaveEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/KeysSaveEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Event\\KeysSaveEvent.php");
    }
}
