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

/* @bundles/LeadBundle/Field/Settings/BackgroundSettings.php */
class __TwigTemplate_d7e6927a9569ce86251e98173bd8c539 extends Template
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

namespace Mautic\\LeadBundle\\Field\\Settings;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class BackgroundSettings
{
    public const CREATE_CUSTOM_FIELD_IN_BACKGROUND = 'create_custom_field_in_background';

    public function __construct(
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function shouldProcessColumnChangeInBackground(): bool
    {
        return (bool) \$this->coreParametersHelper->get(self::CREATE_CUSTOM_FIELD_IN_BACKGROUND, false);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/Settings/BackgroundSettings.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Settings/BackgroundSettings.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Field\\Settings\\BackgroundSettings.php");
    }
}
