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

/* @bundles/EmailBundle/Event/EmailValidationEvent.php */
class __TwigTemplate_c4ad5db36659b4954d912c439b7310e2 extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Symfony\\Contracts\\EventDispatcher\\Event;

class EmailValidationEvent extends Event
{
    /**
     * @var bool
     */
    protected \$isValid = true;

    /**
     * @var string|null
     */
    protected \$invalidReason;

    /**
     * @param string \$address
     */
    public function __construct(
        protected \$address
    ) {
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return \$this->address;
    }

    public function setInvalid(\$reason): void
    {
        \$this->isValid       = false;
        \$this->invalidReason = \$reason;

        \$this->stopPropagation();
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return \$this->isValid;
    }

    /**
     * @return string|null
     */
    public function getInvalidReason()
    {
        return \$this->invalidReason;
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
        return "@bundles/EmailBundle/Event/EmailValidationEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/EmailValidationEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Event\\EmailValidationEvent.php");
    }
}
