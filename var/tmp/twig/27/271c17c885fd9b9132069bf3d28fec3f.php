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

/* @bundles/LeadBundle/Tracker/Service/DeviceTrackingService/DeviceTrackingServiceInterface.php */
class __TwigTemplate_aea48ef6edf14667708797d7c819219f extends Template
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

namespace Mautic\\LeadBundle\\Tracker\\Service\\DeviceTrackingService;

use Mautic\\LeadBundle\\Entity\\LeadDevice;

/**
 * Interface DeviceTrackingServiceInterface.
 */
interface DeviceTrackingServiceInterface
{
    /**
     * @return bool
     */
    public function isTracked();

    /**
     * @return LeadDevice|null
     */
    public function getTrackedDevice();

    /**
     * @param bool \$replaceExistingTracking
     *
     * @return LeadDevice
     */
    public function trackCurrentDevice(LeadDevice \$device, \$replaceExistingTracking = false);

    public function clearTrackingCookies();
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tracker/Service/DeviceTrackingService/DeviceTrackingServiceInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/Service/DeviceTrackingService/DeviceTrackingServiceInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Tracker\\Service\\DeviceTrackingService\\DeviceTrackingServiceInterface.php");
    }
}
