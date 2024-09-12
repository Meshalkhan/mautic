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

/* @bundles/SmsBundle/Event/TokensBuildEvent.php */
class __TwigTemplate_bbce6522856e35725365e88a98b7584a extends Template
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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Event/TokensBuildEvent.php";
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
        return new Source("", "@bundles/SmsBundle/Event/TokensBuildEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Event\\TokensBuildEvent.php");
    }
}
