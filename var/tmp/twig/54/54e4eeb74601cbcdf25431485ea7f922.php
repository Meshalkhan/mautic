<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Parser.php */
class __TwigTemplate_63e3c7724121e5a2f4491107c86b50e1 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\BounceNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;

class Parser
{
    public function __construct(
        private Message \$message
    ) {
    }

    /**
     * @return string|null
     */
    public function getFailedRecipients()
    {
        return \$this->message->xHeaders['x-failed-recipients'] ?? null;
    }

    /**
     * @return BouncedEmail
     *
     * @throws BounceNotFound
     */
    public function parse()
    {
        \$bouncerAddress = null;
        foreach (\$this->message->to as \$to => \$name) {
            // Some ISPs strip the + email so will still process the content for a bounce
            // even if a +bounce address was not found
            if (str_contains(\$to, '+bounce')) {
                \$bouncerAddress = \$to;

                break;
            }
        }

        // First parse for a DSN report
        \$dsnParser = new DsnParser();
        try {
            \$bounce = \$dsnParser->getBounce(\$this->message);
        } catch (BounceNotFound) {
            // DSN report wasn't found so try parsing the body itself
            \$bodyParser = new BodyParser();
            \$bounce     = \$bodyParser->getBounce(\$this->message, \$this->getFailedRecipients());
        }

        \$bounce->setBounceAddress(\$bouncerAddress);

        return \$bounce;
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Parser.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Parser.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Parser.php");
    }
}
