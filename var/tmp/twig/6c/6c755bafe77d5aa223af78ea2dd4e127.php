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

/* @bundles/CoreBundle/Helper/DateTime/DateTimeToken.php */
class __TwigTemplate_10159f5fc9d4c7ad7573017a8b036b1a extends Template
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

namespace Mautic\\CoreBundle\\Helper\\DateTime;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class DateTimeToken
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper,
        private DateTimeLocalization \$dateTimeLocalization
    ) {
    }

    /**
     * @return array<string>
     */
    public function getTokens(string \$content, string \$contactTimezone = null): array
    {
        \$tokens = [];
        preg_match_all('/{today(.*?)}/', \$content, \$matches);
        if (!empty(\$matches[1])) {
            foreach (\$matches[1] as \$key => \$modifier) {
                \$token = \$matches[0][\$key];

                if (isset(\$tokens[\$token])) {
                    continue;
                }

                \$tokens[\$token] = \$this->getToday(\$modifier, \$contactTimezone);
            }
        }

        return \$tokens;
    }

    private function getToday(string \$modifier, ?string \$contactTimezone): string
    {
        \$defaultDateFormat     = \$this->coreParametersHelper->get('date_format_dateonly');
        \$defaultTimeFormat     = \$this->coreParametersHelper->get('date_format_timeonly');
        \$defaultDatetimeFormat = sprintf('%s %s', \$defaultDateFormat, \$defaultTimeFormat);
        \$contactTimezone       = \$contactTimezone ?: \$this->coreParametersHelper->get('default_timezone', 'UTC');
        \$dateTime              = new \\DateTime('now', new \\DateTimeZone(\$contactTimezone));

        \$parseModifier = explode('|', ltrim(\$modifier, '|'));
        \$modifier      = \$parseModifier[0] ?? '';
        \$relativeDate  = \$parseModifier[1] ?? '';

        \$format = match (\$modifier) {
            'datetime' => \$defaultDatetimeFormat,
            'date'     => \$defaultDateFormat,
            'time'     => \$defaultTimeFormat,
            default    => \$modifier ?: \$defaultDatetimeFormat,
        };

        if (\$relativeDate) {
            \$dateTime->modify(\$relativeDate);
        }

        return \$this->dateTimeLocalization->localize(\$dateTime->format(\$format));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/DateTime/DateTimeToken.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/DateTime/DateTimeToken.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\DateTime\\DateTimeToken.php");
    }
}
