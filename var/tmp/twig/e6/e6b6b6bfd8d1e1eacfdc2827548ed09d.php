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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Reply/Parser.php */
class __TwigTemplate_2d0d5dd10226594b1467e2ac121dffd7 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Reply;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\ReplyNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;

class Parser
{
    public function __construct(
        private Message \$message
    ) {
    }

    /**
     * Only sure way is to parse the content for the stat ID otherwise attempt the from.
     *
     * @throws ReplyNotFound
     */
    public function parse(): RepliedEmail
    {
        if (!preg_match('/email\\/([a-zA-Z0-9]+)\\.gif/', \$this->message->textHtml, \$parts)) {
            throw new ReplyNotFound();
        }

        \$hashId = \$parts[1];

        return new RepliedEmail(\$this->message->fromAddress, \$hashId);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Reply/Parser.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Reply/Parser.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\MonitoredEmail\\Processor\\Reply\\Parser.php");
    }
}
