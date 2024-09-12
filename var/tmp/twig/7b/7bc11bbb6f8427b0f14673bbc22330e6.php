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

/* @bundles/AssetBundle/Entity/Download.php */
class __TwigTemplate_4f5b828abc1ad1e1100dd7774858b984 extends Template
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

namespace Mautic\\AssetBundle\\Entity;

use Doctrine\\DBAL\\Types\\Types;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\EmailBundle\\Entity\\Email;

class Download
{
    public const TABLE_NAME = 'asset_downloads';

    /**
     * @var string
     */
    private \$id;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateDownload;

    /**
     * @var Asset|null
     */
    private \$asset;

    /**
     * @var IpAddress|null
     */
    private \$ipAddress;

    /**
     * @var \\Mautic\\LeadBundle\\Entity\\Lead|null
     */
    private \$lead;

    /**
     * @var int
     */
    private \$code;

    /**
     * @var string|null
     */
    private \$referer;

    /**
     * @var string
     */
    private \$trackingId;

    /**
     * @var string|null
     */
    private \$source;

    /**
     * @var int|null
     */
    private \$sourceId;

    /**
     * @var Email|null
     */
    private \$email;

    private ?string \$utmCampaign = null;

    private ?string \$utmContent = null;

    private ?string \$utmMedium = null;

    private ?string \$utmSource = null;

    private ?string \$utmTerm = null;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable(self::TABLE_NAME)
            ->setCustomRepositoryClass(DownloadRepository::class)
            ->addIndex(['tracking_id'], 'download_tracking_search')
            ->addIndex(['source', 'source_id'], 'download_source_search')
            ->addIndex(['date_download'], 'asset_date_download');

        \$builder->addBigIntIdField();

        \$builder->createField('dateDownload', 'datetime')
            ->columnName('date_download')
            ->build();

        \$builder->createManyToOne('asset', 'Asset')
            ->addJoinColumn('asset_id', 'id', true, false, 'CASCADE')
            ->build();

        \$builder->addIpAddress(true);

        \$builder->addLead(true, 'SET NULL');

        \$builder->addField('code', 'integer');

        \$builder->createField('referer', 'text')
            ->nullable()
            ->build();

        \$builder->createField('trackingId', 'string')
            ->columnName('tracking_id')
            ->build();

        \$builder->createField('source', 'string')
            ->nullable()
            ->build();

        \$builder->createField('sourceId', 'integer')
            ->columnName('source_id')
            ->nullable()
            ->build();

        \$builder->createManyToOne('email', Email::class)
            ->addJoinColumn('email_id', 'id', true, false, 'SET NULL')
            ->build();

        \$builder->createField('utmCampaign', Types::STRING)
            ->columnName('utm_campaign')
            ->nullable()
            ->build();

        \$builder->createField('utmContent', Types::STRING)
            ->columnName('utm_content')
            ->nullable()
            ->build();

        \$builder->createField('utmMedium', Types::STRING)
            ->columnName('utm_medium')
            ->nullable()
            ->build();

        \$builder->createField('utmSource', Types::STRING)
            ->columnName('utm_source')
            ->nullable()
            ->build();

        \$builder->createField('utmTerm', Types::STRING)
            ->columnName('utm_term')
            ->nullable()
            ->build();
    }

    /**
     * Get id.
     */
    public function getId(): int
    {
        return (int) \$this->id;
    }

    /**
     * Set dateDownload.
     *
     * @param \\DateTime \$dateDownload
     *
     * @return Download
     */
    public function setDateDownload(\$dateDownload)
    {
        \$this->dateDownload = \$dateDownload;

        return \$this;
    }

    /**
     * Get dateDownload.
     *
     * @return \\DateTimeInterface
     */
    public function getDateDownload()
    {
        return \$this->dateDownload;
    }

    /**
     * Set code.
     *
     * @param int \$code
     *
     * @return Download
     */
    public function setCode(\$code)
    {
        \$this->code = \$code;

        return \$this;
    }

    /**
     * Get code.
     *
     * @return int
     */
    public function getCode()
    {
        return \$this->code;
    }

    /**
     * Set referer.
     *
     * @param string \$referer
     *
     * @return Download
     */
    public function setReferer(\$referer)
    {
        \$this->referer = \$referer;

        return \$this;
    }

    /**
     * Get referer.
     *
     * @return string
     */
    public function getReferer()
    {
        return \$this->referer;
    }

    /**
     * Set asset.
     *
     * @return Download
     */
    public function setAsset(Asset \$asset = null)
    {
        \$this->asset = \$asset;

        return \$this;
    }

    /**
     * Get asset.
     *
     * @return Asset
     */
    public function getAsset()
    {
        return \$this->asset;
    }

    /**
     * @return Download
     */
    public function setIpAddress(IpAddress \$ipAddress)
    {
        \$this->ipAddress = \$ipAddress;

        return \$this;
    }

    /**
     * @return IpAddress
     */
    public function getIpAddress()
    {
        return \$this->ipAddress;
    }

    /**
     * Set trackingId.
     *
     * @param int \$trackingId
     *
     * @return Download
     */
    public function setTrackingId(\$trackingId)
    {
        \$this->trackingId = \$trackingId;

        return \$this;
    }

    /**
     * Get trackingId.
     *
     * @return int
     */
    public function getTrackingId()
    {
        return \$this->trackingId;
    }

    /**
     * @return mixed
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @param mixed \$lead
     */
    public function setLead(\$lead): void
    {
        \$this->lead = \$lead;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return \$this->source;
    }

    /**
     * @param mixed \$source
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
     * @param mixed \$sourceId
     */
    public function setSourceId(\$sourceId): void
    {
        \$this->sourceId = (int) \$sourceId;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return \$this->email;
    }

    /**
     * @param mixed \$email
     */
    public function setEmail(Email \$email): void
    {
        \$this->email = \$email;
    }

    public function getUtmCampaign(): ?string
    {
        return \$this->utmCampaign;
    }

    public function setUtmCampaign(?string \$utmCampaign): static
    {
        \$this->utmCampaign = \$utmCampaign;

        return \$this;
    }

    public function getUtmContent(): ?string
    {
        return \$this->utmContent;
    }

    public function setUtmContent(?string \$utmContent): static
    {
        \$this->utmContent = \$utmContent;

        return \$this;
    }

    public function getUtmMedium(): ?string
    {
        return \$this->utmMedium;
    }

    public function setUtmMedium(?string \$utmMedium): static
    {
        \$this->utmMedium = \$utmMedium;

        return \$this;
    }

    public function getUtmSource(): ?string
    {
        return \$this->utmSource;
    }

    public function setUtmSource(?string \$utmSource): static
    {
        \$this->utmSource = \$utmSource;

        return \$this;
    }

    public function getUtmTerm(): ?string
    {
        return \$this->utmTerm;
    }

    public function setUtmTerm(?string \$utmTerm): static
    {
        \$this->utmTerm = \$utmTerm;

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
        return "@bundles/AssetBundle/Entity/Download.php";
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
        return new Source("", "@bundles/AssetBundle/Entity/Download.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Entity\\Download.php");
    }
}
