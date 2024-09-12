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

/* @bundles/CoreBundle/Doctrine/Connection/PrimaryReadReplicaConnectionWrapper.php */
class __TwigTemplate_cdae12ca2207d28f2afa493fe77453a7 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Connection;

use Doctrine\\DBAL\\Connections\\PrimaryReadReplicaConnection;
use Doctrine\\DBAL\\Exception;

class PrimaryReadReplicaConnectionWrapper extends PrimaryReadReplicaConnection
{
    /**
     * @param array<string, string> \$dbParams
     *
     * @throws Exception
     */
    public function initConnection(array \$dbParams): void
    {
        \$params = \$this->getParams();

        if (\$this->isConnected()) {
            \$this->close();
        }

        \$params['host']     = \$dbParams['host'];
        \$params['port']     = (int) \$dbParams['port'];
        \$params['dbname']   = \$dbParams['name'];
        \$params['user']     = \$dbParams['user'];
        \$params['password'] = \$dbParams['password'];
        \$this->__construct(\$params, \$this->_driver, \$this->_config, \$this->_eventManager);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Connection/PrimaryReadReplicaConnectionWrapper.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Connection/PrimaryReadReplicaConnectionWrapper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\Connection\\PrimaryReadReplicaConnectionWrapper.php");
    }
}
