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

/* @bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactory.php */
class __TwigTemplate_dea8eb8b37ee08326698ff6fd6d7ab02 extends Template
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

namespace Mautic\\LeadBundle\\Tracker\\Factory\\DeviceDetectorFactory;

use DeviceDetector\\Cache\\PSR6Bridge;
use DeviceDetector\\DeviceDetector;
use Mautic\\CacheBundle\\Cache\\CacheProvider;

final class DeviceDetectorFactory implements DeviceDetectorFactoryInterface
{
    public function __construct(
        private CacheProvider \$cacheProvider
    ) {
    }

    /**
     * @param string \$userAgent
     *
     * @throws \\Exception
     */
    public function create(\$userAgent): DeviceDetector
    {
        \$detector = new DeviceDetector((string) \$userAgent);
        \$bridge   = new PSR6Bridge(\$this->cacheProvider->getCacheAdapter());
        \$detector->setCache(\$bridge);

        return \$detector;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactory.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Tracker\\Factory\\DeviceDetectorFactory\\DeviceDetectorFactory.php");
    }
}
