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

/* @bundles/CoreBundle/Event/RouteEvent.php */
class __TwigTemplate_5f81a453e9f9a1cf312c556b1f476a2e extends Template
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

use Symfony\\Component\\Config\\Loader\\Loader;
use Symfony\\Component\\Routing\\RouteCollection;
use Symfony\\Contracts\\EventDispatcher\\Event;

class RouteEvent extends Event
{
    protected RouteCollection \$collection;

    /**
     * @param string \$type
     */
    public function __construct(
        protected Loader \$loader,
        protected \$type = 'main'
    ) {
        \$this->collection = new RouteCollection();
    }

    /**
     * @param string \$path
     */
    public function addRoutes(\$path): void
    {
        \$this->collection->addCollection(\$this->loader->import(\$path));
    }

    /**
     * @return RouteCollection
     */
    public function getCollection()
    {
        return \$this->collection;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/RouteEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/RouteEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Event\\RouteEvent.php");
    }
}
