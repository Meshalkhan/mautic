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

/* @bundles/FormBundle/Security/Permissions/FormPermissions.php */
class __TwigTemplate_051040b82f098d1472b7cc1257bf8783 extends Template
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

namespace Mautic\\FormBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Symfony\\Component\\Form\\FormBuilderInterface;

class FormPermissions extends AbstractPermissions
{
    /**
     * @param array \$params
     */
    public function __construct(\$params)
    {
        parent::__construct(\$params);
        \$this->addCustomPermission('export', ['enable' => 1024]);
        \$this->addExtendedPermissions('forms');
        \$this->addStandardPermissions('categories');
    }

    public function getName(): string
    {
        return 'form';
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data): void
    {
        \$this->addStandardFormFields(\$this->getName(), 'categories', \$builder, \$data);
        \$this->addExtendedFormFields(\$this->getName(), 'forms', \$builder, \$data);
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
        return "@bundles/FormBundle/Security/Permissions/FormPermissions.php";
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
        return new Source("", "@bundles/FormBundle/Security/Permissions/FormPermissions.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Security\\Permissions\\FormPermissions.php");
    }
}
