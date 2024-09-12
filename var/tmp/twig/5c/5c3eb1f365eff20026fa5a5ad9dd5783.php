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

/* @bundles/IntegrationsBundle/Event/InternalObjectOwnerEvent.php */
class __TwigTemplate_e06a6257461a6cd1b50c831d4f3243c1 extends Template
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

use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\ObjectInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

class InternalObjectOwnerEvent extends Event
{
    /**
     * Format: [object_id => owner_id].
     */
    private array \$owners = [];

    /**
     * @param int[] \$objectIds
     */
    public function __construct(
        private ObjectInterface \$object,
        private array \$objectIds
    ) {
    }

    public function getObject(): ObjectInterface
    {
        return \$this->object;
    }

    /**
     * @return int[]
     */
    public function getObjectIds(): array
    {
        return \$this->objectIds;
    }

    public function getOwners(): array
    {
        return \$this->owners;
    }

    public function setOwners(array \$owners): void
    {
        \$this->owners = \$owners;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Event/InternalObjectOwnerEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/InternalObjectOwnerEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Event\\InternalObjectOwnerEvent.php");
    }
}
