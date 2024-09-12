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

/* @bundles/PointBundle/Event/PointActionEvent.php */
class __TwigTemplate_e826c8d37c481da572da20749067155c extends Template
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
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PointBundle\\Entity\\Point;

class PointActionEvent extends CommonEvent
{
    public function __construct(
        protected Point \$point,
        protected Lead \$lead
    ) {
    }

    /**
     * @return Point
     */
    public function getPoint()
    {
        return \$this->point;
    }

    public function setPoint(Point \$point): void
    {
        \$this->point = \$point;
    }

    /**
     * @return Lead
     */
    public function getLead()
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
        return "@bundles/PointBundle/Event/PointActionEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/PointActionEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Event\\PointActionEvent.php");
    }
}
