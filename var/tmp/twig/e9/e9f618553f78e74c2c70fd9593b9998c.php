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

/* @bundles/LeadBundle/Segment/Decorator/Date/Week/DateWeekAbstract.php */
class __TwigTemplate_26ba3ee803606b32ddb5a494e8540699 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Decorator\\Date\\Week;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Mautic\\LeadBundle\\Segment\\ContactSegmentFilterCrate;
use Mautic\\LeadBundle\\Segment\\Decorator\\Date\\DateOptionAbstract;

abstract class DateWeekAbstract extends DateOptionAbstract
{
    /**
     * @return string
     */
    protected function getModifierForBetweenRange()
    {
        return '+1 week';
    }

    protected function getValueForBetweenRange(DateTimeHelper \$dateTimeHelper)
    {
        \$dateFormat = \$this->dateOptionParameters->hasTimePart() ? 'Y-m-d H:i:s' : 'Y-m-d';
        \$startWith  = \$dateTimeHelper->toLocalString(\$dateFormat);

        \$modifier = \$this->getModifierForBetweenRange().' -1 second';
        \$dateTimeHelper->modify(\$modifier);
        \$endWith = \$dateTimeHelper->toLocalString(\$dateFormat);

        return [\$startWith, \$endWith];
    }

    protected function getOperatorForBetweenRange(ContactSegmentFilterCrate \$leadSegmentFilterCrate)
    {
        return '!=' === \$leadSegmentFilterCrate->getOperator() ? 'notBetween' : 'between';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Decorator/Date/Week/DateWeekAbstract.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/Date/Week/DateWeekAbstract.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Decorator\\Date\\Week\\DateWeekAbstract.php");
    }
}
