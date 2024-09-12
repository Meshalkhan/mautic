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

/* @bundles/IntegrationsBundle/Sync/DAO/Mapping/UpdatedObjectMappingDAO.php */
class __TwigTemplate_5ab435b1e9f8a73325227784331dc633 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping;

use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;

class UpdatedObjectMappingDAO
{
    private \\DateTimeInterface \$objectModifiedDate;

    private ?ObjectMapping \$objectMapping = null;

    /**
     * @param string \$integration
     * @param string \$integrationObjectName
     * @param mixed  \$integrationObjectId
     */
    public function __construct(
        private \$integration,
        private \$integrationObjectName,
        private \$integrationObjectId,
        \\DateTimeInterface \$objectModifiedDate
    ) {
        \$this->objectModifiedDate    = \$objectModifiedDate instanceof \\DateTimeImmutable ? new \\DateTime(
            \$objectModifiedDate->format('Y-m-d H:i:s'),
            \$objectModifiedDate->getTimezone()
        ) : \$objectModifiedDate;
    }

    public function getIntegration(): string
    {
        return \$this->integration;
    }

    public function getIntegrationObjectName(): string
    {
        return \$this->integrationObjectName;
    }

    /**
     * @return mixed
     */
    public function getIntegrationObjectId()
    {
        return \$this->integrationObjectId;
    }

    public function getObjectModifiedDate(): \\DateTimeInterface
    {
        return \$this->objectModifiedDate;
    }

    public function setObjectMapping(ObjectMapping \$objectMapping): void
    {
        \$this->objectMapping = \$objectMapping;
    }

    /**
     * This is set after the ObjectMapping entity has been persisted to the database with the updates from this object.
     */
    public function getObjectMapping(): ?ObjectMapping
    {
        return \$this->objectMapping;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Mapping/UpdatedObjectMappingDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Mapping/UpdatedObjectMappingDAO.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\DAO\\Mapping\\UpdatedObjectMappingDAO.php");
    }
}
