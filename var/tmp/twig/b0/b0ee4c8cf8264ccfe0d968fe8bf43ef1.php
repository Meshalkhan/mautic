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

/* @bundles/FormBundle/Collection/ObjectCollection.php */
class __TwigTemplate_4b4058cbfe93b1b18b0de1453977d193 extends Template
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

namespace Mautic\\FormBundle\\Collection;

use Mautic\\FormBundle\\Crate\\ObjectCrate;

/**
 * @extends \\ArrayIterator<int,ObjectCrate>
 */
final class ObjectCollection extends \\ArrayIterator
{
    /**
     * @return array<string,string>
     */
    public function toChoices(): array
    {
        \$choices = [];

        /** @var ObjectCrate \$object */
        foreach (\$this as \$object) {
            \$choices[\$object->getName()] = \$object->getKey();
        }

        return \$choices;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Collection/ObjectCollection.php";
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
        return new Source("", "@bundles/FormBundle/Collection/ObjectCollection.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Collection\\ObjectCollection.php");
    }
}
