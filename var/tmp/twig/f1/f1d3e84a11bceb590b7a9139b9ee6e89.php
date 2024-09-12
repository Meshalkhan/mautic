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

/* @bundles/PluginBundle/Integration/IntegrationObject.php */
class __TwigTemplate_e93680758b1f2b55388ae7e41940b51f extends Template
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

namespace Mautic\\PluginBundle\\Integration;

class IntegrationObject
{
    /**
     * @param string \$type
     * @param string \$internalType
     */
    public function __construct(
        private \$type,
        private \$internalType
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
    public function getInternalType()
    {
        return \$this->internalType;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Integration/IntegrationObject.php";
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
        return new Source("", "@bundles/PluginBundle/Integration/IntegrationObject.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Integration\\IntegrationObject.php");
    }
}
