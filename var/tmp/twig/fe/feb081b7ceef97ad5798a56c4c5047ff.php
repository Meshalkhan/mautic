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

/* @bundles/PointBundle/Event/GroupEvent.php */
class __TwigTemplate_e6e321bab58a659df638d9d5a862d17f extends Template
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

declare(strict_types=1);

namespace Mautic\\PointBundle\\Event;

use Mautic\\PointBundle\\Entity\\Group;

final class GroupEvent
{
    public function __construct(
        private Group \$entity
    ) {
    }

    public function getGroup(): Group
    {
        return \$this->entity;
    }

    public function setGroup(Group \$group): void
    {
        \$this->entity = \$group;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Event/GroupEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/GroupEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Event\\GroupEvent.php");
    }
}
