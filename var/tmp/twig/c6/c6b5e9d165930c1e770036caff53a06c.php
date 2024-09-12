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

/* @bundles/PointBundle/Entity/TriggerRepository.php */
class __TwigTemplate_d364aa28d6ddc8e30db533b38755711a extends Template
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

namespace Mautic\\PointBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Trigger>
 */
class TriggerRepository extends CommonRepository
{
    public function getEntities(array \$args = [])
    {
        \$q = \$this->_em
            ->createQueryBuilder()
            ->select(\$this->getTableAlias().', cat')
            ->from(Trigger::class, \$this->getTableAlias())
            ->leftJoin(\$this->getTableAlias().'.category', 'cat')
            ->leftJoin(\$this->getTableAlias().'.group', 'pl');

        \$args['qb'] = \$q;

        return parent::getEntities(\$args);
    }

    /**
     * Get a list of published triggers with color and points.
     *
     * @return array
     */
    public function getTriggerColors()
    {
        \$q = \$this->_em->createQueryBuilder()
            ->select('partial t.{id, color, points}')
            ->from(Trigger::class, 't', 't.id');

        \$q->where(\$this->getPublishedByDateExpression(\$q));

        \$q->orderBy('t.points', \\Doctrine\\Common\\Collections\\Criteria::ASC);

        return \$q->getQuery()->getArrayResult();
    }

    public function getTableAlias(): string
    {
        return 't';
    }

    protected function addCatchAllWhereClause(\$q, \$filter): array
    {
        return \$this->addStandardCatchAllWhereClause(\$q, \$filter, [
            't.name',
            't.description',
        ]);
    }

    protected function addSearchCommandWhereClause(\$q, \$filter): array
    {
        return \$this->addStandardSearchCommandWhereClause(\$q, \$filter);
    }

    /**
     * @return string[]
     */
    public function getSearchCommands(): array
    {
        return \$this->getStandardSearchCommands();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Entity/TriggerRepository.php";
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
        return new Source("", "@bundles/PointBundle/Entity/TriggerRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Entity\\TriggerRepository.php");
    }
}
