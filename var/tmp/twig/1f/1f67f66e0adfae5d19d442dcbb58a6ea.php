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

/* @bundles/DynamicContentBundle/Controller/AjaxController.php */
class __TwigTemplate_53d660ea542127033ca9180a97f2a553 extends Template
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

namespace Mautic\\DynamicContentBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Controller\\AjaxLookupControllerTrait;

class AjaxController extends CommonAjaxController
{
    use AjaxLookupControllerTrait;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DynamicContentBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/DynamicContentBundle/Controller/AjaxController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DynamicContentBundle\\Controller\\AjaxController.php");
    }
}
