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

/* @bundles/LeadBundle/Entity/StagesChangeLog.php */
class __TwigTemplate_cfc67360f588f0ada76f8fb6ff264d31 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\StageBundle\\Entity\\Stage;

class StagesChangeLog
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var Lead
     */
    private \$lead;

    /**
     * @var Stage|null
     */
    private \$stage;

    /**
     * @var string
     */
    private \$eventName;

    /**
     * @var string
     */
    private \$actionName;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateAdded;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('lead_stages_change_log')
            ->setCustomRepositoryClass(StagesChangeLogRepository::class);

        \$builder->addId();

        \$builder->addLead(false, 'CASCADE', false, 'stageChangeLog');

        \$builder->createField('eventName', 'string')
            ->columnName('event_name')
            ->build();

        \$builder->createField('actionName', 'string')
            ->columnName('action_name')
            ->build();

        \$builder->createManyToOne('stage', Stage::class)
            ->inversedBy('log')
            ->addJoinColumn('stage_id', 'id', true, false, 'CASCADE')
            ->build();

        \$builder->addDateAdded();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set eventName.
     *
     * @param string \$eventName
     *
     * @return StagesChangeLog
     */
    public function setEventName(\$eventName)
    {
        \$this->eventName = \$eventName;

        return \$this;
    }

    /**
     * Get eventName.
     *
     * @return string
     */
    public function getEventName()
    {
        return \$this->eventName;
    }

    /**
     * Set actionName.
     *
     * @param string \$actionName
     *
     * @return StagesChangeLog
     */
    public function setActionName(\$actionName)
    {
        \$this->actionName = \$actionName;

        return \$this;
    }

    /**
     * Get actionName.
     *
     * @return string
     */
    public function getActionName()
    {
        return \$this->actionName;
    }

    /**
     * Set dateAdded.
     *
     * @param \\DateTime \$dateAdded
     *
     * @return StagesChangeLog
     */
    public function setDateAdded(\$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * Get dateAdded.
     *
     * @return \\DateTimeInterface
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * Set lead.
     *
     * @return StagesChangeLog
     */
    public function setLead(Lead \$lead)
    {
        \$this->lead = \$lead;

        return \$this;
    }

    /**
     * Get lead.
     *
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * Set stage.
     *
     * @return StagesChangeLog
     */
    public function setStage(Stage \$stage)
    {
        \$this->stage = \$stage;

        return \$this;
    }

    /**
     * Get stage.
     *
     * @return Stage
     */
    public function getStage()
    {
        return \$this->stage;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/StagesChangeLog.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/StagesChangeLog.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Entity\\StagesChangeLog.php");
    }
}
