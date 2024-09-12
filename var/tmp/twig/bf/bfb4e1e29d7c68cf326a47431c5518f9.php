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

/* @bundles/ReportBundle/Model/ExportResponse.php */
class __TwigTemplate_cb3370c2de103ad760ea5f581b6a021a extends Template
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

namespace Mautic\\ReportBundle\\Model;

use Symfony\\Component\\HttpFoundation\\Response;

class ExportResponse
{
    /**
     * @param string \$fileName
     */
    public static function setResponseHeaders(Response \$response, \$fileName): void
    {
        \$response->headers->set('Content-Type', 'application/octet-stream');
        \$response->headers->set('Content-Disposition', 'attachment; filename=\"'.\$fileName.'\"');
        \$response->headers->set('Expires', '0');
        \$response->headers->set('Cache-Control', 'must-revalidate');
        \$response->headers->set('Pragma', 'public');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Model/ExportResponse.php";
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
        return new Source("", "@bundles/ReportBundle/Model/ExportResponse.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Model\\ExportResponse.php");
    }
}
