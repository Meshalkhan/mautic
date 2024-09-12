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

/* @bundles/CampaignBundle/Executioner/TestInactiveExecutioner.php */
class __TwigTemplate_ca74ba2726ba9dd2b9130f2de0e3c4c0 extends Template
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

namespace Mautic\\CampaignBundle\\Executioner;

use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * @internal Used in tests
 */
class TestInactiveExecutioner extends InactiveExecutioner implements ResetInterface
{
    /**
     * @internal Used in tests
     */
    public function setNowTime(\\DateTime \$dateTime): void
    {
        \$this->now = \$dateTime;
    }

    public function reset(): void
    {
        \$this->now = null;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Executioner/TestInactiveExecutioner.php";
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
        return new Source("", "@bundles/CampaignBundle/Executioner/TestInactiveExecutioner.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Executioner\\TestInactiveExecutioner.php");
    }
}
