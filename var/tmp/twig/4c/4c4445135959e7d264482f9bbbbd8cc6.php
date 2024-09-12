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

/* @bundles/CoreBundle/Loader/EnvVars/EnvVarsInterface.php */
class __TwigTemplate_f4fa49a4116184a2cfd9e0c9a14ebbde extends Template
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

namespace Mautic\\CoreBundle\\Loader\\EnvVars;

use Symfony\\Component\\HttpFoundation\\ParameterBag;

interface EnvVarsInterface
{
    /**
     * @param ParameterBag \$config        Bag with Mautic local parameters
     * @param ParameterBag \$defaultConfig Bag with bundle and plugin's default parameters
     * @param ParameterBag \$envVars       Set environment variables into this bag
     */
    public static function load(ParameterBag \$config, ParameterBag \$defaultConfig, ParameterBag \$envVars): void;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Loader/EnvVars/EnvVarsInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Loader/EnvVars/EnvVarsInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Loader\\EnvVars\\EnvVarsInterface.php");
    }
}
