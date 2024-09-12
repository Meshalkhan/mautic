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

/* @bundles/ApiBundle/Serializer/Exclusion/FieldInclusionStrategy.php */
class __TwigTemplate_722eec041ddc3e9404d6c47d1c040b59 extends Template
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

namespace Mautic\\ApiBundle\\Serializer\\Exclusion;

use JMS\\Serializer\\Context;
use JMS\\Serializer\\Exclusion\\ExclusionStrategyInterface;
use JMS\\Serializer\\Metadata\\ClassMetadata;
use JMS\\Serializer\\Metadata\\PropertyMetadata;

/**
 * Include specific fields at a specific level.
 */
class FieldInclusionStrategy implements ExclusionStrategyInterface
{
    private int \$level;

    /**
     * @param int \$level
     */
    public function __construct(
        private array \$fields,
        \$level = 3,
        private \$path = null
    ) {
        \$this->level  = (int) \$level;
    }

    public function shouldSkipClass(ClassMetadata \$metadata, Context \$navigatorContext): bool
    {
        return false;
    }

    public function shouldSkipProperty(PropertyMetadata \$property, Context \$navigatorContext): bool
    {
        if (\$this->path) {
            \$path = implode('.', \$navigatorContext->getCurrentPath());
            if (\$path !== \$this->path) {
                return false;
            }
        }

        \$name = \$property->serializedName ?: \$property->name;
        if (in_array(\$name, \$this->fields)) {
            return false;
        }

        // children of children or parents of chidlren will be more than 3 levels deep
        if (\$navigatorContext->getDepth() <= \$this->level) {
            return false;
        }

        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Serializer/Exclusion/FieldInclusionStrategy.php";
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
        return new Source("", "@bundles/ApiBundle/Serializer/Exclusion/FieldInclusionStrategy.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Serializer\\Exclusion\\FieldInclusionStrategy.php");
    }
}
