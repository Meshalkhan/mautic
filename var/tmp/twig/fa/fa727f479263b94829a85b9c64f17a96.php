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

/* @bundles/CoreBundle/Twig/Extension/ConfigExtension.php */
class __TwigTemplate_098d7d97f04607a292b1ffaaffe2a288 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Extension;

use Mautic\\CoreBundle\\Twig\\Helper\\ConfigHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class ConfigExtension extends AbstractExtension
{
    public function __construct(
        private ConfigHelper \$configHelper
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('configGetParameter', [\$this, 'get']),
        ];
    }

    /**
     * @param mixed \$default
     *
     * @return mixed
     */
    public function get(string \$name, \$default = null)
    {
        return \$this->configHelper->get(\$name, \$default);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Twig/Extension/ConfigExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/ConfigExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Extension\\ConfigExtension.php");
    }
}
