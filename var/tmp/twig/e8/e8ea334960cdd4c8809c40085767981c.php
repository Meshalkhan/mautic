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

/* @bundles/FormBundle/Translations/en_US/messages.ini */
class __TwigTemplate_79c66b2dd277541c8a46b0e885708ac7 extends Template
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
        yield "mautic.campaign.form.submit=\"Form submitted\"
mautic.campaign.form.field_value=\"Form field value\"
mautic.email.form.users=\"Send email to user\"
mautic.form.field=\"Form Field\"
mautic.form.abtest.criteria=\"Form Stats\"
mautic.form.abtest.criteria.submissions=\"Submission rate\"
mautic.form.abtest.label.hits=\"Number of unique page hits\"
mautic.form.abtest.label.sentemils=\"Number of sent emails\"
mautic.form.abtest.label.submissions=\"Number of submissions\"
mautic.form.abtest.submissions=\"%count% submissions\"
mautic.form.actions=\"Form actions\"
mautic.form.action.add=\"Add a submit action\"
mautic.form.action.repost=\"Post results to another form\"
mautic.form.action.repost.descr=\"Forward the submitted results to another form\"
mautic.form.action.repost.authorization_header=\"Authorization header\"
mautic.form.action.repost.authorization_header.tooltip=\"If the form is behind a firewall, set the authorization header here.\"
mautic.form.action.repost.failed_subject=\"Form re-post failed: %form%\"
mautic.form.action.repost.failed_message=\"Submission URL: <a href='%link%'>%link%</a><br /><br />Error message: %message%<br /><br />Results:<br />%results%\"
mautic.form.action.repost.failure_email=\"Post failure notification email\"
mautic.form.action.repost.failure_email.tooltip=\"If the re-post fails for whatever reason, this email will be notified.\"
mautic.form.action.repost.field_mapping=\"(Optional) Override field names for the receiving form:\"
mautic.form.action.repost.post_url=\"Post URL\"
mautic.form.action.repost.post_url.tooltip=\"The URL to repost the results\"
mautic.form.action.repost.validation_failed=\"Form validation failed.\"
mautic.form.action.sendemail=\"Send form results\"
mautic.form.action.sendemail.descr=\"Send a simple email with form results to contact or other specified email(s).\"
mautic.form.action.sendemail.immediately=\"Send immediately\"
mautic.form.action.sendemail.immediately.desc=\"Ignore Queue mode from Email settings\"
mautic.form.action.sendemail.copytolead=\"Send to contact\"
mautic.form.action.sendemail.setreplyto=\"Reply to contact\"
mautic.form.action.sendemail.setreplyto_tooltip=\"Set the contact's email as the &quot;Reply To&quot; address so that if replying to the results email, the contact address will be the default recipient.\"
mautic.form.action.sendemail.emailtoowner=\"Send to owner\"
mautic.form.action.sendemail.dragfield=\"Click to insert field\"
mautic.form.action.sendemail.message=\"Message\"
mautic.form.action.sendemail.subject=\"Subject\"
mautic.form.action.sendemail.subject.default=\"Your form results\"
mautic.form.builder.formfield=\"Submission result\"
mautic.form.builder.formfield.placeholder=\"Insert form field alias...\"
mautic.form.campaign.event.forms=\"Limit to Forms\"
mautic.form.campaign.event.forms_descr=\"Select the form(s) that will trigger the actions for dripflow.\"
mautic.form.campaign.event.submit=\"Submits form\"
mautic.form.campaign.event.submit_descr=\"Trigger actions when a contact submits a form\"
mautic.form.confirm_batch_rebuild=\"Rebuild the cached HTML for the selected form(s)?\"
mautic.form.details.detail=\"Detail\"
mautic.form.details.field_order=\"Field order: %order%\"
mautic.form.details.field_type=\"Field type: %type%\"
mautic.form.event.submission=\"%form% submission\"
mautic.form.event.submitted=\"Form submitted\"
mautic.form.field.add=\"Add a field\"
mautic.form.field.form.alias=\"Field HTML name\"
mautic.form.field.form.alias.tooltip=\"Name for the HTML element. Once the form has been saved, this cannot be edited. If left blank, one will be generated from the field's label.\"
mautic.form.field.form.auto_fill = \"Auto fill data\"
mautic.form.field.form.container_attr=\"Field container attributes\"
mautic.form.field.form.value=\"Value\"
mautic.form.field.form.emptyvalue=\"Empty Value\"
mautic.form.field.form.freetext_attributes=\"Description text attributes\"
mautic.form.field.form.freehtml_attributes=\"HTML text attributes\"
mautic.form.field.form.header=\"Header\"
mautic.form.field.form.header_attributes=\"Header attributes\"
mautic.form.field.form.helpmessage=\"Help message\"
mautic.form.field.form.inputattr=\"Input attributes\"
mautic.form.field.form.label=\"Label\"
mautic.form.field.form.labelattr=\"Label attributes\"
mautic.form.field.form.mapped.object=\"Matching object\"
mautic.form.field.form.mapped.field=\"Matching field\"
mautic.form.field.form.multiple=\"Allow multiple?\"
mautic.form.field.form.property_buttontype=\"Button type\"
mautic.form.field.form.property_captcha=\"Captcha answer\"
mautic.form.field.form.property_captchaerror=\"Custom error message\"
mautic.form.field.form.property_list_sync_choices=\"Use assigned contact/company field's list choices.\"
mautic.form.field.form.property_placeholder=\"Input placeholder\"
mautic.form.field.form.property_pagebreak_nextpage_label=\"Next page button label\"
mautic.form.field.form.property_pagebreak_prevpage_label=\"Previous page button label\"
mautic.form.field.form.property_pagebreak_prevpage_placeholder=\"Leave blank to not show\"
mautic.form.field.form.saveresult=\"Save result?\"
mautic.form.field.form.showheader=\"Show header?\"
mautic.form.field.form.showlabel=\"Show label?\"
mautic.form.field.form.validationmsg=\"Validation message\"
mautic.form.field.group.labelattr=\"Radio/checkbox label attributes\"
mautic.form.field.help.attr=\"Add custom HTML attributes i.e. class=&quot;myclass&quot;\"
mautic.form.field.help.auto_fill = \"Enable auto fill this value with that of the tracked contact profile's value. Please note that if several contacts share the same IP address, it may be possible to prepopulate with the incorrect details due to the way contacts are identified. This feature will currently only work for forms embedded into a Mautic landing page.\"
mautic.form.field.help.captcha=\"Use the label to pose a simple question that any human should be able to answer. Enter the correct answer here. For example, if the question is 'What is 10 plus 8?' enter 18 here. Or leave blank and hide the label to use as a honey pot captcha.\"
mautic.form.field.help.captcha_placeholder=\"Leave blank to use as a honeypot.\"
mautic.form.field.help.container_attr=\"Add custom HTML attributes for the div that wraps the entire field i.e. class=&quot;myclass&quot;\"
mautic.form.field.help.emptyvalue=\"Enter the label to use as an empty value in the select list. Leave empty to disable.\"
mautic.form.field.help.pagebreak=\"Insert a page break where only fields for the current page are displayed.\"
mautic.form.field.help.group.labelattr=\"Add custom HTML attributes for the label that wraps each radio/checkbox i.e. class=&quot;myclass&quot;. Note that if left blank or if a class is not included, there will be a wrapping div placed around each label/input\"
mautic.form.field.help.helpmessage=\"Text to display below the label.\"
mautic.form.field.help.mapped.object=\"Choose an object to to get the list of its fields bellow.\"
mautic.form.field.help.mapped.field=\"Choose a field to associate it with this form field. If the field is a unique identifier such as an email for contacts, and a contact exists with the same value, the matching contact will be updated. A new contact will be created if no matching contact is found.\"
mautic.form.field.help.saveresult=\"If set to no, the value will not be saved to the database.\"
mautic.form.field.section.attributes=\"Attributes\"
mautic.form.field.section.general=\"General\"
mautic.form.field.section.mappedfield=\"Mapped Field\"
mautic.form.field.section.properties=\"Properties\"
mautic.form.field.section.validation=\"Validation\"
mautic.form.field.type.button=\"Button\"
mautic.form.field.type.captcha=\"Captcha\"
mautic.form.field.type.checkboxgrp=\"Checkbox group\"
mautic.form.field.type.freetext=\"Description area\"
mautic.form.field.type.freehtml=\"HTML area\"
mautic.form.field.type.hidden=\"Hidden\"
mautic.form.field.type.password=\"Password\"
mautic.form.field.type.pagebreak=\"Page break\"
mautic.form.field.type.radiogrp=\"Radio group\"
mautic.form.field.type.textarea=\"Text: Paragraph\"
mautic.form.field.type.file=\"File\"
mautic.form.field.type.tel.international=\"Validate as international format\"
mautic.form.field.file.public=\"Public accessible link to download\"
mautic.form.field.file.allowed_extensions=\"Allowed file extensions\"
mautic.form.field.file.allowed_size=\"Maximum size (MB)\"
mautic.form.field.file.set_as_profile_image=\"Set as contact profile image\"
mautic.form.field.file.tooltip.allowed_extensions=\"Comma separated values (e.g. 'gif,jpg')\"
mautic.form.field.file.tooltip.allowed_size=\"Maximum upload size of PHP configuration is: %uploadSize%MB\"
mautic.form.stats.submission_counts=\"Submissions (unique/total)\"
mautic.form.form=\"Form\"
mautic.form.form.addaction=\"Select an action from the 'Add a new submit action' list.\"
mautic.form.form.addfield=\"Select a field from the 'Add a new field' list.\"
mautic.form.form.component.fields=\"Add a new field\"
mautic.form.form.component.submitactions=\"Add a new submit action\"
mautic.form.form.confirmbatchdelete=\"Delete the selected forms? This will also delete ALL results associated with these forms!\"
mautic.form.form.confirmdelete=\"Delete the form, %name%? This will also delete ALL results associated with this form!\"
mautic.form.form.header.embedded=\"Embedded\"
mautic.form.form.header.copy=\"Form HTML\"
mautic.form.form.header.edit=\"Edit Form - %name%\"
mautic.form.form.header.selfhosted=\"Self-hosted\"
mautic.form.form.header.new=\"New Form\"
mautic.form.form.header.preview=\"Preview Form\"
mautic.form.form.help.automaticcopy=\"When you use this option, the entire form can be edited within the platform and these changes will automatically be reflected on any page where it is inserted.\"
mautic.form.form.help.automaticcopy.js=\"Via Javascript (recommended)\"
mautic.form.form.help.automaticcopy.iframe=\"Via iframe\"
mautic.form.form.help.automaticcopy.iframe.note=\"Note: Adjust the width and height attribute so the form fits in.\"
mautic.form.form.help.landingpages=\"It's really simple to place a form inside a Mautic landing page: just use the editor to select the form! But if you want more flexibility, use one of the other two options below.\"
mautic.form.form.help.selfhosted=\"Using self-hosted HTML, changes made on the platform won’t update on your site until you manually edit the HTML code, ensuring no dependency on external servers and enhanced privacy protection.\"
mautic.form.form.help.selfhosted.body=\"Copy and paste the form's content into the document's body.\"
mautic.form.form.help.selfhosted.script=\"Copy and paste into the document's head or body. If inserting multiple forms, only insert this once per page.\"
mautic.form.form.help.searchcommands=\"<strong>Search commands</strong><br />ids:ID1,ID2 (comma separated IDs, no spaces)<br />is:mine<br />is:published<br />is:unpublished<br />has:results<br />name:*<br />is:uncategorized<br />category:{category alias}\"
mautic.form.form.kioskmode=\"Kiosk Mode\"
mautic.form.form.kioskmode.tooltip=\"If set to yes, form submissions will not generate new contact tracking cookies or assign the IP address to created/updated contacts.\"
mautic.form.form.renderstyle=\"Use theme style?\"
mautic.form.form.renderstyle.tooltip=\"Disable/Enable rendering of CSS from template\"
mautic.form.form.no_index=\"Disable search indexing\"
mautic.form.form.progressive_profiling_limit.max_fields=\"Maximum fields displayed at a time\"
mautic.form.form.progressive_profiling_limit.max_fields.tooltip=\"Number for this field enable progressive profiling feature and allow render only certain amount of fields in time.\"
mautic.form.form.progressive_profiling_limit_unlimited=\"unlimited\"
mautic.form.form.modalheader=\"Form Component Details\"
mautic.form.form.pagetoken.notpublished=\"This form is not published. It will not be visible to the public.\"
mautic.form.form.postaction=\"Successful Submit Action\"
mautic.form.form.postaction.message=\"Display message\"
mautic.form.form.postaction.redirect=\"Redirect URL\"
mautic.form.form.postaction.return=\"Remain at form\"
mautic.form.form.postactionproperty=\"Redirect URL/Message\"
mautic.form.form.preview=\"Preview\"
mautic.form.form.resultcount=\"Number of results\"
mautic.form.form.results=\"Results\"
mautic.form.form.viewresults=\"{0} No Results|{1} View One Result|]1,Inf[ View %count% Results\"
mautic.form.form.results.name=\"Result ID %id%\"
mautic.form.form.searchcommand.hasresults=\"has:results\"
mautic.form.form.searchcommand.isexpired=\"is:expired\"
mautic.form.form.searchcommand.ispending=\"is:pending\"
mautic.form.form.template.help=\"If this form is to be integrated into a 3rd party site via popup or iframe, choose a template to style the page containing the form.\"
mautic.form.field.form.form_attr=\"Form attributes\"
mautic.form.field.form.form_attr.tooltip=\"Add custom HTML attributes to form tag i.e. name=&quot;my-form&quot;. Some softwares may require custom attributes.\"
mautic.form.forms=\"Forms\"
mautic.form.graph.line.submissions=\"Submissions\"
mautic.form.icon_tooltip.campaign_form=\"Is a campaign form\"
mautic.form.noresults.tip=\"Use one of our 3rd party CMS plugins to easily integrate forms into your website!\"
mautic.form.permissions.forms=\"Forms - User has access to\"
mautic.form.permissions.header=\"Form Permissions\"
mautic.form.point.action=\"Form actions\"
mautic.form.point.action.forms=\"Limit to the selected forms\"
mautic.form.point.action.forms.descr=\"Select the forms this action applies to. If none are selected, it'll apply to any form.\"
mautic.form.point.action.submit=\"Submits a form\"
mautic.form.point.action.submit_descr=\"Update the contact's points when a form is submitted.\"
mautic.form.rebuild=\"Rebuild Cache\"
mautic.form.report.form_id=\"Form ID\"
mautic.form.report.page_id=\"Page ID\"
mautic.form.report.page_name=\"Page name\"
mautic.form.report.submission.table=\"Form Submissions\"
mautic.form.report.submission.id=\"Submission ID\"
mautic.form.report.submit.date_submitted=\"Date submitted\"
mautic.form.report.form_results.label=\"Form Results %field%\"
mautic.form.result.export.csv=\"Export to CSV\"
mautic.form.result.export.html=\"Export to HTML\"
mautic.form.result.export.pdf=\"Export to PDF\"
mautic.form.result.export.xlsx=\"Export to Excel\"
mautic.form.result.header.index=\"Results for %name%\"
mautic.form.result.thead.date=\"Date Submitted\"
mautic.form.result.thead.referrer=\"Referrer\"
mautic.form_results.form.confirmbatchdelete=\"Delete the selected results?\"
mautic.form.results.form.confirmdelete=\"Delete this result?\"
mautic.form.stage.action=\"Form actions\"
mautic.form.stage.action.submit=\"Submits a form\"
mautic.form.submission.errors=\"Errors:\"
mautic.form.submission.thankyou=\"Thank you!\"
mautic.form.submission.pleasewait=\"Please wait...\"
mautic.form.tab.actions=\"Actions\"
mautic.form.tab.fields=\"Fields\"
mautic.form.table.most.submitted=\"Most submitted forms\"
mautic.form.table.top.referrers=\"Top referrers\"
mautic.form.type.header=\"What type of form do you want to create?\"
mautic.form.type.campaign=\"Campaign Forms\"
mautic.form.type.one.differences.1st=\"Used to initiate automated campaign workflows\"
mautic.form.type.one.differences.2nd=\"Limited form actions\"
mautic.form.type.one.differences.3rd=\"Focuses on contact management\"
mautic.form.type.two.differences.1st=\"Independent forms focused on flexibility\"
mautic.form.type.two.differences.2nd=\"Contains all form actions\"
mautic.form.type.two.differences.3rd=\"Actions for scoring, segmentation, and integration\"
mautic.form.type.campaign.header=\"Campaign Form\"
mautic.form.type.standalone=\"Standalone Forms\"
mautic.form.type.standalone.header=\"Standalone Form\"
mautic.form.webhook.event.form.submit=\"Form Submit Event\"
mautic.form.campaign.event.field_value=\"Form field value\"
mautic.form.campaign.event.field_value_descr=\"Trigger actions when a submitted form field value suits the defined condition.\"
mautic.form.dashboard.widgets=\"Form Widgets\"
mautic.form.lead=\"Lead\"
mautic.form.submission.count=\"Submission Count\"
mautic.widget.submissions.in.time=\"Submissions in time\"
mautic.widget.top.submission.referrers=\"Top submission referrers\"
mautic.widget.top.submitters=\"Top submitters\"
mautic.widget.created.forms=\"Created forms\"
mautic.report.group.forms=\"Forms\"
mautic.report.group.form.results=\"Form Results\"
mautic.form.field.section.progressive.profiling=\"Behavior\"
mautic.form.field.form.always_display=\"Always display\"
mautic.form.field.form.always_display.tooltip=\"Force display this field in form if you set maximum fields displayed at a time. \"
mautic.form.field.form.show.when.value.exists=\"Show when value exists\"
mautic.form.field.help.show.when.value.exists=\"Display this field when the active contact already filled this field value.\"
mautic.form.field.form.show.after.x.submissions=\"Show after X submissions\"
mautic.form.field.help.show.after.x.submissions=\"Display this field only when the active contact submits this form for X time, X being the number of submissions from this option.\"
mautic.form.field.hide.if.value=\"Hide if value exist\"
mautic.form.field.hide.if.submission.count=\"{1}Show after 1 submission|[2,Inf] Show after %count% submissions\"
mautic.config.tab.formconfig=\"Form Settings\"
mautic.config.tab.formresultsconfig=\"Form Results Settings\"
mautic.form.field.type.donotsubmit=\"Domain name submission filter\"
mautic.form.config.form.do_not_submit_email=\"Do not accept submission from these domain names\"
mautic.form.config.form.do_not_submit_email.tooltip=\"Enter the emails, one per line, to which you would like to restrict form submission. You can filter a specific email address (email@yourdomain.com) or a whole domain name using wildcard (*domain.com).\"
mautic.form.config.form_results_data_sources=\"Use the form result as report data sources\"
mautic.form.config.form_results_data_sources.tooltip=\"Enable if you want to use the form results tables as report data sources.\"
mautic.form.config.form.successful_submit_action=\"Successful submit action\"
mautic.form.config.form.successful_submit_action.tooltip=\"Select the location of the successful submit action on the form\"
mautic.form.config.form.successful_submit_action_at_the_top=\"at the top\"
mautic.form.config.form.successful_submit_action_at_the_bottom=\"at the bottom\"
mautic.form.field.form.condition=\"Condition\"
mautic.form.field.form.condition.enabled=\"Enabled\"
mautic.form.field.form.condition.show.only=\"Show only on select values\"
mautic.form.field.form.condition.show.only.tooltip=\"Select boxes with option groups will show only the option group that match the parent field value. If no option group exist the conditional field itself will be hidden. Usecase: Show only states for countries that have some states.\"
mautic.form.field.form.condition.field.value=\"\"
mautic.form.field.form.dependency.label=\"Does this field depend on the entered value from another field?\"
mautic.form.field.form.dependent.field.mapping=\"Dependent Field Mapping\"
mautic.form.field.form.condition.show.on=\"Show only if selection from\"
mautic.form.field.form.condition.select.value=\"values\"
mautic.form.field.form.condition.any_value=\"Any value\"
mautic.form.field.form.number_precision=\"Precision\"
mautic.form.field.form.number_precision.tooltip=\"Number of decimal allowed before rounding occurs.\"
mautic.form.form.component.fields.conditional=\"Add field based on selected value\"
mautic.form.field.form.condition.select_one_of=\"select one of\"
mautic.form.field.form.condition.select_other_thatn=\"select other than\"
mautic.form.form.locale.tooltip=\"Set the form's primary language. It defaults to the configuration's language.\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/FormBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/FormBundle/Translations/en_US/messages.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Translations\\en_US\\messages.ini");
    }
}
