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

/* @bundles/CoreBundle/Event/AbstractCustomRequestEvent.php */
class __TwigTemplate_eacc9aa6ae6cfbbda1315455e860b4ab extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Contracts\\EventDispatcher\\Event;

abstract class AbstractCustomRequestEvent extends Event
{
    /**
     * @var Request
     */
    protected \$request;

    /**
     * @var string
     */
    protected \$route;

    /**
     * @var array
     */
    protected \$routeParams = [];

    public function __construct(Request \$request = null)
    {
        if (\$request) {
            \$this->request = (\$request->isXmlHttpRequest() && \$request->query->has('request')) ? \$request->query->get('request') : \$request;
            if (\$this->request->attributes->has('ajaxRoute')) {
                \$ajaxRoute         = \$this->request->attributes->get('ajaxRoute');
                \$this->route       = \$ajaxRoute['_route'];
                \$this->routeParams = \$ajaxRoute['_route_params'];
            } else {
                \$this->route       = \$this->request->attributes->get('_route');
                \$this->routeParams = \$this->request->attributes->get('_route_params');
            }

            if (null === \$this->routeParams) {
                \$this->routeParams = [];
            }
        }
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * Get Symfony route name for the current view.
     *
     * @param bool \$withParams
     *
     * @return array|mixed
     */
    public function getRoute(\$withParams = false)
    {
        return (\$withParams) ? [\$this->route, \$this->routeParams] : \$this->route;
    }

    public function checkRouteContext(\$route): bool
    {
        if (null == \$this->request) {
            return false;
        }

        if (null !== \$route) {
            [\$currentRoute, \$routeParams]     = \$this->getRoute(true);
            \$givenRoute                       = \$route;
            \$givenRouteParams                 = [];
            if (is_array(\$route)) {
                [\$givenRoute, \$givenRouteParams] = \$route;
            }

            if (\$givenRoute !== \$currentRoute) {
                return false;
            }

            foreach (\$givenRouteParams as \$param => \$value) {
                if (!isset(\$routeParams[\$param]) || \$value !== \$routeParams[\$param]) {
                    return false;
                }
            }
        }

        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/AbstractCustomRequestEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/AbstractCustomRequestEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Event\\AbstractCustomRequestEvent.php");
    }
}
