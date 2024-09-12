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

/* @bundles/MarketplaceBundle/EventListener/MenuSubscriber.php */
class __TwigTemplate_e1e09c86980b5a640cfa6bca255b3d62 extends Template
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

declare(strict_types=1);

namespace Mautic\\MarketplaceBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\MenuEvent;
use Mautic\\MarketplaceBundle\\Security\\Permissions\\MarketplacePermissions;
use Mautic\\MarketplaceBundle\\Service\\Config;
use Mautic\\MarketplaceBundle\\Service\\RouteProvider;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

final class MenuSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private Config \$config
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CoreEvents::BUILD_MENU => ['onBuildMenu', 9999],
        ];
    }

    public function onBuildMenu(MenuEvent \$event): void
    {
        if ('admin' !== \$event->getType() || !\$this->config->marketplaceIsEnabled()) {
            return;
        }

        \$event->addMenuItems(
            [
                'priority' => 81,
                'items'    => [
                    'marketplace.title' => [
                        'id'        => 'marketplace',
                        'route'     => RouteProvider::ROUTE_LIST,
                        'access'    => MarketplacePermissions::CAN_VIEW_PACKAGES,
                        'parent'    => 'mautic.core.integrations',
                        'priority'  => 16,
                    ],
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
        return "@bundles/MarketplaceBundle/EventListener/MenuSubscriber.php";
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
        return new Source("", "@bundles/MarketplaceBundle/EventListener/MenuSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\EventListener\\MenuSubscriber.php");
    }
}
