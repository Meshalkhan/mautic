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

/* @bundles/SmsBundle/Integration/Twilio/Configuration.php */
class __TwigTemplate_d34352b22f038fc0e9039b65321367a8 extends Template
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

namespace Mautic\\SmsBundle\\Integration\\Twilio;

use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Twilio\\Exceptions\\ConfigurationException;

class Configuration
{
    /**
     * @var string
     */
    private \$messagingServiceSid;

    /**
     * @var string
     */
    private \$accountSid;

    /**
     * @var string
     */
    private \$authToken;

    public function __construct(
        private IntegrationHelper \$integrationHelper
    ) {
    }

    /**
     * @return string
     *
     * @throws ConfigurationException
     */
    public function getMessagingServiceSid()
    {
        \$this->setConfiguration();

        return \$this->messagingServiceSid;
    }

    /**
     * @return string
     *
     * @throws ConfigurationException
     */
    public function getAccountSid()
    {
        \$this->setConfiguration();

        return \$this->accountSid;
    }

    /**
     * @return string
     *
     * @throws ConfigurationException
     */
    public function getAuthToken()
    {
        \$this->setConfiguration();

        return \$this->authToken;
    }

    /**
     * @throws ConfigurationException
     */
    private function setConfiguration(): void
    {
        if (\$this->accountSid) {
            return;
        }

        \$integration = \$this->integrationHelper->getIntegrationObject('Twilio');

        if (!\$integration || !\$integration->getIntegrationSettings()->getIsPublished()) {
            throw new ConfigurationException();
        }

        \$this->messagingServiceSid = \$integration->getIntegrationSettings()->getFeatureSettings()['messaging_service_sid'];
        if (empty(\$this->messagingServiceSid)) {
            throw new ConfigurationException();
        }

        \$keys = \$integration->getDecryptedApiKeys();
        if (empty(\$keys['username']) || empty(\$keys['password'])) {
            throw new ConfigurationException();
        }

        \$this->accountSid = \$keys['username'];
        \$this->authToken  = \$keys['password'];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Integration/Twilio/Configuration.php";
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
        return new Source("", "@bundles/SmsBundle/Integration/Twilio/Configuration.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Integration\\Twilio\\Configuration.php");
    }
}
