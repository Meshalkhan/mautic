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

/* @bundles/CategoryBundle/Controller/AjaxController.php */
class __TwigTemplate_74a6c3c2469aaa80bd65e0093f88e208 extends Template
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

namespace Mautic\\CategoryBundle\\Controller;

use Mautic\\CategoryBundle\\Model\\CategoryModel;
use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    public function categoryListAction(Request \$request): \\Symfony\\Component\\HttpFoundation\\JsonResponse
    {
        \$bundle        = InputHelper::clean(\$request->query->get('bundle'));
        \$filter        = InputHelper::clean(\$request->query->get('filter'));
        \$categoryModel = \$this->getModel('category');
        \\assert(\$categoryModel instanceof CategoryModel);
        \$results   = \$categoryModel->getLookupResults(\$bundle, \$filter, 10);
        \$dataArray = [];
        foreach (\$results as \$r) {
            \$dataArray[] = [
                'label' => \$r['title'].\" ({\$r['id']})\",
                'value' => \$r['id'],
            ];
        }

        return \$this->sendJsonResponse(\$dataArray);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/CategoryBundle/Controller/AjaxController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CategoryBundle\\Controller\\AjaxController.php");
    }
}
