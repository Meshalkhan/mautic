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

/* @bundles/MessengerBundle/MessageHandler/TestHandler.php */
class __TwigTemplate_7c358d714a4fa7dbe454fed384f730d2 extends Template
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

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\MessengerBundle\\Message\\TestEmail;
use Mautic\\MessengerBundle\\Message\\TestFailed;
use Mautic\\MessengerBundle\\Message\\TestHit;
use Mautic\\UserBundle\\Entity\\User;
use Symfony\\Component\\Messenger\\Handler\\MessageSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 */
class TestHandler implements MessageSubscriberInterface
{
    public function __construct(
        private NotificationModel \$notificationModel,
        private EntityManagerInterface \$entityManager,
        private TranslatorInterface \$translator,
    ) {
    }

    /**
     * @return iterable<class-string, array<string, string>>
     */
    public static function getHandledMessages(): iterable
    {
        yield TestEmail::class => ['method' => 'handleEmail'];
        yield TestHit::class => ['method' => 'handleHit'];
        yield TestFailed::class => ['method' => 'handleFailed'];
    }

    public function handleEmail(TestEmail \$message): void
    {
        \$this->sendNotification(\$message->userId, 'email');
    }

    public function handleHit(TestHit \$message): void
    {
        \$this->sendNotification(\$message->userId, 'hit');
    }

    public function handleFailed(TestFailed \$message): void
    {
        \$this->sendNotification(\$message->userId, 'failed');
    }

    private function sendNotification(int \$userId, string \$type): void
    {
        \$this->notificationModel->addNotification(
            \$this->translator->trans('mautic.messenger.config.dsn.test_message_processed', ['%type%' => \$type]),
            null,
            false,
            null,
            null,
            null,
            \$this->entityManager->getReference(User::class, \$userId),
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MessengerBundle/MessageHandler/TestHandler.php";
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
        return new Source("", "@bundles/MessengerBundle/MessageHandler/TestHandler.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\MessageHandler\\TestHandler.php");
    }
}
