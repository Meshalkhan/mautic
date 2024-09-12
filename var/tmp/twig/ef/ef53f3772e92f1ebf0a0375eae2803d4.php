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

/* @bundles/SmsBundle/Translations/en_US/messages.ini */
class __TwigTemplate_31bf97f1c33b3accd229b2e01bcb4d15 extends Template
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
        echo "mautic.campaign.sms.reply=\"Sends a text message\"
mautic.campaign.sms.reply.tooltip=\"Contact sent or replied to a text message\"
mautic.campaign.sms.send_text_sms=\"Send text message\"
mautic.sms.timeline.event.custom_sms=\"Custom text message\"
mautic.campaign.sms.send_text_sms.tooltip=\"Sends a text/sms to the contact.\"
mautic.lead.list.filter.dnc_bounced_sms=\"Bounced - SMS\"
mautic.lead.list.filter.dnc_unsubscribed_sms=\"Unsubscribed - SMS\"
mautic.lead.timeline.sms.sms.reply=\"Text message received from contact\"
mautic.sms.timeline.reply=\"Text message received\"

mautic.sms.text=\"Text Message Content\"
mautic.sms.placeholder=\"Message content here...\"
mautic.config.tab.smsconfig=\"Text Message Settings\"
mautic.sms.config.form.sms.enabled=\"Text Message Enabled?\"
mautic.sms.config.form.sms.enabled.tooltip=\"Enable Text Message support in your campaigns?\"
mautic.sms.config.form.sms.username=\"Account SID\"
mautic.sms.config.form.sms.username.tooltip=\"Twilio Account SID\"
mautic.sms.config.form.sms.password=\"Auth Token\"
mautic.sms.config.form.sms.password.tooltip=\"Twilio Auth Token\"
mautic.sms.config.form.sms.messaging_service_sid=\"Messaging Service SID\"
mautic.sms.config.form.sms.messaging_service_sid.tooltip=\"The messaging service sid given by your provider that you use to send and receive Text Message messages.\"
mautic.sms.config.form.sms.disable_trackable_urls=\"Disable click tracking\"
mautic.sms.config.form.sms.disable_trackable_urls.tooltip=\"This option will disable click tracking for URLs in the text message.\"

mautic.sms.sms=\"Text Message\"
mautic.sms.smses=\"Text Messages\"
mautic.sms.campaign.send_sms=\"Send Push Text Message\"
mautic.sms.campaign.send_sms.tooltip=\"Sends a push sms to the user.\"
mautic.sms.choose.smss=\"Select a text message to send.\"

mautic.sms.form.action.sendsms.admin=\"Send sms to user\"
mautic.sms.form.action.sendsms.admin.descr=\"Send the selected sms to the selected user(s) upon form submission.\"
mautic.sms.form.action.sendsms.lead=\"Send sms to contact\"
mautic.sms.form.action.sendsms.lead.descr=\"Send the selected sms to the contact upon form submission.\"
mautic.sms.form.body=\"Body\"
mautic.sms.form.confirmbatchdelete=\"Delete the selected smses?\"
mautic.sms.form.confirmdelete=\"Delete the sms, %name%?\"
mautic.sms.form.confirmsend=\"Queue, %name%, for sending?\"
mautic.sms.form.internal.name=\"Internal Name\"
mautic.sms.form.list=\"Contact list\"
mautic.sms.form.nbcharacter.counter=\"Character count: \"
mautic.sms.form.nbcharacter.infobox=\"One SMS is built with 160 characters. Most of the time, your SMS router will charge you 2 or more SMS if you go over this amount of characters.\"

mautic.sms.header.edit=\"Edit Text Message - %name%\"
mautic.sms.header.new=\"New Text Message\"

mautic.sms.text.tooltip=\"Your sms content\"
mautic.sms.headings=\"Text Message Title\"
mautic.sms.headings.tooltip=\"Your sms title\"
mautic.sms.link=\"Link\"
mautic.sms.link.placeholder=\"http://\"
mautic.sms.link.tooltip=\"When the user clicks the sms, where do you want to send them?\"

mautic.sms.reply_pattern=\"Pattern the reply should match\"
mautic.sms.reply_pattern.tooltip=\"Type the pattern the reply must match in order for this decision to be acknowledged. Leave blank to match any message. You can use an asterisks * for wildcard string matching or ? for a single character. To match the asterisks or question mark themselves, surround them in bars like [?].\"

mautic.sms.stats=\"Text Message Stats\"
mautic.sms.stats.report.table=\"Text Messages Sent\"
mautic.sms.stat.leadcount=\"%count% Pending\"
mautic.sms.stat.readcount=\"%count% Read\"
mautic.sms.stat.sentcount=\"%count% Sent\"

mautic.sms.type.header=\"What type of sms do you want to create?\"
mautic.sms.type.list=\"List Text Messages\"
mautic.sms.type.list.header=\"Segment Text Message\"
mautic.sms.icon_tooltip.list_sms=\"Is a segment (broadcast) sms\"
mautic.sms.type.list.description=\"A list sms can be manually sent to selected contact lists. Once the sms has been sent, it cannot be edited. However, it can be sent to new contacts as they are added to the associated lists.\"
mautic.sms.type.template=\"Template Text Messages\"
mautic.sms.type.template.header=\"Template Text Message\"
mautic.sms.type.template.description=\"A template sms is automatically sent by campaigns, forms, point triggers, etc. These can be edited but cannot be sent to a contact list.\"

mautic.sms.form.internal.description=\"Description\"
mautic.sms.form.heading=\"Heading\"
mautic.sms.form.url=\"Link\"
mautic.sms.form.url.tooltip=\"The destination the user is sent to when they click the sms.\"
mautic.sms.form.message=\"Text Message\"

mautic.sms.send.selectsmses=\"Select Text Message\"
mautic.sms.choose.smses=\"Select the sms to send to the user.\"
mautic.sms.send.new.sms=\"New Text Message\"
mautic.sms.send.edit.sms=\"Edit Text Message\"
mautic.sms.send.preview.sms=\"Preview Text Message\"

mautic.sms.send.selectsmss=\"Select Message\"
mautic.sms.no.smses.note=\"Please create a new Text Message message to select.\"

mautic.sms.smses.header.preview=\"Preview Text Message\"
mautic.sms.preview=\"Preview\"

mautic.sms.timeline.status=\"Status\"
mautic.sms.timeline.type=\"Type\"
mautic.sms.timeline.status.delivered=\"Delivered\"
mautic.sms.timeline.status.sent=\"Sent\"
mautic.sms.timeline.status.failed=\"Failed\"
mautic.sms.timeline.status.scheduled=\"Scheduled\"
mautic.sms.timeline.content.heading=\"Message Content\"
mautic.sms.timeline.event.list=\"Text message was sent to this contact because they belong to the '%list%' segment.\"
mautic.sms.timeline.event.failed=\"Sending text message failed\"

mautic.sms.disabled=\"Text Messages are currently disabled\"
mautic.sms.enable.in.configuration=\"Enable and configure Text Messages in the Mautic configuration.\"
mautic.sms.create.in.campaign.builder=\"Seems there are none! Try changing a filter (if applicable) or create a new one in the Campaign Builder.\"

mautic.sms.campaign.failed.not_contactable=\"Contact is not contactable on the SMS channel.\"
mautic.sms.campaign.failed.missing_number=\"Missing phone number for contact.\"
mautic.sms.campaign.failed.missing_entity=\"The specified SMS entity does not exist.\"
mautic.sms.campaign.failed.unpublished=\"The specified SMS was unpublished.\"
mautic.sms.show.total.sent=\"Total sent\"
mautic.sms.show.failed=\"Failed\"
mautic.sms.permissions.header=\"Text Message Permissions\"
mautic.sms.permissions.smses=\"Text Messages - User has access to\"
mautic.sms.list.frequency.number=\"Do not send text message more than\"
mautic.sms.help.searchcommands=\"<strong>Search commands</strong><br />ids:ID1,ID2 (comma separated IDs, no spaces)\"

mautic.sms.config.select_default_transport=\"Select default transport to use\"
mautic.sms.config.no_transport=\"No transport enabled\"
mautic.sms.config.choose_transport=\"Select transport\"
mautic.sms.config.smsconfig=\"Please, install messaging transport first.\"

mautic.sms.transport.twilio=\"Twilio\"
mautic.sms.transport.twilio.not_configured=\"Twilio is not configured.\"

mautic.sms.webhook.event.send=\"Text Send Event\"
mautic.sms.token.dropdown.hint=\"Hint: In text message area, entering { shows a token dropdown.\"";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/SmsBundle/Translations/en_US/messages.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Translations\\en_US\\messages.ini");
    }
}
