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

/* @bundles/PluginBundle/EventListener/FormSubscriber.php */
class __TwigTemplate_d7fa19472cc99fabdef383122561dc1b extends Template
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

namespace Mautic\\PluginBundle\\EventListener;

use Mautic\\FormBundle\\Event\\FormBuilderEvent;
use Mautic\\FormBundle\\Event\\SubmissionEvent;
use Mautic\\FormBundle\\FormEvents;
use Mautic\\PluginBundle\\Form\\Type\\IntegrationsListType;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class FormSubscriber implements EventSubscriberInterface
{
    use PushToIntegrationTrait;

    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::FORM_ON_BUILD            => ['onFormBuild', 0],
            FormEvents::ON_EXECUTE_SUBMIT_ACTION => ['onFormSubmitActionTriggered', 0],
        ];
    }

    public function onFormBuild(FormBuilderEvent \$event): void
    {
        \$event->addSubmitAction('plugin.leadpush', [
            'group'       => 'mautic.plugin.actions',
            'description' => 'mautic.plugin.actions.tooltip',
            'label'       => 'mautic.plugin.actions.push_lead',
            'formType'    => IntegrationsListType::class,
            'formTheme'   => '@MauticPlugin/FormTheme/Integration/layout.html.twig',
            'eventName'   => FormEvents::ON_EXECUTE_SUBMIT_ACTION,
        ]);
    }

    public function onFormSubmitActionTriggered(SubmissionEvent \$event): void
    {
        if (false === \$event->checkContext('plugin.leadpush')) {
            return;
        }

        \$this->pushToIntegration(\$event->getActionConfig(), \$event->getSubmission()->getLead());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/EventListener/FormSubscriber.php";
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
        return new Source("", "@bundles/PluginBundle/EventListener/FormSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\EventListener\\FormSubscriber.php");
    }
}
