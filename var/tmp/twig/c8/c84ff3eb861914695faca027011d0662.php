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

/* @bundles/CoreBundle/Entity/OptimisticLockTrait.php */
class __TwigTemplate_733b9d16e29ee00e7d701a7d94a3f4b8 extends Template
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

use Doctrine\\DBAL\\Types\\Types;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * This trait provides default implementation of OptimisticLockInterface.
 */
trait OptimisticLockTrait
{
    private int \$version = 1;
    private ?int \$currentVersion;
    private bool \$incrementVersion = false;

    public function getVersion(): int
    {
        return \$this->currentVersion ?? \$this->version;
    }

    public function setVersion(int \$version): void
    {
        \$this->currentVersion   = \$version;
        \$this->incrementVersion = false;
    }

    public function isMarkedForVersionIncrement(): bool
    {
        return \$this->incrementVersion;
    }

    public function markForVersionIncrement(): void
    {
        \$this->incrementVersion = true;
    }

    public function getVersionField(): string
    {
        return 'version';
    }

    private static function addVersionField(ClassMetadataBuilder \$builder): void
    {
        \$builder->createField('version', Types::INTEGER)
            ->columnName('version')
            ->option('default', 1)
            ->option('unsigned', true)
            ->build();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/OptimisticLockTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/OptimisticLockTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Entity\\OptimisticLockTrait.php");
    }
}
