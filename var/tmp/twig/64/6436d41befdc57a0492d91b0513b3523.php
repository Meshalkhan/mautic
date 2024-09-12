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

/* @bundles/NotificationBundle/Event/NotificationSendEvent.php */
class __TwigTemplate_766e7f21306939a63d669b723bfdbc52 extends Template
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

namespace Mautic\\NotificationBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\Lead;

class NotificationSendEvent extends CommonEvent
{
    /**
     * @param string \$message
     */
    public function __construct(
        protected \$message,
        protected \$heading,
        protected Lead \$lead
    ) {
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return \$this->message;
    }

    /**
     * @param string \$message
     */
    public function setMessage(\$message): void
    {
        \$this->message = \$message;
    }

    /**
     * @return mixed
     */
    public function getHeading()
    {
        return \$this->heading;
    }

    /**
     * @param mixed \$heading
     *
     * @return NotificationSendEvent
     */
    public function setHeading(\$heading)
    {
        \$this->heading = \$heading;

        return \$this;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return \$this->lead;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Event/NotificationSendEvent.php";
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
        return new Source("", "@bundles/NotificationBundle/Event/NotificationSendEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Event\\NotificationSendEvent.php");
    }
}
