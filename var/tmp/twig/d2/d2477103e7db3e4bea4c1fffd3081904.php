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

/* @bundles/LeadBundle/Event/CategoryChangeEvent.php */
class __TwigTemplate_c78d231fcf1853e37b5214b4a516544c extends Template
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

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

class CategoryChangeEvent extends Event
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
        private Category \$category,
        private bool \$added = true
    ) {
        if (is_array(\$leads)) {
            \$this->leads = \$leads;
        } else {
            \$this->lead = \$leads;
        }
    }

    /**
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
     * @return Category
     */
    public function getCategory()
    {
        return \$this->category;
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
        return "@bundles/LeadBundle/Event/CategoryChangeEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/CategoryChangeEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\CategoryChangeEvent.php");
    }
}
