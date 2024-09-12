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

/* @bundles/PageBundle/EventListener/DateTimeTokenSubscriber.php */
class __TwigTemplate_0ca2ef8ace6d79143171529eedf2a53d extends Template
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

use Mautic\\CoreBundle\\Helper\\DateTime\\DateTimeToken;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Mautic\\PageBundle\\Event\\PageBuilderEvent;
use Mautic\\PageBundle\\Event\\PageDisplayEvent;
use Mautic\\PageBundle\\PageEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class DateTimeTokenSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private TranslatorInterface \$translator,
        private DateTimeToken \$dateTokenHelper,
        private CorePermissions \$security,
        private ContactTracker \$contactTracker
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PageEvents::PAGE_ON_BUILD                     => ['onPageBuild', 0],
            PageEvents::PAGE_ON_DISPLAY                   => ['onPageDisplay', 0],
        ];
    }

    public function onPageBuild(PageBuilderEvent \$event): void
    {
        \$event->addToken('{today}', \$this->translator->trans('mautic.email.token.today'));
    }

    public function onPageDisplay(PageDisplayEvent \$event): void
    {
        \$content   = \$event->getContent();
        \$contact   = \$this->security->isAnonymous() ? \$this->contactTracker->getContact() : null;

        \$tokenList = \$this->dateTokenHelper->getTokens(\$content, \$contact ? \$contact->getTimezone() : null);
        \$event->setContent(str_replace(array_keys(\$tokenList), \$tokenList, \$content));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/EventListener/DateTimeTokenSubscriber.php";
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
        return new Source("", "@bundles/PageBundle/EventListener/DateTimeTokenSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\EventListener\\DateTimeTokenSubscriber.php");
    }
}
