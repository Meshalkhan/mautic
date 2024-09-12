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

/* @bundles/IntegrationsBundle/Sync/SyncJudge/Modes/DateComparisonTrait.php */
class __TwigTemplate_b2b3fb2a729882d62994b1e67c2e61d3 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\Modes;

use Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\SyncJudgeInterface;

trait DateComparisonTrait
{
    /**
     * @return string self::LEFT_WINNER|self::RIGHT_WINNER|self::NO_WINNER
     */
    private static function compareDateTimes(?\\DateTimeInterface \$leftDateTime = null, ?\\DateTimeInterface \$rightDateTime = null): string
    {
        if (null !== \$leftDateTime && (null === \$rightDateTime || \$leftDateTime > \$rightDateTime)) {
            return SyncJudgeInterface::LEFT_WINNER;
        }

        if (null !== \$rightDateTime && (null === \$leftDateTime || \$rightDateTime > \$leftDateTime)) {
            return SyncJudgeInterface::RIGHT_WINNER;
        }

        return SyncJudgeInterface::NO_WINNER;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncJudge/Modes/DateComparisonTrait.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncJudge/Modes/DateComparisonTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\DateComparisonTrait.php");
    }
}
