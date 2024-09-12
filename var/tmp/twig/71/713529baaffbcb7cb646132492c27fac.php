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

/* @bundles/IntegrationsBundle/Sync/DAO/Value/EncodedValueDAO.php */
class __TwigTemplate_da2db4717fbff78945b1147c7fb3e3b2 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Value;

class EncodedValueDAO
{
    public const STRING_TYPE   = 'string';

    public const INT_TYPE      = 'int';

    public const FLOAT_TYPE    = 'float';

    public const DOUBLE_TYPE   = 'double';

    public const DATETIME_TYPE = 'datetime';

    public const BOOLEAN_TYPE  = 'boolean';

    /**
     * @param string \$type
     * @param string \$value
     */
    public function __construct(
        private \$type,
        private \$value
    ) {
    }

    /**
     * @return string
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return \$this->value;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Value/EncodedValueDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Value/EncodedValueDAO.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\DAO\\Value\\EncodedValueDAO.php");
    }
}
