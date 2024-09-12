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

/* @bundles/CoreBundle/Helper/ClickthroughHelper.php */
class __TwigTemplate_efe34d6502b48d9f13c7e1d6917c299c extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Mautic\\CoreBundle\\Exception\\InvalidDecodedStringException;

class ClickthroughHelper
{
    /**
     * Encode an array to append to a URL.
     */
    public static function encodeArrayForUrl(array \$array): string
    {
        return urlencode(base64_encode(serialize(\$array)));
    }

    /**
     * Decode a string appended to URL into an array.
     *
     * @param bool \$urlDecode
     *
     * @return array
     */
    public static function decodeArrayFromUrl(\$string, \$urlDecode = true)
    {
        \$raw     = \$urlDecode ? urldecode(\$string) : \$string;
        \$decoded = base64_decode(\$raw);

        if (empty(\$decoded)) {
            return [];
        }

        if (0 !== stripos(\$decoded, 'a')) {
            throw new InvalidDecodedStringException(\$decoded);
        }

        return Serializer::decode(\$decoded);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/ClickthroughHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ClickthroughHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\ClickthroughHelper.php");
    }
}
