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

/* @bundles/CoreBundle/Doctrine/PreUpAssertionMigration.php */
class __TwigTemplate_2317adc2e597eb7c1352be245ba4e466 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\Migrations\\Exception\\SkipMigration;

abstract class PreUpAssertionMigration extends AbstractMauticMigration
{
    /**
     * @var array<int, array<string>>
     */
    private array \$skipAssertions = [];

    /**
     * Implement this method to add skip assertions via `PreUpAssertionMigration::skipAssertion()`.
     */
    abstract protected function preUpAssertions(): void;

    /**
     * A template method that addresses partially executed migrations.
     * It skips the migration only if all of skip assertions return true.
     */
    final public function preUp(Schema \$schema): void
    {
        \$this->preUpAssertions();

        if (!\$this->skipAssertions) {
            // there are no assertions to run
            return;
        }

        foreach (\$this->skipAssertions as \$skipAssertion) {
            if (\$skipAssertion['assertion'](\$schema)) {
                \$this->write(sprintf('<comment>%s</comment>', \$skipAssertion['message']));
            } else {
                // the migration should not be skipped once there is a failing skip assertion
                return;
            }
        }

        throw new SkipMigration('Schema includes this migration');
    }

    final protected function skipAssertion(callable \$assertion, string \$message): void
    {
        \$this->skipAssertions[] = [
            'assertion' => \$assertion,
            'message'   => \$message,
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/PreUpAssertionMigration.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/PreUpAssertionMigration.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\PreUpAssertionMigration.php");
    }
}
