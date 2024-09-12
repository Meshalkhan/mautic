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

/* @bundles/CoreBundle/Form/DataTransformer/ArrayStringTransformer.php */
class __TwigTemplate_81788d438d36a86041bd589fc954675e extends Template
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
 * @implements DataTransformerInterface<array<string>|string|null, string>
 */
class ArrayStringTransformer implements DataTransformerInterface
{
    /**
     * @param array<string>|string|null \$array
     *
     * @return string
     */
    public function transform(\$array)
    {
        if (null === \$array) {
            return '';
        }
        if (is_string(\$array)) {
            return \$array;
        }

        return implode(',', \$array);
    }

    /**
     * @param string|null \$string
     *
     * @return array<string>
     */
    public function reverseTransform(\$string)
    {
        if (!\$string) {
            return [];
        }

        return array_map('trim', explode(',', \$string));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/DataTransformer/ArrayStringTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/ArrayStringTransformer.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Form\\DataTransformer\\ArrayStringTransformer.php");
    }
}
