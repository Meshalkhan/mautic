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

/* @bundles/ConfigBundle/Form/Type/EscapeTransformer.php */
class __TwigTemplate_4023af29f93ec4c3481c510e062548f4 extends Template
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

namespace Mautic\\ConfigBundle\\Form\\Type;

use Symfony\\Component\\Form\\DataTransformerInterface;

/**
 * @implements DataTransformerInterface<array<string|int|float|array<string|int|float>>|string|int|float, array<string|int|float|array<string|int|float>>|string|int|float>
 */
class EscapeTransformer implements DataTransformerInterface
{
    /**
     * @var string[]
     */
    private array \$allowedParameters;

    public function __construct(array \$allowedParameters)
    {
        \$this->allowedParameters = array_filter(\$allowedParameters);
    }

    /**
     * @param array<string|int|float|array<string|int|float>>|string|int|float \$value
     *
     * @return array<string|int|float|array<string|int|float>>|string|int|float
     */
    public function transform(\$value)
    {
        if (is_array(\$value)) {
            return array_map(fn (\$value) => \$this->unescape(\$value), \$value);
        }

        return \$this->unescape(\$value);
    }

    /**
     * @param array<string|int|float|array<string|int|float>>|string|int|float \$value
     *
     * @return array<string|int|float|array<string|int|float>>|string|int|float
     */
    public function reverseTransform(\$value)
    {
        if (is_array(\$value)) {
            return array_map(fn (\$value) => \$this->escape(\$value), \$value);
        }

        return \$this->escape(\$value);
    }

    /**
     * @param mixed \$value
     *
     * @return mixed
     */
    private function unescape(\$value)
    {
        if (!is_string(\$value)) {
            return \$value;
        }

        return str_replace('%%', '%', \$value);
    }

    /**
     * @param mixed \$value
     *
     * @return mixed
     */
    private function escape(\$value)
    {
        if (!is_string(\$value)) {
            return \$value;
        }

        \$escaped = str_replace('%', '%%', \$value);

        return \$this->allowParameters(\$escaped);
    }

    private function allowParameters(string \$escaped): string
    {
        if (!\$this->allowedParameters) {
            return \$escaped;
        }

        \$search  = array_map(fn (string \$value): string => \"%%{\$value}%%\", \$this->allowedParameters);
        \$replace = array_map(fn (string \$value): string => \"%{\$value}%\", \$this->allowedParameters);

        return str_ireplace(\$search, \$replace, \$escaped);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Form/Type/EscapeTransformer.php";
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
        return new Source("", "@bundles/ConfigBundle/Form/Type/EscapeTransformer.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Form\\Type\\EscapeTransformer.php");
    }
}
