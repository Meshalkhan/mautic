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

/* @bundles/CoreBundle/Controller/AjaxLookupControllerTrait.php */
class __TwigTemplate_68c784500e5acb68d2654024105a6931 extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\CoreBundle\\Model\\AjaxLookupModelInterface;
use Symfony\\Component\\HttpFoundation\\Exception\\BadRequestException;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

trait AjaxLookupControllerTrait
{
    public function getLookupChoiceListAction(Request \$request): JsonResponse
    {
        \$dataArray = [];
        \$modelName = InputHelper::clean(\$request->query->get('searchKey'));
        \$search    = InputHelper::clean(\$request->query->get(str_replace('.', '_', \$modelName)));
        \$limit     = (int) \$request->query->get('limit', '0');
        \$start     = (int) \$request->query->get('start', '0');

        if (!\$modelName) {
            throw new BadRequestException('The searchKey parameter is required.');
        }

        if (!\$search) {
            return new JsonResponse(\$dataArray);
        }

        \$model = \$this->getModel(\$modelName);

        if (!\$model instanceof AjaxLookupModelInterface) {
            throw new BadRequestException(\"The model {\$modelName} must implement the AjaxLookupModelInterface.\");
        }

        \$results = \$model->getLookupResults(\$modelName, \$search, \$limit, \$start);

        foreach (\$results as \$group => \$result) {
            \$option = [];
            if (is_array(\$result)) {
                if (!isset(\$result['value'])) {
                    // Grouped options
                    \$option = [
                        'group' => true,
                        'text'  => \$group,
                        'items' => \$result,
                    ];

                    foreach (\$result as \$value => \$label) {
                        if (is_array(\$label) && isset(\$label['label'])) {
                            \$option['items'][\$value]['text'] = \$label['label'];
                        }
                    }
                } else {
                    if (isset(\$result['label'])) {
                        \$option['text'] = \$result['label'];
                    }

                    \$option['value'] = \$result['value'];
                }
            } else {
                \$option[\$group] = \$result;
            }

            \$dataArray[] = \$option;
        }

        return new JsonResponse(\$dataArray);
    }

    /**
     * Get a model instance from the service container.
     *
     * @param string \$modelNameKey
     *
     * @return AbstractCommonModel<object>
     */
    abstract protected function getModel(\$modelNameKey);

    /**
     * Get's the content of error page.
     *
     * @return Response
     */
    abstract public function renderException(\\Exception \$e);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/AjaxLookupControllerTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/AjaxLookupControllerTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Controller\\AjaxLookupControllerTrait.php");
    }
}
