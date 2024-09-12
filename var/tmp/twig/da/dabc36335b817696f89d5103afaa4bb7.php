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

/* @bundles/IntegrationsBundle/Sync/Logger/DebugLogger.php */
class __TwigTemplate_598c20e1429ad5665f4d27d0a3f68a68 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\Logger;

use Psr\\Log\\LoggerInterface;
use Psr\\Log\\LogLevel;

class DebugLogger
{
    private static ?LoggerInterface \$logger = null;

    public function __construct(LoggerInterface \$logger)
    {
        static::\$logger = \$logger;
    }

    /**
     * @param string \$integration
     * @param string \$loggedFrom
     * @param string \$message
     * @param string \$urgency
     */
    public static function log(\$integration, \$message, \$loggedFrom = null, array \$context = [], \$urgency = LogLevel::DEBUG): void
    {
        if (!static::\$logger) {
            return;
        }

        if (null !== \$loggedFrom) {
            \$context['logged from'] = \$loggedFrom;
        }

        static::\$logger->\$urgency(strtoupper(\$integration).' SYNC: '.\$message, \$context);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/Logger/DebugLogger.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/Logger/DebugLogger.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\Logger\\DebugLogger.php");
    }
}
