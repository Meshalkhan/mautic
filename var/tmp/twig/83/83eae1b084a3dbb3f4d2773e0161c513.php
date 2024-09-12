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

/* @bundles/UserBundle/Security/Permissions/UserPermissions.php */
class __TwigTemplate_4f054e31b69a257cd246f85406cdaea5 extends Template
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

namespace Mautic\\UserBundle\\Security\\Permissions;

use Mautic\\CoreBundle\\Security\\Permissions\\AbstractPermissions;
use Mautic\\UserBundle\\Form\\Type\\PermissionListType;
use Symfony\\Component\\Form\\FormBuilderInterface;

class UserPermissions extends AbstractPermissions
{
    public function __construct(\$params)
    {
        parent::__construct(\$params);
        \$this->permissions = [
            'profile' => [
                'editusername' => 1,
                'editemail'    => 2,
                'editposition' => 4,
                'editname'     => 8,
                'full'         => 1024,
            ],
        ];
        \$this->addStandardPermissions('users', false);
        \$this->addStandardPermissions('roles', false);
    }

    public function getName(): string
    {
        return 'user';
    }

    public function buildForm(FormBuilderInterface &\$builder, array \$options, array \$data): void
    {
        \$this->addStandardFormFields('user', 'users', \$builder, \$data, false);
        \$this->addStandardFormFields('user', 'roles', \$builder, \$data, false);

        \$builder->add(
            'user:profile',
            PermissionListType::class,
            [
                'choices'           => [
                    'mautic.user.account.permissions.editname'     => 'editname',
                    'mautic.user.account.permissions.editusername' => 'editusername',
                    'mautic.user.account.permissions.editemail'    => 'editemail',
                    'mautic.user.account.permissions.editposition' => 'editposition',
                    'mautic.user.account.permissions.editall'      => 'full',
                ],
                'label'  => 'mautic.user.permissions.profile',
                'data'   => (!empty(\$data['profile']) ? \$data['profile'] : []),
                'bundle' => 'user',
                'level'  => 'profile',
            ]
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
        return "@bundles/UserBundle/Security/Permissions/UserPermissions.php";
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
        return new Source("", "@bundles/UserBundle/Security/Permissions/UserPermissions.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Security\\Permissions\\UserPermissions.php");
    }
}
