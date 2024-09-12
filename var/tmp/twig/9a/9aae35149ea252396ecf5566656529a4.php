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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Unsubscription/Parser.php */
class __TwigTemplate_02f7ca8cc5491aca01a07c1ed2b5e733 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription;

use Mautic\\EmailBundle\\MonitoredEmail\\Exception\\UnsubscriptionNotFound;
use Mautic\\EmailBundle\\MonitoredEmail\\Message;

class Parser
{
    public function __construct(
        protected Message \$message
    ) {
    }

    /**
     * @throws UnsubscriptionNotFound
     */
    public function parse(): UnsubscribedEmail
    {
        \$unsubscriptionEmail = null;
        foreach (\$this->message->to as \$to => \$name) {
            if (str_contains(\$to, '+unsubscribe')) {
                \$unsubscriptionEmail = \$to;

                break;
            }
        }

        if (!\$unsubscriptionEmail) {
            throw new UnsubscriptionNotFound();
        }

        return new UnsubscribedEmail(\$this->message->fromAddress, \$unsubscriptionEmail);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Unsubscription/Parser.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Unsubscription/Parser.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\MonitoredEmail\\Processor\\Unsubscription\\Parser.php");
    }
}
