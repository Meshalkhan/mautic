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

/* @bundles/FormBundle/Collector/MappedObjectCollector.php */
class __TwigTemplate_79f9ebec0ef0bbae870fce401654e4c0 extends Template
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

namespace Mautic\\FormBundle\\Collector;

use Mautic\\FormBundle\\Collection\\MappedObjectCollection;

final class MappedObjectCollector implements MappedObjectCollectorInterface
{
    public function __construct(
        private FieldCollectorInterface \$fieldCollector
    ) {
    }

    public function buildCollection(string ...\$objects): MappedObjectCollection
    {
        \$mappedObjectCollection = new MappedObjectCollection();

        foreach (\$objects as \$object) {
            if (\$object) {
                \$mappedObjectCollection->offsetSet(\$object, \$this->fieldCollector->getFields(\$object));
            }
        }

        return \$mappedObjectCollection;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Collector/MappedObjectCollector.php";
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
        return new Source("", "@bundles/FormBundle/Collector/MappedObjectCollector.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Collector\\MappedObjectCollector.php");
    }
}
