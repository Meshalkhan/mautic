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

/* @bundles/LeadBundle/Field/Notification/CustomFieldNotification.php */
class __TwigTemplate_07e2c40686efda492d7fcf81f0c6266d extends Template
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

namespace Mautic\\LeadBundle\\Field\\Notification;

use Mautic\\CoreBundle\\Model\\NotificationModel;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Field\\Exception\\NoUserException;
use Mautic\\UserBundle\\Entity\\User;
use Mautic\\UserBundle\\Model\\UserModel;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class CustomFieldNotification
{
    public function __construct(
        private NotificationModel \$notificationModel,
        private UserModel \$userModel,
        private TranslatorInterface \$translator
    ) {
    }

    public function customFieldWasCreated(LeadField \$leadField, ?int \$userId): void
    {
        try {
            \$user = \$this->getUser(\$userId);
        } catch (NoUserException) {
            return;
        }

        \$message = \$this->translator->trans(
            'mautic.lead.field.notification.created_message',
            ['%label%' => \$leadField->getLabel()]
        );
        \$header  = \$this->translator->trans('mautic.lead.field.notification.created_header');

        \$this->addToNotificationCenter(\$user, \$message, \$header);
    }

    public function customFieldWasUpdated(LeadField \$leadField, ?int \$userId): void
    {
        try {
            \$user = \$this->getUser(\$userId);
        } catch (NoUserException) {
            return;
        }

        \$message = \$this->translator->trans(
            'mautic.lead.field.notification.updated_message',
            ['%label%' => \$leadField->getLabel()]
        );
        \$header  = \$this->translator->trans('mautic.lead.field.notification.updated_header');

        \$this->addToNotificationCenter(\$user, \$message, \$header);
    }

    public function customFieldLimitWasHit(LeadField \$leadField, ?int \$userId): void
    {
        try {
            \$user = \$this->getUser(\$userId);
        } catch (NoUserException) {
            return;
        }

        \$message = \$this->translator->trans(
            'mautic.lead.field.notification.custom_field_limit_hit_message',
            ['%label%' => \$leadField->getLabel()]
        );
        \$header  = \$this->translator->trans('mautic.lead.field.notification.custom_field_limit_hit_header');

        \$this->addToNotificationCenter(\$user, \$message, \$header);
    }

    public function customFieldCannotBeCreated(LeadField \$leadField, ?int \$userId): void
    {
        try {
            \$user = \$this->getUser(\$userId);
        } catch (NoUserException) {
            return;
        }

        \$message = \$this->translator->trans(
            'mautic.lead.field.notification.cannot_be_created_message',
            ['%label%' => \$leadField->getLabel()]
        );
        \$header  = \$this->translator->trans('mautic.lead.field.notification.cannot_be_created_header');

        \$this->addToNotificationCenter(\$user, \$message, \$header);
    }

    private function addToNotificationCenter(User \$user, string \$message, string \$header): void
    {
        \$this->notificationModel->addNotification(
            \$message,
            'info',
            false,
            \$header,
            'fa-columns',
            null,
            \$user
        );
    }

    /**
     * @throws NoUserException
     */
    private function getUser(?int \$userId): User
    {
        if (!\$userId || !\$user = \$this->userModel->getEntity(\$userId)) {
            throw new NoUserException();
        }

        return \$user;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/Notification/CustomFieldNotification.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Notification/CustomFieldNotification.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Field\\Notification\\CustomFieldNotification.php");
    }
}
