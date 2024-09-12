<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/UserBundle/Model/RoleModel.php */
class __TwigTemplate_733a18c087b8fce7b8aa0177dbb94416 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\UserBundle\\Model;

use Mautic\\CoreBundle\\Model\\FormModel;
use Mautic\\UserBundle\\Entity\\Role;
use Mautic\\UserBundle\\Entity\\RoleRepository;
use Mautic\\UserBundle\\Event\\RoleEvent;
use Mautic\\UserBundle\\Form\\Type\\RoleType;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\PreconditionRequiredHttpException;
use Symfony\\Contracts\\EventDispatcher\\Event;

/**
 * @extends FormModel<Role>
 */
class RoleModel extends FormModel
{
    public function getRepository(): RoleRepository
    {
        return \$this->em->getRepository(Role::class);
    }

    public function getPermissionBase(): string
    {
        return 'user:roles';
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    public function saveEntity(\$entity, \$unlock = true): void
    {
        if (!\$entity instanceof Role) {
            throw new MethodNotAllowedHttpException(['Role'], 'Entity must be of class Role()');
        }

        \$isNew = (\$entity->getId()) ? 0 : 1;

        if (!\$isNew) {
            // delete all existing
            \$this->em->getRepository(\\Mautic\\UserBundle\\Entity\\Permission::class)->purgeRolePermissions(\$entity);
        }

        parent::saveEntity(\$entity, \$unlock);
    }

    /**
     * Generate the role's permissions.
     *
     * @param array \$rawPermissions (i.e. from request)
     */
    public function setRolePermissions(Role &\$entity, \$rawPermissions): void
    {
        if (!is_array(\$rawPermissions)) {
            return;
        }

        // set permissions if applicable and if the user is not an admin
        \$permissions = (!\$entity->isAdmin() && !empty(\$rawPermissions)) ?
            \$this->security->generatePermissions(\$rawPermissions) :
            [];

        foreach (\$permissions as \$permissionEntity) {
            \$entity->addPermission(\$permissionEntity);
        }

        \$entity->setRawPermissions(\$rawPermissions);
    }

    /**
     * @throws PreconditionRequiredHttpException
     */
    public function deleteEntity(\$entity): void
    {
        if (!\$entity instanceof Role) {
            throw new MethodNotAllowedHttpException(['Role'], 'Entity must be of class Role()');
        }

        \$users = \$this->em->getRepository(\\Mautic\\UserBundle\\Entity\\User::class)->findByRole(\$entity);
        if (count(\$users)) {
            throw new PreconditionRequiredHttpException(\$this->translator->trans('mautic.user.role.error.deletenotallowed', ['%name%' => \$entity->getName()], 'flashes'));
        }

        parent::deleteEntity(\$entity);
    }

    /**
     * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
     */
    public function createForm(\$entity, FormFactoryInterface \$formFactory, \$action = null, \$options = []): \\Symfony\\Component\\Form\\FormInterface
    {
        if (!\$entity instanceof Role) {
            throw new MethodNotAllowedHttpException(['Role']);
        }

        if (!empty(\$action)) {
            \$options['action'] = \$action;
        }

        return \$formFactory->create(RoleType::class, \$entity, \$options);
    }

    public function getEntity(\$id = null): ?Role
    {
        if (null === \$id) {
            return new Role();
        }

        return parent::getEntity(\$id);
    }

    /**
     * @throws MethodNotAllowedHttpException
     */
    protected function dispatchEvent(\$action, &\$entity, \$isNew = false, Event \$event = null): ?Event
    {
        if (!\$entity instanceof Role) {
            throw new MethodNotAllowedHttpException(['Role'], 'Entity must be of class Role()');
        }

        switch (\$action) {
            case 'pre_save':
                \$name = UserEvents::ROLE_PRE_SAVE;
                break;
            case 'post_save':
                \$name = UserEvents::ROLE_POST_SAVE;
                break;
            case 'pre_delete':
                \$name = UserEvents::ROLE_PRE_DELETE;
                break;
            case 'post_delete':
                \$name = UserEvents::ROLE_POST_DELETE;
                break;
            default:
                return null;
        }

        if (\$this->dispatcher->hasListeners(\$name)) {
            if (empty(\$event)) {
                \$event = new RoleEvent(\$entity, \$isNew);
                \$event->setEntityManager(\$this->em);
            }
            \$this->dispatcher->dispatch(\$event, \$name);

            return \$event;
        }

        return null;
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Model/RoleModel.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/UserBundle/Model/RoleModel.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Model\\RoleModel.php");
    }
}
