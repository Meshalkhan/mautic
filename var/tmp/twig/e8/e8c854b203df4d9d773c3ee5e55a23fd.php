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

/* @bundles/CoreBundle/Console/Output/ConsoleDatetimeOutput.php */
class __TwigTemplate_b5eec60df36618919d859803bac981ff extends Template
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

namespace Mautic\\CoreBundle\\Console\\Output;

use Symfony\\Component\\Console\\Output\\ConsoleOutput;
use Symfony\\Component\\Console\\Output\\ConsoleOutputInterface;

/**
 * Custom console output to prefix all messages with the current datetime
 * Heavily inspired by https://github.com/8p/AssistBundle.
 */
class ConsoleDatetimeOutput extends ConsoleOutput implements ConsoleOutputInterface
{
    /**
     * Prefix message with current datetime.
     *
     * @param string \$message
     * @param bool   \$newline
     */
    protected function doWrite(\$message, \$newline)
    {
        \$date = (new \\DateTime())->format('Y-m-d H:i:s');

        if (!empty(\$message)) {
            \$message = sprintf('[%s] %s', \$date, \$message);
        }

        parent::doWrite(\$message, \$newline);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Console/Output/ConsoleDatetimeOutput.php";
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
        return new Source("", "@bundles/CoreBundle/Console/Output/ConsoleDatetimeOutput.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Console\\Output\\ConsoleDatetimeOutput.php");
    }
}
