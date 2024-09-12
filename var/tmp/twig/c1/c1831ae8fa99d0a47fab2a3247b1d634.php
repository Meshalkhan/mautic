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

/* @bundles/CategoryBundle/Event/CategoryTypesEvent.php */
class __TwigTemplate_b4c27f21f1fe099fc34d77bff21393b6 extends Template
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

namespace Mautic\\CategoryBundle\\Event;

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Event\\CommonEvent;

class CategoryTypesEvent extends CommonEvent
{
    /**
     * @var array
     */
    protected \$types = [];

    /**
     * Returns the array of Category Types.
     *
     * @return array
     */
    public function getCategoryTypes()
    {
        if (!array_key_exists('global', \$this->types)) {
            // Alphabetize once
            asort(\$this->types);

            \$this->types = array_merge(
                ['global' => 'mautic.category.global'],
                \$this->types
            );
        }

        return \$this->types;
    }

    /**
     * Adds the category type and label.
     *
     * @param string \$type
     * @param string \$label
     */
    public function addCategoryType(\$type, \$label = null): void
    {
        if (is_int(\$type)) {
            \$type = \$label;
        }

        if (null === \$label) {
            \$label = 'mautic.'.\$type.'.'.\$type;
        }

        \$this->types[\$type] = \$label;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Event/CategoryTypesEvent.php";
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
        return new Source("", "@bundles/CategoryBundle/Event/CategoryTypesEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CategoryBundle\\Event\\CategoryTypesEvent.php");
    }
}
