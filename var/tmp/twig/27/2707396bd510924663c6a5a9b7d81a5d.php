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

/* @bundles/CoreBundle/Twig/Extension/AppExtension.php */
class __TwigTemplate_730a862ce34e4c6a1c1b042fe6d7387e extends Template
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

use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;
use Twig\\TwigTest;

class AppExtension extends AbstractExtension
{
    /**
     * @return TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('ini_get', fn (\$value) => ini_get(\$value)),
            new TwigFunction('is_class', fn (string \$value) => class_exists(\$value)),
            new TwigFunction('is_file', fn (string \$value) => file_exists(\$value)),
            new TwigFunction('is_function', fn (string \$value) => function_exists(\$value)),
            new TwigFunction('is_extension_loaded', fn (string \$value) => extension_loaded(\$value)),
        ];
    }

    /**
     * @return TwigTest[]
     */
    public function getTests(): array
    {
        return [
            new TwigTest('string', fn (\$value) => is_string(\$value)),
            new TwigTest('class', fn (string \$value) => class_exists(\$value)),
            new TwigTest('file', fn (string \$value) => file_exists(\$value)),
            new TwigTest('function', fn (string \$value) => function_exists(\$value)),
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Twig/Extension/AppExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/AppExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Extension\\AppExtension.php");
    }
}
