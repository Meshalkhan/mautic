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

/* @bundles/MessengerBundle/MessageHandler/EmailHitNotificationHandler.php */
class __TwigTemplate_e60b4fb792590efb00c21a1682235c26 extends Template
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

namespace Mautic\\MessengerBundle\\MessageHandler;

use Doctrine\\DBAL\\Exception\\RetryableException;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\MessengerBundle\\Message\\EmailHitNotification;
use Symfony\\Component\\Messenger\\Exception\\RecoverableMessageHandlingException;
use Symfony\\Component\\Messenger\\Handler\\Acknowledger;
use Symfony\\Component\\Messenger\\Handler\\MessageHandlerInterface;

class EmailHitNotificationHandler implements MessageHandlerInterface
{
    private bool \$isSyncTransport;

    public function __construct(
        private EmailModel \$emailModel,
        CoreParametersHelper \$parametersHelper
    ) {
        \$this->isSyncTransport = str_starts_with(\$parametersHelper->get('messenger_dsn_hit'), 'sync://');
    }

    public function __invoke(EmailHitNotification \$message, Acknowledger \$ack = null): void
    {
        try {
            \$this->emailModel->hitEmail(
                \$message->getStatId(),
                \$message->getRequest(),
                false,
                \$this->isSyncTransport,
                \$message->getEventTime(),
                true
            );
        } catch (RetryableException \$e) {
            throw new RecoverableMessageHandlingException(\$e->getMessage());
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
        return "@bundles/MessengerBundle/MessageHandler/EmailHitNotificationHandler.php";
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
        return new Source("", "@bundles/MessengerBundle/MessageHandler/EmailHitNotificationHandler.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\MessageHandler\\EmailHitNotificationHandler.php");
    }
}
