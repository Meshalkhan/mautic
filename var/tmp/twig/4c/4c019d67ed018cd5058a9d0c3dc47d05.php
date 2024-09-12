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

/* @bundles/LeadBundle/Segment/ContactSegmentFilterOperator.php */
class __TwigTemplate_d62bc7cd664a544d47690d051060a3e5 extends Template
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

namespace Mautic\\LeadBundle\\Segment;

use Mautic\\LeadBundle\\Provider\\FilterOperatorProviderInterface;

class ContactSegmentFilterOperator
{
    public function __construct(
        private FilterOperatorProviderInterface \$filterOperatorProvider
    ) {
    }

    /**
     * @param string \$operator
     *
     * @return string
     */
    public function fixOperator(\$operator)
    {
        \$options = \$this->filterOperatorProvider->getAllOperators();

        if (empty(\$options[\$operator])) {
            return \$operator;
        }

        \$operatorDetails = \$options[\$operator];

        return \$operatorDetails['expr'];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/ContactSegmentFilterOperator.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/ContactSegmentFilterOperator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\ContactSegmentFilterOperator.php");
    }
}
