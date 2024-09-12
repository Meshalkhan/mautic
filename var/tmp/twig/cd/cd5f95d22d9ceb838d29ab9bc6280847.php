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

/* @bundles/ApiBundle/Config/services.php */
class __TwigTemplate_df96de9dbedd02615c654bd313fd6630 extends Template
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

use Mautic\\CoreBundle\\DependencyInjection\\MauticCoreExtension;
use Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator;

use function Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\service;

return function (ContainerConfigurator \$configurator): void {
    \$services = \$configurator->services()
        ->defaults()
        ->autowire()
        ->autoconfigure()
        ->public();

    \$excludes = [
        'Serializer/Exclusion',
        'Helper/BatchIdToEntityHelper.php',
    ];

    \$services->load('Mautic\\\\ApiBundle\\\\', '../')
        ->exclude('../{'.implode(',', array_merge(MauticCoreExtension::DEFAULT_EXCLUDES, \$excludes)).'}');

    \$services->load('Mautic\\\\ApiBundle\\\\Entity\\\\oAuth2\\\\', '../Entity/oAuth2/*Repository.php');

    \$services->get(Mautic\\ApiBundle\\Controller\\oAuth2\\AuthorizeController::class)
        ->arg('\$authorizeForm', service('fos_oauth_server.authorize.form'))
        ->arg('\$authorizeFormHandler', service('fos_oauth_server.authorize.form.handler.default'))
        ->arg('\$oAuth2Server', service('fos_oauth_server.server'))
        ->arg('\$clientManager', service('fos_oauth_server.client_manager.default'));

    \$services->alias('mautic.api.model.client', Mautic\\ApiBundle\\Model\\ClientModel::class);
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Config/services.php";
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
        return new Source("", "@bundles/ApiBundle/Config/services.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Config\\services.php");
    }
}
