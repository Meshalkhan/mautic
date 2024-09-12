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

/* @bundles/CampaignBundle/Entity/FailedLeadEventLogRepository.php */
class __TwigTemplate_df9a648ba0cbd400ab3cf99da9bf3908 extends Template
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

use Doctrine\\DBAL\\ArrayParameterType;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<FailedLeadEventLog>
 */
class FailedLeadEventLogRepository extends CommonRepository
{
    /**
     * @param array<string|int> \$ids
     */
    public function deleteByIds(array \$ids): void
    {
        if (!\$ids) {
            return;
        }

        \$this->_em->getConnection()
            ->createQueryBuilder()
            ->delete(MAUTIC_TABLE_PREFIX.'campaign_lead_event_failed_log')
            ->where('log_id IN (:ids)')
            ->setParameter('ids', \$ids, ArrayParameterType::STRING)
            ->executeStatement();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Entity/FailedLeadEventLogRepository.php";
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
        return new Source("", "@bundles/CampaignBundle/Entity/FailedLeadEventLogRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Entity\\FailedLeadEventLogRepository.php");
    }
}
