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

/* @bundles/IntegrationsBundle/Sync/SyncJudge/SyncJudge.php */
class __TwigTemplate_4f8e3c8d8b24466722e27ab92cda0226 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncJudge;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InformationChangeRequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ConflictUnresolvedException;
use Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\BestEvidence;
use Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\FuzzyEvidence;
use Mautic\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\HardEvidence;

final class SyncJudge implements SyncJudgeInterface
{
    /**
     * @param string \$mode
     *
     * @return InformationChangeRequestDAO
     *
     * @throws ConflictUnresolvedException
     */
    public function adjudicate(
        \$mode,
        InformationChangeRequestDAO \$leftChangeRequest,
        InformationChangeRequestDAO \$rightChangeRequest
    ) {
        if (\$leftChangeRequest->getNewValue() === \$rightChangeRequest->getNewValue()) {
            return \$leftChangeRequest;
        }

        return match (\$mode) {
            SyncJudgeInterface::HARD_EVIDENCE_MODE => HardEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest),
            SyncJudgeInterface::BEST_EVIDENCE_MODE => BestEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest),
            default                                => FuzzyEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest),
        };
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncJudge/SyncJudge.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncJudge/SyncJudge.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\SyncJudge\\SyncJudge.php");
    }
}
