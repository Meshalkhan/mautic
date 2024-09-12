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

/* @bundles/PageBundle/EventListener/PointSubscriber.php */
class __TwigTemplate_4283e765b81bfcc7358215dcc65c0495 extends Template
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

namespace Mautic\\PageBundle\\EventListener;

use Mautic\\PageBundle\\Event as Events;
use Mautic\\PageBundle\\Form\\Type\\PointActionPageHitType;
use Mautic\\PageBundle\\Form\\Type\\PointActionUrlHitType;
use Mautic\\PageBundle\\Helper\\PointActionHelper;
use Mautic\\PageBundle\\PageEvents;
use Mautic\\PointBundle\\Event\\PointBuilderEvent;
use Mautic\\PointBundle\\Model\\PointModel;
use Mautic\\PointBundle\\PointEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class PointSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private PointModel \$pointModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PointEvents::POINT_ON_BUILD => ['onPointBuild', 0],
            PageEvents::PAGE_ON_HIT     => ['onPageHit', 0],
        ];
    }

    public function onPointBuild(PointBuilderEvent \$event): void
    {
        \$action = [
            'group'       => 'mautic.page.point.action',
            'label'       => 'mautic.page.point.action.pagehit',
            'description' => 'mautic.page.point.action.pagehit_descr',
            'callback'    => [PointActionHelper::class, 'validatePageHit'],
            'formType'    => PointActionPageHitType::class,
        ];

        \$event->addAction('page.hit', \$action);

        \$action = [
            'group'       => 'mautic.page.point.action',
            'label'       => 'mautic.page.point.action.urlhit',
            'description' => 'mautic.page.point.action.urlhit_descr',
            'callback'    => [PointActionHelper::class, 'validateUrlHit'],
            'formType'    => PointActionUrlHitType::class,
            'formTheme'   => '@MauticPage/FormTheme/Point/pointaction_urlhit_widget.html.twig',
        ];

        \$event->addAction('url.hit', \$action);
    }

    /**
     * Trigger point actions for page hits.
     */
    public function onPageHit(Events\\PageHitEvent \$event): void
    {
        if (\$event->getPage()) {
            // Mautic Landing Page was hit
            \$this->pointModel->triggerAction('page.hit', \$event->getHit(), null, \$event->getLead());
        } else {
            // Mautic Tracking Pixel was hit
            \$this->pointModel->triggerAction('url.hit', \$event->getHit(), null, \$event->getLead());
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
        return "@bundles/PageBundle/EventListener/PointSubscriber.php";
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
        return new Source("", "@bundles/PageBundle/EventListener/PointSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\EventListener\\PointSubscriber.php");
    }
}
