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

/* @bundles/PointBundle/Event/PointEvent.php */
class __TwigTemplate_82029944a9160d987d2e427bebd89986 extends Template
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

namespace Mautic\\PointBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\PointBundle\\Entity\\Point;

class PointEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Point &\$point, \$isNew = false)
    {
        \$this->entity = &\$point;
        \$this->isNew  = \$isNew;
    }

    /**
     * @return Point
     */
    public function getPoint()
    {
        return \$this->entity;
    }

    public function setPoint(Point \$point): void
    {
        \$this->entity = \$point;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Event/PointEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/PointEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Event\\PointEvent.php");
    }
}
