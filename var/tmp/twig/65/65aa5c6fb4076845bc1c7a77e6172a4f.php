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

/* @bundles/CampaignBundle/Entity/ReplicaConnectionTrait.php */
class __TwigTemplate_4e090edec1c44e8a342b3a46812f36cc extends Template
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

namespace Mautic\\CampaignBundle\\Entity;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Connections\\PrimaryReadReplicaConnection;
use Mautic\\CampaignBundle\\Executioner\\ContactFinder\\Limiter\\ContactLimiter;

/**
 * Trait ReplicaConnectionTrait.
 */
trait ReplicaConnectionTrait
{
    /**
     * Get a connection, preferring a replica connection if available and prudent.
     *
     * If a query is being executed with a limiter with specific contacts
     * then this could be a real-time request being handled so we should avoid forcing a replica connection.
     */
    private function getReplicaConnection(ContactLimiter \$limiter = null): Connection
    {
        /** @var Connection \$connection */
        \$connection = \$this->getEntityManager()->getConnection();
        if (\$connection instanceof PrimaryReadReplicaConnection) {
            if (
                !\$limiter
                || !(\$limiter->getContactId() || \$limiter->getContactIdList())
            ) {
                \$connection->ensureConnectedToReplica();
            }
        }

        return \$connection;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Entity/ReplicaConnectionTrait.php";
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
        return new Source("", "@bundles/CampaignBundle/Entity/ReplicaConnectionTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Entity\\ReplicaConnectionTrait.php");
    }
}
