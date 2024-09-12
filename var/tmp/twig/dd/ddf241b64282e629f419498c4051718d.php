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

/* @bundles/CoreBundle/IpLookup/IpstackLookup.php */
class __TwigTemplate_9e942a524b6c6b4d9d80d985722f59d6 extends Template
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

class IpstackLookup extends AbstractRemoteDataLookup
{
    public string \$country_code = '';
    public string \$region_code  = '';
    public string \$metro_code   = '';

    public function getAttribution(): string
    {
        return '<a href=\"https://ipstack.com/\" target=\"_blank\">ipstack.com</a> is a free lookup service that leverages GeoLite2 data created by MaxMind.';
    }

    protected function getUrl(): string
    {
        if (empty(\$this->auth)) {
            \$this->logger->warning('FreeGeoIP has become IPStack and now requires an API key.');
        }

        return 'http://api.ipstack.com/'.\$this->ip.'?access_key='.\$this->auth.'&output=json&legacy=1';
    }

    protected function parseResponse(\$response)
    {
        \$data = json_decode(\$response);

        if (\$data) {
            foreach (\$data as \$key => \$value) {
                switch (\$key) {
                    case 'region_name':
                        \$key = 'region';
                        break;
                    case 'country_name':
                        \$key = 'country';
                        break;
                    case 'zip':
                        \$key = 'zipcode';
                        break;
                    case 'time_zone':
                        \$key = 'timezone';
                        break;
                }

                \$this->\$key = \$value;
            }
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
        return "@bundles/CoreBundle/IpLookup/IpstackLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/IpstackLookup.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\IpLookup\\IpstackLookup.php");
    }
}
