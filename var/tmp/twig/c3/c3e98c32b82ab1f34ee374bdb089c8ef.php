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

/* @bundles/CoreBundle/Helper/FileHelper.php */
class __TwigTemplate_e3a02dd7844dd3ccc2a05c510c41edaa extends Template
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

class FileHelper
{
    public const BYTES_TO_MEGABYTES_RATIO = 1_048_576;

    public static function convertBytesToMegabytes(\$b): float
    {
        return round(\$b / self::BYTES_TO_MEGABYTES_RATIO, 2);
    }

    public static function convertMegabytesToBytes(\$mb)
    {
        return \$mb * self::BYTES_TO_MEGABYTES_RATIO;
    }

    public static function getMaxUploadSizeInBytes(): int
    {
        \$maxPostSize   = self::convertPHPSizeToBytes(ini_get('post_max_size'));
        \$maxUploadSize = self::convertPHPSizeToBytes(ini_get('upload_max_filesize'));
        \$memoryLimit   = self::convertPHPSizeToBytes(ini_get('memory_limit'));

        return min(\$maxPostSize, \$maxUploadSize, \$memoryLimit);
    }

    public static function getMaxUploadSizeInMegabytes(): float
    {
        \$maxUploadSizeInBytes = self::getMaxUploadSizeInBytes();

        return self::convertBytesToMegabytes(\$maxUploadSizeInBytes);
    }

    /**
     * @param string \$sSize
     */
    public static function convertPHPSizeToBytes(\$sSize): int
    {
        \$sSize = trim(\$sSize);

        if (is_numeric(\$sSize)) {
            return (int) \$sSize;
        }

        \$sSuffix = substr(\$sSize, -1);
        \$iValue  = (int) substr(\$sSize, 0, -1);

        // missing breaks are important
        switch (strtoupper(\$sSuffix)) {
            case 'P':
                \$iValue *= 1024;
                // no break
            case 'T':
                \$iValue *= 1024;
                // no break
            case 'G':
                \$iValue *= 1024;
                // no break
            case 'M':
                \$iValue *= 1024;
                // no break
            case 'K':
                \$iValue *= 1024;
                break;
        }

        return \$iValue;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/FileHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/FileHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\FileHelper.php");
    }
}
