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

/* @bundles/DynamicContentBundle/Entity/DynamicContentLeadData.php */
class __TwigTemplate_8555a745a30b879a7d5fb87335c5d9a5 extends Template
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

namespace Mautic\\DynamicContentBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\CommonEntity;
use Mautic\\LeadBundle\\Entity\\Lead;

class DynamicContentLeadData extends CommonEntity
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateAdded;

    /**
     * @var DynamicContent|null
     */
    private \$dynamicContent;

    /**
     * @var Lead
     */
    private \$lead;

    /**
     * @var \\DateTimeInterface
     */
    private \$dataAdded;

    /**
     * @var string
     */
    private \$slot;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('dynamic_content_lead_data')
            ->setCustomRepositoryClass(DynamicContentLeadDataRepository::class);

        \$builder->addIdColumns(false, false);

        \$builder->addDateAdded(true);

        \$builder->addLead();

        \$builder->createManyToOne('dynamicContent', 'DynamicContent')
            ->inversedBy('id')
            ->addJoinColumn('dynamic_content_id', 'id', true, false, 'CASCADE')
            ->build();

        \$builder->createField('slot', 'text')
            ->columnName('slot')
            ->build();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @param \\DateTime \$dateAdded
     *
     * @return DynamicContentLeadData
     */
    public function setDateAdded(\$dateAdded)
    {
        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * @return DynamicContent
     */
    public function getDynamicContent()
    {
        return \$this->dynamicContent;
    }

    /**
     * @param DynamicContent \$dynamicContent
     *
     * @return DynamicContentLeadData
     */
    public function setDynamicContent(\$dynamicContent)
    {
        \$this->dynamicContent = \$dynamicContent;

        return \$this;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @param Lead \$lead
     *
     * @return DynamicContentLeadData
     */
    public function setLead(\$lead)
    {
        \$this->lead = \$lead;

        return \$this;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDataAdded()
    {
        return \$this->dataAdded;
    }

    /**
     * @param \\DateTime \$dataAdded
     *
     * @return DynamicContentLeadData
     */
    public function setDataAdded(\$dataAdded)
    {
        \$this->dataAdded = \$dataAdded;

        return \$this;
    }

    /**
     * @return string
     */
    public function getSlot()
    {
        return \$this->slot;
    }

    /**
     * @param string \$slot
     *
     * @return DynamicContentLeadData
     */
    public function setSlot(\$slot)
    {
        \$this->slot = \$slot;

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
        return "@bundles/DynamicContentBundle/Entity/DynamicContentLeadData.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Entity/DynamicContentLeadData.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Entity\\DynamicContentLeadData.php");
    }
}
