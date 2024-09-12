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

/* @bundles/PointBundle/Entity/GroupContactScoreRepository.php */
class __TwigTemplate_ee0c0f5af05b0ef0dccae35684d7a77d extends Template
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

declare(strict_types=1);

namespace Mautic\\PointBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<GroupContactScore>
 */
class GroupContactScoreRepository extends CommonRepository
{
    public function compareScore(int \$leadId, int \$groupId, int \$score, string \$operatorExpr): bool
    {
        \$q = \$this->_em->getConnection()->createQueryBuilder();
        \$q->select('lcs.contact_id')
            ->from(MAUTIC_TABLE_PREFIX.GroupContactScore::TABLE_NAME, 'lcs');

        \$expr = \$q->expr()->and(
            \$q->expr()->eq('lcs.contact_id', ':lead'),
            \$q->expr()->eq('lcs.group_id', ':groupId'),
            \$q->expr()->\$operatorExpr('lcs.score', ':score'),
        );

        \$q->where(\$expr)
            ->setParameter('lead', \$leadId)
            ->setParameter('groupId', \$groupId)
            ->setParameter('score', \$score);

        return false !== \$q->executeQuery()->fetchOne();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Entity/GroupContactScoreRepository.php";
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
        return new Source("", "@bundles/PointBundle/Entity/GroupContactScoreRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Entity\\GroupContactScoreRepository.php");
    }
}
