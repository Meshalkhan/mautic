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

/* @bundles/LeadBundle/Entity/LeadNote.php */
class __TwigTemplate_65b5ddc61fa7b14118d74261467a358e extends Template
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
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\FormEntity;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

class LeadNote extends FormEntity
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
     * @var string
     */
    private \$text;

    /**
     * @var string|null
     */
    private \$type = 'general';

    /**
     * @var \\DateTimeInterface
     */
    private \$dateTime;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('lead_notes')
            ->setCustomRepositoryClass(LeadNoteRepository::class);

        \$builder->addId();

        \$builder->addLead(false, 'CASCADE', false, 'notes');

        \$builder->addField('text', 'text');

        \$builder->createField('type', 'string')
            ->length(50)
            ->nullable()
            ->build();

        \$builder->createField('dateTime', 'datetime')
            ->columnName('date_time')
            ->nullable()
            ->build();
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('leadNote')
            ->addProperties(
                [
                    'id',
                    'text',
                    'type',
                    'dateTime',
                    'lead',
                ]
            )
            ->build();
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
     * Set text.
     *
     * @param string \$text
     *
     * @return LeadNote
     */
    public function setText(\$text)
    {
        \$this->isChanged('text', \$text);
        \$this->text = \$text;

        return \$this;
    }

    /**
     * Get text.
     *
     * @return string
     */
    public function getText()
    {
        return \$this->text;
    }

    /**
     * Set type.
     *
     * @param string \$type
     *
     * @return LeadNote
     */
    public function setType(\$type)
    {
        \$this->isChanged('type', \$type);
        \$this->type = \$type;

        return \$this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Form validation rules.
     */
    public static function loadValidatorMetadata(ClassMetadata \$metadata): void
    {
        \$metadata->addPropertyConstraint('text', new NotBlank(
            ['message' => 'mautic.lead.note.text.notblank']
        ));
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }

    public function setLead(Lead \$lead): void
    {
        \$this->lead = \$lead;
    }

    public function convertToArray(): array
    {
        return get_object_vars(\$this);
    }

    /**
     * @return mixed
     */
    public function getDateTime()
    {
        return \$this->dateTime;
    }

    /**
     * @param mixed \$dateTime
     */
    public function setDateTime(\$dateTime): void
    {
        \$this->dateTime = \$dateTime;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/LeadNote.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/LeadNote.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Entity\\LeadNote.php");
    }
}
