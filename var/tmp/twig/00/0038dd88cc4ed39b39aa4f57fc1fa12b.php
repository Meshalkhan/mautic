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

/* @bundles/ReportBundle/Scheduler/Model/SendSchedule.php */
class __TwigTemplate_a0a32e8f8bb94a52d9ab88610a90dd18 extends Template
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

namespace Mautic\\ReportBundle\\Scheduler\\Model;

use Mautic\\CoreBundle\\Form\\DataTransformer\\ArrayStringTransformer;
use Mautic\\EmailBundle\\Helper\\MailHelper;
use Mautic\\ReportBundle\\Entity\\Scheduler;
use Mautic\\ReportBundle\\Event\\PermanentReportFileCreatedEvent;
use Mautic\\ReportBundle\\Exception\\FileTooBigException;
use Mautic\\ReportBundle\\ReportEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class SendSchedule
{
    private MailHelper \$mailer;

    public function __construct(
        MailHelper \$mailer,
        private MessageSchedule \$messageSchedule,
        private FileHandler \$fileHandler,
        private EventDispatcherInterface \$eventDispatcher
    ) {
        \$this->mailer = \$mailer->getMailer();
    }

    public function send(Scheduler \$scheduler, \$csvFilePath): void
    {
        \$this->mailer->reset(true);

        \$transformer = new ArrayStringTransformer();
        \$report      = \$scheduler->getReport();
        \$emails      = \$transformer->reverseTransform(\$report->getToAddress());
        \$subject     = \$this->messageSchedule->getSubject(\$report);
        \$message     = \$this->messageSchedule->getMessageForAttachedFile(\$report);

        try {
            // Try to send the CSV file as an email attachement.
            \$this->fileHandler->fileCanBeAttached(\$csvFilePath);
            \$this->mailer->attachFile(\$csvFilePath, basename(\$csvFilePath), 'text/csv');
        } catch (FileTooBigException) {
            \$zipFilePath = \$this->fileHandler->zipIt(\$csvFilePath);
            try {
                // Try to send the ZIP file as an email attachement.
                \$this->fileHandler->fileCanBeAttached(\$zipFilePath);
                \$this->mailer->attachFile(\$zipFilePath, basename(\$zipFilePath), 'application/zip');
            } catch (FileTooBigException) {
                // Send the ZIP file as link in the email message.
                \$this->fileHandler->moveZipToPermanentLocation(\$report, \$zipFilePath);
                \$message = \$this->messageSchedule->getMessageForLinkedFile(\$report);
                \$event   = new PermanentReportFileCreatedEvent(\$report);
                \$this->eventDispatcher->dispatch(\$event, ReportEvents::REPORT_PERMANENT_FILE_CREATED);
            }
        }

        \$this->mailer->setTo(\$emails);
        \$this->mailer->setSubject(\$subject);
        \$this->mailer->setBody(\$message);
        \$this->mailer->parsePlainText(\$message);
        \$this->mailer->send(true);

        \$this->fileHandler->delete(\$csvFilePath);

        if (!empty(\$zipFilePath)) {
            \$this->fileHandler->delete(\$zipFilePath);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Scheduler/Model/SendSchedule.php";
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
        return new Source("", "@bundles/ReportBundle/Scheduler/Model/SendSchedule.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Scheduler\\Model\\SendSchedule.php");
    }
}
