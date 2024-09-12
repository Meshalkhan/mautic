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

/* @bundles/CoreBundle/Event/EntityValidateEvent.php */
class __TwigTemplate_9444cda51ece0e58b88e4b27379aa339 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Validator\\EntityEvent;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

class EntityValidateEvent extends Event
{
    public function __construct(private object \$entity, private EntityEvent \$constraint, private ExecutionContextInterface \$context)
    {
    }

    public function getEntity(): object
    {
        return \$this->entity;
    }

    public function getConstraint(): EntityEvent
    {
        return \$this->constraint;
    }

    public function getContext(): ExecutionContextInterface
    {
        return \$this->context;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/EntityValidateEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/EntityValidateEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Event\\EntityValidateEvent.php");
    }
}
