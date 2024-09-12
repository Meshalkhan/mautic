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

/* @bundles/LeadBundle/Tracker/Service/DeviceCreatorService/DeviceCreatorService.php */
class __TwigTemplate_afaa69610567a4888565e7f7e8f64a67 extends Template
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

namespace Mautic\\LeadBundle\\Tracker\\Service\\DeviceCreatorService;

use DeviceDetector\\DeviceDetector;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadDevice;

final class DeviceCreatorService implements DeviceCreatorServiceInterface
{
    public function getCurrentFromDetector(DeviceDetector \$deviceDetector, Lead \$assignedLead): LeadDevice
    {
        \$device = new LeadDevice();
        \$device->setClientInfo(\$deviceDetector->getClient());
        \$device->setDevice(\$deviceDetector->getDeviceName());
        \$device->setDeviceBrand(\$deviceDetector->getBrandName());
        \$device->setDeviceModel(\$deviceDetector->getModel());
        \$device->setDeviceOs(\$deviceDetector->getOs());
        \$device->setDateAdded(new \\DateTime());
        \$device->setLead(\$assignedLead);

        return \$device;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tracker/Service/DeviceCreatorService/DeviceCreatorService.php";
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
        return new Source("", "@bundles/LeadBundle/Tracker/Service/DeviceCreatorService/DeviceCreatorService.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Tracker\\Service\\DeviceCreatorService\\DeviceCreatorService.php");
    }
}
