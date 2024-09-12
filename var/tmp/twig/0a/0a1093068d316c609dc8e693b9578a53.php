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

/* @bundles/ReportBundle/Controller/AjaxController.php */
class __TwigTemplate_3b11b75d1d4a50fb5ab9c61c8c851252 extends Template
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

namespace Mautic\\ReportBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\ReportBundle\\Model\\ReportModel;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    /**
     * Get updated data for context.
     */
    public function getSourceDataAction(Request \$request): \\Symfony\\Component\\HttpFoundation\\JsonResponse
    {
        \$model = \$this->getModel('report');
        \\assert(\$model instanceof ReportModel);
        \$context = \$request->get('context');

        \$graphs  = \$model->getGraphList(\$context);
        \$columns = \$model->getColumnList(\$context);
        \$filters = \$model->getFilterList(\$context);

        return \$this->sendJsonResponse(
            [
                'columns'           => \$columns->choiceHtml,
                'columnDefinitions' => \$columns->definitions,
                'filters'           => \$filters->choiceHtml,
                'filterDefinitions' => \$filters->definitions,
                'filterOperators'   => \$filters->operatorHtml,
                'graphs'            => \$graphs->choiceHtml,
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/ReportBundle/Controller/AjaxController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Controller\\AjaxController.php");
    }
}
