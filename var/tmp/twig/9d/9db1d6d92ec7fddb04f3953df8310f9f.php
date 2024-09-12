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

/* @bundles/PageBundle/Event/VideoHitEvent.php */
class __TwigTemplate_944e3a4dd60716babb1aee91d324e3a4 extends Template
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
use Mautic\\PageBundle\\Entity\\VideoHit;

class VideoHitEvent extends CommonEvent
{
    public function __construct(
        VideoHit \$hit,
        protected \$request,
        protected \$code
    ) {
        \$this->entity  = \$hit;
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
     * @return VideoHit
     */
    public function getHit()
    {
        return \$this->entity;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Event/VideoHitEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/VideoHitEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Event\\VideoHitEvent.php");
    }
}
