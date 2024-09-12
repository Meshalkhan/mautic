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

/* @bundles/EmailBundle/Stats/StatHelperContainer.php */
class __TwigTemplate_ce67ae370e7748f773cf0a8183b0dcdb extends Template
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

namespace Mautic\\EmailBundle\\Stats;

use Mautic\\EmailBundle\\Stats\\Exception\\InvalidStatHelperException;
use Mautic\\EmailBundle\\Stats\\Helper\\StatHelperInterface;

class StatHelperContainer
{
    /**
     * @var array<string, StatHelperInterface>
     */
    private array \$helpers = [];

    public function addHelper(StatHelperInterface \$helper): void
    {
        \$this->helpers[\$helper->getName()] = \$helper;
    }

    /**
     * @throws InvalidStatHelperException
     */
    public function getHelper(\$name): StatHelperInterface
    {
        if (!isset(\$this->helpers[\$name])) {
            throw new InvalidStatHelperException(\$name.' has not been registered');
        }

        return \$this->helpers[\$name];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Stats/StatHelperContainer.php";
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
        return new Source("", "@bundles/EmailBundle/Stats/StatHelperContainer.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Stats\\StatHelperContainer.php");
    }
}
