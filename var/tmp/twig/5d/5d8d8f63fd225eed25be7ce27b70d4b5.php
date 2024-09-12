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

/* @bundles/CoreBundle/Factory/TransifexFactory.php */
class __TwigTemplate_d37b4ae1514e49abba066701f37e7a53 extends Template
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

namespace Mautic\\CoreBundle\\Factory;

use Http\\Factory\\Guzzle\\RequestFactory;
use Http\\Factory\\Guzzle\\StreamFactory;
use Http\\Factory\\Guzzle\\UriFactory;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\Transifex\\Config;
use Mautic\\Transifex\\Exception\\InvalidConfigurationException;
use Mautic\\Transifex\\Transifex;
use Mautic\\Transifex\\TransifexInterface;
use Psr\\Http\\Client\\ClientInterface;

class TransifexFactory
{
    private ?TransifexInterface \$transifex = null;

    public function __construct(
        private ClientInterface \$client,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    /**
     * @throws InvalidConfigurationException
     */
    public function getTransifex(): TransifexInterface
    {
        if (!\$this->transifex) {
            \$this->transifex = \$this->create(\$this->client, \$this->coreParametersHelper->get('transifex_api_token') ?? '');
        }

        return \$this->transifex;
    }

    /**
     * @throws InvalidConfigurationException
     */
    private function create(ClientInterface \$client, string \$apiToken): TransifexInterface
    {
        \$config = new Config();
        \$config->setApiToken(\$apiToken);
        \$config->setOrganization('mautic');
        \$config->setProject('mautic');

        return new Transifex(\$client, new RequestFactory(), new StreamFactory(), new UriFactory(), \$config);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Factory/TransifexFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Factory/TransifexFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Factory\\TransifexFactory.php");
    }
}
