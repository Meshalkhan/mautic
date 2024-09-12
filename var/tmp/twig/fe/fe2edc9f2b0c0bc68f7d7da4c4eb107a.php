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

/* @bundles/FormBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_b6c1e1cfb7d2ba137ad41573c2b48541 extends Template
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

namespace Mautic\\FormBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\FormBundle\\Model\\FormModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Twig\\Environment;

class SearchSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private UserHelper \$userHelper,
        private FormModel \$formModel,
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

        \$filter = ['string' => \$str, 'force' => ''];

        \$permissions = \$this->security->isGranted(['form:forms:viewown', 'form:forms:viewother'], 'RETURN_ARRAY');
        if (\$permissions['form:forms:viewown'] || \$permissions['form:forms:viewother']) {
            // only show own forms if the user does not have permission to view others
            if (!\$permissions['form:forms:viewother']) {
                \$filter['force'] = [
                    ['column' => 'f.createdBy', 'expr' => 'eq', 'value' => \$this->userHelper->getUser()->getId()],
                ];
            }

            \$forms = \$this->formModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$filter,
                ]);

            if (count(\$forms) > 0) {
                \$formResults = [];
                foreach (\$forms as \$form) {
                    \$formResults[] = \$this->twig->render(
                        '@MauticForm/SubscribedEvents/Search/global.html.twig',
                        ['form' => \$form[0]]
                    );
                }
                if (count(\$forms) > 5) {
                    \$formResults[] = \$this->twig->render(
                        '@MauticForm/SubscribedEvents/Search/global.html.twig',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (count(\$forms) - 5),
                        ]
                    );
                }
                \$formResults['count'] = count(\$forms);
                \$event->addResults('mautic.form.forms', \$formResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event): void
    {
        if (\$this->security->isGranted(['form:forms:viewown', 'form:forms:viewother'], 'MATCH_ONE')) {
            \$event->addCommands(
                'mautic.form.forms',
                \$this->formModel->getCommandList()
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
        return "@bundles/FormBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/FormBundle/EventListener/SearchSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\EventListener\\SearchSubscriber.php");
    }
}
