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

/* @bundles/CoreBundle/IpLookup/AbstractRemoteDataLookup.php */
class __TwigTemplate_f6f89e01263937806a3958c9d2c2bb7d extends Template
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

use GuzzleHttp\\Exception\\GuzzleException;

abstract class AbstractRemoteDataLookup extends AbstractLookup
{
    /**
     * Method to use when communicating with the service.
     *
     * @var string
     */
    protected \$method = 'get';

    /**
     * Get the URL to fetch data from.
     *
     * @return mixed
     */
    abstract protected function getUrl();

    /**
     * @return mixed
     */
    abstract protected function parseResponse(\$response);

    /**
     * @return array
     */
    protected function getHeaders()
    {
        return [];
    }

    /**
     * @return array
     */
    protected function getParameters()
    {
        return [];
    }

    /**
     * Fetch data from lookup service.
     */
    protected function lookup()
    {
        \$url = \$this->getUrl();

        try {
            \$response = ('post' == \$this->method) ?
                \$this->client->post(\$url, [
                    \\GuzzleHttp\\RequestOptions::BODY    => \$this->getParameters(),
                    \\GuzzleHttp\\RequestOptions::HEADERS => \$this->getHeaders(),
                    \\GuzzleHttp\\RequestOptions::TIMEOUT => 10,
                ]) :
                \$this->client->get(\$url, [
                    \\GuzzleHttp\\RequestOptions::HEADERS => \$this->getHeaders(),
                    \\GuzzleHttp\\RequestOptions::TIMEOUT => 10,
                ]);

            \$this->parseResponse(\$response->getBody());
        } catch (GuzzleException \$exception) {
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
        return "@bundles/CoreBundle/IpLookup/AbstractRemoteDataLookup.php";
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
        return new Source("", "@bundles/CoreBundle/IpLookup/AbstractRemoteDataLookup.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\IpLookup\\AbstractRemoteDataLookup.php");
    }
}
