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

/* @bundles/CoreBundle/Validator/EntityEventValidator.php */
class __TwigTemplate_43ca8fa0a2c40126f062756b99d39ec7 extends Template
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

namespace Mautic\\CoreBundle\\Validator;

use Mautic\\CoreBundle\\Event\\EntityValidateEvent;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;
use Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

final class EntityEventValidator extends ConstraintValidator
{
    public function __construct(private EventDispatcherInterface \$dispatcher)
    {
    }

    public function validate(\$value, Constraint \$constraint): void
    {
        if (!is_object(\$value)) {
            throw new UnexpectedTypeException(\$value, 'object');
        }

        if (!\$constraint instanceof EntityEvent) {
            throw new UnexpectedTypeException(\$constraint, EntityEvent::class);
        }

        \$this->dispatcher->dispatch(new EntityValidateEvent(\$value, \$constraint, \$this->context));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Validator/EntityEventValidator.php";
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
        return new Source("", "@bundles/CoreBundle/Validator/EntityEventValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Validator\\EntityEventValidator.php");
    }
}
