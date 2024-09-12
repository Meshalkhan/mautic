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

/* @bundles/PageBundle/Translations/en_US/messages.ini */
class __TwigTemplate_e26f48b198bfdfd7382ac90733668235 extends Template
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
        yield "mautic.campaign.page.devicehit=\"Device Hit\"
mautic.campaign.page.pagehit=\"Page Hit\"
mautic.config.tab.pageconfig=\"Landing Page Settings\"
mautic.maintenance.page_hits=\"Visitor page hits\"
mautic.maintenance.lead_utmtags=\"UTM tag history\"
mautic.page.page=\"Page\"
mautic.config.tab.trackingconfig=\"Tracking Settings\"
mautic.config.tab.pixels.event.in.campaign=\"Enable 3rd party campaign action\"
mautic.page.config.form.pixel.campaign.enabled=\"Enable Campaign action 'Send 3rd party  pixel'\"
mautic.page.abtest.criteria=\"Landing Page Stats\"
mautic.page.abtest.criteria.bounce=\"Lowest bounce rate\"
mautic.page.abtest.criteria.dwelltime=\"Longest dwell time\"
mautic.page.abtest.label.bounces=\"Bounce rate\"
mautic.page.abtest.label.dewlltime.average=\"Average dwell time (s)\"
mautic.page.builder.addcontent=\"Click to add content\"
mautic.page.builder.externallink=\"External Link\"
mautic.page.campaign.event.form.pages=\"Limit to Pages\"
mautic.page.campaign.event.form.pages.descr=\"Select the pages this trigger applies to. If none are selected, it'll apply to any page.\"
mautic.page.campaign.event.form.url=\"URL\"
mautic.page.campaign.event.form.url.descr=\"Insert the URL of the page where you placed the tracking pixel. It is possible to use wildcard (*). Example: *product/123* will match http://web.com/product/1234.htm. Separate multiple URLs with a comma.\"
mautic.page.campaign.event.form.referer=\"Referrer\"
mautic.page.campaign.event.form.referer.descr=\"Insert the Referrer URL of the page where you placed the tracking pixel. It is possible to use wildcard (*). Example: *product/123* will match http://web.com/product/1234.htm. Multiple Referrer URLs separate with comma.\"
mautic.page.campaign.event.pagehit=\"Visits a page\"
mautic.page.campaign.event.pagehit_descr=\"Trigger actions on a page/url hit.\"
mautic.page.campaign.event.devicehit=\"Device visit\"
mautic.page.campaign.event.devicehit_descr=\"Trigger device  on a page/url hit.\"
mautic.page.campaign.condition.form.startdate=\"Start Date\"
mautic.page.campaign.condition.form.enddate=\"End Date\"
mautic.page.campaign.condition.form.timespent=\"Time spent (seconds)\"
mautic.page.campaign.condition.form.page=\"Page\"
mautic.page.campaign.condition.form.page.descr=\"Select the page this trigger applies to. If none are selected, it'll apply to any page.\"
mautic.page.config.form.cat.in.url=\"Show category in page URL?\"
mautic.page.config.form.cat.in.url.tooltip=\"If enabled, the category slug will be included in the URL.\"
mautic.page.config.form.track.by.tracking.url=\"Identify visitor by tracking  url\"
mautic.page.config.form.track.by.tracking.url.tooltip=\"If enabled, identify returning visitor by tracking url from channels (especially from emails) when no cookie exists yet. Note: Email fields have to be marked as a unique identifier and publicly updatable in Configuration.\"
mautic.page.config.form.google.analytics=\"Analytics script (i.e. Google Analytics)\"
mautic.page.config.form.google.analytics.tooltip=\"Insert the analytics script to have it automatically included in the source of landing pages.\"
mautic.page.config.form.track_contact_by_ip=\"Identify visitors by IP\"
mautic.page.config.form.track_contact_by_ip.tooltip=\"If enabled, unidentified visitors with the same IP address as an existing contact will be tracked as that contact.\"
mautic.page.config.form.do_not_track_404_anonymous=\"Do Not Track 404 error for anonymous contacts\"
mautic.page.config.form.do_not_track_404_anonymous.tooltip=\"If option is enabled, unidentified visits to 404 response code error pages will not be tracked. This option help prevent bots tracking.\"
mautic.page.config.form.anonymize_ip=\"Anonymize IP\"
mautic.page.config.form.anonymize_ip.tooltip=\"The visitor's IP will not be stored anywhere.\"
mautic.page.config.form.anonymize_ip.warning=\"Existing data will be anonymized. This action is not reversible\"
mautic.page.event.hit=\"Page hit\"
mautic.page.event.publish.down=\"Set %page% as unavailable\"
mautic.page.event.publish.down.description=\"Page '%page%' is going to become unavailable.\"
mautic.page.event.publish.up=\"Set %page% as available\"
mautic.page.event.publish.up.description=\"Page '%page%' is going to become available.\"
mautic.page.field.hits=\"Hit count\"
mautic.page.field.unique_hits=\"Unique hit count\"
mautic.page.form.confirmbatchdelete=\"Delete the selected pages? WARNING - this will also delete all associated A/B tests and translations!\"
mautic.page.form.confirmdelete=\"Delete the page, %name%? WARNING - this will also delete all associated A/B tests and translations!\"
mautic.page.form.customhtml=\"Custom HTML Content\"
mautic.page.form.customhtml.help=\"Design the entire landing page using custom HTML\"
mautic.page.form.language.help=\"Translate the content into multiple languages and link them together by assigning them to a parent page. Language selection links will become available on the related landing pages for customers to choose the language they want to see.\"
mautic.page.form.metadescription=\"Meta Description\"
mautic.page.form.headscript=\"Script inside Head\"
mautic.page.form.script.help=\"Please ensure to enclose your script within <&#8239;script&#8239;> tags to prevent it from displaying as text on the page instead of executing.\"
mautic.page.form.footerscript=\"Script inside Footer\"
mautic.page.form.template.help=\"Choose the theme that will give the landing page it's look and feel. Then use the Page Builder to fill in the contents. WARNING: Changing the theme after building the page may cause content to not display if the two themes do not use the same placeholders.\"
mautic.page.form.redirecttype=\"Redirect type\"
mautic.page.form.redirecttype.help=\"Choose the redirect type (301 permanent, 302 temporary, none)\"
mautic.page.form.redirecttype.none=\"No Redirect\"
mautic.page.form.redirecttype.permanent=\"301 Permanent\"
mautic.page.form.redirecttype.temporary=\"302 Temporary\"
mautic.page.form.redirecttype.303_temporary=\"303 Temporary\"
mautic.page.form.redirecttype.307_temporary=\"307 Temporary\"
mautic.page.form.redirecttype.308_permanent=\"308 Permanent\"
mautic.page.form.redirecturl=\"URL Redirect\"
mautic.page.form.redirecturl.help=\"Choose a URL that can be displayed when this page is unpublished. You can enter a custom URL or you can choose from your personal pages already published.\"
mautic.page.graph.line.hits=\"Page Hits\"
mautic.page.graph.line.time.on.site=\"Average time on site in seconds\"
mautic.page.graph.pie.devices=\"Device Granularity\"
mautic.page.graph.pie.languages=\"Page Languages\"
mautic.page.graph.pie.new.vs.returning=\"New vs Returning\"
mautic.page.graph.pie.new.vs.returning.new=\"New\"
mautic.page.graph.pie.new.vs.returning.returning=\"Returning\"
mautic.page.graph.pie.time.on.site=\"Time on site\"
mautic.page.header.edit=\"Edit Page - %name%\"
mautic.page.header.new=\"New Page\"
mautic.page.help.alias=\"Letters and numbers (hyphens allowed) used for URL generation of this landing page. A unique alias based on the title will be autogenerated if left empty.\"
mautic.page.help.searchcommands=\"<strong>Search commands</strong><br />ids:ID1,ID2 (comma separated IDs, no spaces)<br />is:published<br />is:unpublished<br />is:mine<br />is:uncategorized<br />is:prefcenter<br />category:{category alias}<br />lang:{lang code}\"
mautic.page.hits=\"Page hits\"
mautic.page.menu.edit=\"Edit Page\"
mautic.page.menu.view=\"View Page\"
mautic.page.pages=\"Landing Pages\"
mautic.page.pageviews=\"Page Views\"
mautic.page.permissions.header=\"Landing Page Permissions\"
mautic.page.permissions.pages=\"Pages - User has access to\"
mautic.page.point.action=\"Landing Page actions\"
mautic.page.point.action.form.accumulative.time=\"Total time spent\"
mautic.page.point.action.form.accumulative.time.descr=\"Change points based on the total amount of time spent on the site across visits.\"
mautic.page.point.action.form.first.time.only=\"First visit only\"
mautic.page.point.action.form.first.time.only.descr=\"Contacts can visit the specified URL many times. Decide whether to change points each time or only for the first time.\"
mautic.page.point.action.form.page.hits.descr=\"Change points based on the number of times a contact visits the page.\"
mautic.page.point.action.form.page.url=\"Page URL\"
mautic.page.point.action.form.page.url.descr=\"Insert the URL of the page where you placed the tracking pixel. Url must start with http:// or https://. It is possible to use wildcard (*). Example: http://yourweb.com/product/* will match http://yourweb.com/product/1, http://yourweb.com/product/green-carpet and so on.\"
mautic.page.point.action.form.pages=\"Limit to the selected pages\"
mautic.page.point.action.form.pages.descr=\"Select the pages this action applies to. If none are selected, it'll apply to any page.\"
mautic.page.point.action.form.returns.after=\"Returns after\"
mautic.page.point.action.form.returns.after.descr=\"Change points based on if the contact returns to the URL <em>after</em> the set amount of time.\"
mautic.page.point.action.form.returns.within=\"Returns within\"
mautic.page.point.action.form.returns.within.descr=\"Change points based on if the contact returns to the URL <em>within</em> the set amount of time.\"
mautic.page.point.action.pagehit=\"Visits a landing page\"
mautic.page.point.action.pagehit_descr=\"Change the contact's points after visiting a landing page.\"
mautic.page.point.action.urlhit=\"Visits specific URL\"
mautic.page.point.action.urlhit_descr=\"Change the contact's points after visiting a specific URL where Mautic tracking pixel is loaded.\"
mautic.page.preview.url=\"Public Preview URL\"
mautic.page.publish.down=\"Set as unavailable\"
mautic.page.publish.up=\"Set as available\"
mautic.page.referrer=\"Referrer\"
mautic.page.report.hits.browser_languages=\"Hit browser languages\"
mautic.page.report.hits.city=\"Hit city\"
mautic.page.report.hits.code=\"Hit code\"
mautic.page.report.hits.country=\"Hit country\"
mautic.page.report.hits.date_hit=\"Date hit\"
mautic.page.report.hits.date_left=\"Date left\"
mautic.page.report.hits.device=\"Device\"
mautic.page.report.hits.email_id=\"Email ID\"
mautic.page.report.hits.email_subject=\"Email subject\"
mautic.page.report.hits.isp=\"Hit ISP\"
mautic.page.report.hits.organization=\"Hit organization\"
mautic.page.report.hits.redirect_hit_count=\"Redirect hit count\"
mautic.page.report.hits.redirect_unique_hits=\"Redirect unique hit count\"
mautic.page.report.hits.redirect_url=\"Redirect URL\"
mautic.page.report.hits.referer=\"Hit referer\"
mautic.page.report.hits.region=\"Hit region\"
mautic.page.report.hits.remote_host=\"Hit remote host\"
mautic.page.report.hits.url=\"Hit URL\"
mautic.page.report.hits.url_title=\"Hit page title\"
mautic.page.report.hits.user_agent=\"Hit user agent\"
mautic.page.report.revision=\"Revision\"
mautic.page.report.translation_parent_id=\"Translation parent ID\"
mautic.page.report.translation_parent_title=\"Translation parent name\"
mautic.page.report.variant_hits=\"A/B test hit count\"
mautic.page.report.variant_parent_id=\"A/B test parent ID\"
mautic.page.report.variant_parent_title=\"A/B test parent title\"
mautic.page.report.variant_start_date=\"A/B test start date\"
mautic.page.report.hits.id=\"Page hit ID\"
mautic.report.group.videos=\"Videos\"
mautic.video.hits=\"Video hits\"
mautic.page.report.hits.time_watched=\"Time watched\"
mautic.page.report.hits.duration=\"Duration\"
mautic.page.stage.action=\"Page actions\"
mautic.page.stage.action.pagehit=\"Visits a page\"
mautic.page.stage.action.urlhit=\"Visits URL\"
mautic.page.table.most.visited=\"Most visited pages\"
mautic.page.table.most.visited.unique=\"Most unique visits\"
mautic.page.table.referrers=\"Top referrers\"
mautic.page.thead.hits=\"Hits\"
mautic.page.time.on.page=\"Time on page\"
mautic.page.token.lang=\"Language Bar\"
mautic.page.token.lang.descr=\"Inserts a language selection bar if the page has multiple translated versions.\"
mautic.page.token.share=\"Share Buttons\"
mautic.page.token.share.descr=\"Inserts share buttons configured in the Social Networking settings\"
mautic.page.tokens.header=\"Tokens\"
mautic.page.tokens.help=\"Tokens are placeholders for featured objects such as forms. Just drag and drop the token into the editor to add it!\"
mautic.page.url=\"Page URL\"
mautic.page.webhook.event.hit=\"Page Hit Event\"
mautic.page.dashboard.widgets=\"Page Widgets\"
mautic.widget.page.hits.in.time=\"Page visits in time\"
mautic.widget.unique.vs.returning.leads=\"Unique vs returning visitors\"
mautic.widget.dwell.times=\"Dwell times\"
mautic.widget.popular.pages=\"Popular landing pages\"
mautic.widget.created.pages=\"Created Landing pages\"
mautic.page.visit.flag.filter=\"Visit state\"
mautic.page.show.total.visits=\"Total visits\"
mautic.page.show.unique.visits=\"Unique visits\"
mautic.page.show.unique.and.total.visits=\"Total and unique visits\"
mautic.page.unique=\"Unique\"
mautic.trackable.click_count=\"Clicks\"
mautic.trackable.click_counts=\"Click Counts\"
mautic.trackable.click_counts.header_none=\"No trackable URLs found\"
mautic.trackable.click_counts.none=\"There are no URLs currently being tracked for this channel. It could be that the channel has not been sent yet or it has no URLs to begin with.\"
mautic.trackable.click_track_id=\"Tracking ID\"
mautic.trackable.click_unique_count=\"Unique Clicks\"
mautic.trackable.click_url=\"URL\"
mautic.trackable.click_conversion_rate=\"Conversion Rate\"
mautic.trackable.total_clicks=\"Total Clicks\"
mautic.trackable.total_conversion_rate_tooltip=\"Number of contacts that clicked on at least one link / Total unique views\"
mautic.config.tab.pagetracking=\"Mautic tracking settings\"
mautic.config.tab.pagetracking.info=\"Insert following code at the end of the web page before ending <code>&lt;/body&gt;</code> tag. Mautic Landing Pages are tracked automatically. Use this only to track 3rd party websites.\"
mautic.report.group.pages=\"Pages\"
mautic.page.event.videohit=\"Video view event\"
mautic.page.time.on.video=\"Total time viewed\"
mautic.page.time.on.video.value=\"%time_watched% of %duration% (%percentage%%)\"
mautic.video.url=\"Video URL\"
mautic.page.tracking.pixel.event.send=\"Send tracking event\"
mautic.page.tracking.pixel.event.send_desc=\"Send custom tracking Google Analytics/Facebook Pixel event\"
mautic.campaign.tracking.pixel.send=\"Send tracking event\"
mautic.page.tracking.form.category=\"Category\"
mautic.page.tracking.form.category.tooltip=\"Google Analytics only.\"
mautic.page.tracking.form.action=\"Action\"
mautic.page.tracking.form.label=\"Label\"
mautic.page.tracking.form.services=\"Services\"
mautic.page.config.form.event.google.analytics.enabled=\"Google Analytics event\"
mautic.config.tab.tracking.facebook.pixel=\"Facebook Pixel\"
mautic.page.config.form.facebook.pixel.id=\"Facebook Pixel ID\"
mautic.config.tab.tracking.google.analytics=\"Google Analytics\"
mautic.page.config.form.google.analytics.id=\"Google Analytics ID\"
mautic.page.config.form.tracking.landingpage.enabled=\"Enable on Mautic landing page\"
mautic.page.config.form.tracking.trackingpage.enabled=\"Enabled on your tracking page\"
mautic.page.config.form.tracking.anonymize.ip.enabled=\"Enabled IP Anonymization\"
mautic.page.config.form.tracking.anonymize.ip.enabled.tooltip=\"In some cases, you might need to anonymize the IP address of the hit sent to Google Analytics.\"
mautic.page.form.preference_center=\"Set as preference center page\"
mautic.page.form.preference_center.tooltip=\"If selected, the page will be marked as a preference center landing page. When this page is configured as a preference center in a Mautic Email, recipients will be shown the page when clicking on the <strong><code>{unsubscribe_url}</code></strong> link.<br />See the <a href=\"https://www.mautic.org/docs/en/contacts/customize_preference_center.html\" target=\"_blank\">Mautic documentation</a> under Contacts / Preference Center for more information.\"
mautic.page.config.no_index=\"Disable search indexing\"
mautic.email.form.preference_center=\"Preference center page\"
mautic.email.form.preference_center.tooltip=\"Display the selected page as the preference center if a user accesses it through this email.\"
mautic.page.permissions.preference_center=\"Preference center pages - User has access to\"
mautic.page.form.segmentlist=\"Segment list\"
mautic.page.form.categorylist=\"Category list\"
mautic.page.form.preferredchannel=\"Preferred channel\"
mautic.page.form.channelfrequency=\"Channel frequency\"
mautic.page.form.saveprefs=\"Save preferences\"
mautic.page.form.successmessage=\"Success messsage\"
mautic.page.form.leadidentifier=\"Lead identifier\"
mautic.page.form.frequency.label1=\"Frequency label 1\"
mautic.page.form.frequency.label2=\"Frequency label 2\"
mautic.page.form.pause.label1=\"Pause label 1\"
mautic.page.form.pause.label2=\"Pause label 2\"
mautic.page.form.has_variants=\"Has variants\"
mautic.page.searchcommand.isprefcenter=\"is:prefcenter\"
mautic.page.result.header.index=\"Results for %name%\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PageBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/PageBundle/Translations/en_US/messages.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Translations\\en_US\\messages.ini");
    }
}
