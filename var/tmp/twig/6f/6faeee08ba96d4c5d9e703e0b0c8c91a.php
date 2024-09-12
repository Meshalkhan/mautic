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

/* @bundles/AssetBundle/Helper/PointActionHelper.php */
class __TwigTemplate_59c76fbaaaca1d80b5e2e2e50e0afe1f extends Template
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

namespace Mautic\\AssetBundle\\Helper;

class PointActionHelper
{
    public static function validateAssetDownload(\$eventDetails, \$action): bool
    {
        \$assetId       = \$eventDetails->getId();
        \$limitToAssets = \$action['properties']['assets'];

        if (!empty(\$limitToAssets) && !in_array(\$assetId, \$limitToAssets)) {
            // no points change
            return false;
        }

        return true;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Helper/PointActionHelper.php";
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
        return new Source("", "@bundles/AssetBundle/Helper/PointActionHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Helper\\PointActionHelper.php");
    }
}
