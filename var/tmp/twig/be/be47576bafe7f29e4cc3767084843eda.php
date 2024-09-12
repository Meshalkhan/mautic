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

/* @bundles/LeadBundle/Event/LeadBuildSearchEvent.php */
class __TwigTemplate_fad1776e717a45190c61bc7b5308d722 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Doctrine\\DBAL\\Query\\QueryBuilder;
use Mautic\\CoreBundle\\Event\\CommonEvent;

class LeadBuildSearchEvent extends CommonEvent
{
    protected string \$subQuery;

    protected bool \$isSearchDone;

    protected bool \$returnParameters;

    protected bool \$strict;

    protected array \$parameters;

    /**
     * @param string \$string
     * @param string \$command
     * @param string \$alias
     */
    public function __construct(
        protected \$string,
        protected \$command,
        protected \$alias,
        protected bool \$negate,
        protected QueryBuilder \$queryBuilder
    ) {
        \$this->subQuery         = '';
        \$this->isSearchDone     = false;
        \$this->strict           = false;
        \$this->returnParameters = false;
        \$this->parameters       = [];
    }

    /**
     * @return string
     */
    public function getString()
    {
        return \$this->string;
    }

    /**
     * @return string
     */
    public function getCommand()
    {
        return \$this->command;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return \$this->alias;
    }

    public function isNegation(): bool
    {
        return \$this->negate;
    }

    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        return \$this->queryBuilder;
    }

    /**
     * @param bool \$status
     */
    public function setSearchStatus(\$status): void
    {
        \$this->isSearchDone = \$status;
    }

    /**
     * @param string \$query
     */
    public function setSubQuery(\$query): void
    {
        \$this->subQuery = \$query;

        \$this->setSearchStatus(true);
    }

    public function isSearchDone(): bool
    {
        return \$this->isSearchDone;
    }

    public function getSubQuery(): string
    {
        return \$this->subQuery;
    }

    /**
     * @param array \$string
     */
    public function setString(\$string): void
    {
        \$this->string = \$string;
    }

    public function getStrict(): bool
    {
        return \$this->strict;
    }

    /**
     * @param bool \$val
     */
    public function setStrict(\$val): void
    {
        \$this->strict = \$val;
    }

    public function getReturnParameters(): bool
    {
        return \$this->returnParameters;
    }

    /**
     * @param bool \$val
     */
    public function setReturnParameters(\$val): void
    {
        \$this->returnParameters = \$val;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return \$this->parameters;
    }

    /**
     * @param array \$val
     */
    public function setParameters(\$val): void
    {
        \$this->parameters = \$val;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadBuildSearchEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadBuildSearchEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\LeadBuildSearchEvent.php");
    }
}
