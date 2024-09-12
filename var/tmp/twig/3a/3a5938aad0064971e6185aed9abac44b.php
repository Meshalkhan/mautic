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

/* @bundles/LeadBundle/Assets/WebhookPayload/lead_points_change.json */
class __TwigTemplate_a5fc17b9fcd8f3170ef1641d56051448 extends Template
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
        echo "[{\"contact\":{\"isPublished\":true,\"dateAdded\":\"2017-06-19T09:31:18+00:00\",\"dateModified\":\"2017-06-19T09:33:58+00:00\",\"createdBy\":1,\"createdByUser\":\"John Doe\",\"modifiedBy\":null,\"modifiedByUser\":\" \",\"id\":52,\"points\":5,\"color\":null,\"fields\":{\"core\":{\"title\":{\"id\":\"1\",\"label\":\"Title\",\"alias\":\"title\",\"type\":\"lookup\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"Mr.\"},\"firstname\":{\"id\":\"2\",\"label\":\"First Name\",\"alias\":\"firstname\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"John\"},\"lastname\":{\"id\":\"3\",\"label\":\"Last Name\",\"alias\":\"lastname\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"Doe\"},\"company\":{\"id\":\"4\",\"label\":\"Company\",\"alias\":\"company\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"Mautic\"},\"position\":{\"id\":\"5\",\"label\":\"Position\",\"alias\":\"position\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":null},\"email\":{\"id\":\"6\",\"label\":\"Email\",\"alias\":\"email\",\"type\":\"email\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"john@doe.name\"},\"mobile\":{\"id\":\"7\",\"label\":\"Mobile\",\"alias\":\"mobile\",\"type\":\"tel\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"333444555\"},\"phone\":{\"id\":\"8\",\"label\":\"Phone\",\"alias\":\"phone\",\"type\":\"tel\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":null},\"fax\":{\"id\":\"9\",\"label\":\"Fax\",\"alias\":\"fax\",\"type\":\"tel\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"address1\":{\"id\":\"10\",\"label\":\"Address Line 1\",\"alias\":\"address1\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":null},\"address2\":{\"id\":\"11\",\"label\":\"Address Line 2\",\"alias\":\"address2\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":null},\"city\":{\"id\":\"12\",\"label\":\"City\",\"alias\":\"city\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"Prague\"},\"state\":{\"id\":\"13\",\"label\":\"State\",\"alias\":\"state\",\"type\":\"region\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":null},\"zipcode\":{\"id\":\"14\",\"label\":\"Zip Code\",\"alias\":\"zipcode\",\"type\":\"text\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"16000\"},\"country\":{\"id\":\"15\",\"label\":\"Country\",\"alias\":\"country\",\"type\":\"country\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"Czech Republic\"},\"preferred_locale\":{\"id\":\"16\",\"label\":\"Preferred Locale\",\"alias\":\"preferred_locale\",\"type\":\"locale\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"cs_CZ\"},\"attribution_date\":{\"id\":\"17\",\"label\":\"Attribution Date\",\"alias\":\"attribution_date\",\"type\":\"datetime\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"2017-06-14 11:30:00\"},\"attribution\":{\"id\":\"18\",\"label\":\"Attribution\",\"alias\":\"attribution\",\"type\":\"number\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"1\",\"value\":\"32\"},\"website\":{\"id\":\"19\",\"label\":\"Website\",\"alias\":\"website\",\"type\":\"url\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"multiselect\":{\"id\":\"42\",\"label\":\"Multiselect\",\"alias\":\"multiselect\",\"type\":\"multiselect\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":\"php|js\"},\"f_select\":{\"id\":\"43\",\"label\":\"select\",\"alias\":\"f_select\",\"type\":\"select\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"boolean\":{\"id\":\"44\",\"label\":\"boolean\",\"alias\":\"boolean\",\"type\":\"boolean\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"datetime\":{\"id\":\"45\",\"label\":\"datetime\",\"alias\":\"datetime\",\"type\":\"datetime\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"timezone1\":{\"id\":\"46\",\"label\":\"timezone\",\"alias\":\"timezone1\",\"type\":\"timezone\",\"group\":\"core\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":\"Europe\\/Prague\"}},\"social\":{\"facebook\":{\"id\":\"20\",\"label\":\"Facebook\",\"alias\":\"facebook\",\"type\":\"text\",\"group\":\"social\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"foursquare\":{\"id\":\"21\",\"label\":\"Foursquare\",\"alias\":\"foursquare\",\"type\":\"text\",\"group\":\"social\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"instagram\":{\"id\":\"23\",\"label\":\"Instagram\",\"alias\":\"instagram\",\"type\":\"text\",\"group\":\"social\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"linkedin\":{\"id\":\"24\",\"label\":\"LinkedIn\",\"alias\":\"linkedin\",\"type\":\"text\",\"group\":\"social\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"skype\":{\"id\":\"25\",\"label\":\"Skype\",\"alias\":\"skype\",\"type\":\"text\",\"group\":\"social\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null},\"twitter\":{\"id\":\"26\",\"label\":\"Twitter\",\"alias\":\"twitter\",\"type\":\"text\",\"group\":\"social\",\"object\":\"lead\",\"is_fixed\":\"0\",\"value\":null}},\"personal\":[],\"professional\":[]},\"lastActive\":\"2017-06-19T09:33:58+00:00\",\"owner\":{\"createdByUser\":null,\"modifiedByUser\":null,\"id\":1,\"username\":\"admin\",\"firstName\":\"John\",\"lastName\":\"Doe\"},\"ipAddresses\":[{\"ip\":\"127.0.0.1\",\"id\":1,\"ipDetails\":{\"city\":\"\",\"region\":\"\",\"zipcode\":\"\",\"country\":\"\",\"latitude\":\"\",\"longitude\":\"\",\"isp\":\"\",\"organization\":\"\",\"timezone\":\"\",\"extra\":\"\"}}],\"tags\":[[]],\"utmtags\":[],\"stage\":null,\"dateIdentified\":\"2017-06-19T09:31:18+00:00\",\"preferredProfileImage\":\"gravatar\",\"doNotContact\":[],\"frequencyRules\":[]},\"timestamp\":\"2017-06-19T09:33:59+00:00\"}]
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Assets/WebhookPayload/lead_points_change.json";
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
        return new Source("", "@bundles/LeadBundle/Assets/WebhookPayload/lead_points_change.json", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Assets\\WebhookPayload\\lead_points_change.json");
    }
}
