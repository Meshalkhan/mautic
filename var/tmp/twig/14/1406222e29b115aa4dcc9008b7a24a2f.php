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

/* @bundles/LeadBundle/Twig/Helper/DefaultAvatarHelper.php */
class __TwigTemplate_1a0bc9ab95b8271157b3429026aba544 extends Template
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

namespace Mautic\\LeadBundle\\Twig\\Helper;

use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;

final class DefaultAvatarHelper
{
    public function __construct(
        private AssetsHelper \$assetsHelper
    ) {
    }

    public function getDefaultAvatar(bool \$absolute = false): string
    {
        return \$this->assetsHelper->getOverridableUrl('images/avatar.svg', \$absolute);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Twig/Helper/DefaultAvatarHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Twig/Helper/DefaultAvatarHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Twig\\Helper\\DefaultAvatarHelper.php");
    }
}
