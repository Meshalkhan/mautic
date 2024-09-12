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

/* @bundles/WebhookBundle/DependencyInjection/MauticWebhookExtension.php */
class __TwigTemplate_cdeda1f4fa955d4a36a85379cb34423c extends Template
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

namespace Mautic\\WebhookBundle\\DependencyInjection;

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Extension\\Extension;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;

class MauticWebhookExtension extends Extension
{
    /**
     * @param mixed[] \$configs
     */
    public function load(array \$configs, ContainerBuilder \$container): void
    {
        \$loader = new PhpFileLoader(\$container, new FileLocator(__DIR__.'/../Config'));
        \$loader->load('services.php');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/DependencyInjection/MauticWebhookExtension.php";
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
        return new Source("", "@bundles/WebhookBundle/DependencyInjection/MauticWebhookExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\DependencyInjection\\MauticWebhookExtension.php");
    }
}
