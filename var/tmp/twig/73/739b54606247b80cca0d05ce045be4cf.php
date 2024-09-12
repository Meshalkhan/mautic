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

/* @bundles/LeadBundle/Segment/Query/Filter/ChannelClickQueryBuilder.php */
class __TwigTemplate_fe8253ce653c43e4ecd27c5da55e7afe extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Query\\Filter;

use Mautic\\LeadBundle\\Segment\\ContactSegmentFilter;
use Mautic\\LeadBundle\\Segment\\Query\\LeadBatchLimiterTrait;
use Mautic\\LeadBundle\\Segment\\Query\\QueryBuilder;

class ChannelClickQueryBuilder extends BaseFilterQueryBuilder
{
    use LeadBatchLimiterTrait;

    public static function getServiceId(): string
    {
        return 'mautic.lead.query.builder.channel_click.value';
    }

    public function applyQuery(QueryBuilder \$queryBuilder, ContactSegmentFilter \$filter): QueryBuilder
    {
        \$leadsTableAlias  = \$queryBuilder->getTableAlias(MAUTIC_TABLE_PREFIX.'leads');
        \$filterOperator   = \$filter->getOperator();
        \$filterChannel    = \$this->getChannel(\$filter->getField());
        \$batchLimiters    = \$filter->getBatchLimiters();
        \$filterParameters = \$filter->getParameterValue();

        if (is_array(\$filterParameters)) {
            \$parameters = [];
            foreach (\$filterParameters as \$filterParameter) {
                \$parameters[] = \$this->generateRandomParameterName();
            }
        } else {
            \$parameters = \$this->generateRandomParameterName();
        }

        \$tableAlias = \$this->generateRandomParameterName();

        \$subQb = \$queryBuilder->createQueryBuilder();
        \$expr  = \$subQb->expr()->and(
            \$subQb->expr()->isNotNull(\$tableAlias.'.redirect_id'),
            \$subQb->expr()->isNotNull(\$tableAlias.'.lead_id'),
            \$subQb->expr()->eq(\$tableAlias.'.source', \$subQb->expr()->literal(\$filterChannel))
        );

        if (\$this->isDateBased(\$filter->getField())) {
            \$expr = \$expr->with(
                \$subQb->expr()->\$filterOperator(\$tableAlias.'.date_hit', \$filter->getParameterHolder(\$parameters))
            );
        }

        \$subQb->select(\$tableAlias.'.lead_id')
            ->from(MAUTIC_TABLE_PREFIX.'page_hits', \$tableAlias)
            ->where(\$expr);

        \$this->addLeadAndMinMaxLimiters(\$subQb, \$batchLimiters, 'page_hits');

        if ('empty' === \$filterOperator && !\$this->isDateBased(\$filter->getField())) {
            \$queryBuilder->addLogic(\$queryBuilder->expr()->notIn(\$leadsTableAlias.'.id', \$subQb->getSQL()), \$filter->getGlue());
        } else {
            \$queryBuilder->addLogic(\$queryBuilder->expr()->in(\$leadsTableAlias.'.id', \$subQb->getSQL()), \$filter->getGlue());
        }

        \$queryBuilder->setParametersPairs(\$parameters, \$filterParameters);

        return \$queryBuilder;
    }

    private function getChannel(string \$name): string
    {
        if ('email_id' === \$name) {
            // BC for existing filter
            return 'email';
        }

        return str_replace(['_clicked_link', '_date'], '', \$name);
    }

    private function isDateBased(string \$name): bool
    {
        return str_contains(\$name, '_date');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Query/Filter/ChannelClickQueryBuilder.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/Filter/ChannelClickQueryBuilder.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Query\\Filter\\ChannelClickQueryBuilder.php");
    }
}
