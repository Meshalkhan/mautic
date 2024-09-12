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

/* @bundles/AssetBundle/EventListener/EmailSubscriber.php */
class __TwigTemplate_1a493289c59bda2b4d9c3899028a9901 extends Template
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
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Event\\EmailBuilderEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class EmailSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            EmailEvents::EMAIL_ON_BUILD => ['onEmailBuild', 0],
        ];
    }

    public function onEmailBuild(EmailBuilderEvent \$event): void
    {
        if (\$event->abTestWinnerCriteriaRequested()) {
            // add AB Test Winner Criteria
            \$formSubmissions = [
                'group'    => 'mautic.asset.abtest.criteria',
                'label'    => 'mautic.asset.abtest.criteria.downloads',
                'event'    => AssetEvents::ON_DETERMINE_DOWNLOAD_RATE_WINNER,
            ];
            \$event->addAbTestWinnerCriteria('asset.downloads', \$formSubmissions);
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
        return "@bundles/AssetBundle/EventListener/EmailSubscriber.php";
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
        return new Source("", "@bundles/AssetBundle/EventListener/EmailSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\EventListener\\EmailSubscriber.php");
    }
}
