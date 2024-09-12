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

/* @bundles/MessengerBundle/DependencyInjection/EnvProcessor/MessengerNullableEnvVarProcessor.php */
class __TwigTemplate_d1d1024f87ecc036786b9ab1d2f9692d extends Template
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

declare(strict_types=1);

namespace Mautic\\MessengerBundle\\DependencyInjection\\EnvProcessor;

use Symfony\\Component\\DependencyInjection\\EnvVarProcessorInterface;

class MessengerNullableEnvVarProcessor implements EnvVarProcessorInterface
{
    public function getEnv(\$prefix, \$name, \\Closure \$getEnv)
    {
        return \$getEnv(\$name) ?: 'null://';
    }

    public static function getProvidedTypes()
    {
        return [
            'messenger-nullable' => 'string',
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
        return "@bundles/MessengerBundle/DependencyInjection/EnvProcessor/MessengerNullableEnvVarProcessor.php";
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
        return new Source("", "@bundles/MessengerBundle/DependencyInjection/EnvProcessor/MessengerNullableEnvVarProcessor.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\DependencyInjection\\EnvProcessor\\MessengerNullableEnvVarProcessor.php");
    }
}
