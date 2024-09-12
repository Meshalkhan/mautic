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

/* @bundles/IntegrationsBundle/Sync/DAO/Mapping/FieldMappingDAO.php */
class __TwigTemplate_99454e511e39840237864454ca43c42c extends Template
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

class FieldMappingDAO
{
    private bool \$isRequired;

    /**
     * @param string \$internalObject
     * @param string \$internalField
     * @param string \$integrationObject
     * @param string \$integrationField
     * @param string \$syncDirection
     * @param bool   \$isRequired
     */
    public function __construct(
        private \$internalObject,
        private \$internalField,
        private \$integrationObject,
        private \$integrationField,
        private \$syncDirection,
        \$isRequired
    ) {
        \$this->isRequired        = (bool) \$isRequired;
    }

    /**
     * @return string
     */
    public function getInternalObject()
    {
        return \$this->internalObject;
    }

    /**
     * @return string
     */
    public function getInternalField()
    {
        return \$this->internalField;
    }

    /**
     * @return string
     */
    public function getIntegrationObject()
    {
        return \$this->integrationObject;
    }

    /**
     * @return string
     */
    public function getIntegrationField()
    {
        return \$this->integrationField;
    }

    /**
     * @return string
     */
    public function getSyncDirection()
    {
        return \$this->syncDirection;
    }

    public function isRequired(): bool
    {
        return \$this->isRequired;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Mapping/FieldMappingDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Mapping/FieldMappingDAO.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\DAO\\Mapping\\FieldMappingDAO.php");
    }
}
