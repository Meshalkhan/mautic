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

/* @bundles/StageBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_b1dc072af95f366a90dcdca35f75178b extends Template
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

namespace Mautic\\StageBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\StageBundle\\Model\\StageModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Twig\\Environment;

class SearchSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private StageModel \$stageModel,
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
        if (\$this->security->isGranted('stage:stages:view')) {
            \$str = \$event->getSearchString();
            if (empty(\$str)) {
                return;
            }

            \$items = \$this->stageModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$str,
                ]);
            \$stageCount = count(\$items);
            if (\$stageCount > 0) {
                \$stagesResults = [];
                \$canEdit       = \$this->security->isGranted('stage:stages:edit');
                foreach (\$items as \$item) {
                    \$stagesResults[] = \$this->twig->render(
                        '@MauticStage/SubscribedEvents/Search/global.html.twig',
                        [
                            'item'    => \$item,
                            'canEdit' => \$canEdit,
                        ]
                    );
                }
                if (\$stageCount > 5) {
                    \$stagesResults[] = \$this->twig->render(
                        '@MauticStage/SubscribedEvents/Search/global.html.twig',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (\$stageCount - 5),
                        ]
                    );
                }
                \$stagesResults['count'] = \$stageCount;
                \$event->addResults('mautic.stage.actions.header.index', \$stagesResults);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event): void
    {
        if (\$this->security->isGranted('stage:stages:view')) {
            \$event->addCommands(
                'mautic.stage.actions.header.index',
                \$this->stageModel->getCommandList()
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
        return "@bundles/StageBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/StageBundle/EventListener/SearchSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StageBundle\\EventListener\\SearchSubscriber.php");
    }
}
