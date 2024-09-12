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

/* @bundles/MarketplaceBundle/Collection/MaintainerCollection.php */
class __TwigTemplate_86bb73c53eadbb7d8473dbba1ad23a9a extends Template
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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Collection/MaintainerCollection.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Collection/MaintainerCollection.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\Collection\\MaintainerCollection.php");
    }
}
