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

/* @bundles/ApiBundle/Serializer/Exclusion/ParentChildrenExclusionStrategy.php */
class __TwigTemplate_a5afba260b12a1edf647d2d7e36418d0 extends Template
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

/**
 * Only include the first level of a children/parent of an entity that relates to itself.
 */
class ParentChildrenExclusionStrategy extends FieldExclusionStrategy
{
    /**
     * @param int \$level
     */
    public function __construct(\$level = 3)
    {
        parent::__construct(
            [
                'parent',
                'children',
            ],
            \$level
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
        return "@bundles/ApiBundle/Serializer/Exclusion/ParentChildrenExclusionStrategy.php";
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
        return new Source("", "@bundles/ApiBundle/Serializer/Exclusion/ParentChildrenExclusionStrategy.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Serializer\\Exclusion\\ParentChildrenExclusionStrategy.php");
    }
}
