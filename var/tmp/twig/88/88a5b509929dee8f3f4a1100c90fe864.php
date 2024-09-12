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

/* @bundles/EmailBundle/EventListener/BroadcastSubscriber.php */
class __TwigTemplate_2e10cb9bd8af92a52aff336412f87c09 extends Template
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

namespace Mautic\\EmailBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\ChannelBundle\\ChannelEvents;
use Mautic\\ChannelBundle\\Event\\ChannelBroadcastEvent;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class BroadcastSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private EmailModel \$model,
        private EntityManager \$em,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ChannelEvents::CHANNEL_BROADCAST => ['onBroadcast', 0],
        ];
    }

    public function onBroadcast(ChannelBroadcastEvent \$event): void
    {
        if (!\$event->checkContext('email')) {
            return;
        }

        // Get list of published broadcasts or broadcast if there is only a single ID
        \$emails = \$this->model->getRepository()->getPublishedBroadcastsIterable(\$event->getId());

        foreach (\$emails as \$email) {
            \$emailEntity                                        = \$email;
            [\$sentCount, \$failedCount, \$failedRecipientsByList] = \$this->model->sendEmailToLists(
                \$emailEntity,
                null,
                \$event->getLimit(),
                \$event->getBatch(),
                \$event->getOutput(),
                \$event->getMinContactIdFilter(),
                \$event->getMaxContactIdFilter(),
                \$event->getMaxThreads(),
                \$event->getThreadId()
            );

            \$event->setResults(
                \$this->translator->trans('mautic.email.email').': '.\$emailEntity->getName(),
                \$sentCount,
                \$failedCount,
                \$failedRecipientsByList
            );
            \$this->em->detach(\$emailEntity);
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
        return "@bundles/EmailBundle/EventListener/BroadcastSubscriber.php";
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
        return new Source("", "@bundles/EmailBundle/EventListener/BroadcastSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\EventListener\\BroadcastSubscriber.php");
    }
}
