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

/* @bundles/WebhookBundle/Command/DeleteWebhookLogsCommand.php */
class __TwigTemplate_ff4010afdd96ac56e7f9a8d8c8567d77 extends Template
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

namespace Mautic\\WebhookBundle\\Command;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\WebhookBundle\\Model\\WebhookModel;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;

/**
 * Retains a rolling number of log records.
 */
class DeleteWebhookLogsCommand extends Command
{
    public const COMMAND_NAME = 'mautic:webhooks:delete_logs';

    private \\Mautic\\WebhookBundle\\Entity\\LogRepository \$logRepository;

    public function __construct(
        WebhookModel \$webhookModel,
        private CoreParametersHelper \$coreParametersHelper
    ) {
        \$this->logRepository        = \$webhookModel->getLogRepository();

        parent::__construct();
    }

    protected function configure(): void
    {
        \$this->setName(static::COMMAND_NAME);
    }

    protected function execute(InputInterface \$input, OutputInterface \$output): int
    {
        \$logMaxLimit  = (int) \$this->coreParametersHelper->get('webhook_log_max', WebhookModel::WEBHOOK_LOG_MAX);
        \$webHookIds   = \$this->logRepository->getWebhooksBasedOnLogLimit(\$logMaxLimit);
        \$webhookCount = count(\$webHookIds);
        \$output->writeln(\"<info>There is {\$webhookCount} webhooks with logs more than defined limit.</info>\");

        foreach (\$webHookIds as \$webHookId) {
            \$deletedLogCount = \$this->logRepository->removeLimitExceedLogs(\$webHookId, \$logMaxLimit);
            \$output->writeln(sprintf('<info>%s logs deleted successfully for webhook id - %s</info>', \$deletedLogCount, \$webHookId));
        }

        return Command::SUCCESS;
    }

    protected static \$defaultDescription = 'Retains a rolling number of log records.';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Command/DeleteWebhookLogsCommand.php";
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
        return new Source("", "@bundles/WebhookBundle/Command/DeleteWebhookLogsCommand.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Command\\DeleteWebhookLogsCommand.php");
    }
}
