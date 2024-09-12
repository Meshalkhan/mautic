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

/* @bundles/CoreBundle/EventListener/ErrorHandlingListener.php */
class __TwigTemplate_9e419ba7a6d15403c15f3013ebfb2045 extends Template
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

use Mautic\\CoreBundle\\ErrorHandler\\ErrorHandler;
use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class ErrorHandlingListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 2047],
        ];
    }

    public function __construct(LoggerInterface \$logger, LoggerInterface \$mainLogger, LoggerInterface \$debugLogger = null)
    {
        ErrorHandler::getHandler()
            ->setLogger(\$logger)
            ->setMainLogger(\$mainLogger)
            ->setDebugLogger(\$debugLogger);
    }

    public function onKernelRequest(RequestEvent \$event): void
    {
        // Do nothing.  Just want symfony to call the class to set the error handling functions
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/ErrorHandlingListener.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/ErrorHandlingListener.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\EventListener\\ErrorHandlingListener.php");
    }
}
