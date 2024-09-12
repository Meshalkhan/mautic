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

/* @bundles/AssetBundle/Event/RemoteAssetBrowseEvent.php */
class __TwigTemplate_70e6bda06f4e9d70a9fba3e6af5be5ed extends Template
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

namespace Mautic\\AssetBundle\\Event;

use Gaufrette\\Adapter;
use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\PluginBundle\\Integration\\UnifiedIntegrationInterface;

class RemoteAssetBrowseEvent extends CommonEvent
{
    private ?Adapter \$adapter = null;

    public function __construct(
        private UnifiedIntegrationInterface \$integration
    ) {
    }

    public function getAdapter(): ?Adapter
    {
        return \$this->adapter;
    }

    public function getIntegration(): UnifiedIntegrationInterface
    {
        return \$this->integration;
    }

    public function setAdapter(Adapter \$adapter): void
    {
        \$this->adapter = \$adapter;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Event/RemoteAssetBrowseEvent.php";
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
        return new Source("", "@bundles/AssetBundle/Event/RemoteAssetBrowseEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Event\\RemoteAssetBrowseEvent.php");
    }
}
