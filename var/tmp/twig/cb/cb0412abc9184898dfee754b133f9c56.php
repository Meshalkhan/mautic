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

/* @bundles/SmsBundle/SmsEvents.php */
class __TwigTemplate_d1b435f5767acadb500b7f7335f81b17 extends Template
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

namespace Mautic\\SmsBundle;

/**
 * Events available for SmsBundle.
 */
final class SmsEvents
{
    /**
     * The mautic.sms_token_replacement event is thrown right before the content is returned.
     *
     * The event listener receives a
     * Mautic\\CoreBundle\\Event\\TokenReplacementEvent instance.
     *
     * @var string
     */
    public const TOKEN_REPLACEMENT = 'mautic.sms_token_replacement';

    /**
     * The mautic.sms_on_send event is thrown when a sms is sent.
     *
     * The event listener receives a
     * Mautic\\SmsBundle\\Event\\SmsSendEvent instance.
     *
     * @var string
     */
    public const SMS_ON_SEND = 'mautic.sms_on_send';

    /**
     * The mautic.sms_pre_save event is thrown right before a sms is persisted.
     *
     * The event listener receives a
     * Mautic\\SmsBundle\\Event\\SmsEvent instance.
     *
     * @var string
     */
    public const SMS_PRE_SAVE = 'mautic.sms_pre_save';

    /**
     * The mautic.sms_post_save event is thrown right after a sms is persisted.
     *
     * The event listener receives a
     * Mautic\\SmsBundle\\Event\\SmsEvent instance.
     *
     * @var string
     */
    public const SMS_POST_SAVE = 'mautic.sms_post_save';

    /**
     * The mautic.sms_pre_delete event is thrown prior to when a sms is deleted.
     *
     * The event listener receives a
     * Mautic\\SmsBundle\\Event\\SmsEvent instance.
     *
     * @var string
     */
    public const SMS_PRE_DELETE = 'mautic.sms_pre_delete';

    /**
     * The mautic.sms_post_delete event is thrown after a sms is deleted.
     *
     * The event listener receives a
     * Mautic\\SmsBundle\\Event\\SmsEvent instance.
     *
     * @var string
     */
    public const SMS_POST_DELETE = 'mautic.sms_post_delete';

    /**
     * The mautic.sms.on_campaign_trigger_action event is fired when the campaign action triggers.
     *
     * The event listener receives a
     * Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent
     *
     * @var string
     */
    public const ON_CAMPAIGN_TRIGGER_ACTION = 'mautic.sms.on_campaign_trigger_action';

    /**
     * The mautic.sms.on_reply event is dispatched when a SMS service receives a reply.
     *
     * The event listener receives a Mautic\\SmsBundle\\Event\\ReplyEvent
     *
     * @var string
     */
    public const ON_REPLY = 'mautic.sms.on_reply';

    /**
     * The mautic.sms.on_campaign_reply event is dispatched when a SMS reply campaign decision is processed.
     *
     * The event listener receives a Mautic\\SmsBundle\\Event\\ReplyEvent
     *
     * @var string
     */
    public const ON_CAMPAIGN_REPLY = 'mautic.sms.on_campaign_reply';

    /**
     * The mautic.sms.on_tokens_build event is dispatched when a contact generate tokens are build.
     *
     * The event listener receives a
     * Mautic\\SmsBundle\\Event\\TokensBuildEvent
     */
    public const ON_SMS_TOKENS_BUILD = 'mautic.sms.on_tokens_build';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/SmsEvents.php";
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
        return new Source("", "@bundles/SmsBundle/SmsEvents.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\SmsEvents.php");
    }
}
