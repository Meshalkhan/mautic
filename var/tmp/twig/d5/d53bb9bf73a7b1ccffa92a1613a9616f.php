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

/* @bundles/LeadBundle/Entity/MergeRecordRepository.php */
class __TwigTemplate_108dc07d6dcc206805799b8a0f93409d extends Template
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

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<MergeRecord>
 */
class MergeRecordRepository extends CommonRepository
{
    /**
     * @return Lead|null
     */
    public function findMergedContact(\$id)
    {
        /** @var MergeRecord \$record */
        if (\$record = \$this->findOneBy(['mergedId' => (int) \$id], ['dateAdded' => 'desc'])) {
            \$contact = \$record->getContact();

            // Clear these records from the EM so that subsequent fetches don't return deleted entities
            \$this->getEntityManager()->detach(\$record);

            return \$contact;
        }

        return null;
    }

    /**
     * Keep track of subseqent merges by cascading records to the latest lead that was merged into.
     */
    public function moveMergeRecord(\$fromId, \$toId): void
    {
        \$this->getEntityManager()->getConnection()->createQueryBuilder()
            ->update(MAUTIC_TABLE_PREFIX.'contact_merge_records')
            ->set('contact_id', (int) \$toId)
            ->where('contact_id = '.(int) \$fromId)
            ->executeQuery();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/MergeRecordRepository.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/MergeRecordRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Entity\\MergeRecordRepository.php");
    }
}
