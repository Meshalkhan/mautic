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

/* @bundles/IntegrationsBundle/Sync/SyncJudge/Modes/FuzzyEvidence.php */
class __TwigTemplate_a908529c039289546b3744648fafd5bb extends Template
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

class FuzzyEvidence implements JudgementModeInterface
{
    /**
     * @throws ConflictUnresolvedException
     */
    public static function adjudicate(
        InformationChangeRequestDAO \$leftChangeRequest,
        InformationChangeRequestDAO \$rightChangeRequest
    ): InformationChangeRequestDAO {
        try {
            return BestEvidence::adjudicate(\$leftChangeRequest, \$rightChangeRequest);
        } catch (ConflictUnresolvedException) {
        }

        if (
            \$leftChangeRequest->getCertainChangeDateTime()
            && \$rightChangeRequest->getPossibleChangeDateTime()
            && \$leftChangeRequest->getCertainChangeDateTime() > \$rightChangeRequest->getPossibleChangeDateTime()
        ) {
            return \$leftChangeRequest;
        }

        if (
            \$rightChangeRequest->getCertainChangeDateTime()
            && \$leftChangeRequest->getPossibleChangeDateTime()
            && \$rightChangeRequest->getCertainChangeDateTime() > \$leftChangeRequest->getPossibleChangeDateTime()
        ) {
            return \$rightChangeRequest;
        }

        throw new ConflictUnresolvedException();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncJudge/Modes/FuzzyEvidence.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncJudge/Modes/FuzzyEvidence.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\SyncJudge\\Modes\\FuzzyEvidence.php");
    }
}
