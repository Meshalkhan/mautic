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

/* @bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop/Parser.php */
class __TwigTemplate_8673b93f35a65be60b99090ad79b1598 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\FeedbackLoopNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;
use Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Address;

class Parser
{
    public function __construct(
        private Message \$message
    ) {
    }

    /**
     * @return string|null
     *
     * @throws FeedbackLoopNotFound
     */
    public function parse()
    {
        if (null === \$this->message->fblReport) {
            throw new FeedbackLoopNotFound();
        }

        if (\$email = \$this->searchMessage('Original-Rcpt-To: (.*)', \$this->message->fblReport)) {
            return \$email;
        }

        if (\$email = \$this->searchMessage('Received:.*for (.*);.*?', \$this->message->textPlain)) {
            return \$email;
        }

        throw new FeedbackLoopNotFound();
    }

    /**
     * @param string \$content
     * @param string \$pattern
     *
     * @return string|null
     */
    protected function searchMessage(\$pattern, \$content)
    {
        if (preg_match('/'.\$pattern.'/i', \$content, \$match)) {
            if (\$parsedAddressList = Address::parseList(\$match[1])) {
                return key(\$parsedAddressList);
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
        return "@bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop/Parser.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/FeedbackLoop/Parser.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\MonitoredEmail\\Processor\\FeedbackLoop\\Parser.php");
    }
}
