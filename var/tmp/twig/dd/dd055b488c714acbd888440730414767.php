<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/MarketplaceBundle/Collection/MaintainerCollection.php */
class __TwigTemplate_61f02e4d6e2c8b2ac0dcc8a3f2e02cc5 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

declare(strict_types=1);

namespace Mautic\\MarketplaceBundle\\Collection;

use Mautic\\MarketplaceBundle\\DTO\\Maintainer;
use Mautic\\MarketplaceBundle\\Exception\\RecordNotFoundException;

class MaintainerCollection implements \\Iterator, \\Countable, \\ArrayAccess
{
    /**
     * @var Maintainer[]
     */
    private array \$records;

    private int \$position = 0;

    /**
     * @param Maintainer[] \$records
     */
    public function __construct(array \$records = [])
    {
        \$this->records = array_values(\$records);
    }

    public static function fromArray(array \$array): MaintainerCollection
    {
        return new self(
            array_map(
                fn (array \$record) => Maintainer::fromArray(\$record),
                \$array
            )
        );
    }

    public function current(): Maintainer
    {
        return \$this->records[\$this->position];
    }

    public function next(): void
    {
        ++\$this->position;
    }

    public function key(): mixed
    {
        return \$this->position;
    }

    public function valid(): bool
    {
        return isset(\$this->records[\$this->position]);
    }

    public function rewind(): void
    {
        \$this->position = 0;
    }

    public function count(): int
    {
        return count(\$this->records);
    }

    public function offsetSet(\$offset, \$value): void
    {
        if (is_null(\$offset)) {
            \$this->records[] = \$value;
        } else {
            \$this->records[\$offset] = \$value;
        }
    }

    public function offsetExists(\$offset): bool
    {
        return isset(\$this->records[\$offset]);
    }

    public function offsetUnset(\$offset): void
    {
        unset(\$this->records[\$offset]);
    }

    public function offsetGet(\$offset): Maintainer
    {
        if (isset(\$this->records[\$offset])) {
            return \$this->records[\$offset];
        }

        throw new RecordNotFoundException(\"Maintainer on offset {\$offset} was not found\");
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/MarketplaceBundle/Collection/MaintainerCollection.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/MarketplaceBundle/Collection/MaintainerCollection.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\Collection\\MaintainerCollection.php");
    }
}
