<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/EmailBundle/Stats/Helper/UnsubscribedHelper.php */
class __TwigTemplate_07fb360dd9b600f4da87e7d2222b5f57 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\EmailBundle\\Stats\\Helper;

use Mautic\\EmailBundle\\Stats\\FetchOptions\\EmailStatOptions;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\StatsBundle\\Aggregate\\Collection\\StatCollection;

class UnsubscribedHelper extends AbstractHelper
{
    public const NAME = 'email-unsubscribed';

    public function getName(): string
    {
        return self::NAME;
    }

    /**
     * @throws \\Exception
     */
    public function generateStats(\\DateTime \$fromDateTime, \\DateTime \$toDateTime, EmailStatOptions \$options, StatCollection \$statCollection): void
    {
        \$query = \$this->getQuery(\$fromDateTime, \$toDateTime);
        \$q     = \$query->prepareTimeDataQuery('lead_donotcontact', 'date_added');

        \$q->andWhere('t.channel = :channel')
            ->setParameter('channel', 'email')
            ->andWhere(\$q->expr()->eq('t.reason', ':reason'))
            ->setParameter('reason', DoNotContact::UNSUBSCRIBED);

        \$this->limitQueryToEmailIds(\$q, \$options->getEmailIds(), 'channel_id', 't');

        \$q->join('t', MAUTIC_TABLE_PREFIX.'email_stats', 'es', 't.channel_id = es.email_id AND t.channel = \"email\" AND t.lead_id = es.lead_id');

        if (true === \$options->canViewOthers()) {
            \$this->limitQueryToCreator(\$q, 'es.email_id');
        }
        \$this->addCompanyFilter(\$q, \$options->getCompanyId());
        \$this->addCampaignFilter(\$q, \$options->getCampaignId(), 'es');
        \$this->addSegmentFilter(\$q, \$options->getSegmentId(), 'es');

        \$this->fetchAndBindToCollection(\$q, \$statCollection);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Stats/Helper/UnsubscribedHelper.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/EmailBundle/Stats/Helper/UnsubscribedHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Stats\\Helper\\UnsubscribedHelper.php");
    }
}
