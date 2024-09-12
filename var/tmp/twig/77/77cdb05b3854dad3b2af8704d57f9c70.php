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

/* @bundles/ApiBundle/DependencyInjection/Factory/ApiFactory.php */
class __TwigTemplate_59c3818e373028fa07e3e1eeb81c27eb extends Template
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

namespace Mautic\\ApiBundle\\DependencyInjection\\Factory;

use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Security\\Factory\\SecurityFactoryInterface;
use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;
use Symfony\\Component\\DependencyInjection\\ChildDefinition;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

class ApiFactory implements SecurityFactoryInterface
{
    public function create(ContainerBuilder \$container, string \$id, array \$config, string \$userProvider, ?string \$defaultEntryPoint): array
    {
        \$providerId = 'security.authentication.provider.mautic_api.'.\$id;
        \$container
            ->setDefinition(\$providerId, new ChildDefinition('mautic_api.security.authentication.provider'))
            ->replaceArgument(0, new Reference(\$userProvider));

        \$listenerId = 'security.authentication.listener.mautic_api.'.\$id;
        \$container->setDefinition(\$listenerId, new ChildDefinition('mautic_api.security.authentication.listener'));

        return [\$providerId, \$listenerId, \$defaultEntryPoint];
    }

    public function getPosition()
    {
        return 'pre_auth';
    }

    public function getKey()
    {
        return 'mautic_api_auth';
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
        return "@bundles/ApiBundle/DependencyInjection/Factory/ApiFactory.php";
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
        return new Source("", "@bundles/ApiBundle/DependencyInjection/Factory/ApiFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\DependencyInjection\\Factory\\ApiFactory.php");
    }
}
