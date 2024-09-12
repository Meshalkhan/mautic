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

/* @bundles/CoreBundle/ProcessSignal/Exception/SignalCaughtException.php */
class __TwigTemplate_62412fdd4a8ca622f0fd8fb8aaae7701 extends Template
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

namespace Mautic\\CoreBundle\\ProcessSignal\\Exception;

use Mautic\\CoreBundle\\ProcessSignal\\ProcessSignalService;

class SignalCaughtException extends \\Exception
{
    public function __construct(int \$signal = ProcessSignalService::SIGTERM)
    {
        parent::__construct(sprintf('Signal received: \"%d\"', \$signal), \$signal);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/ProcessSignal/Exception/SignalCaughtException.php";
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
        return new Source("", "@bundles/CoreBundle/ProcessSignal/Exception/SignalCaughtException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\ProcessSignal\\Exception\\SignalCaughtException.php");
    }
}
