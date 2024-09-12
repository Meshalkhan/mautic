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

/* @bundles/CampaignBundle/Entity/Result/CountResult.php */
class __TwigTemplate_12e1eb15ed1e075cbaa3e1cb1b270628 extends Template
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

namespace Mautic\\CampaignBundle\\Entity\\Result;

class CountResult
{
    private int \$count;

    private int \$minId;

    private int \$maxId;

    public function __construct(\$count, \$minId, \$maxId)
    {
        \$this->count = (int) \$count;
        \$this->minId = (int) \$minId;
        \$this->maxId = (int) \$maxId;
    }

    public function getCount(): int
    {
        return \$this->count;
    }

    public function getMinId(): int
    {
        return \$this->minId;
    }

    public function getMaxId(): int
    {
        return \$this->maxId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Entity/Result/CountResult.php";
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
        return new Source("", "@bundles/CampaignBundle/Entity/Result/CountResult.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Entity\\Result\\CountResult.php");
    }
}
