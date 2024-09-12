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

/* @bundles/CoreBundle/EventListener/ConsoleTerminateListener.php */
class __TwigTemplate_de19f40864e13705c5d5fba5c36c2aeb extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;

class ConsoleTerminateListener
{
    public function __construct(
        private LoggerInterface \$logger
    ) {
    }

    public function onConsoleTerminate(ConsoleTerminateEvent \$event): void
    {
        \$statusCode = \$event->getExitCode();
        \$command    = \$event->getCommand();

        if (0 === \$statusCode) {
            return;
        }

        if (\$statusCode > 255) {
            \$statusCode = 255;
            \$event->setExitCode(\$statusCode);
        }

        \$this->logger->warning(sprintf(
            'Command `%s` exited with status code %d',
            \$command->getName(),
            \$statusCode
        ));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/ConsoleTerminateListener.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/ConsoleTerminateListener.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\EventListener\\ConsoleTerminateListener.php");
    }
}
