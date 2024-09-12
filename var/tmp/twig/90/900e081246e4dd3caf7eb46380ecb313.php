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

/* @bundles/EmailBundle/Mailer/Transport/BounceProcessorInterface.php */
class __TwigTemplate_b6e4292bce08d263f943050390c80eed extends Template
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

declare(strict_types=1);

namespace Mautic\\EmailBundle\\Mailer\\Transport;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\BounceNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\BouncedEmail;

/**
 * Interface InterfaceBounceProcessor.
 */
interface BounceProcessorInterface
{
    /**
     * Get the email address that bounced.
     *
     * @throws BounceNotFound
     */
    public function processBounce(Message \$message): BouncedEmail;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Mailer/Transport/BounceProcessorInterface.php";
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
        return new Source("", "@bundles/EmailBundle/Mailer/Transport/BounceProcessorInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Mailer\\Transport\\BounceProcessorInterface.php");
    }
}
