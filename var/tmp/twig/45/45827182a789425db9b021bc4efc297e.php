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

/* @bundles/CoreBundle/Controller/DefaultController.php */
class __TwigTemplate_aee2050478665221e234adfad396f17e extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\GlobalSearchEvent;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Almost all other Mautic Bundle controllers extend this default controller.
 */
class DefaultController extends CommonController
{
    /**
     * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse|\\Symfony\\Component\\HttpFoundation\\Response
     */
    public function indexAction(Request \$request)
    {
        \$root = \$this->coreParametersHelper->get('webroot');

        if (empty(\$root)) {
            return \$this->redirectToRoute('mautic_dashboard_index');
        } else {
            /** @var \\Mautic\\PageBundle\\Model\\PageModel \$pageModel */
            \$pageModel = \$this->getModel('page');
            \$page      = \$pageModel->getEntity(\$root);

            if (empty(\$page)) {
                return \$this->notFound();
            }

            \$slug = \$pageModel->generateSlug(\$page);

            \$request->attributes->set('ignore_mismatch', true);

            return \$this->forward('Mautic\\PageBundle\\Controller\\PublicController::indexAction', ['slug' => \$slug]);
        }
    }

    public function globalSearchAction(Request \$request): \\Symfony\\Component\\HttpFoundation\\Response
    {
        \$searchStr = \$request->get('global_search', \$request->getSession()->get('mautic.global_search', ''));
        \$request->getSession()->set('mautic.global_search', \$searchStr);

        if (!empty(\$searchStr)) {
            \$event = new GlobalSearchEvent(\$searchStr, \$this->translator);
            \$this->dispatcher->dispatch(\$event, CoreEvents::GLOBAL_SEARCH);
            \$results = \$event->getResults();
        } else {
            \$results = [];
        }

        return \$this->render('@MauticCore/GlobalSearch/globalsearch.html.twig',
            [
                'results'      => \$results,
                'searchString' => \$searchStr,
            ]
        );
    }

    /**
     * @return \\Symfony\\Component\\HttpFoundation\\JsonResponse|\\Symfony\\Component\\HttpFoundation\\Response
     */
    public function notificationsAction(): \\Symfony\\Component\\HttpFoundation\\Response
    {
        /** @var \\Mautic\\CoreBundle\\Model\\NotificationModel \$model */
        \$model = \$this->getModel('core.notification');

        [\$notifications, \$showNewIndicator, \$updateMessage] = \$model->getNotificationContent(null, false, 200);

        return \$this->delegateView(
            [
                'contentTemplate' => '@MauticCore/Notification/notifications.html.twig',
                'viewParameters'  => [
                    'showNewIndicator' => \$showNewIndicator,
                    'notifications'    => \$notifications,
                    'updateMessage'    => \$updateMessage,
                ],
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
        return "@bundles/CoreBundle/Controller/DefaultController.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/DefaultController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Controller\\DefaultController.php");
    }
}
