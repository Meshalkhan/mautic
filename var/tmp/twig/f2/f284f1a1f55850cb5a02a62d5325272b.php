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

/* @bundles/ReportBundle/Event/ColumnCollectEvent.php */
class __TwigTemplate_eaa95a99540dc89878cad3a92f414632 extends Template
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

namespace Mautic\\ReportBundle\\Event;

use Symfony\\Contracts\\EventDispatcher\\Event;

final class ColumnCollectEvent extends Event
{
    /**
     * @var array<string, mixed>
     */
    private array \$columns;

    /**
     * @param array<string, mixed> \$properties
     */
    public function __construct(
        private string \$object,
        private array \$properties = []
    ) {
        \$this->columns = [];
    }

    public function getObject(): string
    {
        return \$this->object;
    }

    /**
     * @return array<string, mixed>
     */
    public function getProperties(): array
    {
        return \$this->properties;
    }

    /**
     * @param array<string, array<string, mixed>> \$column
     */
    public function addColumns(array \$column): void
    {
        \$this->columns = array_merge(\$this->columns, \$column);
    }

    /**
     * @return array<string, array<string, mixed>>
     */
    public function getColumns(): array
    {
        return \$this->columns;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Event/ColumnCollectEvent.php";
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
        return new Source("", "@bundles/ReportBundle/Event/ColumnCollectEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Event\\ColumnCollectEvent.php");
    }
}
