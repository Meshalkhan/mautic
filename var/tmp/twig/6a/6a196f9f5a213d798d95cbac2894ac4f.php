<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/LeadBundle/Segment/ContactSegmentFilterOperator.php */
class __TwigTemplate_f1e11a53e9d238c928aec4f25b00a902 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Segment/ContactSegmentFilterOperator.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/LeadBundle/Segment/ContactSegmentFilterOperator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\ContactSegmentFilterOperator.php");
    }
}
