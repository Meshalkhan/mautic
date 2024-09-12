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

/* @bundles/CoreBundle/Event/CustomContentEvent.php */
class __TwigTemplate_cf62f9edb23584d475b53d11864470b9 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Contracts\\EventDispatcher\\Event;

class CustomContentEvent extends Event
{
    /**
     * @var array
     */
    protected \$content = [];

    /**
     * @var array
     */
    protected \$templates = [];

    /**
     * @param string      \$viewName
     * @param string|null \$context
     */
    public function __construct(
        protected \$viewName,
        protected \$context = null,
        protected array \$vars = []
    ) {
    }

    /**
     * Check if the context is applicable.
     *
     * @param string      \$viewName
     * @param string|null \$context
     */
    public function checkContext(\$viewName, \$context): bool
    {
        return \$viewName === \$this->viewName && \$context === \$this->context;
    }

    /**
     * @param string \$content
     */
    public function addContent(\$content): void
    {
        \$this->content[] = \$content;
    }

    /**
     * @param string \$template
     */
    public function addTemplate(\$template, array \$vars = []): void
    {
        \$this->templates[] = [
            'template' => \$template,
            'vars'     => \$vars,
        ];
    }

    /**
     * @return mixed
     */
    public function getViewName()
    {
        return \$this->viewName;
    }

    /**
     * @return string|null
     */
    public function getContext()
    {
        return \$this->context;
    }

    /**
     * @return array
     */
    public function getVars()
    {
        return \$this->vars;
    }

    /**
     * @return array
     */
    public function getContent()
    {
        return \$this->content;
    }

    /**
     * @return array
     */
    public function getTemplates()
    {
        return \$this->templates;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/CustomContentEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/CustomContentEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Event\\CustomContentEvent.php");
    }
}
