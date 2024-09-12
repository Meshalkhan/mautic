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

/* @bundles/LeadBundle/Event/LeadDeviceEvent.php */
class __TwigTemplate_b34086126c214279d05c108828e9516f extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\LeadDevice;

class LeadDeviceEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(LeadDevice &\$device, \$isNew = false)
    {
        \$this->entity = &\$device;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the LeadDevice entity.
     *
     * @return LeadDevice
     */
    public function getDevice()
    {
        return \$this->entity;
    }

    /**
     * Sets the LeadDevice entity.
     */
    public function setDevice(LeadDevice \$device): void
    {
        \$this->entity = \$device;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadDeviceEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadDeviceEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\LeadDeviceEvent.php");
    }
}
