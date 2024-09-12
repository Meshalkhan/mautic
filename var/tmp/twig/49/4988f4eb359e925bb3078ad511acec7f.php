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

/* @bundles/NotificationBundle/Controller/PopupController.php */
class __TwigTemplate_9ef167a368db77e9b2538c39e329a524 extends Template
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

namespace Mautic\\NotificationBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;
use Mautic\\PageBundle\\Entity\\Page;
use Mautic\\PageBundle\\Event\\PageDisplayEvent;
use Mautic\\PageBundle\\PageEvents;

class PopupController extends CommonController
{
    public function indexAction(AssetsHelper \$assetsHelper)
    {
        \$assetsHelper->addStylesheet('/app/bundles/NotificationBundle/Assets/css/popup/popup.css');

        \$response = \$this->render(
            '@MauticNotification/Popup/index.html.twig',
            [
                'siteUrl' => \$this->coreParametersHelper->get('site_url'),
            ]
        );

        \$content = \$response->getContent();

        \$event = new PageDisplayEvent(\$content, new Page());
        \$this->dispatcher->dispatch(\$event, PageEvents::PAGE_ON_DISPLAY);
        \$content = \$event->getContent();

        return \$response->setContent(\$content);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Controller/PopupController.php";
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
        return new Source("", "@bundles/NotificationBundle/Controller/PopupController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Controller\\PopupController.php");
    }
}
