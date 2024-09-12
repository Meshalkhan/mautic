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

/* @bundles/LeadBundle/Event/LeadNoteEvent.php */
class __TwigTemplate_cb12f054a0aa962e237bccce124a6cc5 extends Template
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
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadNote;

class LeadNoteEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(LeadNote \$note, \$isNew = false)
    {
        \$this->entity = \$note;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the LeadNote entity.
     *
     * @return LeadNote
     */
    public function getNote()
    {
        return \$this->entity;
    }

    /**
     * Sets the LeadNote entity.
     */
    public function setLeadNote(LeadNote \$note): void
    {
        \$this->entity = \$note;
    }

    /**
     * Returns the Lead.
     *
     * @return Lead
     */
    public function getLead()
    {
        return \$this->entity->getLead();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadNoteEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadNoteEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\LeadNoteEvent.php");
    }
}
