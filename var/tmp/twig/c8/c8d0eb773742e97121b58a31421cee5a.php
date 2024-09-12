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

/* @bundles/InstallBundle/Twig/TwigExtension.php */
class __TwigTemplate_ea5a619dcf26d5b93d3f56fd9c03388a extends Template
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

namespace Mautic\\InstallBundle\\Twig;

use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFilter;

/**
 * TwigExtension class.
 */
class TwigExtension extends AbstractExtension
{
    /**
     * getFilters function.
     *
     * @return mixed[]
     */
    public function getFilters()
    {
        return [
            new TwigFilter('phpversion', [\$this, 'phpversion']),
        ];
    }

    public function phpversion(string \$value = ''): string|bool
    {
        return phpversion(\$value);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Twig/TwigExtension.php";
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
        return new Source("", "@bundles/InstallBundle/Twig/TwigExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\Twig\\TwigExtension.php");
    }
}
