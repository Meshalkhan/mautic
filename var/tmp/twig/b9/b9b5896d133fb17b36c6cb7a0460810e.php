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

/* @bundles/LeadBundle/Segment/Stat/SegmentCampaignShare.php */
class __TwigTemplate_bf9c780eea89fc8e05e26f4937950c2c extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Stat;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CampaignBundle\\Model\\CampaignModel;
use Mautic\\CoreBundle\\Helper\\CacheStorageHelper;

class SegmentCampaignShare
{
    public function __construct(
        private CampaignModel \$campaignModel,
        private CacheStorageHelper \$cacheStorageHelper,
        private EntityManager \$entityManager
    ) {
    }

    /**
     * @param int   \$segmentId
     * @param array \$campaignIds
     *
     * @return array
     */
    public function getCampaignsSegmentShare(\$segmentId, \$campaignIds = [])
    {
        \$campaigns = \$this->campaignModel->getRepository()->getCampaignsSegmentShare(\$segmentId, \$campaignIds);
        foreach (\$campaigns as \$campaign) {
            \$this->cacheStorageHelper->set(\$this->getCachedKey(\$segmentId, \$campaign['id']), \$campaign['segmentCampaignShare']);
        }

        return \$campaigns;
    }

    /**
     * @param int \$segmentId
     *
     * @return array
     */
    public function getCampaignList(\$segmentId)
    {
        \$q = \$this->entityManager->getConnection()->createQueryBuilder();
        \$q->select('c.id, c.name, null as share')
            ->from(MAUTIC_TABLE_PREFIX.'campaigns', 'c')
            ->where(\$this->campaignModel->getRepository()->getPublishedByDateExpression(\$q))
            ->orderBy('c.id', 'DESC');

        \$campaigns = \$q->executeQuery()->fetchAllAssociative();

        foreach (\$campaigns as &\$campaign) {
            // just load from cache If exists
            if (\$share  = \$this->cacheStorageHelper->get(\$this->getCachedKey(\$segmentId, \$campaign['id']))) {
                \$campaign['share'] = \$share;
            }
        }

        return \$campaigns;
    }

    /**
     * @param int \$segmentId
     * @param int \$campaignId
     */
    private function getCachedKey(\$segmentId, \$campaignId): string
    {
        return sprintf('%s|%s|%s|%s|%s', 'campaign', \$campaignId, 'segment', \$segmentId, 'share');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Stat/SegmentCampaignShare.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Stat/SegmentCampaignShare.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Stat\\SegmentCampaignShare.php");
    }
}
