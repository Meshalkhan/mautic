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

/* @bundles/IntegrationsBundle/Event/InternalObjectFindByIdEvent.php */
class __TwigTemplate_742b61a22f89069a94acd25a9623b1be extends Template
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

final class InternalObjectFindByIdEvent extends Event
{
    private ?int \$id = null;

    private ?object \$entity = null;

    public function __construct(
        private ObjectInterface \$object
    ) {
    }

    public function getObject(): ObjectInterface
    {
        return \$this->object;
    }

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function setId(int \$id): void
    {
        \$this->id = \$id;
    }

    public function getEntity(): ?object
    {
        return \$this->entity;
    }

    public function setEntity(object \$entity): void
    {
        \$this->entity = \$entity;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Event/InternalObjectFindByIdEvent.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Event/InternalObjectFindByIdEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Event\\InternalObjectFindByIdEvent.php");
    }
}
