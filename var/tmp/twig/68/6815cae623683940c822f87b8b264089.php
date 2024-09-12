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

/* @bundles/ApiBundle/Serializer/Exclusion/ParentChildrenExclusionStrategy.php */
class __TwigTemplate_8fec9469f21663d0749edf2f6430285a extends Template
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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ApiBundle/Serializer/Exclusion/ParentChildrenExclusionStrategy.php";
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
        return new Source("", "@bundles/ApiBundle/Serializer/Exclusion/ParentChildrenExclusionStrategy.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Serializer\\Exclusion\\ParentChildrenExclusionStrategy.php");
    }
}
