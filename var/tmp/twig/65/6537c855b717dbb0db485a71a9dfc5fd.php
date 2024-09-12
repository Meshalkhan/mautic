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

/* @bundles/IntegrationsBundle/Command/CleanupCommand.php */
class __TwigTemplate_5f6e9b5ea49eb92aaf1cc6da20cda459 extends Template
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

namespace Mautic\\IntegrationsBundle\\Command;

use Mautic\\IntegrationsBundle\\Entity\\FieldChangeRepository;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;

class CleanupCommand extends Command
{
    public const NAME = 'mautic:integrations:cleanup';

    public function __construct(private FieldChangeRepository \$fieldChangeRepository)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        \$this->setName(self::NAME)
            ->setDescription('Delete records from field changes which are invalid');

        parent::configure();
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        \$io = new SymfonyStyle(\$input, \$output);

        \$numberOfRecordsDeleted = \$this->fieldChangeRepository->deleteOrphanLeadChanges();
        \$io->success(\"\$numberOfRecordsDeleted records deleted.\");
        \$io->success('Execution time: '.number_format(microtime(true) - \$_SERVER['REQUEST_TIME_FLOAT'], 3));

        return Command::SUCCESS;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Command/CleanupCommand.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Command/CleanupCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Command\\CleanupCommand.php");
    }
}
