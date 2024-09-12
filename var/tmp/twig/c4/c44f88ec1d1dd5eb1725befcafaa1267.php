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

/* @bundles/LeadBundle/Event/LeadChangeCompanyEvent.php */
class __TwigTemplate_33d9267d91549a27d4efde3ccc727c47 extends Template
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

use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

class LeadChangeCompanyEvent extends Event
{
    private ?Lead \$lead = null;

    /**
     * @var Lead[]|null
     */
    private ?array \$leads = null;

    /**
     * @param Lead|Lead[] \$leads
     */
    public function __construct(
        Lead|array \$leads,
        private Company \$company,
        private bool \$added = true
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
     * Returns batch array of leads.
     *
     * @return array
     */
    public function getLeads()
    {
        return \$this->leads;
    }

    /**
     * @return Company/Company
     */
    public function getCompany()
    {
        return \$this->company;
    }

    public function wasAdded(): bool
    {
        return \$this->added;
    }

    public function wasRemoved(): bool
    {
        return !\$this->added;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadChangeCompanyEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadChangeCompanyEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\LeadChangeCompanyEvent.php");
    }
}
