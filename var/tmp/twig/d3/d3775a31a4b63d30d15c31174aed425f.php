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

/* @bundles/MarketplaceBundle/Security/Permissions/MarketplacePermissions.php */
class __TwigTemplate_b24beb9c165646a2e7efd5c24b9b11b6 extends Template
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

namespace Mautic\\MarketplaceBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Mautic\\MarketplaceBundle\\Service\\Config;
use Symfony\\Component\\Form\\FormBuilderInterface;

class MarketplacePermissions extends AbstractPermissions
{
    public const BASE                 = 'marketplace';

    public const PACKAGES             = 'packages';

    public const CAN_VIEW_PACKAGES    = self::BASE.':'.self::PACKAGES.':view';

    public const CAN_INSTALL_PACKAGES = self::BASE.':'.self::PACKAGES.':create';

    public const CAN_REMOVE_PACKAGES  = self::BASE.':'.self::PACKAGES.':remove';

    public function __construct(
        CoreParametersHelper \$coreParametersHelper,
        private Config \$config
    ) {
        parent::__construct(\$coreParametersHelper->all());
    }

    public function definePermissions(): void
    {
        \$this->addStandardPermissions(self::PACKAGES, false);
    }

    public function isEnabled(): bool
    {
        return \$this->config->marketplaceIsEnabled();
    }

    public function getName(): string
    {
        return self::BASE;
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data): void
    {
        \$this->addStandardFormFields(self::BASE, self::PACKAGES, \$builder, \$data, false);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/Security/Permissions/MarketplacePermissions.php";
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
        return new Source("", "@bundles/MarketplaceBundle/Security/Permissions/MarketplacePermissions.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions.php");
    }
}
