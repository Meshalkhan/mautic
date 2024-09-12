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

/* @bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Helper/ValueHelper.php */
class __TwigTemplate_e35d92e56f36f0a37e0cdc5f560dac9d extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Helper;

use Mautic\\IntegrationsBundle\\Exception\\InvalidValueException;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping\\ObjectMappingDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\FieldDAO;
use Mautic\\IntegrationsBundle\\Sync\\DAO\\Value\\NormalizedValueDAO;

class ValueHelper
{
    private ?NormalizedValueDAO \$normalizedValueDAO = null;

    private ?string \$fieldState = null;

    private ?string \$syncDirection = null;

    /**
     * @throws InvalidValueException
     */
    public function getValueForIntegration(NormalizedValueDAO \$normalizedValueDAO, string \$fieldState, string \$syncDirection): NormalizedValueDAO
    {
        \$this->normalizedValueDAO = \$normalizedValueDAO;
        \$this->fieldState         = \$fieldState;
        \$this->syncDirection      = \$syncDirection;

        \$newValue = \$this->getValue(ObjectMappingDAO::SYNC_TO_MAUTIC);

        return new NormalizedValueDAO(\$normalizedValueDAO->getType(), \$normalizedValueDAO->getNormalizedValue(), \$newValue);
    }

    /**
     * @throws InvalidValueException
     */
    public function getValueForMautic(NormalizedValueDAO \$normalizedValueDAO, string \$fieldState, string \$syncDirection): NormalizedValueDAO
    {
        \$this->normalizedValueDAO = \$normalizedValueDAO;
        \$this->fieldState         = \$fieldState;
        \$this->syncDirection      = \$syncDirection;

        \$newValue = \$this->getValue(ObjectMappingDAO::SYNC_TO_INTEGRATION);

        return new NormalizedValueDAO(\$normalizedValueDAO->getType(), \$normalizedValueDAO->getNormalizedValue(), \$newValue);
    }

    /**
     * @return float|int|mixed|string
     *
     * @throws InvalidValueException
     */
    private function getValue(string \$directionToIgnore)
    {
        \$value = \$this->normalizedValueDAO->getNormalizedValue();

        // If the field is not required, do not force a value
        if (FieldDAO::FIELD_REQUIRED !== \$this->fieldState) {
            return \$value;
        }

        // If the field is not configured to update the Integration, do not force a value
        if (\$directionToIgnore === \$this->syncDirection) {
            return \$value;
        }

        // If the value is not empty (including 0 or false), do not force a value
        if (null !== \$value && '' !== \$value) {
            return \$value;
        }

        return match (\$this->normalizedValueDAO->getType()) {
            NormalizedValueDAO::EMAIL_TYPE, NormalizedValueDAO::DATE_TYPE, NormalizedValueDAO::DATETIME_TYPE, NormalizedValueDAO::BOOLEAN_TYPE => \$this->normalizedValueDAO->getOriginalValue(),
            NormalizedValueDAO::INT_TYPE => 0,
            NormalizedValueDAO::DOUBLE_TYPE, NormalizedValueDAO::FLOAT_TYPE => 1.0,
            default => throw new InvalidValueException(\"Required field can't be empty\"),
        };
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Helper/ValueHelper.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/SyncProcess/Direction/Helper/ValueHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\SyncProcess\\Direction\\Helper\\ValueHelper.php");
    }
}
