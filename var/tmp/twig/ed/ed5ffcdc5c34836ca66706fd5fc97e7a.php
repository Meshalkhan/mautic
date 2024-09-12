<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/NotificationBundle/Translations/en_US/messages.ini */
class __TwigTemplate_b52bb1a7fa34953737261d0bfc87180c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "mautic.campaign.notification.send_notification=\"Send Notification\"
mautic.channel.mobile_notification=\"Mobile Push Notification\"

mautic.notification.notification=\"Web Notification\"
mautic.notification.notifications=\"Web Notifications\"
mautic.notification.campaign.send_notification=\"Send web notification\"
mautic.notification.campaign.send_notification.tooltip=\"Sends a web notification to the contact.\"

mautic.notification.mobile_notification=\"Mobile Notification\"
mautic.notification.mobile_notifications=\"Mobile Notifications\"
mautic.notification.campaign.send_mobile_notification=\"Send mobile notification\"
mautic.notification.campaign.send_mobile_notification.tooltip=\"Sends a mobile notification to the contact if they have enabled notifications on their mobile device in your app.\"

mautic.notification.tab.ios=\"iOS\"
mautic.notification.tab.android=\"Android\"
mautic.notification.tab.data=\"Additional Data\"

mautic.notification.tab.mobile=\"Mobile Settings\"
mautic.integration.form.feature.mobile=\"Mobile app notifications\"
mautic.integration.form.feature.landing_page_enabled=\"Enabled on landing pages?\"
mautic.integration.form.features.landing_page_enabled.tooltip=\"Enable OneSignal on your Mautic landing pages?\"
mautic.integration.form.feature.tracking_page_enabled=\"Enable on tracked pages?\"
mautic.integration.form.features.tracking_page_enabled.tooltip=\"Enable OneSignal on websites that have embedded the mtc.js from this Mautic installation?\"
mautic.integration.form.feature.welcome_notification_enabled=\"Welcome notification\"
mautic.integration.form.platforms=\"Supported Platforms For Mobile Push\"
mautic.integration.form.platforms.tooltip=\"Select the platforms that your OneSignal configuration will support. Only select platforms for which you have an app and have integrated the OneSignal SDK.\"
mautic.integration.form.platforms.ios=\"iOS\"
mautic.integration.form.platforms.android=\"Android\"
mautic.integration.form.platforms.error=\"If the mobile notifications feature is enabled, you must select at least one platform.\"

mautic.notification.form.mobile.url=\"URL\"
mautic.notification.form.mobile.url.tooltip=\"Opens a URL when the notification is clicked.\"
mautic.notification.form.mobile.heading=\"Title\"

mautic.notification.form.mobile.ios_subtitle=\"Message Subtitle\"
mautic.notification.form.mobile.ios_subtitle.tooltip=\"This is an iOS 10 only feature\"
mautic.notification.form.mobile.ios_sound=\"Sound\"
mautic.notification.form.mobile.ios_sound.tooltip=\"Sound file will play when the notification is received by the device. This should either be left blank for the default sound or set to the name of a sound file in your app bundle.\"
mautic.notification.form.mobile.ios_badges=\"Badges\"
mautic.notification.form.mobile.ios_badges.tooltip=\"Small number on the app icon on the home screen indicating the number of notifications received for your app. Clears when the app is opened.\"
mautic.notification.form.mobile.ios_badges.placeholder=\"Don't set or change\"
mautic.notification.form.mobile.ios_badges.set=\"Set to\"
mautic.notification.form.mobile.ios_badges.increment=\"Increase by\"
mautic.notification.form.mobile.ios_badgecount=\"Badge count\"
mautic.notification.form.mobile.ios_badgecount.tooltip=\"This will either set or increase the badge count depending on your previous selection.\"
mautic.notification.form.mobile.ios_contentavailable=\"Content Available\"
mautic.notification.form.mobile.ios_contentavailable.tooltip=\"Only for native iOS apps. Wakes your app when the notification is received so you can do work in the background. See Apple's 'content-available' documentation for more details.\"
mautic.notification.form.mobile.ios_media=\"Media\"
mautic.notification.form.mobile.ios_media.tooltip=\"Rich media attachment. Image, sound, or video to show when 3D touching the notification. Requires the OneSignal iOS 2.1.1 SDK or newer.\"
mautic.notification.form.mobile.ios_mutablecontent=\"Mutable Content\"
mautic.notification.form.mobile.ios_mutablecontent.tooltip=\"Native only code running on iOS 10+. Allows you to modify the notification from your app before it is displayed. See Apple's 'mutable-content' documentation for more details.\"

mautic.notification.form.mobile.android_sound=\"Sound\"
mautic.notification.form.mobile.android_small_icon=\"Small Icon\"
mautic.notification.form.mobile.android_large_icon=\"Large Icon\"
mautic.notification.form.mobile.android_group_key=\"Group Key\"
mautic.notification.form.mobile.android_lockscreen_visibility=\"Lockscreen Visibility\"
mautic.notification.form.mobile.android_lockscreen_visibility.placeholder=\"Public\"
mautic.notification.form.mobile.android_lockscreen_visibility.private=\"Private\"
mautic.notification.form.mobile.android_lockscreen_visibility.secret=\"Secret\"
mautic.notification.form.mobile.android_big_picture=\"Big Picture\"
mautic.notification.form.mobile.android_led_color=\"LED Color\"
mautic.notification.form.mobile.android_accent_color=\"Accent Color\"

mautic.notification.form.mobile.android_sound.tooltip=\"Sound resource will play when the notification is received by the device.\"
mautic.notification.form.mobile.android_small_icon.tooltip=\"Icon shows in the status bar. Also show to the left of the notification text unless a large icon is set.\"
mautic.notification.form.mobile.android_large_icon.tooltip=\"Requires Android 3.0+. Icon shows up to the left of the notification text.\"
mautic.notification.form.mobile.android_group_key.tooltip=\"Notifications with the same Group Key will be stacked together as a single summary notification with the number of unopened notifications.\"
mautic.notification.form.mobile.android_lockscreen_visibility.tooltip=\"Only applies to apps targeting Android API level 21+ running on Android 5.0+ devices.\"
mautic.notification.form.mobile.android_big_picture.tooltip=\"Requires Android 4.1+ Shows up in an expandable view below the notification text.\"
mautic.notification.form.mobile.android_led_color.tooltip=\"Sets the device's LED notification light if the device has one. Uses ARGB Hex value. The placeholder text shown is blue.\"
mautic.notification.form.mobile.android_accent_color.tooltip=\"Sets the circle color around your small icon that shows to the left of your notification text. Uses ARGB Hex value. The placeholder text is shown red. Only applies to apps targeting Android API level 21+ running on Android 5.0+ devices.\"

mautic.config.tab.notificationconfig=\"Web Notification Settings\"
mautic.notification.config.form.notification.enabled=\"Web Notifications Enabled?\"
mautic.notification.config.form.notification.enabled.tooltip=\"Enable Web Notifications support in your campaigns?\"
mautic.notification.config.form.notification.landingpage.enabled=\"Enabled on Mautic landing pages?\"
mautic.notification.config.form.notification.landingpage.enabled.tooltip=\"Enable Web Notifications on landing pages?\"
mautic.notification.config.form.notification.trackingpage.enabled=\"Enabled on tracking pages?\"
mautic.notification.config.form.notification.trackinggpage.enabled.tooltip=\"Enable Web Notifications on tracking pages?\"
mautic.notification.config.form.notification.welcome.enabled=\"Welcome Notification\"
mautic.notification.config.form.notification.welcome.enabled.tooltip=\"Enable Welcome Notification after register\"
mautic.notification.config.form.notification.app_id=\"OneSignal App ID\"
mautic.notification.config.form.notification.app_id.tooltip=\"OneSignal App ID\"
mautic.notification.config.form.notification.rest_api_key=\"OneSignal Rest API Key\"
mautic.notification.config.form.notification.rest_api_key.tooltip=\"OneSignal Rest API Key\"
mautic.notification.config.form.notification.gcm_sender_id=\"Shared key for push notifications\"
mautic.notification.config.form.notification.gcm_sender_id.tooltip=\"gcm_sender_id key - do not change it\"
mautic.notification.config.form.notification.subdomain_name=\"Subdomain of onesignal.com\"
mautic.notification.config.form.notification.subdomain_name.tooltip=\"Only for non https sites.\"
mautic.notification.config.form.notification.notification_safari_web_id=\"Web Notifications Provider Safari Web ID\"
mautic.notification.config.form.notification.notification_safari_web_id.tooltip=\"One Signal Safari Web ID for your One Signal App\"
mautic.notification.config.form.notification.icon=\"Web Notification Icon\"
mautic.notification.config.form.notification.icon.tooltip=\"The icon that will be shown on the left side of your web notifications.\"

mautic.notification.form.action.sendnotification.admin=\"Send web notification to user\"
mautic.notification.form.action.sendnotification.admin.descr=\"Send the selected web notification to the selected user(s) upon form submission.\"
mautic.notification.form.action.sendnotification.lead=\"Send web notification to contact\"
mautic.notification.form.action.sendnotification.lead.descr=\"Send the web selected notification to the contact upon form submission.\"
mautic.notification.form.body=\"Body\"
mautic.notification.form.confirmbatchdelete=\"Delete the selected web notifications?\"
mautic.notification.form.confirmdelete=\"Delete the web notification, %name%?\"
mautic.notification.form.confirmsend=\"Queue, %name%, for sending?\"
mautic.notification.form.internal.name=\"Name\"
mautic.notification.form.list=\"Contact list\"

mautic.notification.header.edit=\"Edit Web Notification\"
mautic.notification.header.new=\"New Web Notification\"
mautic.notification.mobile.header.edit=\"Edit Mobile Notification\"
mautic.notification.mobile.header.new=\"New Mobile Notification\"

mautic.notification.text=\"Web Notification Content\"
mautic.notification.text.tooltip=\"Your web notification content\"
mautic.notification.headings=\"Web Notification Title\"
mautic.notification.headings.tooltip=\"Your web notification title\"
mautic.notification.link=\"Link\"
mautic.notification.link.placeholder=\"http://\"
mautic.notification.link.tooltip=\"When the user clicks the web notification, where do you want to send them?\"
mautic.notification.permissions.mobile_notifications=\"Mobile Notifications - User has access to\"
mautic.notification.permissions.header=\"Push Notification Permissions\"
mautic.notification.permissions.notifications=\"Web Notifications - User has access to\"

mautic.notification.stats=\"Notification Stats\"
mautic.notification.stats.report.table=\"Notifications Sent\"
mautic.notification.stat.leadcount=\"%count% Pending\"
mautic.notification.stat.readcount=\"%count% Read\"
mautic.notification.stat.sentcount=\"%count% Sent\"

mautic.notification.type.header=\"What type of notification do you want to create?\"
mautic.notification.type.list=\"List Notifications\"
mautic.notification.type.list.header=\"New List Notification\"
mautic.notification.type.list.description=\"A list notification can be manually sent to selected contact lists. Once the notification has been sent, it cannot be edited. However, it can be sent to new contacts as they are added to the associated lists.\"
mautic.notification.type.template=\"Template Notifications\"
mautic.notification.type.template.header=\"New Template Notification\"
mautic.notification.type.template.description=\"A template notification is automatically sent by campaigns, forms, point triggers, etc. These can be edited but cannot be sent to a contact list.\"

mautic.notification.form.internal.description=\"Description\"
mautic.notification.form.heading=\"Heading\"
mautic.notification.form.url=\"Link\"
mautic.notification.form.url.tooltip=\"The destination the user is sent to when they click the notification.\"
mautic.notification.form.button=\"Action Button Text\"
mautic.notification.form.button.tooltip=\"Add action button to the notification (Chrome only)\"
mautic.notification.form.message=\"Message\"

mautic.notification.send.selectnotifications=\"Select Notification\"
mautic.notification.choose.notifications=\"Select the notification to send to the user.\"
mautic.notification.send.new.notification=\"New Notification\"
mautic.notification.send.edit.notification=\"Edit Notification\"
mautic.notification.send.preview.notification=\"Preview Notification\"

mautic.notification.preview=\"Preview\"
mautic.notification.notification.header.preview=\"Web Notification Preview\"

mautic.notification.timeline.status=\"Status\"
mautic.notification.timeline.type=\"Type\"
mautic.notification.timeline.status.delivered=\"Delivered\"
mautic.notification.timeline.status.failed=\"Failed\"
mautic.notification.config.form.notification.safari_web_id=\"Safari Web ID\"
mautic.notification.config.form.notification.safari_web_id.tooltip=\"Safari Web ID from OneSignal if you want to support Apple Push Notifications\"

mautic.notification.campaign.failed.not_contactable=\"Contact is not contactable on the Web Notification channel.\"
mautic.notification.campaign.failed.not_subscribed=\"The contact has not subscribed to the Web Notification channel.\"
mautic.notification.campaign.failed.missing_entity=\"The specified Web Notification entity does not exist.\"
mautic.notification.campaign.failed.unpublished=\"The specified Web Notification is unpublished.\"
mautic.notification.show.total.sent=\"Total sent\"
mautic.notification.help.searchcommands=\"<strong>Search commands</strong><br />ids:ID1,ID2 (comma separated IDs, no spaces)\"

mautic.notification.campaign.event.notification.has.active=\"Has active notification\"
mautic.campaign.notification.has.active=\"Has active notification\"
mautic.notification.campaign.event.notification.has.active.desc=\"Condition check If contact has active notification.\"

mautic.report.group.mobile_notifications=\"Mobile Notifications\"
mautic.mobile_notification.stats.report.table=\"Mobile Notifications sent\"
mautic.mobile_notification.report.hits_count=\"Hits Count\"
mautic.mobile_notification.report.hits_ratio=\"Hits Ratio\"
mautic.mobile_notification.report.read_count=\"Read Count\"
mautic.mobile_notification.report.read_ratio=\"Read Ratio\"
mautic.mobile_notification.report.sent_count=\"Sent Count\"
mautic.mobile_notifications.report.stat.date_read=\"Date Read\"
mautic.mobile_notifications.report.stat.date_sent=\"Date Sent\"
mautic.mobile_notification.report.unique_hits_count=\"Unique Hits\"
mautic.mobile_notification.report.unique_ratio=\"Unique Ratio\"
mautic.notification.mobile_notification.heading=\"Title\"
mautic.notification.mobile_notification.preview=\"Preview notification\"
mautic.notification.mobile_notification.header.preview=\"Mobile notification\"
mautic.mobile_notification.graph.line.stats.read=\"Read\"
mautic.mobile_notification.graph.line.stats.sent=\"Sent\"
mautic.mobile_notification.graph.line.stats=\"Mobile Notifications sent\"
mautic.mobile_notification.graph.pie.ignored.read.failed.ignored=\"Ignored\"
mautic.mobile_notification.graph.pie.ignored.read.failed.read=\"Read\"
mautic.mobile_notification.graph.pie.ignored.read.failed=\"Ignored / Read / Failed mobile notifications\"

mautic.notification.actions=\"Notification actions\"
mautic.notification.actions.mobile_tooltip=\"Send the selected mobile notification to the user when a form is filled out if they have mobile notifications enabled.\"
mautic.notification.actions.send_mobile_notification=\"Send mobile notification\"
mautic.notification.form.subdomain_name.label=\"Subdomain name\"
mautic.campaign.notification.send_mobile_notification=\"Send mobile notification\"

mautic.config.tab.notification_config=\"Notification Settings\"
mautic.config.tab.campaign_notification_config=\"Campaign Notification Settings\"
mautic.config.tab.webhook_notification_config=\"Webhook Notification Settings\"

mautic.notification.form.config.send_notification_to_author =\"Send notification to author\"
mautic.notification.form.config.send_notification_to_author.tooltip = \"Send notification to the author or other users email addresses.\"

mautic.notification.form.config.notification_email_addresses =\"Email addresses to receive notifications\"
mautic.notification.form.config.notification_email_addresses.tooltip = \"Add comma separated list of email addresses to receive notifications\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/NotificationBundle/Translations/en_US/messages.ini";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/NotificationBundle/Translations/en_US/messages.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Translations\\en_US\\messages.ini");
    }
}
