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

/* @bundles/CoreBundle/Event/CommandListEvent.php */
class __TwigTemplate_da6c76781bd256ecce0ecd9f0885755b extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Symfony\\Contracts\\EventDispatcher\\Event;

class CommandListEvent extends Event
{
    /**
     * @var array
     */
    protected \$commands = [];

    /**
     * Returns the list of currently stored commands.
     *
     * @return mixed
     */
    public function getCommands()
    {
        return \$this->commands;
    }

    /**
     * Add an array of search commands.
     *
     * @param string \$header   String name for section header
     * @param array  \$commands Array of commands supported by the repository
     */
    public function addCommands(\$header, array \$commands): void
    {
        \$this->commands[\$header] = \$commands;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/CommandListEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/CommandListEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Event\\CommandListEvent.php");
    }
}
