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

/* @bundles/PluginBundle/Command/ReloadCommand.php */
class __TwigTemplate_943d6816ced50e845dce7e5dda1fad41 extends Template
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

namespace Mautic\\PluginBundle\\Command;

use Mautic\\PluginBundle\\Facade\\ReloadFacade;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

class ReloadCommand extends Command
{
    public function __construct(
        private ReloadFacade \$reloadFacade
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this
            ->setName('mautic:plugins:reload')
            ->setAliases(
                [
                    'mautic:plugins:install',
                    'mautic:plugins:update',
                ]
            );

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$output->writeLn(\$this->reloadFacade->reloadPlugins());

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Installs, updates, enable and/or disable plugins.';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Command/ReloadCommand.php";
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
        return new Source("", "@bundles/PluginBundle/Command/ReloadCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Command\\ReloadCommand.php");
    }
}
