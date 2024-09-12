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

/* @bundles/CoreBundle/Loader/RouteLoader.php */
class __TwigTemplate_8b38337f5e2d41863831cc2c343f92f6 extends Template
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

namespace Mautic\\CoreBundle\\Loader;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\RouteEvent;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Config\\Loader\\Loader;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Routing\\RouteCollection;

class RouteLoader extends Loader
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher,
        private CoreParametersHelper \$coreParameters
    ) {
    }

    /**
     * Load each bundles routing.php file.
     *
     * @param mixed \$resource
     *
     * @return RouteCollection
     *
     * @throws \\RuntimeException
     */
    public function load(\$resource, \$type = null)
    {
        // Public
        \$event = new RouteEvent(\$this, 'public');
        \$this->dispatcher->dispatch(\$event, CoreEvents::BUILD_ROUTE);
        \$collection = \$event->getCollection();

        // Force all links to be SSL if the site_url parameter is SSL
        \$siteUrl  = \$this->coreParameters->get('site_url');
        \$forceSSL = false;
        if (!empty(\$siteUrl)) {
            \$parts    = parse_url(\$siteUrl);
            \$forceSSL = (!empty(\$parts['scheme']) && 'https' == \$parts['scheme']);
        }

        if (\$forceSSL) {
            \$collection->setSchemes('https');
        }

        // Secured area - Default
        \$event = new RouteEvent(\$this);
        \$this->dispatcher->dispatch(\$event, CoreEvents::BUILD_ROUTE);
        \$secureCollection = \$event->getCollection();

        // OneupUploader (added behind our secure /s)
        \$secureCollection->addCollection(\$this->import('.', 'uploader'));

        // Elfinder file manager
        \$collection->addCollection(\$this->import('@FMElfinderBundle/Resources/config/routing.yaml'));

        // API
        \$event = new RouteEvent(\$this, 'api');
        \$this->dispatcher->dispatch(\$event, CoreEvents::BUILD_ROUTE);
        \$apiCollection = \$event->getCollection();
        \$apiCollection->addPrefix('/api');

        if (\$forceSSL) {
            \$apiCollection->setSchemes('https');
        }

        \$collection->addCollection(\$apiCollection);

        \$secureCollection->addPrefix('/s');
        if (\$forceSSL) {
            \$secureCollection->setSchemes('https');
        }
        \$collection->addCollection(\$secureCollection);

        // Catch all
        \$event = new RouteEvent(\$this, 'catchall');
        \$this->dispatcher->dispatch(\$event, CoreEvents::BUILD_ROUTE);
        \$lastCollection = \$event->getCollection();

        if (\$forceSSL) {
            \$lastCollection->setSchemes('https');
        }

        \$collection->addCollection(\$lastCollection);

        return \$collection;
    }

    /**
     * @param mixed \$resource
     */
    public function supports(\$resource, \$type = null): bool
    {
        return 'mautic' === \$type;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Loader/RouteLoader.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/RouteLoader.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Loader\\RouteLoader.php");
    }
}
