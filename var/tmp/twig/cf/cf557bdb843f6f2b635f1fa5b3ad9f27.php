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

/* @bundles/EmailBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_e3b1eb06f031b85cad519232097cf1cd extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Twig\\Environment;

class SearchSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private UserHelper \$userHelper,
        private EmailModel \$emailModel,
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

        \$filter      = ['string' => \$str, 'force' => []];
        \$permissions = \$this->security->isGranted(
            ['email:emails:viewown', 'email:emails:viewother'],
            'RETURN_ARRAY'
        );
        if (\$permissions['email:emails:viewown'] || \$permissions['email:emails:viewother']) {
            if (!\$permissions['email:emails:viewother']) {
                \$filter['force'][] = [
                    'column' => 'IDENTITY(e.createdBy)',
                    'expr'   => 'eq',
                    'value'  => \$this->userHelper->getUser()->getId(),
                ];
            }

            \$emails = \$this->emailModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$filter,
                ]);

            if (count(\$emails) > 0) {
                \$emailResults = [];

                foreach (\$emails as \$email) {
                    \$emailResults[] = \$this->twig->render(
                        '@MauticEmail/SubscribedEvents/Search/global.html.twig',
                        ['email' => \$email]
                    );
                }
                if (count(\$emails) > 5) {
                    \$emailResults[] = \$this->twig->render(
                        '@MauticEmail/SubscribedEvents/Search/global.html.twig',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$emails) - 5),
                        ]
                    );
                }
                \$emailResults['count'] = count(\$emails);
                \$event->addResults('mautic.email.emails', \$emailResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event): void
    {
        if (\$this->security->isGranted(['email:emails:viewown', 'email:emails:viewother'], 'MATCH_ONE')) {
            \$event->addCommands(
                'mautic.email.emails',
                \$this->emailModel->getCommandList()
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
        return "@bundles/EmailBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/SearchSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\EventListener\\SearchSubscriber.php");
    }
}
