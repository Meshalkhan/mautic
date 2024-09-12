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

/* @bundles/EmailBundle/DependencyInjection/EnvProcessor/MailerDsnEnvVarProcessor.php */
class __TwigTemplate_890fdf30efb3ad0436c152752037cc53 extends Template
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

namespace Mautic\\EmailBundle\\DependencyInjection\\EnvProcessor;

use Mautic\\CoreBundle\\Helper\\Dsn\\Dsn;
use Symfony\\Component\\DependencyInjection\\EnvVarProcessorInterface;

class MailerDsnEnvVarProcessor implements EnvVarProcessorInterface
{
    public function getEnv(\$prefix, \$name, \\Closure \$getEnv)
    {
        \$env = \$getEnv(\$name);
        try {
            Dsn::fromString(\$env);

            return str_replace('%%', '%', \$env);
        } catch (\\InvalidArgumentException) {
            return 'invalid://null';
        }
    }

    public static function getProvidedTypes()
    {
        return [
            'mailer'         => 'string',
            'urlencoded-dsn' => 'string',
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
        return "@bundles/EmailBundle/DependencyInjection/EnvProcessor/MailerDsnEnvVarProcessor.php";
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
        return new Source("", "@bundles/EmailBundle/DependencyInjection/EnvProcessor/MailerDsnEnvVarProcessor.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\DependencyInjection\\EnvProcessor\\MailerDsnEnvVarProcessor.php");
    }
}
