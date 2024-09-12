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

/* @bundles/LeadBundle/Event/ListPreProcessListEvent.php */
class __TwigTemplate_8daa300e78a5bad54c1f9ea63832e7d2 extends Template
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

use Mautic\\CoreBundle\\Event\\CommonEvent;

class ListPreProcessListEvent extends CommonEvent
{
    protected \$result;

    /**
     * @param bool \$isNew
     */
    public function __construct(
        protected array \$list,
        \$isNew = false
    ) {
        \$this->isNew = \$isNew;
    }

    /**
     * Returns the List entity.
     *
     * @return array
     */
    public function getList()
    {
        return \$this->list;
    }

    /**
     * Sets the lead list entity.
     */
    public function setList(array \$list): void
    {
        \$this->list = \$list;
    }

    /**
     * @return bool
     */
    public function getResult()
    {
        return \$this->result;
    }

    /**
     * @return \$this
     */
    public function setResult(\$result)
    {
        \$this->result = \$result;

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
        return "@bundles/LeadBundle/Event/ListPreProcessListEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ListPreProcessListEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\ListPreProcessListEvent.php");
    }
}
