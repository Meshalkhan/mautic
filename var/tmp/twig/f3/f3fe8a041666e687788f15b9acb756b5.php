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

/* @bundles/ConfigBundle/Mapper/Helper/RestrictionHelper.php */
class __TwigTemplate_982792f765a19e5f560188cd11f52380 extends Template
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

namespace Mautic\\ConfigBundle\\Mapper\\Helper;

class RestrictionHelper
{
    /**
     * Ensure that the array has string indexes for congruency with a nested array similar to ['db_host', 'monitored_email' => ['EmailBundle_bounces'];.
     */
    public static function prepareRestrictions(array \$restrictedParameters): array
    {
        \$prepared = [];
        foreach (\$restrictedParameters as \$key => \$value) {
            \$newKey            = (is_numeric(\$key)) ? \$value : \$key;
            \$prepared[\$newKey] = (is_array(\$value)) ? self::prepareRestrictions(\$value) : \$value;
        }

        return \$prepared;
    }

    /**
     * Remove fields that are restricted.
     */
    public static function applyRestrictions(array \$configParameters, array \$restrictedParameters, \$restrictedParentKey = null): array
    {
        if (\$restrictedParentKey) {
            if (!isset(\$restrictedParameters[\$restrictedParentKey])) {
                // No restrictions
                return \$configParameters;
            }

            \$restrictedParameters = \$restrictedParameters[\$restrictedParentKey];
        }

        foreach (\$configParameters as \$key => \$value) {
            // The entire form type is restricted
            if (isset(\$restrictedParameters[\$key]) && !is_array(\$restrictedParameters[\$key])) {
                unset(\$configParameters[\$key]);

                continue;
            }

            // A sub type of the form type is restricted
            if (is_array(\$value)) {
                \$configParameters[\$key] = self::applyRestrictions(\$value, \$restrictedParameters, \$key);

                continue;
            }

            // Otherwise no restrictions are in place
        }

        return \$configParameters;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Mapper/Helper/RestrictionHelper.php";
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
        return new Source("", "@bundles/ConfigBundle/Mapper/Helper/RestrictionHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Mapper\\Helper\\RestrictionHelper.php");
    }
}
