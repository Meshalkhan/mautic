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

/* @bundles/ReportBundle/Security/Permissions/ReportPermissions.php */
class __TwigTemplate_e550c049200b87af1bca57dcbfa2093e extends Template
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

namespace Mautic\\ReportBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Symfony\\Component\\Form\\FormBuilderInterface;

class ReportPermissions extends AbstractPermissions
{
    public function __construct(\$params)
    {
        parent::__construct(\$params);
        \$this->addExtendedPermissions('reports');
        \$this->addCustomPermission('export', ['enable' => 1024]);
    }

    public function getName(): string
    {
        return 'report';
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data): void
    {
        \$this->addExtendedFormFields('report', 'reports', \$builder, \$data);
        \$this->addCustomFormFields(
            \$this->getName(),
            'export',
            \$builder,
            'mautic.core.permissions.export',
            ['mautic.core.permissions.enable' => 'enable'],
            \$data
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
        return "@bundles/ReportBundle/Security/Permissions/ReportPermissions.php";
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
        return new Source("", "@bundles/ReportBundle/Security/Permissions/ReportPermissions.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Security\\Permissions\\ReportPermissions.php");
    }
}
