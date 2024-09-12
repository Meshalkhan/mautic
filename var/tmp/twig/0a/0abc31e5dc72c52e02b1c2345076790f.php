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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/InformationChangeRequestDAO.php */
class __TwigTemplate_8f273d958b10f2c4581ffa4797ab612b extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync;

use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;

class InformationChangeRequestDAO
{
    private ?\\DateTimeInterface \$possibleChangeDateTime = null;

    private ?\\DateTimeInterface \$certainChangeDateTime = null;

    /**
     * @param string \$integration
     * @param string \$objectName
     * @param mixed  \$objectId
     * @param string \$field
     */
    public function __construct(
        private \$integration,
        private \$objectName,
        private \$objectId,
        private \$field,
        private NormalizedValueDAO \$newValue
    ) {
    }

    public function getIntegration(): string
    {
        return \$this->integration;
    }

    /**
     * @return mixed
     */
    public function getObjectId()
    {
        return \$this->objectId;
    }

    public function getObject(): string
    {
        return \$this->objectName;
    }

    public function getField(): string
    {
        return \$this->field;
    }

    public function getNewValue(): NormalizedValueDAO
    {
        return \$this->newValue;
    }

    public function getPossibleChangeDateTime(): ?\\DateTimeInterface
    {
        return \$this->possibleChangeDateTime;
    }

    public function setPossibleChangeDateTime(?\\DateTimeInterface \$possibleChangeDateTime = null): self
    {
        \$this->possibleChangeDateTime = \$possibleChangeDateTime;

        return \$this;
    }

    public function getCertainChangeDateTime(): ?\\DateTimeInterface
    {
        return \$this->certainChangeDateTime;
    }

    public function setCertainChangeDateTime(?\\DateTimeInterface \$certainChangeDateTime = null): self
    {
        \$this->certainChangeDateTime = \$certainChangeDateTime;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/InformationChangeRequestDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/InformationChangeRequestDAO.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\DAO\\Sync\\InformationChangeRequestDAO.php");
    }
}
