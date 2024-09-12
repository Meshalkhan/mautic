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

/* @bundles/CoreBundle/Helper/Tree/NodeInterface.php */
class __TwigTemplate_bf18e371964140f0baa57e168db72ffb extends Template
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
 * @extends \\RecursiveIterator<int,NodeInterface>
 */
interface NodeInterface extends \\RecursiveIterator
{
    /**
     * @return mixed
     */
    public function getValue();

    public function setParent(NodeInterface \$parent): void;

    public function getParent(): ?NodeInterface;

    public function addChild(NodeInterface \$child): void;

    /**
     * @return NodeInterface[]
     */
    public function getChildrenArray(): array;

    /**
     * @param mixed \$value
     */
    public function addParam(string \$key, \$value): void;

    /**
     * @param mixed \$default
     *
     * @return mixed
     */
    public function getParam(string \$key, \$default = null);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Tree/NodeInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Tree/NodeInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\Tree\\NodeInterface.php");
    }
}
