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

/* @bundles/FormBundle/Collection/FieldCollection.php */
class __TwigTemplate_bb4774163a236c7e5808b3e40e718a29 extends Template
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

use Mautic\\FormBundle\\Crate\\FieldCrate;
use Mautic\\FormBundle\\Exception\\FieldNotFoundException;

/**
 * @extends \\ArrayIterator<int,FieldCrate>
 */
final class FieldCollection extends \\ArrayIterator
{
    /**
     * @return array<string,string>
     */
    public function toChoices(): array
    {
        \$choices = [];

        /** @var FieldCrate \$field */
        foreach (\$this as \$field) {
            \$choices[\$field->getName()] = \$field->getKey();
        }

        return \$choices;
    }

    /**
     * @return FieldCrate|null
     */
    public function getFieldByKey(string \$key, bool \$throwExceptionIfNotFound = true)
    {
        /** @var FieldCrate \$field */
        foreach (\$this as \$field) {
            if (\$key === \$field->getKey()) {
                return \$field;
            }
        }

        if (\$throwExceptionIfNotFound) {
            throw new FieldNotFoundException(\"Field with key {\$key} was not found.\");
        }

        return null;
    }

    /**
     * @param string[] \$keys
     */
    public function removeFieldsWithKeys(array \$keys, string \$keyToKeep = null): FieldCollection
    {
        return new self(
            array_filter(
                \$this->getArrayCopy(),
                fn (FieldCrate \$field): bool => (\$keyToKeep && \$field->getKey() === \$keyToKeep) || !in_array(\$field->getKey(), \$keys, true)
            )
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Collection/FieldCollection.php";
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
        return new Source("", "@bundles/FormBundle/Collection/FieldCollection.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Collection\\FieldCollection.php");
    }
}
