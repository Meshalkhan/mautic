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

/* @bundles/PageBundle/Event/UntrackableUrlsEvent.php */
class __TwigTemplate_19e967681448498d546146a2e026537b extends Template
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

namespace Mautic\\PageBundle\\Event;

use Symfony\\Contracts\\EventDispatcher\\Event;

class UntrackableUrlsEvent extends Event
{
    /**
     * @var string[]
     */
    private array \$doNotTrack = [
        '{webview_url}',
        '{unsubscribe_url}',
        '{trackable=(.*?)}',
    ];

    /**
     * @param mixed \$content
     */
    public function __construct(
        private \$content
    ) {
    }

    /**
     * set a URL or token to not convert to trackables.
     */
    public function addNonTrackable(\$url): void
    {
        \$this->doNotTrack[] = \$url;
    }

    /**
     * Get array of non-trackables.
     *
     * @return string[]
     */
    public function getDoNotTrackList(): array
    {
        return \$this->doNotTrack;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return \$this->content;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Event/UntrackableUrlsEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/UntrackableUrlsEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Event\\UntrackableUrlsEvent.php");
    }
}
