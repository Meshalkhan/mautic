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

/* @bundles/CoreBundle/Form/DataTransformer/SecondsConversionTransformer.php */
class __TwigTemplate_805372dfdc31d8f377c7b49342592379 extends Template
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

namespace Mautic\\CoreBundle\\Form\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;

/**
 * @implements DataTransformerInterface<string, string>
 */
class SecondsConversionTransformer implements DataTransformerInterface
{
    public function __construct(
        private \$viewFormat = 'H'
    ) {
    }

    /**
     * Converts to format.
     *
     * @param string|null \$value
     *
     * @return string
     */
    public function reverseTransform(\$value)
    {
        \$value = (int) \$value;

        match (\$this->viewFormat) {
            'i'     => \$value *= 60,
            'H'     => \$value *= 3600,
            'd'     => \$value *= 86400,
            'm'     => \$value *= 2_592_000,
            default => \$value,
        };

        return \$value;
    }

    /**
     * Converts to seconds.
     *
     * @param string \$value
     *
     * @return string
     */
    public function transform(\$value)
    {
        \$value = (int) \$value;

        match (\$this->viewFormat) {
            'i'     => \$value /= 60,
            'H'     => \$value /= 3600,
            'd'     => \$value /= 86400,
            'm'     => \$value /= 2_592_000,
            default => \$value,
        };

        return \$value;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/DataTransformer/SecondsConversionTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/SecondsConversionTransformer.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Form\\DataTransformer\\SecondsConversionTransformer.php");
    }
}
