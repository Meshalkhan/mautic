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

/* @bundles/LeadBundle/Event/LeadListEvent.php */
class __TwigTemplate_3a9b6fd86abbe4c8ff6f78191b209b28 extends Template
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
use Mautic\\LeadBundle\\Entity\\LeadList;

class LeadListEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(LeadList \$list, \$isNew = false)
    {
        \$this->entity = \$list;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the List entity.
     *
     * @return LeadList
     */
    public function getList()
    {
        return \$this->entity;
    }

    /**
     * Sets the List entity.
     */
    public function setList(LeadList \$list): void
    {
        \$this->entity = \$list;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadListEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadListEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\LeadListEvent.php");
    }
}
