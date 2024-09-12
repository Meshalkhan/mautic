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

/* @bundles/FormBundle/Helper/PointActionHelper.php */
class __TwigTemplate_4ee59eaa16808c006eb9df583d73c457 extends Template
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

namespace Mautic\\FormBundle\\Helper;

class PointActionHelper
{
    public static function validateFormSubmit(\$eventDetails, \$action): bool
    {
        \$form         = \$eventDetails->getForm();
        \$formId       = \$form->getId();
        \$limitToForms = \$action['properties']['forms'];

        if (!empty(\$limitToForms) && !in_array(\$formId, \$limitToForms)) {
            // no points change
            return false;
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
        return "@bundles/FormBundle/Helper/PointActionHelper.php";
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
        return new Source("", "@bundles/FormBundle/Helper/PointActionHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Helper\\PointActionHelper.php");
    }
}
