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

/* @bundles/WebhookBundle/Http/Client.php */
class __TwigTemplate_b982c46e9e14f2a6df8760558a59559e extends Template
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

namespace Mautic\\WebhookBundle\\Http;

use GuzzleHttp\\Psr7\\Request;
use Http\\Adapter\\Guzzle7\\Client as GuzzleClient;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Psr\\Http\\Message\\ResponseInterface;

class Client
{
    /**
     * @param GuzzleClient \$httpClient
     */
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper,
        private \$httpClient
    ) {
    }

    /**
     * @param string \$url
     *
     * @return ResponseInterface
     */

    /**
     * @return mixed|ResponseInterface
     *
     * @throws \\Http\\Client\\Exception
     */
    public function post(\$url, array \$payload, string \$secret = null)
    {
        \$jsonPayload = json_encode(\$payload);
        \$signature   = null === \$secret ? null : base64_encode(hash_hmac('sha256', \$jsonPayload, \$secret, true));
        \$headers     = [
            'Content-Type'      => 'application/json',
            'X-Origin-Base-URL' => \$this->coreParametersHelper->get('site_url'),
            'Webhook-Signature' => \$signature,
        ];

        return \$this->httpClient->sendRequest(new Request('POST', \$url, \$headers, \$jsonPayload));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Http/Client.php";
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
        return new Source("", "@bundles/WebhookBundle/Http/Client.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Http\\Client.php");
    }
}
