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

/* @bundles/SmsBundle/Event/TokensBuildEvent.php */
class __TwigTemplate_395d3c282e72fcbd121ec947c2290079 extends Template
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

namespace Mautic\\SmsBundle\\Event;

use Symfony\\Contracts\\EventDispatcher\\Event;

class TokensBuildEvent extends Event
{
    /**
     * @param array<string,array<int|string>> \$tokens
     */
    public function __construct(private array \$tokens)
    {
    }

    /**
     * @return array<string,array<int|string>>
     */
    public function getTokens(): array
    {
        return \$this->tokens;
    }

    /**
     * @param array<string,array<int|string>> \$tokens
     */
    public function setTokens(\$tokens): void
    {
        \$this->tokens = \$tokens;
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
        return "@bundles/SmsBundle/Event/TokensBuildEvent.php";
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
        return new Source("", "@bundles/SmsBundle/Event/TokensBuildEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Event\\TokensBuildEvent.php");
    }
}
