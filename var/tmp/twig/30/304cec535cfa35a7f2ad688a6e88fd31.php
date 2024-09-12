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

/* @bundles/AssetBundle/EventListener/PointSubscriber.php */
class __TwigTemplate_7131fbc89e6401ce357d61a1c1cc492b extends Template
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

namespace Mautic\\AssetBundle\\EventListener;

use Mautic\\AssetBundle\\AssetEvents;
use Mautic\\AssetBundle\\Event\\AssetLoadEvent;
use Mautic\\AssetBundle\\Form\\Type\\PointActionAssetDownloadType;
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
            AssetEvents::ASSET_ON_LOAD  => ['onAssetDownload', 0],
        ];
    }

    public function onPointBuild(PointBuilderEvent \$event): void
    {
        \$action = [
            'group'       => 'mautic.asset.actions',
            'label'       => 'mautic.asset.point.action.download',
            'description' => 'mautic.asset.point.action.download_descr',
            'callback'    => [\\Mautic\\AssetBundle\\Helper\\PointActionHelper::class, 'validateAssetDownload'],
            'formType'    => PointActionAssetDownloadType::class,
        ];

        \$event->addAction('asset.download', \$action);
    }

    /**
     * Trigger point actions for asset download.
     */
    public function onAssetDownload(AssetLoadEvent \$event): void
    {
        \$asset = \$event->getRecord()->getAsset();

        if (null !== \$asset) {
            \$this->pointModel->triggerAction('asset.download', \$asset);
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
        return "@bundles/AssetBundle/EventListener/PointSubscriber.php";
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
        return new Source("", "@bundles/AssetBundle/EventListener/PointSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\EventListener\\PointSubscriber.php");
    }
}
