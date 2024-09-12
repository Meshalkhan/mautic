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

/* @bundles/PageBundle/Event/PageHitEvent.php */
class __TwigTemplate_3bb5923da7674540bfd4dac9c15e5ce4 extends Template
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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Event/PageHitEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/PageHitEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Event\\PageHitEvent.php");
    }
}
