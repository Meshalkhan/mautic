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

/* @bundles/CoreBundle/IpLookup/GeobytesLookup.php */
class __TwigTemplate_6094d9fc971daa062c5a8163d9762ba9 extends Template
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

namespace Mautic\\CoreBundle\\IpLookup;

class GeobytesLookup extends AbstractRemoteDataLookup
{
    public string \$forwarderfor        = '';
    public string \$remoteip            = '';
    public string \$ipaddress           = '';
    public string \$certainty           = '';
    public string \$internet            = '';
    public string \$regionlocationcode  = '';
    public string \$code                = '';
    public string \$locationcode        = '';
    public string \$cityid              = '';
    public string \$fqcn                = '';
    public string \$capital             = '';
    public string \$nationalitysingular = '';
    public string \$population          = '';
    public string \$nationalityplural   = '';
    public string \$mapreference        = '';
    public string \$currency            = '';
    public string \$currencycode        = '';
    public string \$title               = '';

    public function getAttribution(): string
    {
        return '<a href=\"http://geobytes.com/\" target=\"_blank\">Geobytes</a> offers both free (16,000 lookups per hour) and VIP (paid) offerings.';
    }

    protected function getUrl(): string
    {
        return \"http://getcitydetails.geobytes.com/GetCityDetails?fqcn={\$this->ip}\";
    }

    protected function parseResponse(\$response)
    {
        \$data = json_decode(\$response);
        foreach (\$data as \$key => \$value) {
            \$key        = str_replace('geobytes', '', \$key);
            \$this->\$key = \$value;
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/IpLookup/GeobytesLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/GeobytesLookup.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\IpLookup\\GeobytesLookup.php");
    }
}
