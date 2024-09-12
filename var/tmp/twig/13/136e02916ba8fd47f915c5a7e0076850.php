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

/* @bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactoryInterface.php */
class __TwigTemplate_03e987f2f9f9811b5b58100d283e0f8f extends Template
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

use DeviceDetector\\DeviceDetector;

/**
 * Interface DeviceDetectorFactoryInterface.
 */
interface DeviceDetectorFactoryInterface
{
    /**
     * @param string \$userAgent
     *
     * @return DeviceDetector
     */
    public function create(\$userAgent);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactoryInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/Factory/DeviceDetectorFactory/DeviceDetectorFactoryInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Tracker\\Factory\\DeviceDetectorFactory\\DeviceDetectorFactoryInterface.php");
    }
}
