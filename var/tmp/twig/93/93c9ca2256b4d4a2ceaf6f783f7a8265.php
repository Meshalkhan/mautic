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

/* @bundles/DynamicContentBundle/Entity/Stat.php */
class __TwigTemplate_0c0a85992c512e5a2ee339ac936b17d6 extends Template
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
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\LeadBundle\\Entity\\Lead;

class Stat
{
    /**
     * @var string
     */
    private \$id;

    /**
     * @var DynamicContent|null
     */
    private \$dynamicContent;

    /**
     * @var Lead|null
     */
    private \$lead;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateSent;

    /**
     * @var int|null
     */
    private \$sentCount;

    /**
     * @var int
     */
    private \$lastSent;

    /**
     * @var array
     */
    private \$sentDetails = [];

    /**
     * @var string|null
     */
    private \$source;

    /**
     * @var int|null
     */
    private \$sourceId;

    /**
     * @var array
     */
    private \$tokens = [];

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('dynamic_content_stats')
            ->setCustomRepositoryClass(StatRepository::class)
            ->addIndex(['dynamic_content_id', 'lead_id'], 'stat_dynamic_content_search')
            ->addIndex(['source', 'source_id'], 'stat_dynamic_content_source_search');

        \$builder->addBigIntIdField();

        \$builder->createManyToOne('dynamicContent', 'DynamicContent')
            ->inversedBy('stats')
            ->addJoinColumn('dynamic_content_id', 'id', true, false, 'SET NULL')
            ->build();

        \$builder->addLead(true, 'SET NULL');

        \$builder->createField('dateSent', 'datetime')
            ->columnName('date_sent')
            ->build();

        \$builder->createField('source', 'string')
            ->nullable()
            ->build();

        \$builder->createField('sourceId', 'integer')
            ->columnName('source_id')
            ->nullable()
            ->build();

        \$builder->createField('tokens', 'array')
            ->nullable()
            ->build();

        \$builder->addNullableField('sentCount', 'integer', 'sent_count');

        \$builder->addNullableField('lastSent', 'datetime', 'last_sent');

        \$builder->addNullableField('sentDetails', 'array', 'sent_details');
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('stat')
            ->addProperties(
                [
                    'id',
                    'dateSent',
                    'source',
                    'sentCount',
                    'lastSent',
                    'sourceId',
                    'lead',
                    'dynamicContent',
                ]
            )
            ->build();
    }

    public function addSentDetails(\$details): void
    {
        \$this->sentDetails[] = \$details;

        ++\$this->sentCount;
    }

    /**
     * Up the sent count.
     *
     * @return Stat
     */
    public function upSentCount()
    {
        \$count           = (int) \$this->sentCount + 1;
        \$this->sentCount = \$count;

        return \$this;
    }

    public function getId(): int
    {
        return (int) \$this->id;
    }

    /**
     * @param int \$id
     */
    public function setId(\$id): void
    {
        \$this->id = (string) \$id;
    }

    /**
     * @return DynamicContent
     */
    public function getDynamicContent()
    {
        return \$this->dynamicContent;
    }

    public function setDynamicContent(DynamicContent \$dynamicContent): void
    {
        \$this->dynamicContent = \$dynamicContent;
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
     */
    public function setLead(\$lead): void
    {
        \$this->lead = \$lead;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateSent()
    {
        return \$this->dateSent;
    }

    /**
     * @param \\DateTime \$dateSent
     */
    public function setDateSent(\$dateSent): void
    {
        \$this->dateSent = \$dateSent;
    }

    /**
     * @return int
     */
    public function getSentCount()
    {
        return \$this->sentCount;
    }

    /**
     * @param int \$sentCount
     */
    public function setSentCount(\$sentCount): void
    {
        \$this->sentCount = \$sentCount;
    }

    /**
     * @return int
     */
    public function getLastSent()
    {
        return \$this->lastSent;
    }

    /**
     * @param int \$lastSent
     */
    public function setLastSent(\$lastSent): void
    {
        \$this->lastSent = \$lastSent;
    }

    /**
     * @return array
     */
    public function getSentDetails()
    {
        return \$this->sentDetails;
    }

    /**
     * @param array \$sentDetails
     */
    public function setSentDetails(\$sentDetails): void
    {
        \$this->sentDetails = \$sentDetails;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return \$this->source;
    }

    /**
     * @param string \$source
     */
    public function setSource(\$source): void
    {
        \$this->source = \$source;
    }

    /**
     * @return int
     */
    public function getSourceId()
    {
        return \$this->sourceId;
    }

    /**
     * @param int \$sourceId
     */
    public function setSourceId(\$sourceId): void
    {
        \$this->sourceId = \$sourceId;
    }

    /**
     * @return array
     */
    public function getTokens()
    {
        return \$this->tokens;
    }

    /**
     * @param array \$tokens
     */
    public function setTokens(\$tokens): void
    {
        \$this->tokens = \$tokens;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Entity/Stat.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Entity/Stat.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Entity\\Stat.php");
    }
}
