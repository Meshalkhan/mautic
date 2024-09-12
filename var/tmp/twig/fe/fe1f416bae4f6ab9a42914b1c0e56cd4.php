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

/* @bundles/CoreBundle/Controller/JsController.php */
class __TwigTemplate_92d3826b7c9802660cd92b9c7888c1a4 extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\BuildJsEvent;
use Symfony\\Component\\HttpFoundation\\Response;

class JsController extends CommonController
{
    public function indexAction(): Response
    {
        // Don't store a visitor with this request
        defined('MAUTIC_NON_TRACKABLE_REQUEST') || define('MAUTIC_NON_TRACKABLE_REQUEST', 1);

        \$dispatcher = \$this->dispatcher;
        \$debug      = \$this->factory->getKernel()->isDebug();
        \$event      = new BuildJsEvent(\$this->getJsHeader(), \$debug);

        if (\$dispatcher->hasListeners(CoreEvents::BUILD_MAUTIC_JS)) {
            \$dispatcher->dispatch(\$event, CoreEvents::BUILD_MAUTIC_JS);
        }

        return new Response(\$event->getJs(), 200, ['Content-Type' => 'application/javascript']);
    }

    /**
     * Build a JS header for the Mautic embedded JS.
     */
    protected function getJsHeader(): string
    {
        \$year = date('Y');

        return <<<JS
/**
 * @package     MauticJS
 * @copyright   {\$year} Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
JS;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/JsController.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/JsController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Controller\\JsController.php");
    }
}
