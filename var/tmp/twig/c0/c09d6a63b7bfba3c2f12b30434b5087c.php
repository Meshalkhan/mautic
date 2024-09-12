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

/* @bundles/SmsBundle/Integration/Twilio/TwilioCallback.php */
class __TwigTemplate_85a7bd04ab469e895cf19a8554441982 extends Template
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

use Mautic\\SmsBundle\\Callback\\CallbackInterface;
use Mautic\\SmsBundle\\Exception\\NumberNotFoundException;
use Mautic\\SmsBundle\\Helper\\ContactHelper;
use Symfony\\Component\\HttpFoundation\\InputBag;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Twilio\\Exceptions\\ConfigurationException;

class TwilioCallback implements CallbackInterface
{
    public function __construct(
        private ContactHelper \$contactHelper,
        private Configuration \$configuration
    ) {
    }

    public function getTransportName(): string
    {
        return 'twilio';
    }

    /**
     * @throws NumberNotFoundException
     */
    public function getContacts(Request \$request): \\Doctrine\\Common\\Collections\\ArrayCollection
    {
        \$this->validateRequest(\$request->request);

        \$number = \$request->get('From');

        return \$this->contactHelper->findContactsByNumber(\$number);
    }

    public function getMessage(Request \$request): string
    {
        \$this->validateRequest(\$request->request);

        return trim(\$request->get('Body'));
    }

    private function validateRequest(InputBag \$request): void
    {
        try {
            \$accountSid = \$this->configuration->getAccountSid();
        } catch (ConfigurationException) {
            // Not published or not configured
            throw new NotFoundHttpException();
        }

        // Validate this is a request from Twilio
        if (\$accountSid !== \$request->get('AccountSid')) {
            throw new BadRequestHttpException();
        }

        // Who is the message from?
        \$number = \$request->get('From');
        if (empty(\$number)) {
            throw new BadRequestHttpException();
        }

        // What did they say?
        \$message = trim(\$request->get('Body'));
        if (empty(\$message)) {
            throw new BadRequestHttpException();
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
        return "@bundles/SmsBundle/Integration/Twilio/TwilioCallback.php";
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
        return new Source("", "@bundles/SmsBundle/Integration/Twilio/TwilioCallback.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Integration\\Twilio\\TwilioCallback.php");
    }
}
