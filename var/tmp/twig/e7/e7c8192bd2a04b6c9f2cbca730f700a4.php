<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/AssetBundle/EventListener/BuilderSubscriber.php */
class __TwigTemplate_52ac78cc903b18c62ca2000a358114f3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\AssetBundle\\EventListener;

use Mautic\\AssetBundle\\Helper\\TokenHelper;
use Mautic\\CoreBundle\\Event\\BuilderEvent;
use Mautic\\CoreBundle\\Helper\\BuilderTokenHelperFactory;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailSendEvent;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Mautic\\PageBundle\\Event\\PageDisplayEvent;
use Mautic\\PageBundle\\PageEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class BuilderSubscriber implements EventSubscriberInterface
{
    private string \$assetToken = '{assetlink=(.*?)}';

    public function __construct(
        private CorePermissions \$security,
        private TokenHelper \$tokenHelper,
        private ContactTracker \$contactTracker,
        private BuilderTokenHelperFactory \$builderTokenHelperFactory
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            EmailEvents::EMAIL_ON_BUILD   => ['onBuilderBuild', 0],
            EmailEvents::EMAIL_ON_SEND    => ['onEmailGenerate', 0],
            EmailEvents::EMAIL_ON_DISPLAY => ['onEmailGenerate', 0],
            PageEvents::PAGE_ON_BUILD     => ['onBuilderBuild', 0],
            PageEvents::PAGE_ON_DISPLAY   => ['onPageDisplay', 0],
        ];
    }

    public function onBuilderBuild(BuilderEvent \$event): void
    {
        if (\$event->tokensRequested(\$this->assetToken)) {
            \$tokenHelper = \$this->builderTokenHelperFactory->getBuilderTokenHelper('asset');
            \$event->addTokensFromHelper(\$tokenHelper, \$this->assetToken, 'title', 'id', true);
        }
    }

    public function onEmailGenerate(EmailSendEvent \$event): void
    {
        \$lead   = \$event->getLead();
        \$leadId = (int) (null !== \$lead ? \$lead['id'] : null);
        \$email  = \$event->getEmail();
        \$tokens = \$this->generateTokensFromContent(\$event, \$leadId, \$event->getSource(), null === \$email ? null : \$email->getId());
        \$event->addTokens(\$tokens);
    }

    public function onPageDisplay(PageDisplayEvent \$event): void
    {
        if (!\$lead = \$event->getLead()) {
            \$lead = \$this->security->isAnonymous() ? \$this->contactTracker->getContact() : null;
        }

        \$leadId  = \$lead ? \$lead->getId() : null;
        \$page    = \$event->getPage();
        \$tokens  = \$this->generateTokensFromContent(\$event, \$leadId, ['page', \$page->getId()]);
        \$content = \$event->getContent();

        if ([] !== \$tokens) {
            \$content = str_ireplace(array_keys(\$tokens), \$tokens, \$content);
        }
        \$event->setContent(\$content);
    }

    /**
     * @param PageDisplayEvent|EmailSendEvent \$event
     * @param array                           \$source
     * @param int|null                        \$emailId
     *
     * @return mixed[]
     */
    private function generateTokensFromContent(\$event, ?int \$leadId, \$source = [], \$emailId = null): array
    {
        if (\$event instanceof PageDisplayEvent || (\$event instanceof EmailSendEvent && \$event->shouldAppendClickthrough())) {
            \$clickthrough = [
                'source' => \$source,
                'lead'   => \$leadId ?? false,
                'email'  => \$emailId ?? false,
            ];
        }

        return \$this->tokenHelper->findAssetTokens(\$event->getContent(), array_filter(\$clickthrough ?? []));
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/AssetBundle/EventListener/BuilderSubscriber.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/AssetBundle/EventListener/BuilderSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\EventListener\\BuilderSubscriber.php");
    }
}
