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

/* @bundles/CoreBundle/Form/DataTransformer/ArrayLinebreakTransformer.php */
class __TwigTemplate_fdf0585784bae19afc0dc93a2746c127 extends Template
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
 * @implements DataTransformerInterface<array<string>|null, string|null>
 */
class ArrayLinebreakTransformer implements DataTransformerInterface
{
    /**
     * @param array<string>|null \$array
     *
     * @return string
     */
    public function transform(\$array)
    {
        if (null === \$array) {
            return '';
        }

        return implode(\"\\n\", \$array);
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

        return array_map('trim', explode(\"\\n\", \$string));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/DataTransformer/ArrayLinebreakTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/ArrayLinebreakTransformer.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Form\\DataTransformer\\ArrayLinebreakTransformer.php");
    }
}
