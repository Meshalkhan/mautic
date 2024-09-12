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

/* @bundles/CoreBundle/Translations/en_US/javascript.ini */
class __TwigTemplate_296bfc9ff2fefd363a1d5d478c374abf extends Template
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
        echo "mautic.core.builder.code_mode_warning=\"By switching to the Code Mode, you will be able to edit the content only in HTML code. Changing back to a theme will lose content.\"
mautic.core.builder.theme_change_warning=\"You will lose the current content if you switch the theme.\"
mautic.core.builder.section_delete_warning=\"Are you sure you want to delete the whole section and the content within?\"
mautic.core.builder.storage.restore.message=\"You have a copy of this template saved on <b>%date%</b>\"
mautic.core.builder.storage.restore.button=\"Restore the backup\"
mautic.core.builder.storage.dismiss.button=\"Dismiss\"
mautic.core.lookup.keep_typing = \"Keep typing...\"
mautic.core.lookup.looking_for = \"Looking for\"
mautic.core.lookup.search_options = \"Search options...\"
mautic.core.lookup.loading_data = \"Loading data...\"
mautic.core.dynamicContent=\"Dynamic Content\"
mautic.core.dynamicContent.new=\"Dynamic Content %number%\"
mautic.core.dynamicContent.token_name=\"Name\"
mautic.core.dynamicContent.tab=\"Variation %number%\"
mautic.core.dynamicContent.default_content=\"Default Content\"
mautic.core.dynamicContent.alt_content=\"Content\"
mautic.core.tabs.more=\"more\"
mautic.core.request.error=\"Your request could not be processed, please try again\"
mautic.campaign.event.clone.success=\"Your event has been cloned. Select a node in this or another campaign to attach it.\"";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Translations/en_US/javascript.ini";
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
        return new Source("", "@bundles/CoreBundle/Translations/en_US/javascript.ini", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Translations\\en_US\\javascript.ini");
    }
}
