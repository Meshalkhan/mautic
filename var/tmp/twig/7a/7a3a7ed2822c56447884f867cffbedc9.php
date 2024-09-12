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

/* @bundles/PageBundle/Event/PageDisplayEvent.php */
class __TwigTemplate_d4b58269126c364980689c03cf7e1e1d extends Template
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

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PageBundle\\Entity\\Page;
use Symfony\\Contracts\\EventDispatcher\\Event;

class PageDisplayEvent extends Event
{
    /**
     * Preferred lead to be used in listeners.
     */
    private ?Lead \$lead = null;

    public function __construct(
        private string \$content,
        private Page \$page,
        private array \$params = []
    ) {
    }

    /**
     * Returns the Page entity.
     *
     * @return Page
     */
    public function getPage()
    {
        return \$this->page;
    }

    /**
     * Get page content.
     */
    public function getContent(): string
    {
        return \$this->content;
    }

    /**
     * Set page content.
     *
     * @param string \$content
     */
    public function setContent(\$content): void
    {
        \$this->content = \$content;
    }

    /**
     * Get params.
     *
     * @return array
     */
    public function getParams()
    {
        return \$this->params;
    }

    /**
     * Set params.
     *
     * @param array \$params
     */
    public function setParams(\$params): void
    {
        \$this->params = \$params;
    }

    public function getLead(): ?Lead
    {
        return \$this->lead;
    }

    public function setLead(Lead \$lead): void
    {
        \$this->lead = \$lead;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Event/PageDisplayEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/PageDisplayEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Event\\PageDisplayEvent.php");
    }
}
