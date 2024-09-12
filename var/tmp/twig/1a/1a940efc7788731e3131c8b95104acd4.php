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

/* @bundles/ReportBundle/EventListener/SearchSubscriber.php */
class __TwigTemplate_49425fb8b73388dea62f693d229932d0 extends Template
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

namespace Mautic\\ReportBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event as MauticEvents;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\ReportBundle\\Model\\ReportModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Twig\\Environment;

class SearchSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private UserHelper \$userHelper,
        private ReportModel \$reportModel,
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

        \$filter = ['string' => \$str, 'force' => []];

        \$permissions = \$this->security->isGranted(
            ['report:reports:viewown', 'report:reports:viewother'],
            'RETURN_ARRAY'
        );
        if (\$permissions['report:reports:viewown'] || \$permissions['report:reports:viewother']) {
            if (!\$permissions['report:reports:viewother']) {
                \$filter['force'][] = [
                    'column' => 'IDENTITY(r.createdBy)',
                    'expr'   => 'eq',
                    'value'  => \$this->userHelper->getUser()->getId(),
                ];
            }

            \$items = \$this->reportModel->getEntities(
                [
                    'limit'  => 5,
                    'filter' => \$filter,
                ]);

            \$count = count(\$items);
            if (\$count > 0) {
                \$results = [];

                foreach (\$items as \$item) {
                    \$results[] = \$this->twig->render(
                        '@MauticReport/SubscribedEvents/Search/global.html.twig',
                        ['item' => \$item]
                    );
                }
                if (\$count > 5) {
                    \$results[] = \$this->twig->render(
                        '@MauticReport/SubscribedEvents/Search/global.html.twig',
                        [
                            'showMore'     => true,
                            'searchString' => \$str,
                            'remaining'    => (\$count - 5),
                        ]
                    );
                }
                \$results['count'] = \$count;
                \$event->addResults('mautic.report.reports', \$results);
            }
        }
    }

    public function onBuildCommandList(MauticEvents\\CommandListEvent \$event): void
    {
        if (\$this->security->isGranted(['report:reports:viewown', 'report:reports:viewother'], 'MATCH_ONE')) {
            \$event->addCommands(
                'mautic.report.reports',
                \$this->reportModel->getCommandList()
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
        return "@bundles/ReportBundle/EventListener/SearchSubscriber.php";
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
        return new Source("", "@bundles/ReportBundle/EventListener/SearchSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\EventListener\\SearchSubscriber.php");
    }
}
