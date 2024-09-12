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

/* @bundles/LeadBundle/Segment/Decorator/Date/TimezoneResolver.php */
class __TwigTemplate_e2d0ecc4ae0d926a9d067d90d7c1c136 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Decorator\\Date;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\DateTimeHelper;

class TimezoneResolver
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    /**
     * @param bool \$hasTimePart
     */
    public function getDefaultDate(\$hasTimePart): DateTimeHelper
    {
        /**
         * \$hasTimePart tells us if field in a database is date or datetime
         * All datetime fields are stored in UTC
         * Date field, however, is always stored in a local time (there is no time information, so it cannot be converted to UTC).
         *
         * We will generate default date according to this. We need midnight as a default date (for relative intervals like \"today\" or \"-1 day\"
         *  1) in UTC for datetime fields
         *  2) in the local timezone for date fields
         *
         * Later we use toLocalString() method - it gives us midnight in UTC for first condition and midnight in local timezone for second option.
         */
        \$timezone = \$hasTimePart ? 'UTC' : \$this->coreParametersHelper->get('default_timezone', 'UTC');

        \$date = new \\DateTime('midnight today', new \\DateTimeZone(\$timezone));

        return new DateTimeHelper(\$date, null, \$timezone);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Decorator/Date/TimezoneResolver.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Decorator/Date/TimezoneResolver.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Decorator\\Date\\TimezoneResolver.php");
    }
}
