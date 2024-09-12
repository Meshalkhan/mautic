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

/* @bundles/IntegrationsBundle/Sync/SyncJudge/Modes/BestEvidence.php */
class __TwigTemplate_ddf1b1ed8de3f1ccff888f0be6a86013 extends Template
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

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InformationChangeRequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ConflictUnresolvedException;
use Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\SyncJudgeInterface;

class BestEvidence implements JudgementModeInterface
{
    use DateComparisonTrait;

    /**
     * @throws ConflictUnresolvedException
     */
    public static function adjudicate(
        InformationChangeRequestDAO \$leftChangeRequest,
        InformationChangeRequestDAO \$rightChangeRequest
    ): InformationChangeRequestDAO {
        try {
            return HardEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
        } catch (ConflictUnresolvedException) {
        }

        if (null === \$leftChangeRequest->getPossibleChangeDateTime() || null === \$rightChangeRequest->getPossibleChangeDateTime()) {
            throw new ConflictUnresolvedException();
        }

        \$possibleChangeCompare = self::compareDateTimes(
            \$leftChangeRequest->getPossibleChangeDateTime(),
            \$rightChangeRequest->getPossibleChangeDateTime()
        );

        if (SyncJudgeInterface::NO_WINNER === \$possibleChangeCompare) {
            throw new ConflictUnresolvedException();
        }

        if (SyncJudgeInterface::LEFT_WINNER === \$possibleChangeCompare) {
            return \$leftChangeRequest;
        }

        return \$rightChangeRequest;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncJudge/Modes/BestEvidence.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncJudge/Modes/BestEvidence.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\BestEvidence.php");
    }
}
