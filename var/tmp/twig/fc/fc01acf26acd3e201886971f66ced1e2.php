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

/* @bundles/EmailBundle/Stats/Helper/OpenedHelper.php */
class __TwigTemplate_b706ebb5e055cde40b4a3e29365254c7 extends Template
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

namespace Mautic\\EmailBundle\\Stats\\Helper;

use Mautic\\EmailBundle\\Stats\\FetchOptions\\EmailStatOptions;
use Mautic\\StatsBundle\\Aggregate\\Collection\\StatCollection;

class OpenedHelper extends AbstractHelper
{
    public const NAME = 'email-opened';

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
        \$q     = \$query->prepareTimeDataQuery('email_stats', 'date_read', \$options->getFilters());

        \$this->limitQueryToEmailIds(\$q, \$options->getEmailIds(), 'email_id', 't');

        if (!\$options->canViewOthers()) {
            \$this->limitQueryToCreator(\$q);
        }

        \$this->addCompanyFilter(\$q, \$options->getCompanyId());
        \$this->addCampaignFilter(\$q, \$options->getCampaignId());
        \$this->addSegmentFilter(\$q, \$options->getSegmentId());

        \$this->fetchAndBindToCollection(\$q, \$statCollection);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Stats/Helper/OpenedHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Stats/Helper/OpenedHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Stats\\Helper\\OpenedHelper.php");
    }
}
