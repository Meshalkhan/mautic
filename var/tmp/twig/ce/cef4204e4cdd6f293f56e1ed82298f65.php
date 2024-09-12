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

/* @bundles/CoreBundle/IpLookup/TelizeLookup.php */
class __TwigTemplate_c0d72d20c58dada62c1cb0aa28606662 extends Template
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

class TelizeLookup extends AbstractRemoteDataLookup
{
    public string \$offset         = '';
    public string \$area_code      = '';
    public string \$dma_code       = '';
    public string \$country_code3  = '';
    public string \$continent_code = '';
    public string \$country_code   = '';
    public string \$region_code    = '';

    public function getAttribution(): string
    {
        return '<a href=\"https://market.mashape.com/fcambus/telize/\" target=\"_blank\">Telize</a> is a paid lookup service.';
    }

    protected function getUrl(): string
    {
        return \"https://telize-v1.p.mashape.com/geoip/{\$this->ip}\";
    }

    protected function getHeaders(): array
    {
        return [
            'X-Mashape-Key' => \$this->auth,
            'Accept'        => 'application/json',
        ];
    }

    /**
     * Populates properties with obtained data from the service.
     *
     * @param mixed \$response Response from the service
     */
    protected function parseResponse(\$response)
    {
        \$data = json_decode(\$response);

        if (\$data) {
            foreach (\$data as \$key => \$value) {
                if ('postal_code' == \$key) {
                    \$key = 'zipcode';
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
        return "@bundles/CoreBundle/IpLookup/TelizeLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/TelizeLookup.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\IpLookup\\TelizeLookup.php");
    }
}
