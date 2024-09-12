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

/* @bundles/LeadBundle/Assets/WebhookPayload/lead_post_save_new.json */
class __TwigTemplate_14c008a4c5d90189886535ccca2ce25b extends Template
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
        echo "[{\"contact\":{\"isPublished\":true,\"dateAdded\":\"2017-06-19T09:31:18+00:00\",\"dateModified\":null,\"createdBy\":1,\"createdByUser\":\"John Doe\",\"modifiedBy\":null,\"modifiedByUser\":null,\"id\":52,\"points\":0,\"color\":null,\"fields\":{\"core\":{\"timezone1\":{\"id\":46,\"group\":\"core\",\"label\":\"timezone\",\"alias\":\"timezone1\",\"type\":\"timezone\",\"value\":\"Europe\\/Prague\"},\"datetime\":{\"id\":45,\"group\":\"core\",\"label\":\"datetime\",\"alias\":\"datetime\",\"type\":\"datetime\",\"value\":\"\"},\"boolean\":{\"id\":44,\"group\":\"core\",\"label\":\"boolean\",\"alias\":\"boolean\",\"type\":\"boolean\",\"value\":null},\"f_select\":{\"id\":43,\"group\":\"core\",\"label\":\"select\",\"alias\":\"f_select\",\"type\":\"select\",\"value\":null},\"multiselect\":{\"id\":42,\"group\":\"core\",\"label\":\"Multiselect\",\"alias\":\"multiselect\",\"type\":\"multiselect\",\"value\":\"php|js\"},\"title\":{\"id\":1,\"group\":\"core\",\"label\":\"Title\",\"alias\":\"title\",\"type\":\"lookup\",\"value\":\"Mr.\"},\"firstname\":{\"id\":2,\"group\":\"core\",\"label\":\"First Name\",\"alias\":\"firstname\",\"type\":\"text\",\"value\":\"John\"},\"lastname\":{\"id\":3,\"group\":\"core\",\"label\":\"Last Name\",\"alias\":\"lastname\",\"type\":\"text\",\"value\":\"Doe\"},\"company\":{\"id\":4,\"group\":\"core\",\"label\":\"Company\",\"alias\":\"company\",\"type\":\"text\",\"value\":null},\"position\":{\"id\":5,\"group\":\"core\",\"label\":\"Position\",\"alias\":\"position\",\"type\":\"text\",\"value\":null},\"email\":{\"id\":6,\"group\":\"core\",\"label\":\"Email\",\"alias\":\"email\",\"type\":\"email\",\"value\":\"john@doe.name\"},\"mobile\":{\"id\":7,\"group\":\"core\",\"label\":\"Mobile\",\"alias\":\"mobile\",\"type\":\"tel\",\"value\":null},\"phone\":{\"id\":8,\"group\":\"core\",\"label\":\"Phone\",\"alias\":\"phone\",\"type\":\"tel\",\"value\":null},\"fax\":{\"id\":9,\"group\":\"core\",\"label\":\"Fax\",\"alias\":\"fax\",\"type\":\"tel\",\"value\":null},\"address1\":{\"id\":10,\"group\":\"core\",\"label\":\"Address Line 1\",\"alias\":\"address1\",\"type\":\"text\",\"value\":null},\"address2\":{\"id\":11,\"group\":\"core\",\"label\":\"Address Line 2\",\"alias\":\"address2\",\"type\":\"text\",\"value\":null},\"city\":{\"id\":12,\"group\":\"core\",\"label\":\"City\",\"alias\":\"city\",\"type\":\"text\",\"value\":\"Prague\"},\"state\":{\"id\":13,\"group\":\"core\",\"label\":\"State\",\"alias\":\"state\",\"type\":\"region\",\"value\":null},\"zipcode\":{\"id\":14,\"group\":\"core\",\"label\":\"Zip Code\",\"alias\":\"zipcode\",\"type\":\"text\",\"value\":\"16000\"},\"country\":{\"id\":15,\"group\":\"core\",\"label\":\"Country\",\"alias\":\"country\",\"type\":\"country\",\"value\":\"Czech Republic\"},\"preferred_locale\":{\"id\":16,\"group\":\"core\",\"label\":\"Preferred Locale\",\"alias\":\"preferred_locale\",\"type\":\"locale\",\"value\":\"cs_CZ\"},\"attribution_date\":{\"id\":17,\"group\":\"core\",\"label\":\"Attribution Date\",\"alias\":\"attribution_date\",\"type\":\"datetime\",\"value\":\"2017-06-14 11:30:00\"},\"attribution\":{\"id\":18,\"group\":\"core\",\"label\":\"Attribution\",\"alias\":\"attribution\",\"type\":\"number\",\"value\":32},\"website\":{\"id\":19,\"group\":\"core\",\"label\":\"Website\",\"alias\":\"website\",\"type\":\"url\",\"value\":null}},\"social\":{\"facebook\":{\"id\":20,\"group\":\"social\",\"label\":\"Facebook\",\"alias\":\"facebook\",\"type\":\"text\",\"value\":null},\"foursquare\":{\"id\":21,\"group\":\"social\",\"label\":\"Foursquare\",\"alias\":\"foursquare\",\"type\":\"text\",\"value\":null},\"instagram\":{\"id\":23,\"group\":\"social\",\"label\":\"Instagram\",\"alias\":\"instagram\",\"type\":\"text\",\"value\":null},\"linkedin\":{\"id\":24,\"group\":\"social\",\"label\":\"LinkedIn\",\"alias\":\"linkedin\",\"type\":\"text\",\"value\":null},\"skype\":{\"id\":25,\"group\":\"social\",\"label\":\"Skype\",\"alias\":\"skype\",\"type\":\"text\",\"value\":null},\"twitter\":{\"id\":26,\"group\":\"social\",\"label\":\"Twitter\",\"alias\":\"twitter\",\"type\":\"text\",\"value\":null}},\"personal\":[],\"professional\":[]},\"lastActive\":null,\"owner\":{\"createdByUser\":null,\"modifiedByUser\":null,\"id\":1,\"username\":\"admin\",\"firstName\":\"John\",\"lastName\":\"Doe\"},\"ipAddresses\":[],\"tags\":[[]],\"utmtags\":null,\"stage\":null,\"dateIdentified\":\"2017-06-19T09:31:18+00:00\",\"preferredProfileImage\":\"gravatar\",\"doNotContact\":[],\"frequencyRules\":[]},\"timestamp\":\"2017-06-19T09:31:18+00:00\"}]
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Assets/WebhookPayload/lead_post_save_new.json";
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
        return new Source("", "@bundles/LeadBundle/Assets/WebhookPayload/lead_post_save_new.json", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Assets\\WebhookPayload\\lead_post_save_new.json");
    }
}
