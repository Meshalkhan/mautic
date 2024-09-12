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

/* @bundles/CoreBundle/Entity/OptimisticLockInterface.php */
class __TwigTemplate_e428290d82506d61f3ffe6edbefa4298 extends Template
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

namespace Mautic\\CoreBundle\\Entity;

/**
 * Optimistic locking is applied for entities that implements this interface.
 */
interface OptimisticLockInterface
{
    /**
     * Returns the current version of the entity.
     */
    public function getVersion(): int;

    /**
     * Sets a new version of the entity and resets the mark for incrementing the version.
     */
    public function setVersion(int \$version): void;

    /**
     * Returns true if the entity is marked for incrementing the version in a subsequent flush call.
     */
    public function isMarkedForVersionIncrement(): bool;

    /**
     * Mark the entity for incrementing the version in a subsequent flush call.
     */
    public function markForVersionIncrement(): void;

    /**
     * Returns the name of the version field.
     */
    public function getVersionField(): string;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/OptimisticLockInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/OptimisticLockInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Entity\\OptimisticLockInterface.php");
    }
}
