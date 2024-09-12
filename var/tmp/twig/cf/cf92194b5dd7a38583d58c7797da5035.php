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

/* @bundles/CategoryBundle/EventListener/ButtonSubscriber.php */
class __TwigTemplate_96109b74013bc5a7f0e276604929f1d1 extends Template
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

namespace Mautic\\CategoryBundle\\EventListener;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\CustomButtonEvent;
use Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class ButtonSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private RouterInterface \$router,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            CoreEvents::VIEW_INJECT_CUSTOM_BUTTONS => ['injectContactBulkButtons', 0],
        ];
    }

    public function injectContactBulkButtons(CustomButtonEvent \$event): void
    {
        if (str_starts_with(\$event->getRoute(), 'mautic_contact_')) {
            \$event->addButton(
                [
                    'attr' => [
                        'class'       => 'btn btn-default btn-sm btn-nospin',
                        'data-toggle' => 'ajaxmodal',
                        'data-target' => '#MauticSharedModal',
                        'href'        => \$this->router->generate('mautic_category_batch_contact_view'),
                        'data-header' => \$this->translator->trans('mautic.lead.batch.categories'),
                    ],
                    'btnText'   => \$this->translator->trans('mautic.lead.batch.categories'),
                    'iconClass' => 'ri-folder-line',
                ],
                ButtonHelper::LOCATION_BULK_ACTIONS
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
        return "@bundles/CategoryBundle/EventListener/ButtonSubscriber.php";
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
        return new Source("", "@bundles/CategoryBundle/EventListener/ButtonSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CategoryBundle\\EventListener\\ButtonSubscriber.php");
    }
}
