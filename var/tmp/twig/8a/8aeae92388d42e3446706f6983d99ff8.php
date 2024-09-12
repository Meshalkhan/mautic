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

/* @bundles/UserBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_c67ef2f5fcb057bb2e433c3d9bc33d5f extends Template
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

namespace Mautic\\UserBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\UserBundle\\Model\\RoleModel;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Twig\\Environment;

class SearchSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private UserModel \$userModel,
        private RoleModel \$userRoleModel,
        private CorePermissions \$security,
        private Environment \$twig
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CoreEvents::GLOBAL_SEARCH      => ['onGlobalSearch', 0],
            CoreEvents::BUILD_COMMAND_LIST => ['onBuildCommandList', 0],
        ];
    }

    public function onGlobalSearch(MauticEvents\\GlobalSearchEvent \$event): void
    {
        \$str = \$event->getSearchString();
        if (empty(\$str)) {
            return;
        }

        if (\$this->security->isGranted('user:users:view')) {
            \$users = \$this->userModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);

            if (count(\$users) > 0) {
                \$userResults = [];
                \$canEdit     = \$this->security->isGranted('user:users:edit');
                foreach (\$users as \$user) {
                    \$userResults[] = \$this->twig->render(
                        '@MauticUser/SubscribedEvents/Search/global_user.html.twig',
                        [
                            'user'    => \$user,
                            'canEdit' => \$canEdit,
                        ]
                    );
                }
                if (count(\$users) > 5) {
                    \$userResults[] = \$this->twig->render(
                        'MauticUser/SubscribedEvents/Search/global_user.html.twig',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$users) - 5),
                        ]
                    );
                }
                \$userResults['count'] = count(\$users);
                \$event->addResults('mautic.user.users', \$userResults);
            }
        }

        if (\$this->security->isGranted('user:roles:view')) {
            \$roles = \$this->userRoleModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);
            if (count(\$roles)) {
                \$roleResults = [];
                \$canEdit     = \$this->security->isGranted('user:roles:edit');

                foreach (\$roles as \$role) {
                    \$roleResults[] = \$this->twig->render(
                        '@MauticUser/SubscribedEvents/Search/global_role.html.twig',
                        [
                            'role'    => \$role,
                            'canEdit' => \$canEdit,
                        ]
                    );
                }
                if (count(\$roles) > 5) {
                    \$roleResults[] = \$this->twig->render(
                        '@MauticUser/SubscribedEvents/Search/global_role.html.twig',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$roles) - 5),
                        ]
                    );
                }
                \$roleResults['count'] = count(\$roles);
                \$event->addResults('mautic.user.roles', \$roleResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event): void
    {
        if (\$this->security->isGranted('user:users:view')) {
            \$event->addCommands(
                'mautic.user.users',
                \$this->userModel->getCommandList()
            );
        }
        if (\$this->security->isGranted('user:roles:view')) {
            \$event->addCommands(
                'mautic.user.roles',
                \$this->userRoleModel->getCommandList()
            );
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/UserBundle/EventListener/SearchSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\EventListener\\SearchSubscriber.php");
    }
}
