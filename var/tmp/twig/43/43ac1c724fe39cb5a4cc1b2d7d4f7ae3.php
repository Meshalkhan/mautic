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

/* @bundles/IntegrationsBundle/Controller/UpdateFieldController.php */
class __TwigTemplate_8cb6b552c051b2eef1a1f872a60412db extends Template
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

namespace Mautic\\IntegrationsBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class UpdateFieldController extends CommonController
{
    public function updateAction(Request \$request, string \$integration, string \$object, string \$field): JsonResponse
    {
        // Clear the session of previously stored fields in case it got stuck
        \$session       = \$request->getSession();
        \$updatedFields = \$session->get(sprintf('%s-fields', \$integration), []);

        if (!isset(\$updatedFields[\$object])) {
            \$updatedFields[\$object] = [];
        }

        if (!isset(\$updatedFields[\$object][\$field])) {
            \$updatedFields[\$object][\$field] = [];
        }

        if (\$mappedField = \$request->request->get('mappedField')) {
            \$updatedFields[\$object][\$field]['mappedField'] = \$mappedField;
        }

        if (\$syncDirection = \$request->request->get('syncDirection')) {
            \$updatedFields[\$object][\$field]['syncDirection'] = \$syncDirection;
        }

        \$session->set(sprintf('%s-fields', \$integration), \$updatedFields);

        return new JsonResponse([]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Controller/UpdateFieldController.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Controller/UpdateFieldController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Controller\\UpdateFieldController.php");
    }
}
