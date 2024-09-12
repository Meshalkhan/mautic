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

/* @bundles/PageBundle/Event/PageHitEvent.php */
class __TwigTemplate_de0088558c716faa0eb28ddd109cc6b0 extends Template
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

namespace Mautic\\PageBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\PageBundle\\Entity\\Hit;
use Mautic\\PageBundle\\Entity\\Page;

class PageHitEvent extends CommonEvent
{
    protected ?Page \$page = null;

    /**
     * @param mixed[] \$clickthroughData
     * @param bool    \$unique
     */
    public function __construct(
        Hit \$hit,
        protected \$request,
        protected \$code,
        protected \$clickthroughData = [],
        protected \$unique = false
    ) {
        \$this->entity           = \$hit;
        \$this->page             = \$hit->getPage();
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
     * Get page request.
     *
     * @return string
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * Get HTML code.
     *
     * @return mixed
     */
    public function getCode()
    {
        return \$this->code;
    }

    /**
     * @return Hit
     */
    public function getHit()
    {
        return \$this->entity;
    }

    /**
     * @return mixed
     */
    public function getClickthroughData()
    {
        return \$this->clickthroughData;
    }

    /**
     * Returns if this page hit is unique.
     *
     * @return bool
     */
    public function isUnique()
    {
        return \$this->unique;
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
        return "@bundles/PageBundle/Event/PageHitEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/PageHitEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Event\\PageHitEvent.php");
    }
}
