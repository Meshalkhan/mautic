<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Internal/MauticSyncProcess.php */
class __TwigTemplate_b1a89700a8303a51e63e91f74b61c905 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

declare(strict_types=1);

namespace Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Internal;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\MappingManualDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\InputOptionsDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\OrderDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ReportDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\ObjectDAO as RequestObjectDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Request\\RequestDAO;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectDeletedException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotSupportedException;
use Mautic\\IntegrationsBundle\\Sync\\Helper\\SyncDateHelper;
use Mautic\\IntegrationsBundle\\Sync\\Logger\\DebugLogger;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;

class MauticSyncProcess
{
    private ?InputOptionsDAO \$inputOptionsDAO = null;

    private ?MappingManualDAO \$mappingManualDAO = null;

    private ?MauticSyncDataExchange \$syncDataExchange = null;

    public function __construct(
        private SyncDateHelper \$syncDateHelper,
        private ObjectChangeGenerator \$objectChangeGenerator
    ) {
    }

    public function setupSync(InputOptionsDAO \$inputOptionsDAO, MappingManualDAO \$mappingManualDAO, MauticSyncDataExchange \$syncDataExchange): void
    {
        \$this->inputOptionsDAO  = \$inputOptionsDAO;
        \$this->mappingManualDAO = \$mappingManualDAO;
        \$this->syncDataExchange = \$syncDataExchange;
    }

    /**
     * @throws ObjectNotFoundException
     */
    public function getSyncReport(int \$syncIteration): ReportDAO
    {
        \$internalRequestDAO     = new RequestDAO(\$this->mappingManualDAO->getIntegration(), \$syncIteration, \$this->inputOptionsDAO);
        \$mauticObjectTypes      = \$internalRequestDAO->getInputOptionsDAO()->getMauticObjectIds() ?
            \$internalRequestDAO->getInputOptionsDAO()->getMauticObjectIds()->getObjectTypes() : [];
        \$hasMauticObjectIDs = 0 < count(\$mauticObjectTypes);

        \$internalObjectsNames = \$this->mappingManualDAO->getInternalObjectNames();
        foreach (\$internalObjectsNames as \$internalObjectName) {
            if (\$hasMauticObjectIDs) {
                try {
                    \$internalRequestDAO->getInputOptionsDAO()->getMauticObjectIds()->getObjectIdsFor(\$internalObjectName);
                } catch (ObjectNotFoundException) {
                    DebugLogger::log(
                        \$this->mappingManualDAO->getIntegration(),
                        sprintf(
                            'Mautic to integration; skipping sync for the %s object because certain object IDs are specified for other object(s)',
                            \$internalObjectName
                        ),
                        __CLASS__.':'.__FUNCTION__
                    );
                    continue;
                }
            }

            \$internalObjectFields = \$this->mappingManualDAO->getInternalObjectFieldsToSyncToIntegration(\$internalObjectName);
            if (0 === count(\$internalObjectFields)) {
                // No fields configured for a sync
                DebugLogger::log(
                    \$this->mappingManualDAO->getIntegration(),
                    sprintf(
                        'Mautic to integration; there are no fields for the %s object',
                        \$internalObjectName
                    ),
                    self::class.':'.__FUNCTION__
                );

                continue;
            }

            \$objectSyncFromDateTime = \$this->syncDateHelper->getSyncFromDateTime(MauticSyncDataExchange::NAME, \$internalObjectName);
            \$objectSyncToDateTime   = \$this->syncDateHelper->getSyncToDateTime();
            DebugLogger::log(
                \$this->mappingManualDAO->getIntegration(),
                sprintf(
                    'Mautic to integration; syncing from %s to %s for the %s object with %d fields',
                    \$objectSyncFromDateTime->format('Y-m-d H:i:s'),
                    \$objectSyncToDateTime->format('Y-m-d H:i:s'),
                    \$internalObjectName,
                    count(\$internalObjectFields)
                ),
                self::class.':'.__FUNCTION__
            );

            \$internalRequestObject  = new RequestObjectDAO(\$internalObjectName, \$objectSyncFromDateTime, \$objectSyncToDateTime);
            foreach (\$internalObjectFields as \$internalObjectField) {
                \$internalRequestObject->addField(\$internalObjectField);
            }

            // Set required fields for easy access; mainly for Mautic
            \$internalRequestObject->setRequiredFields(\$this->mappingManualDAO->getInternalObjectRequiredFieldNames(\$internalObjectName));
            \$internalRequestDAO->addObject(\$internalRequestObject);
        }

        return \$internalRequestDAO->shouldSync()
            ? \$this->syncDataExchange->getSyncReport(\$internalRequestDAO)
            :
            new ReportDAO(MauticSyncDataExchange::NAME);
    }

    /**
     * @throws ObjectNotFoundException
     * @throws ObjectNotSupportedException
     */
    public function getSyncOrder(ReportDAO \$syncReport): OrderDAO
    {
        \$syncOrder = new OrderDAO(\$this->syncDateHelper->getSyncDateTime(), \$this->inputOptionsDAO->isFirstTimeSync(), \$this->mappingManualDAO->getIntegration(), \$this->inputOptionsDAO->getOptions());

        \$integrationObjectsNames = \$this->mappingManualDAO->getIntegrationObjectNames();
        foreach (\$integrationObjectsNames as \$integrationObjectName) {
            \$integrationObjects         = \$syncReport->getObjects(\$integrationObjectName);
            \$mappedInternalObjectsNames = \$this->mappingManualDAO->getMappedInternalObjectsNames(\$integrationObjectName);

            DebugLogger::log(
                \$this->mappingManualDAO->getIntegration(),
                sprintf(
                    'Integration to Mautic; found %d objects for the %s object mapped to the %s Mautic object(s)',
                    count(\$integrationObjects),
                    \$integrationObjectName,
                    implode(', ', \$mappedInternalObjectsNames)
                ),
                self::class.':'.__FUNCTION__
            );

            foreach (\$mappedInternalObjectsNames as \$mappedInternalObjectName) {
                \$objectMapping = \$this->mappingManualDAO->getObjectMapping(\$mappedInternalObjectName, \$integrationObjectName);
                foreach (\$integrationObjects as \$integrationObject) {
                    try {
                        \$internalObject = \$this->syncDataExchange->getConflictedInternalObject(
                            \$this->mappingManualDAO,
                            \$mappedInternalObjectName,
                            \$integrationObject
                        );
                        \$objectChange   = \$this->objectChangeGenerator->getSyncObjectChange(
                            \$syncReport,
                            \$this->mappingManualDAO,
                            \$objectMapping,
                            \$internalObject,
                            \$integrationObject
                        );

                        if (\$objectChange->shouldSync()) {
                            \$syncOrder->addObjectChange(\$objectChange);
                        }
                    } catch (ObjectDeletedException) {
                        DebugLogger::log(
                            \$this->mappingManualDAO->getIntegration(),
                            sprintf(
                                'Integration to Mautic; the %s object with ID %s is marked deleted and thus not synced',
                                \$integrationObject->getObject(),
                                \$integrationObject->getObjectId()
                            ),
                            self::class.':'.__FUNCTION__
                        );
                    }
                }
            }
        }

        return \$syncOrder;
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Internal/MauticSyncProcess.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Internal/MauticSyncProcess.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Internal\\MauticSyncProcess.php");
    }
}
