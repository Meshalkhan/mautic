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

/* @bundles/UserBundle/Translations/en_US/messages.ini */
class __TwigTemplate_fc4684046aa121fd61f7915a4fe88a5c extends Template
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
        yield "mautic.user.account.header.authorizedclients=\"Authorized Applications\"
mautic.user.account.header.details=\"Account Details\"
mautic.user.account.permissions.editall=\"All\"
mautic.user.account.permissions.editemail=\"Email\"
mautic.user.account.permissions.editname=\"Name\"
mautic.user.account.permissions.editposition=\"Position\"
mautic.user.account.permissions.editusername=\"Username\"
mautic.user.account.settings=\"Account\"
mautic.user.auth.error.invalidlogin=\"Invalid login. Please verify credentials.\"
mautic.user.auth.expired.header=\"Session expired - please login\"
mautic.user.auth.form.loginbtn=\"login\"
mautic.user.auth.form.loginusername=\"Username or email\"
mautic.user.auth.form.rememberme=\"keep me logged in\"
mautic.user.auth.form.rolename=\"Role Name\"
mautic.user.auth.header=\"Please Login\"
mautic.user.auth.logout=\"Logout\"
mautic.user.permissions.header=\"User Permissions\"
mautic.user.permissions.profile=\"Profile - User can edit\"
mautic.user.permissions.roles=\"Roles - User has access to\"
mautic.user.permissions.users=\"Users - User has access to\"
mautic.user.role=\"Role\"
mautic.user.role.form.confirmbatchdelete=\"Delete the selected roles?\"
mautic.user.role.form.confirmdelete=\"Delete the role, %name%?\"
mautic.user.role.form.isadmin=\"Has full system access?\"
mautic.user.role.form.isadmin.tooltip=\"If set to yes, any user assigned to this role will have full access to all areas. If no, configure the permissions via the Permissions tab.\"
mautic.user.role.header.edit=\"Roles - Edit %name%\"
mautic.user.role.header.new=\"Roles - New Role\"
mautic.user.role.help.searchcommands=\"<strong>Search commands</strong><br />ids:ID1,ID2 (comma separated IDs, no spaces)<br />is:admin<br />name:*\"
mautic.user.role.permission.isadmin.header=\"Full access granted\"
mautic.user.role.permission.isadmin.message=\"The role is set to have full access granted. To adjust individual permissions, disable full access on the Details tab.\"
mautic.user.role.permissions=\"Permissions\"
mautic.user.role.usercount=\"Number of users in this role\"
mautic.user.roles=\"Roles\"
mautic.user_management=\"User management\"
mautic.user.role.list.viewusers_count=\"{0} No Users|{1} View 1 User|]1,Inf[ View %count% Users\"
mautic.user.role.list.thead.usercount=\"User Count\"
mautic.user.user.contact.locked=\"Regarding %entityName% - unlock request\"
mautic.user.user.contact.message=\"Message\"
mautic.user.user.contact.regarding=\"Regarding %entityName%\"
mautic.user.user.contact.send=\"Send\"
mautic.user.user.filter.email=\"By Email\"
mautic.user.user.filter.name=\"By Name\"
mautic.user.user.filter.role=\"By Role\"
mautic.user.user.filter.username=\"By Username\"
mautic.user.user.form.confirmbatchdelete=\"Delete the selected users?\"
mautic.user.user.form.confirmdelete=\"Delete the account of %name%?\"
mautic.user.user.form.defaultlocale=\"System Default Locale\"
mautic.user.user.form.defaulttimezone=\"System Default Timezone\"
mautic.user.user.form.help.passwordrequirements=\"Your password must be at least 6 characters and should use a combination of upper and lower case, special characters and numbers.\"
mautic.user.user.form.passwordconfirm=\"Confirm Password\"
mautic.user.user.form.passwordplaceholder=\"Leave empty for no change\"
mautic.user.user.header.contact=\"Send Message to %name%\"
mautic.user.user.header.edit=\"Users - Edit %name%\"
mautic.user.user.header.new=\"Users - New User\"
mautic.user.user.help.searchcommands=\"<strong>Search commands</strong><br />ids:ID1,ID2 (comma separated IDs, no spaces)<br />is:admin<br />is:active<br />is:inactive<br />email:*<br />name:*<br />position:*<br />role:*<br />username:*\"
mautic.user.user.passwordreset.back=\"back to login\"
mautic.user.user.passwordreset.body=\"Hi %name%,\\n\\nYour new password is \\n%password%\\n\\nIt is recommended that you login now and change it.\"
mautic.user.user.passwordreset.email.body=\"Hi %name%,\\n\\nYou requested a password reset. Click the link below to reset your password.\\n\\n%resetlink%\"
mautic.user.user.passwordreset.info=\"Enter either your username or email to reset your password. Instructions to reset your password will be sent to the email in your profile.\"
mautic.user.user.passwordresetconfirm.info=\"Enter either your username or email and your new password to complete the reset process.\"
mautic.user.user.passwordreset.link=\"forgot your password?\"
mautic.user.user.passwordreset.reset=\"reset password\"
mautic.user.user.passwordreset.subject=\"Mautic password reset\"
mautic.user.user.passwordreset.password.placeholder=\"Password\"
mautic.user.user.passwordreset.confirm.placeholder=\"Confirm Password\"
mautic.user.user.searchcommand.isadmin=\"is:admin\"
mautic.user.user.searchcommand.position=\"position\"
mautic.user.user.searchcommand.role=\"role\"
mautic.user.user.searchcommand.username=\"username\"
mautic.user.users=\"Users\"
mautic.config.tab.userconfig=\"User/Authentication Settings\"
mautic.user.config.form.saml.idp_attributes=\"Enter the names of the attributes the configured IDP uses for the following Mautic user fields.\"
mautic.user.config.form.saml.idp.attribute_email=\"Email\"
mautic.user.config.form.saml.idp.attribute_username=\"Username (optional)\"
mautic.user.config.form.saml.idp.attribute_firstname=\"First name\"
mautic.user.config.form.saml.idp.attribute_lastname=\"Last name\"
mautic.user.config.form.saml.idp_entity_id_label=\"Entity ID for the IDP\"
mautic.user.config.form.saml.idp.default_role=\"Default role for created users\"
mautic.user.config.form.saml.idp.default_role.tooltip=\"Choose the default role to assign newly created users. To disable creating users, clear the selected role and leave empty.\"
mautic.user.config.form.saml.idp.disable_creation=\"Leave empty to disable user creation\"
mautic.user.config.form.saml.idp.metadata=\"Identity provider metadata file\"
mautic.user.config.form.saml.idp.metadata.tooltip=\"Upload the Identity Provider Metadata XML file.\"
mautic.user.config.form.saml.idp.own_certificate.description=\"Use a custom X.509 certificate and private key to secure communication between Mautic and the IDP.\"
mautic.user.config.form.saml.idp.own_certificate=\"X.509 certificate\"
mautic.user.config.form.saml.idp.own_certificate.tooltip=\"Upload a custom X.509 certificate to secure communication between the IDP and Mautic.\"
mautic.user.config.form.saml.idp.own_entity_id=\"Entity ID\"
mautic.user.config.form.saml.idp.own_private_key=\"Private key\"
mautic.user.config.form.saml.idp.own_private_key.tooltip=\"Upload the private key for the certificate to secure communication between the IDP and Mautic.\"
mautic.user.config.form.saml.idp.own_password=\"Private key encryption password\"
mautic.user.config.form.saml.idp.own_password.tooltip=\"If the private key is encrypted with a password, enter it here.\"
mautic.user.config.header.saml=\"SAML SSO Settings\"
mautic.user.config.title.get_to_know_you=\"Let's get to know you\"
mautic.user.config.title.account_data_security=\"Account data and security\"
mautic.user.config.title.locale=\"Locale\"
mautic.user.config.title.personal_information=\"Personal information\"
mautic.user.config.personalize.interface.helper=\"Manage details used to personalize your interface experience.\"
mautic.user.config.account.security.helper=\"Adjust your credentials to keep your account secure.\"
mautic.user.config.region.preferences.helper=\"Set preferences related to your region.\"
mautic.user.config.signature.helper=\"You can use the |FROM_NAME| variable in your signature to automatically insert the sender's name.\"
mautic.user.config.signature.admin.helper=\"Use |FROM_NAME| in the signature to automatically insert the user's name.\"
mautic.user.user.form.user=\"User\"
mautic.user.user.form.created_by=\"was created by\"
mautic.user.user.form.updated_by=\"Updated by\"
mautic.user.user.form.login_by=\"logged in\"
mautic.user.lastlogin=\"Last login\"
mautic.user.user.form.update_user_status=\"information by\"
mautic.user.user.form.update_update = \"Updated\"
mautic.core.form.active=\"Active\"
mautic.core.form.inactive=\"Inactive\"
mautic.role.role=\"Role\"
mautic.user.role.form.updated_by=\"was updated by\"";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/UserBundle/Translations/en_US/messages.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Translations\\en_US\\messages.ini");
    }
}
