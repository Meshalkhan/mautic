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

/* @bundles/SmsBundle/Event/ReplyEvent.php */
class __TwigTemplate_f21e08c66ffdea93b09283bbe8557740 extends Template
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

namespace Mautic\\SmsBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadEventLog;
use Symfony\\Component\\HttpFoundation\\Response;

class ReplyEvent extends \\Symfony\\Contracts\\EventDispatcher\\Event
{
    private ?Response \$response = null;

    private ?LeadEventLog \$eventLog = null;

    /**
     * ReplyEvent constructor.
     *
     * @param string \$message
     */
    public function __construct(
        private Lead \$contact,
        private \$message
    ) {
    }

    /**
     * @return Lead
     */
    public function getContact()
    {
        return \$this->contact;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return \$this->message;
    }

    public function setResponse(Response \$response): void
    {
        \$this->response = \$response;
    }

    /**
     * @return Response|null
     */
    public function getResponse()
    {
        return \$this->response;
    }

    public function getEventLog(): ?LeadEventLog
    {
        return \$this->eventLog;
    }

    public function setEventLog(LeadEventLog \$eventLog): void
    {
        \$this->eventLog = \$eventLog;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Event/ReplyEvent.php";
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
        return new Source("", "@bundles/SmsBundle/Event/ReplyEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Event\\ReplyEvent.php");
    }
}
