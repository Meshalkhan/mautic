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

/* @bundles/CoreBundle/Helper/CommandHelper.php */
class __TwigTemplate_982b6a4cd2c4a50b6f520952bad42840 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\BufferedOutput;
use Symfony\\Component\\HttpKernel\\KernelInterface;

class CommandHelper
{
    public function __construct(
        private KernelInterface \$kernel
    ) {
    }

    /**
     * @param array<int|string> \$params
     */
    public function runCommand(string \$name, array \$params = []): CommandResponse
    {
        \$params      = array_merge(['command' => \$name], \$params);
        \$application = new Application(\$this->kernel);
        \$application->setAutoExit(false);

        \$input      = new ArrayInput(\$params);
        \$output     = new BufferedOutput();
        \$statusCode = \$application->run(\$input, \$output);
        \$message    = \$output->fetch();

        return new CommandResponse(\$statusCode, \$message);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/CommandHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/CommandHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\CommandHelper.php");
    }
}
