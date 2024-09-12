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

/* @bundles/CampaignBundle/Entity/FailedLeadEventLog.php */
class __TwigTemplate_5c865ba7c828a8fba2a21c18be736b57 extends Template
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

namespace Mautic\\CampaignBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class FailedLeadEventLog
{
    /**
     * @var LeadEventLog
     */
    private \$log;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateAdded;

    /**
     * @var string|null
     */
    private \$reason;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('campaign_lead_event_failed_log')
            ->setCustomRepositoryClass(FailedLeadEventLogRepository::class)
            ->addIndex(['date_added'], 'campaign_event_failed_date');

        \$builder->createOneToOne('log', 'LeadEventLog')
            ->makePrimaryKey()
            ->inversedBy('failedLog')
            ->addJoinColumn('log_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->addDateAdded();

        \$builder->addNullableField('reason', 'text');
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('campaignEventFailedLog')
                 ->addProperties(
                     [
                         'dateAdded',
                         'reason',
                     ]
                 )
                 ->build();
    }

    /**
     * @return LeadEventLog
     */
    public function getLog()
    {
        return \$this->log;
    }

    /**
     * @return FailedLeadEventLog
     */
    public function setLog(LeadEventLog \$log = null)
    {
        \$this->log = \$log;

        if (\$log) {
            \$log->setFailedLog(\$this);
        }

        return \$this;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @return FailedLeadEventLog
     */
    public function setDateAdded(\\DateTime \$dateAdded = null)
    {
        if (null === \$dateAdded) {
            \$dateAdded = new \\DateTime();
        }

        \$this->dateAdded = \$dateAdded;

        return \$this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return \$this->reason;
    }

    /**
     * @param string \$reason
     *
     * @return FailedLeadEventLog
     */
    public function setReason(\$reason)
    {
        \$this->reason = \$reason;

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
        return "@bundles/CampaignBundle/Entity/FailedLeadEventLog.php";
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
        return new Source("", "@bundles/CampaignBundle/Entity/FailedLeadEventLog.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Entity\\FailedLeadEventLog.php");
    }
}
