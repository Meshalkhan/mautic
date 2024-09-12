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

/* @bundles/PageBundle/Event/TrackingEvent.php */
class __TwigTemplate_8f5fb10f1c93dfe983b3c12a4c09d08e extends Template
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

namespace Mautic\\PageBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Component\\HttpFoundation\\ParameterBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Contracts\\EventDispatcher\\Event;

class TrackingEvent extends Event
{
    private ParameterBag \$response;

    public function __construct(
        private Lead \$contact,
        private Request \$request,
        array \$mtcSessionResponses
    ) {
        \$this->response = new ParameterBag(\$mtcSessionResponses);
    }

    public function getContact(): Lead
    {
        return \$this->contact;
    }

    public function getRequest(): Request
    {
        return \$this->request;
    }

    public function getResponse(): ParameterBag
    {
        return \$this->response;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Event/TrackingEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/TrackingEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Event\\TrackingEvent.php");
    }
}
