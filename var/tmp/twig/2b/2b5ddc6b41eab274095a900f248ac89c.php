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

/* @bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/Executioner/ReferenceResolver.php */
class __TwigTemplate_fce4097bb3d264a51d2753dd8fce6907 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Executioner;

use Doctrine\\DBAL\\Connection;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\FieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectChangeDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\ReferenceValueDAO;
use Mautic\\IntegrationsBundle\\Sync\\Logger\\DebugLogger;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Executioner\\Exception\\ReferenceNotFoundException;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Object\\Contact;
use Mautic\\IntegrationsBundle\\Sync\\SyncDataExchange\\MauticSyncDataExchange;

final class ReferenceResolver implements ReferenceResolverInterface
{
    public function __construct(
        private Connection \$connection
    ) {
    }

    /**
     * @param ObjectChangeDAO[] \$changedObjects
     */
    public function resolveReferences(string \$objectName, array \$changedObjects): void
    {
        if (Contact::NAME !== \$objectName) {
            DebugLogger::log(
                'N/A',
                sprintf(
                    'references are currently resolved only for %s. Given %s',
                    Contact::NAME,
                    \$objectName
                ),
                __CLASS__.':'.__FUNCTION__
            );

            return;
        }

        foreach (\$changedObjects as \$changedObject) {
            foreach (\$changedObject->getFields() as \$field) {
                \$value           = \$field->getValue();
                \$normalizedValue = \$value->getNormalizedValue();

                if (!\$normalizedValue instanceof ReferenceValueDAO) {
                    continue;
                }

                try {
                    \$resolvedReference = \$this->resolveReference(\$normalizedValue);
                } catch (ReferenceNotFoundException) {
                    \$resolvedReference = null;
                }

                \$resolvedValue = new NormalizedValueDAO(\$value->getType(), \$resolvedReference, \$resolvedReference);
                \$changedObject->addField(new FieldDAO(\$field->getName(), \$resolvedValue));
            }
        }
    }

    /**
     * @throws ReferenceNotFoundException
     */
    private function resolveReference(ReferenceValueDAO \$value): ?string
    {
        if (MauticSyncDataExchange::OBJECT_COMPANY === \$value->getType() && 0 < \$value->getValue()) {
            return \$this->getCompanyNameById(\$value->getValue());
        }

        return null;
    }

    /**
     * @throws ReferenceNotFoundException
     */
    private function getCompanyNameById(int \$id): string
    {
        \$qb = \$this->connection->createQueryBuilder();
        \$qb->select('c.companyname');
        \$qb->from(MAUTIC_TABLE_PREFIX.'companies', 'c');
        \$qb->where('c.id = :id');
        \$qb->setParameter('id', \$id);

        \$name = \$qb->executeQuery()->fetchOne();

        if (false === \$name) {
            throw new ReferenceNotFoundException(sprintf('Company reference for ID \"%d\" not found', \$id));
        }

        return \$name;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/Executioner/ReferenceResolver.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncDataExchange/Internal/Executioner/ReferenceResolver.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\SyncDataExchange\\Internal\\Executioner\\ReferenceResolver.php");
    }
}
