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

/* @bundles/LeadBundle/Event/ListChangeEvent.php */
class __TwigTemplate_2b5c16cfa5baeb9cec6c01022472d587 extends Template
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

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Symfony\\Contracts\\EventDispatcher\\Event;

class ListChangeEvent extends Event
{
    private ?Lead \$lead;

    /**
     * @var Lead[]|null
     */
    private ?array \$leads = null;

    /**
     * @param Lead[]|Lead \$leads
     */
    public function __construct(
        Lead|array \$leads,
        private LeadList \$list,
        private bool \$added = true,
        private ?\\DateTime \$date = null
    ) {
        if (is_array(\$leads)) {
            \$this->leads = \$leads;
        } else {
            \$this->lead = \$leads;
        }
    }

    /**
     * Returns the Lead entity.
     *
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @return LeadList
     */
    public function getList()
    {
        return \$this->list;
    }

    /**
     * Returns batch array of leads.
     *
     * @return array|null
     */
    public function getLeads()
    {
        return \$this->leads;
    }

    public function wasAdded(): bool
    {
        return \$this->added;
    }

    public function wasRemoved(): bool
    {
        return !\$this->added;
    }

    public function getDate(): ?\\DateTime
    {
        return \$this->date;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/ListChangeEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ListChangeEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\ListChangeEvent.php");
    }
}
