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

/* @bundles/IntegrationsBundle/Helper/SyncIntegrationsHelper.php */
class __TwigTemplate_352bad01482d1982cca2d2079507daf0 extends Template
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

namespace Mautic\\IntegrationsBundle\\Helper;

use Mautic\\IntegrationsBundle\\Exception\\IntegrationNotFoundException;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\ConfigFormFeaturesInterface;
use Mautic\\IntegrationsBundle\\Integration\\Interfaces\\SyncInterface;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\ObjectProvider;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\SyncDataExchangeInterface;

class SyncIntegrationsHelper
{
    /**
     * @var SyncInterface[]
     */
    private array \$integrations = [];

    /**
     * @var array<int,string>|null
     */
    private ?array \$enabled = null;

    public function __construct(
        private IntegrationsHelper \$integrationsHelper,
        private ObjectProvider \$objectProvider
    ) {
    }

    public function addIntegration(SyncInterface \$integration): void
    {
        \$this->integrations[\$integration->getName()] = \$integration;
    }

    /**
     * @return SyncInterface
     *
     * @throws IntegrationNotFoundException
     */
    public function getIntegration(string \$integration)
    {
        if (!isset(\$this->integrations[\$integration])) {
            throw new IntegrationNotFoundException(\"\$integration either doesn't exist or has not been tagged with mautic.sync_integration\");
        }

        return \$this->integrations[\$integration];
    }

    /**
     * @return array<int,string>|null
     *
     * @throws IntegrationNotFoundException
     */
    public function getEnabledIntegrations()
    {
        if (null !== \$this->enabled) {
            return \$this->enabled;
        }

        \$this->enabled = [];
        foreach (\$this->integrations as \$name => \$syncIntegration) {
            try {
                \$integrationConfiguration = \$this->integrationsHelper->getIntegrationConfiguration(\$syncIntegration);

                if (\$integrationConfiguration->getIsPublished()) {
                    \$this->enabled[] = \$name;
                }
            } catch (IntegrationNotFoundException) {
                // Just ignore as the plugin hasn't been installed yet
            }
        }

        return \$this->enabled;
    }

    /**
     * @throws IntegrationNotFoundException
     * @throws ObjectNotFoundException
     */
    public function hasObjectSyncEnabled(string \$mauticObject): bool
    {
        // Ensure the internal object exists.
        \$this->objectProvider->getObjectByName(\$mauticObject);

        \$enabledIntegrations = \$this->getEnabledIntegrations();

        foreach (\$enabledIntegrations as \$integration) {
            \$syncIntegration          = \$this->getIntegration(\$integration);
            \$integrationConfiguration = \$syncIntegration->getIntegrationConfiguration();

            // Sync is enabled
            \$enabledFeatures = \$integrationConfiguration->getSupportedFeatures();
            if (!in_array(ConfigFormFeaturesInterface::FEATURE_SYNC, \$enabledFeatures)) {
                continue;
            }

            // At least one object is enabled
            \$featureSettings = \$integrationConfiguration->getFeatureSettings();
            if (empty(\$featureSettings['sync']['objects'])) {
                continue;
            }

            try {
                // Find what object is mapped to Mautic's object
                \$mappingManual     = \$syncIntegration->getMappingManual();
                \$mappedObjectNames = \$mappingManual->getMappedIntegrationObjectsNames(\$mauticObject);
                foreach (\$mappedObjectNames as \$mappedObjectName) {
                    if (in_array(\$mappedObjectName, \$featureSettings['sync']['objects'])) {
                        return true;
                    }
                }
            } catch (ObjectNotFoundException) {
                // Object is not supported so just continue
            }
        }

        return false;
    }

    /**
     * @throws IntegrationNotFoundException
     */
    public function getMappingManual(string \$integration): MappingManualDAO
    {
        \$integration = \$this->getIntegration(\$integration);

        return \$integration->getMappingManual();
    }

    /**
     * @throws IntegrationNotFoundException
     */
    public function getSyncDataExchange(string \$integration): SyncDataExchangeInterface
    {
        \$integration = \$this->getIntegration(\$integration);

        return \$integration->getSyncDataExchange();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Helper/SyncIntegrationsHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Helper/SyncIntegrationsHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Helper\\SyncIntegrationsHelper.php");
    }
}
