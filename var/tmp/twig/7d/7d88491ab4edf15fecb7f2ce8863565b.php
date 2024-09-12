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

/* @bundles/EmailBundle/Event/QueueEmailEvent.php */
class __TwigTemplate_cb845e353e48cfd423696ec1b27fc858 extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Mautic\\EmailBundle\\Mailer\\Message\\MauticMessage;
use Symfony\\Contracts\\EventDispatcher\\Event;

class QueueEmailEvent extends Event
{
    private bool \$retry = false;

    public function __construct(
        private MauticMessage \$message
    ) {
    }

    /**
     * @return MauticMessage
     */
    public function getMessage()
    {
        return \$this->message;
    }

    /**
     * Sets whether the sending of the message should be tried again.
     */
    public function tryAgain(): void
    {
        \$this->retry = true;
    }

    public function shouldTryAgain(): bool
    {
        return \$this->retry;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Event/QueueEmailEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/QueueEmailEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Event\\QueueEmailEvent.php");
    }
}
