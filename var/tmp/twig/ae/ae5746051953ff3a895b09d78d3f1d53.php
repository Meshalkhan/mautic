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

/* @bundles/CoreBundle/Form/DataTransformer/DatetimeToStringTransformer.php */
class __TwigTemplate_c49ff8cb878bfabee56e7c1fd7728507 extends Template
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
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 *
 * @implements DataTransformerInterface<string|null, \\DateTime>
 */
class DatetimeToStringTransformer implements DataTransformerInterface
{
    /**
     * @param string \$format
     */
    public function __construct(
        private \$format = 'Y-m-d H:i'
    ) {
    }

    /**
     * @param \\DateTime|null \$value
     *
     * @return string
     */
    public function reverseTransform(\$value)
    {
        if (empty(\$value)) {
            return null;
        }

        \$datetime = new \\DateTime(\$value->format(\$this->format));

        return \$datetime->format(\$this->format);
    }

    /**
     * @param string|null \$value
     *
     * @return \\DateTime
     */
    public function transform(\$value)
    {
        if (empty(\$value)) {
            return null;
        }

        return \\DateTime::createFromFormat(
            \$this->format,
            \$value
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/DataTransformer/DatetimeToStringTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/DatetimeToStringTransformer.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Form\\DataTransformer\\DatetimeToStringTransformer.php");
    }
}
