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

/* @bundles/CoreBundle/Monolog/Handler/FileLogHandler.php */
class __TwigTemplate_cb17d517b610048cf7d9b6e704206c3c extends Template
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

namespace Mautic\\CoreBundle\\Monolog\\Handler;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Monolog\\Formatter\\FormatterInterface;
use Monolog\\Handler\\RotatingFileHandler;
use Monolog\\Logger;

class FileLogHandler extends RotatingFileHandler
{
    public function __construct(CoreParametersHelper \$coreParametersHelper, FormatterInterface \$exceptionFormatter)
    {
        \$logPath     = \$coreParametersHelper->get('log_path');
        \$logFileName = \$coreParametersHelper->get('log_file_name');
        \$maxFiles    = \$coreParametersHelper->get('max_log_files');
        \$debugMode   = \$coreParametersHelper->get('debug', false) || (defined('MAUTIC_ENV') && 'dev' === MAUTIC_ENV);
        \$level       = \$debugMode ? Logger::DEBUG : Logger::NOTICE;

        if (\$debugMode) {
            \$this->setFormatter(\$exceptionFormatter);
        }

        parent::__construct(sprintf('%s/%s', \$logPath, \$logFileName), \$maxFiles, \$level);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Monolog/Handler/FileLogHandler.php";
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
        return new Source("", "@bundles/CoreBundle/Monolog/Handler/FileLogHandler.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Monolog\\Handler\\FileLogHandler.php");
    }
}
