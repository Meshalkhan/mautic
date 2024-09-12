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

/* @bundles/CoreBundle/Helper/Tree/JsPlumbFormatter.php */
class __TwigTemplate_18d7185a9c0efbaef7c4883692e5eda0 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Tree;

/**
 * Will generate this structure:.
 *
 * [
 *  \"levels\":[
 *    \"nodes\":[
 *      { \"id\":\"1\", \"name\":\"foo\" },
 *      { \"id\":\"2\", \"name\":\"bar\" }
 *    ],
 *  ],
 *  \"edges\":[
 *    { \"source\":\"1\", \"target\":\"2\" }
 *  ]
 *];
 */
class JsPlumbFormatter implements NodeFormatterInterface
{
    /**
     * @return mixed[]
     */
    public function format(NodeInterface \$node): array
    {
        \$iterator = new \\RecursiveIteratorIterator(\$node, \\RecursiveIteratorIterator::SELF_FIRST);
        \$data     = \$this->addNodeAndEdges(\$node, ['levels' => [], 'edges' => []], 0);

        foreach (\$iterator as \$childNode) {
            \$data = \$this->addNodeAndEdges(\$childNode, \$data, \$iterator->getDepth() + 1);
        }

        return \$data;
    }

    /**
     * @param mixed[] \$data
     *
     * @return mixed[]
     */
    private function addNodeAndEdges(NodeInterface \$parentNode, array \$data, int \$depth): array
    {
        \$parentParentId = \$parentNode->getParent() ? \$parentNode->getParent()->getValue() : 0;
        \$id             = \"{\$parentParentId}-{\$parentNode->getValue()}\";
        \$node           = [
            'id'   => \$id,
            'name' => \$parentNode->getParam('name'),
            'link' => \$parentNode->getParam('link'),
        ];

        if (\$message = \$parentNode->getParam('message')) {
            \$node['message'] = \$message;
        }

        \$data['levels'][\$depth]['nodes'][] = \$node;

        foreach (\$parentNode->getChildrenArray() as \$childNode) {
            \$data['edges'][] = ['source' => \$id, 'target' => \"{\$parentNode->getValue()}-{\$childNode->getValue()}\"];
        }

        return \$data;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Tree/JsPlumbFormatter.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Tree/JsPlumbFormatter.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\Tree\\JsPlumbFormatter.php");
    }
}
