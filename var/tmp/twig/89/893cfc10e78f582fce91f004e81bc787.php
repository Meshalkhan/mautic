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

/* @bundles/ChannelBundle/Translations/en_US/messages.ini */
class __TwigTemplate_df2f9cffa42b172740fb48bdf07deab5 extends Template
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
        echo "mautic.channel.messages=\"Marketing Messages\"
mautic.channel.message.all_contacts=\"This message has been sent to the following contacts.\"
mautic.channel.message.channel_contacts=\"This channel was used for the following contacts during the timeframe selected above:\"
mautic.channel.message.header.new=\"New Marketing Message\"
mautic.channel.message.failed=\"No channel was successful in sending the message.\"
mautic.channel.message.form.message=\"Message\"
mautic.channel.message.form.enabled=\"Enabled?\"
mautic.channel.message.send.attempts=\"Attempts\"
mautic.channel.message.send.attempts.tooltip=\"Number of attempts if an message has failed\"
mautic.channel.message.send.priority=\"Priority\"
mautic.channel.message.send.priority.high=\"High\"
mautic.channel.message.send.priority.normal=\"Normal\"
mautic.channel.message.send.priority.tooltip=\"Messages with priority set as high will be handled before rescheduled messages\"
mautic.channel.permissions.header=\"Channel Permissions\"
mautic.channel.permissions.messages=\"Marketing Messages - Users have access to\"
mautic.channel.form.additem=\"Nothing found here! Change that by adding a new item.\"
mautic.channel.campaign.event.send=\"Send a marketing message\"
mautic.channel.campaign.event.send_descr=\"Select from the list of marketing messages to send in this campaign\"
mautic.channel.send.selectmessages=\"Select a marketing message\"
mautic.channel.choose.messages_descr=\"Marketing messages\"
mautic.email.send.edit.message=\"Edit Message\"
mautic.channel.message.send.marketing.message=\"Send marketing message\"
mautic.channel.message.send.marketing.message.descr=\"Send a message through the configured channels within the marketing message selected.\"
mautic.messages.processed.messages=\"Messages Sent by Channel\"
mautic.channel.message.form.confirmdelete=\"Delete this message?\"
mautic.queued.channel=\"Message Queued for channel - \"
mautic.message.queue=\"Message Queued\"
mautic.queued.message.timeline.status=\"Status\"
mautic.queued.message.event.cancel=\"Cancel\"
mautic.queued.message.timeline.attempts=\"Attempts\"
mautic.queued.message.timeline.channel=\"Channel\"
mautic.queued.message.timeline.date.added=\"Date Added\"
mautic.queued.message.timeline.rescheduled=\"Rescheduled Date\"
mautic.message.form.confirmdelete=\"Delete the marketing message, %name%?\"
mautic.message.queue.report.channel=\"Message channel\"
mautic.message.queue.report.channel_id=\"Message ID\"
mautic.message.queue.report.priority=\"Priority\"
mautic.message.queue.report.max_attempts=\"Max attempts\"
mautic.message.queue.report.attempts=\"Total attempts\"
mautic.message.queue.report.success=\"Success\"
mautic.message.queue.report.status=\"Status\"
mautic.message.queue.report.last_attempt=\"Last attempt date\"
mautic.message.queue.report.date_sent=\"Date sent\"
mautic.message.queue.report.scheduled_date=\"Scheduled Date\"
mautic.message.queue.report.date_published=\"Date published\"
mautic.report.group.message.channel=\"Channels Messages\"
mautic.message.queue=\"Message Queue\"
mautic.messages.messages=\"Marketing Messages\"
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/ChannelBundle/Translations/en_US/messages.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Translations\\en_US\\messages.ini");
    }
}
