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

/* @bundles/LeadBundle/Helper/PointEventHelper.php */
class __TwigTemplate_2f2a34ea5e46633b1182d4ce888f093d extends Template
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

namespace Mautic\\LeadBundle\\Helper;

/**
 * @deprecated It will be removed in Mautic 6.0
 */
class PointEventHelper
{
    public static function changeLists(\$event, \$factory, \$lead): bool
    {
        \$properties = \$event['properties'];

        /** @var \\Mautic\\LeadBundle\\Model\\LeadModel \$leadModel */
        \$leadModel  = \$factory->getModel('lead');
        \$addTo      = \$properties['addToLists'];
        \$removeFrom = \$properties['removeFromLists'];

        \$somethingHappened = false;

        if (!empty(\$addTo)) {
            \$leadModel->addToLists(\$lead, \$addTo);
            \$somethingHappened = true;
        }

        if (!empty(\$removeFrom)) {
            \$leadModel->removeFromLists(\$lead, \$removeFrom);
            \$somethingHappened = true;
        }

        return \$somethingHappened;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Helper/PointEventHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/PointEventHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Helper\\PointEventHelper.php");
    }
}
