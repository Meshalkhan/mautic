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

/* @bundles/ConfigBundle/EventListener/ConfigSubscriber.php */
class __TwigTemplate_ff7ee1d848f2653a1ed863642d3124b7 extends Template
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

namespace Mautic\\ConfigBundle\\EventListener;

use Mautic\\ConfigBundle\\ConfigEvents;
use Mautic\\ConfigBundle\\Event\\ConfigEvent;
use Mautic\\ConfigBundle\\Service\\ConfigChangeLogger;
use Mautic\\CoreBundle\\Entity\\AuditLogRepository;
use Mautic\\CoreBundle\\Entity\\IpAddressRepository;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ConfigSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private ConfigChangeLogger \$configChangeLogger,
        private IpAddressRepository \$ipAddressRepository,
        private CoreParametersHelper \$coreParametersHelper,
        private AuditLogRepository \$auditLogRepository
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ConfigEvents::CONFIG_POST_SAVE => ['onConfigPostSave', 0],
        ];
    }

    public function onConfigPostSave(ConfigEvent \$event): void
    {
        if (\$originalNormData = \$event->getOriginalNormData()) {
            \$normData = \$event->getNormData();
            // We have something to log
            \$this->configChangeLogger
                ->setOriginalNormData(\$originalNormData)
                ->log(\$normData);

            if (!isset(\$originalNormData['trackingconfig']) && !isset(\$normData['trackingconfig'])) {
                return;
            }

            \$oldAnonymizeIp = \$originalNormData['trackingconfig']['parameters']['anonymize_ip'];
            \$newAnonymizeIp = \$normData['trackingconfig']['anonymize_ip'];

            if (\$oldAnonymizeIp !== \$newAnonymizeIp && \$newAnonymizeIp && !\$this->coreParametersHelper->get('anonymize_ip_address_in_background', false)) {
                \$this->ipAddressRepository->anonymizeAllIpAddress();
                \$this->auditLogRepository->anonymizeAllIpAddress();
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/EventListener/ConfigSubscriber.php";
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
        return new Source("", "@bundles/ConfigBundle/EventListener/ConfigSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\EventListener\\ConfigSubscriber.php");
    }
}
