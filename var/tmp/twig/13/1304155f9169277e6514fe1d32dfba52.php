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

/* @bundles/CoreBundle/Helper/DataExporterHelper.php */
class __TwigTemplate_e6e000f04ea1f044580d251970827ae3 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Mautic\\CoreBundle\\Model\\AbstractCommonModel;

class DataExporterHelper
{
    /**
     * Standard function to generate an array of data via any model's \"getEntities\" method.
     *
     * Overwrite in your controller if required.
     *
     * @param int|null               \$start
     * @param AbstractCommonModel<T> \$model
     *
     * @template T of object
     *
     * @return array
     */
    public function getDataForExport(
        \$start,
        AbstractCommonModel \$model,
        array \$args,
        callable \$resultsCallback = null,
        bool \$skipOrdering = false
    ) {
        \$args['limit']        = max(\$args['limit'], 200);
        \$args['start']        = \$start;
        \$args['skipOrdering'] = \$skipOrdering;

        \$results = \$model->getEntities(\$args);
        \$items   = \$results['results'];
        if (0 === count(\$items)) {
            return null;
        }
        unset(\$results);

        \$toExport = [];

        unset(\$args['withTotalCount']);

        if (is_callable(\$resultsCallback)) {
            foreach (\$items as \$item) {
                \$row = array_map(fn (\$itemEncode) => html_entity_decode((string) \$itemEncode, ENT_QUOTES), \$resultsCallback(\$item));

                \$toExport[] = \$this->secureAgainstCsvInjection(\$row);
            }
        } else {
            foreach (\$items as \$item) {
                \$toExport[] = \$this->secureAgainstCsvInjection((array) \$item);
            }
        }

        \$model->getRepository()->detachEntities(\$items);

        return \$toExport;
    }

    private function secureAgainstCsvInjection(array \$row): array
    {
        foreach (\$row as \$colNum => \$colVal) {
            if (\$colVal && in_array(substr(\$colVal, 0, 1), ['+', '-', '=', '@'])) {
                \$row[\$colNum] = ' '.\$colVal;
            }
        }

        return \$row;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/DataExporterHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/DataExporterHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\DataExporterHelper.php");
    }
}
