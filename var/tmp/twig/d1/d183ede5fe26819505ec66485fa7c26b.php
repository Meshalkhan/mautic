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

/* @bundles/ConfigBundle/Mapper/Helper/ConfigHelper.php */
class __TwigTemplate_9c613688cce26b42a9440668902fb44d extends Template
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

class ConfigHelper
{
    /**
     * Map local config values with form fields.
     *
     * @param mixed \$defaults
     */
    public static function bindNestedConfigValues(array \$configValues, \$defaults): array
    {
        if (!is_array(\$defaults)) {
            // Return all config values
            return \$configValues;
        }

        foreach (\$defaults as \$key => \$defaultValue) {
            if (isset(\$configValues[\$key]) && is_array(\$configValues[\$key])) {
                \$configValues[\$key] = self::bindNestedConfigValues(\$configValues[\$key], \$defaultValue);

                continue;
            }

            \$configValues[\$key] ??= \$defaultValue;
        }

        return \$configValues;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Mapper/Helper/ConfigHelper.php";
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
        return new Source("", "@bundles/ConfigBundle/Mapper/Helper/ConfigHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Mapper\\Helper\\ConfigHelper.php");
    }
}
