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

/* @bundles/CoreBundle/Helper/DateTime/DateTimeLocalization.php */
class __TwigTemplate_2d533e047e65b98ad815bf336a98bba6 extends Template
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

use Symfony\\Contracts\\Translation\\TranslatorInterface;

class DateTimeLocalization
{
    public function __construct(
        private TranslatorInterface \$translator
    ) {
    }

    public function localize(string \$format): string
    {
        return str_replace(\$this->getDictionary(), array_keys(\$this->getDictionary()), \$format);
    }

    /**
     * @return array<string,string>
     */
    private function getDictionary(): array
    {
        \$months = [
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December',
        ];
        \$days   = [
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday',
            'Sun',
            'Mon',
            'Tue',
            'Wed',
            'Thu',
            'Fri',
            'Sat',
        ];
        \$values = array_merge(\$months, \$days);
        \$keys   = \$values;
        array_walk(\$keys, function (&\$key): void {
            \$key = \$this->translator->trans('mautic.core.date.'.strtolower(\$key));
        });

        return array_combine(\$keys, \$values);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/DateTime/DateTimeLocalization.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/DateTime/DateTimeLocalization.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\DateTime\\DateTimeLocalization.php");
    }
}
