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

/* @bundles/CoreBundle/Factory/IpLookupFactory.php */
class __TwigTemplate_a7e1b14ad46c79ad142ab0664b0645c9 extends Template
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

namespace Mautic\\CoreBundle\\Factory;

use GuzzleHttp\\Client;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\IpLookup\\AbstractLookup;
use Psr\\Log\\LoggerInterface;

class IpLookupFactory
{
    public function __construct(
        protected array \$lookupServices,
        protected ?LoggerInterface \$logger = null,
        protected ?Client \$client = null,
        protected ?string \$cacheDir = null,
        protected ?CoreParametersHelper \$coreParametersHelper = null
    ) {
    }

    /**
     * @return AbstractLookup|null
     */
    public function getService(\$service, \$auth = null, array \$ipLookupConfig = [])
    {
        static \$services = [];

        if (empty(\$service)) {
            return null;
        }

        if (!isset(\$services[\$service]) || (null !== \$auth || null !== \$ipLookupConfig)) {
            if (!isset(\$this->lookupServices[\$service])) {
                throw new \\InvalidArgumentException(\$service.' not registered.');
            }

            \$className = \$this->lookupServices[\$service]['class'];
            if (!str_starts_with(\$className, '\\\\')) {
                \$className = '\\\\'.\$className;
            }

            \$services[\$service] = new \$className(
                \$auth,
                \$ipLookupConfig,
                \$this->cacheDir,
                \$this->logger,
                \$this->client,
                \$this->coreParametersHelper
            );
        }

        return \$services[\$service];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Factory/IpLookupFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Factory/IpLookupFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Factory\\IpLookupFactory.php");
    }
}
