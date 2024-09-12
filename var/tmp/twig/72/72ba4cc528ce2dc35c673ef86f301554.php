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

/* @bundles/EmailBundle/Stats/FetchOptions/EmailStatOptions.php */
class __TwigTemplate_a09aff08449498d18466ed5d408f6e14 extends Template
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

namespace Mautic\\EmailBundle\\Stats\\FetchOptions;

use Mautic\\StatsBundle\\Event\\Options\\FetchOptions;

class EmailStatOptions extends FetchOptions
{
    private array \$ids = [];

    /**
     * @var int|null
     */
    private \$companyId;

    /**
     * @var int|null
     */
    private \$campaignId;

    /**
     * @var int|null
     */
    private \$segmentId;

    private array \$filters = [];

    private bool \$canViewOthers = false;

    /**
     * @var string
     */
    private \$unit;

    /**
     * @return \$this
     */
    public function setEmailIds(array \$ids)
    {
        \$this->ids = \$ids;

        return \$this;
    }

    /**
     * @return array
     */
    public function getEmailIds()
    {
        return \$this->ids;
    }

    /**
     * @return int|null
     */
    public function getCompanyId()
    {
        return \$this->companyId;
    }

    /**
     * @param int|null \$companyId
     *
     * @return \$this;
     */
    public function setCompanyId(\$companyId)
    {
        \$this->companyId = \$companyId;

        return \$this;
    }

    /**
     * @return int|null
     */
    public function getCampaignId()
    {
        return \$this->campaignId;
    }

    /**
     * @param int|null \$campaignId
     *
     * @return \$this;
     */
    public function setCampaignId(\$campaignId)
    {
        \$this->campaignId = \$campaignId;

        return \$this;
    }

    /**
     * @return int|null
     */
    public function getSegmentId()
    {
        return \$this->segmentId;
    }

    /**
     * @param int|null \$segmentId
     *
     * @return \$this;
     */
    public function setSegmentId(\$segmentId)
    {
        \$this->segmentId = \$segmentId;

        return \$this;
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        return \$this->filters;
    }

    /**
     * @return \$this
     */
    public function setFilters(array \$filters)
    {
        \$this->filters = \$filters;

        return \$this;
    }

    public function canViewOthers(): bool
    {
        return \$this->canViewOthers;
    }

    /**
     * @param bool \$canViewOthers
     *
     * @return \$this
     */
    public function setCanViewOthers(\$canViewOthers)
    {
        \$this->canViewOthers = \$canViewOthers;

        return \$this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return \$this->unit;
    }

    /**
     * @param string \$unit
     *
     * @return \$this
     */
    public function setUnit(\$unit)
    {
        \$this->unit = \$unit;

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
        return "@bundles/EmailBundle/Stats/FetchOptions/EmailStatOptions.php";
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
        return new Source("", "@bundles/EmailBundle/Stats/FetchOptions/EmailStatOptions.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Stats\\FetchOptions\\EmailStatOptions.php");
    }
}
