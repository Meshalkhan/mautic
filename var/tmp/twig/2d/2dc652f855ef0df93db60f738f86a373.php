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

/* @bundles/AssetBundle/Helper/TokenHelper.php */
class __TwigTemplate_527fc5be6df45f28d87ace06a6097c3b extends Template
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

use Mautic\\AssetBundle\\Model\\AssetModel;

class TokenHelper
{
    public function __construct(
        protected AssetModel \$model
    ) {
    }

    public function findAssetTokens(\$content, \$clickthrough = []): array
    {
        \$tokens = [];

        preg_match_all('/{assetlink=(.*?)}/', \$content, \$matches);
        if (!empty(\$matches[1])) {
            foreach (\$matches[1] as \$key => \$assetId) {
                \$token = \$matches[0][\$key];

                if (isset(\$tokens[\$token])) {
                    continue;
                }

                \$asset          = \$this->model->getEntity(\$assetId);
                \$tokens[\$token] = (null !== \$asset) ? \$this->model->generateUrl(\$asset, true, \$clickthrough) : '';
            }
        }

        return \$tokens;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Helper/TokenHelper.php";
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
        return new Source("", "@bundles/AssetBundle/Helper/TokenHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Helper\\TokenHelper.php");
    }
}
