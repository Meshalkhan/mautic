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

/* @bundles/LeadBundle/Event/LeadChangeEvent.php */
class __TwigTemplate_5e43ff7a0b44a2247abdfb55a1e516f1 extends Template
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
use Symfony\\Contracts\\EventDispatcher\\Event;

class LeadChangeEvent extends Event
{
    public function __construct(
        private Lead \$oldLead,
        private \$oldTrackingId,
        private Lead \$newLead,
        private \$newTrackingId
    ) {
    }

    /**
     * @return Lead
     */
    public function getOldLead()
    {
        return \$this->oldLead;
    }

    /**
     * @return mixed
     */
    public function getOldTrackingId()
    {
        return \$this->oldTrackingId;
    }

    /**
     * @return Lead
     */
    public function getNewLead()
    {
        return \$this->newLead;
    }

    /**
     * @return mixed
     */
    public function getNewTrackingId()
    {
        return \$this->newTrackingId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadChangeEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadChangeEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\LeadChangeEvent.php");
    }
}
