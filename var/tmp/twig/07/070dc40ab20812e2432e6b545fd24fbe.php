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

/* @bundles/ApiBundle/Event/ApiEntityEvent.php */
class __TwigTemplate_777c611f8af522812a437c46a11f0690 extends Template
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

namespace Mautic\\ApiBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Symfony\\Component\\HttpFoundation\\Request;

class ApiEntityEvent extends CommonEvent
{
    /**
     * @param object \$entity
     */
    public function __construct(
        protected \$entity,
        protected array \$entityRequestParameters,
        private Request \$request
    ) {
    }

    /**
     * @return object
     */
    public function getEntity()
    {
        return \$this->entity;
    }

    /**
     * @return array
     */
    public function getEntityRequestParameters()
    {
        return \$this->entityRequestParameters;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return \$this->request;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Event/ApiEntityEvent.php";
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
        return new Source("", "@bundles/ApiBundle/Event/ApiEntityEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Event\\ApiEntityEvent.php");
    }
}
