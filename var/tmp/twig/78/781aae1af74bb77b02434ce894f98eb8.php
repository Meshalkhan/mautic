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

/* @bundles/CoreBundle/Command/ConvertConfigCommand.php */
class __TwigTemplate_0358f1c72f2ccf10b2b3dd5d17cab851 extends Template
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

namespace Mautic\\CoreBundle\\Command;

use Mautic\\CoreBundle\\Helper\\PathsHelper;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Input\\InputOption;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * CLI Command to convert PHP theme config to JSON.
 */
class ConvertConfigCommand extends Command
{
    public function __construct(
        private PathsHelper \$pathsHelper
    ) {
        parent::__construct();
    }

    protected function configure()
    {
        \$this->setName('mautic:theme:json-config')
            ->setDefinition([
                new InputOption(
                    'theme', null, InputOption::VALUE_REQUIRED,
                    'The name of the theme whose config you are converting.'
                ),
                new InputOption(
                    'save-php-config', null, InputOption::VALUE_NONE,
                    'When used, the theme\\'s PHP config file will be saved.'
                ),
            ])
            ->setHelp(<<<'EOT'
The <info>%command.name%</info> command converts a PHP theme config file to JSON.

<info>php %command.full_name%</info>

You must specify the name of the theme via the --theme parameter:

<info>php %command.full_name% --theme=<theme></info>

You may opt to save the PHP config file by using the --save-php-config option.

<info>php %command.full_name% --save-php-config</info>
EOT
            );
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$options       = \$input->getOptions();
        \$theme         = \$options['theme'];
        \$savePhpConfig = \$options['save-php-config'];

        \$themePath = realpath(\$this->pathsHelper->getSystemPath('themes', true).'/'.\$theme);

        if (empty(\$themePath)) {
            \$output->writeln(\"\\n\\n<error>The specified theme (\$theme) does not exist.</error>\");

            return Command::FAILURE;
        }

        \$jsonConfigPath = \$themePath.'/config.json';

        if (file_exists(\$jsonConfigPath)) {
            \$output->writeln(\"\\n\\n<error>The specified theme (\$theme) already has a JSON config file.\");

            return Command::FAILURE;
        }

        \$configPath = \$themePath.'/config.php';

        if (!file_exists(\$configPath)) {
            \$output->writeln(\"\\n\\n<error>The php config file for the specified theme (\$theme) could not be found.</error>\");

            return Command::FAILURE;
        }

        \$config = include \$configPath;

        if (!is_array(\$config) || !array_key_exists('name', \$config)) {
            \$output->writeln(\"\\n\\n<error>The php config file for the specified theme (\$theme) is not a valid config file.</error>\");

            return Command::FAILURE;
        }

        \$jsonConfig = json_encode(\$config, JSON_PRETTY_PRINT);

        if (!file_put_contents(\$jsonConfigPath, \$jsonConfig)) {
            \$output->writeln(\"\\n\\n<error>Error writing json config file for the specified theme (\$theme).</error>\");

            return Command::FAILURE;
        } else {
            \$output->writeln(\"\\n\\n<info>Successfully wrote json config file for the specified theme (\$theme).</info>\");
        }

        if (!\$savePhpConfig) {
            if (!unlink(\$configPath)) {
                \$output->writeln(\"\\n\\n<error>Error deleting php config file for the specified theme (\$theme).</error>\");
            } else {
                \$output->writeln(\"\\n\\n<info>PHP config file for theme (\$theme) has been deleted.</info>\");
            }
        } else {
            \$output->writeln(\"\\n\\n<info>PHP config file for theme (\$theme) was preserved.</info>\");
        }

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Converts theme config to JSON from PHP';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Command/ConvertConfigCommand.php";
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
        return new Source("", "@bundles/CoreBundle/Command/ConvertConfigCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Command\\ConvertConfigCommand.php");
    }
}
