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

/* @bundles/LeadBundle/Event/CompanyEvent.php */
class __TwigTemplate_c43fe734e1f8fa7e37c93ae44db9821d extends Template
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
use Mautic\\LeadBundle\\Entity\\Company;

class CompanyEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     * @param int  \$score
     */
    public function __construct(
        Company \$company,
        \$isNew = false,
        protected \$score = 0
    ) {
        \$this->entity = \$company;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Company entity.
     *
     * @return Company
     */
    public function getCompany()
    {
        return \$this->entity;
    }

    /**
     * Sets the Company entity.
     */
    public function setCompany(Company \$company): void
    {
        \$this->entity = \$company;
    }

    public function changeScore(\$score): void
    {
        \$this->score = \$score;
    }

    public function getScore()
    {
        return \$this->score;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/CompanyEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/CompanyEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\CompanyEvent.php");
    }
}
