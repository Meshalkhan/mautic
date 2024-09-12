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

/* @bundles/UserBundle/DependencyInjection/Firewall/Factory/PluginFactory.php */
class __TwigTemplate_3047d219a429220a02ed155eba0ff657 extends Template
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

namespace Mautic\\UserBundle\\DependencyInjection\\Firewall\\Factory;

use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\SecurityFactoryInterface;
use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class PluginFactory implements SecurityFactoryInterface
{
    public function create(ContainerBuilder \$container, string \$id, array \$config, string \$userProvider, ?string \$defaultEntryPoint): array
    {
        \$providerId = 'security.authentication.provider.mautic.'.\$id;
        \$container->setDefinition(\$providerId, new ChildDefinition('mautic.user.preauth_authenticator'))
            ->replaceArgument(3, new Reference(\$userProvider))
            ->replaceArgument(4, \$id);

        \$listenerId = 'security.authentication.listener.mautic.'.\$id;
        \$container->setDefinition(\$listenerId, new ChildDefinition('mautic.security.authentication_listener'))
            ->replaceArgument(5, \$id);

        return [\$providerId, \$listenerId, \$defaultEntryPoint];
    }

    /**
     * @return string
     */
    public function getPosition()
    {
        return 'pre_auth';
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return 'mautic_plugin_auth';
    }

    public function addConfiguration(NodeDefinition \$node): void
    {
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/DependencyInjection/Firewall/Factory/PluginFactory.php";
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
        return new Source("", "@bundles/UserBundle/DependencyInjection/Firewall/Factory/PluginFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\DependencyInjection\\Firewall\\Factory\\PluginFactory.php");
    }
}
