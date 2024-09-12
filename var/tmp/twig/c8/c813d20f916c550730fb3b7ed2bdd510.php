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

/* @bundles/CoreBundle/Entity/FiltersEntityTrait.php */
class __TwigTemplate_a6e5f8889af3af32bb12a4d008b080ca extends Template
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

namespace Mautic\\CoreBundle\\Entity;

use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * Trait FiltersEntityTrait.
 */
trait FiltersEntityTrait
{
    /**
     * @var array
     */
    private \$filters = [];

    protected static function addFiltersMetadata(ClassMetadataBuilder \$builder)
    {
        \$builder->createField('filters', 'array')
                ->columnName('filters')
                ->nullable()
                ->build();
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return \$this->filters ?: [];
    }

    /**
     * @param array \$filters
     *
     * @return \$this
     */
    public function setFilters(\$filters)
    {
        \$this->isChanged('filters', \$filters);
        \$this->filters = \$filters;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/FiltersEntityTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/FiltersEntityTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Entity\\FiltersEntityTrait.php");
    }
}
