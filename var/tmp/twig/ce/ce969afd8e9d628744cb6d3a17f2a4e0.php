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

/* @bundles/CoreBundle/DependencyInjection/EnvProcessor/NullableProcessor.php */
class __TwigTemplate_0f346d774e73179a7241ec9ffd4fb5d5 extends Template
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

namespace Mautic\\CoreBundle\\DependencyInjection\\EnvProcessor;

use Symfony\\Component\\DependencyInjection\\EnvVarProcessorInterface;

class NullableProcessor implements EnvVarProcessorInterface
{
    public function getEnv(\$prefix, \$name, \\Closure \$getEnv)
    {
        \$env = \$getEnv(\$name);

        return '' === \$env ? null : \$env;
    }

    public static function getProvidedTypes()
    {
        return [
            'nullable' => 'string',
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/DependencyInjection/EnvProcessor/NullableProcessor.php";
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
        return new Source("", "@bundles/CoreBundle/DependencyInjection/EnvProcessor/NullableProcessor.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\DependencyInjection\\EnvProcessor\\NullableProcessor.php");
    }
}
