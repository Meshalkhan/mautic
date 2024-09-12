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

/* @bundles/CoreBundle/IpLookup/IP2LocationBinLookup.php */
class __TwigTemplate_f9fced4c0ef92e8be76ec3e53e7b012c extends Template
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

use IP2Location\\Database;

class IP2LocationBinLookup extends AbstractLocalDataLookup
{
    public function getAttribution(): string
    {
        return 'IP2Location Local Bin File DB9BIN only';
    }

    /**
     * @return string
     */
    public function getLocalDataStoreFilepath()
    {
        return \$this->getDataDir();
    }

    /**
     * @return string
     */
    public function getRemoteDateStoreDownloadUrl()
    {
        \$usernamePass = explode(':', \$this->auth);
        \$data         = [];

        if (isset(\$usernamePass[0]) && isset(\$usernamePass[1])) {
            \$data['login']       = \$usernamePass[0];
            \$data['password']    = \$usernamePass[1];
            \$data['productcode'] = 'DB9BIN';
            \$queryString         = http_build_query(\$data);
            // the system gets the file name from end of remove file path url so use hardedcoded name
            \$queryString .= '&filename=/ip2locaion.zip';

            return 'https://www.ip2location.com/download?'.\$queryString;
        } else {
            \$this->logger->warning('Both username and password are required');
        }
    }

    /**
     * Extract the IP from the local database.
     */
    protected function lookup()
    {
        try {
            \$reader = new Database(\$this->getLocalDataStoreFilepath().'/IP-COUNTRY-REGION-CITY-LATITUDE-LONGITUDE-ZIPCODE.BIN', Database::FILE_IO);
            \$record = \$reader->lookup(\$this->ip, Database::ALL);

            if (isset(\$record['countryName'])) {
                \$this->country   = \$record['countryName'];
                \$this->region    = \$record['regionName'];
                \$this->city      = \$record['cityName'];
                \$this->latitude  = \$record['latitude'];
                \$this->longitude = \$record['longitude'];
                \$this->zipcode   = \$record['zipCode'];
                \$this->isp       = \$record['isp'];
                \$this->timezone  = \$record['timeZone'];
            }
        } catch (\\Exception \$exception) {
            if (\$this->logger) {
                \$this->logger->warning('IP LOOKUP: '.\$exception->getMessage());
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
        return "@bundles/CoreBundle/IpLookup/IP2LocationBinLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/IP2LocationBinLookup.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\IpLookup\\IP2LocationBinLookup.php");
    }
}
