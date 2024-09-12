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

/* @bundles/IntegrationsBundle/EventListener/ControllerSubscriber.php */
class __TwigTemplate_4fa3cbbcf3f9fcc50cb172d752e9257c extends Template
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

namespace Mautic\\IntegrationsBundle\\EventListener;

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Helper\\IntegrationsHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpKernel\\Controller\\ControllerResolverInterface;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class ControllerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private IntegrationsHelper \$integrationsHelper,
        private ControllerResolverInterface \$resolver
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => ['onKernelController', 0],
        ];
    }

    public function onKernelController(\\Symfony\\Component\\HttpKernel\\Event\\ControllerEvent \$event): void
    {
        \$request = \$event->getRequest();

        if ('Mautic\\PluginBundle\\Controller\\PluginController::configAction' === \$request->get('_controller')) {
            \$integrationName = \$request->get('name');
            \$page            = \$request->get('page');

            try {
                \$this->integrationsHelper->getIntegration(\$integrationName);
                \$request->attributes->add(
                    [
                        'integration'   => \$integrationName,
                        'page'          => \$page,
                        '_controller'   => 'Mautic\\IntegrationsBundle\\Controller\\ConfigController::editAction',
                        '_route_params' => [
                            'integration' => \$integrationName,
                            'page'        => \$page,
                        ],
                    ]
                );

                \$controller = \$this->resolver->getController(\$request);
                \$event->setController(\$controller);
            } catch (IntegrationNotFoundException) {
                // Old integration so ignore and let old PluginBundle code handle it
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/EventListener/ControllerSubscriber.php";
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
        return new Source("", "@bundles/IntegrationsBundle/EventListener/ControllerSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\EventListener\\ControllerSubscriber.php");
    }
}
