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

/* @bundles/CoreBundle/Twig/Helper/ContentHelper.php */
class __TwigTemplate_4e7b07d5735151dd8a8612551eab0f12 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Helper;

use Mautic\\CoreBundle\\CoreEvents;
use Mautic\\CoreBundle\\Event\\CustomContentEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Twig\\Environment;

final class ContentHelper
{
    public function __construct(
        private Environment \$twig,
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    /**
     * Dispatch an event to collect custom content.
     *
     * @param string|null          \$context  Context of the content requested for the viewName
     * @param array<string,string> \$vars     twig vars
     * @param string|null          \$viewName The main identifier for the content requested. Will be etracted from \$vars if get_
     *defined
     */
    public function getCustomContent(\$context = null, array \$vars = [], \$viewName = null): string
    {
        if (null === \$viewName && isset(\$vars['mauticTemplate'])) {
            \$viewName = \$vars['mauticTemplate'];
        }

        /** @var CustomContentEvent \$event */
        \$event = \$this->dispatcher->dispatch(
            new CustomContentEvent(\$viewName, \$context, \$vars),
            CoreEvents::VIEW_INJECT_CUSTOM_CONTENT
        );

        \$content = \$event->getContent();

        if (\$templatProps = \$event->getTemplates()) {
            foreach (\$templatProps as \$props) {
                \$content[] = \$this->twig->render(\$props['template'], array_merge(\$vars, \$props['vars']));
            }
        }

        return implode(\"\\n\\n\", \$content);
    }

    /**
     * Replaces HTML script tags with non HTML tags so the JS inside them won't execute and will be readable.
     *
     * @param string \$html
     */
    public function showScriptTags(\$html): string
    {
        \$tagsToShow = ['script', 'style'];

        foreach (\$tagsToShow as \$tag) {
            \$html = preg_replace('/<'.\$tag.'(.*?)>(.*?)<\\/'.\$tag.'>/s', '['.\$tag.'\$1]\$2[/'.\$tag.']', \$html);
        }

        return \$html;
    }

    public function getName(): string
    {
        return 'content';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Twig/Helper/ContentHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Helper/ContentHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Helper\\ContentHelper.php");
    }
}
