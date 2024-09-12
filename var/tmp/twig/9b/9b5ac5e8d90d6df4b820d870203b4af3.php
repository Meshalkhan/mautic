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

/* @bundles/MessengerBundle/Message/EmailHitNotification.php */
class __TwigTemplate_deeac82d225e293b5357bbce00557f4a extends Template
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

namespace Mautic\\MessengerBundle\\Message;

use Mautic\\MessengerBundle\\Message\\Traits\\MessageRequestTrait;
use Symfony\\Component\\HttpFoundation\\Request;

class EmailHitNotification
{
    use MessageRequestTrait;

    public function __construct(
        private string \$statId,
        private Request \$request,
        \\DateTimeInterface \$eventTime = null
    ) {
        \$this->setEventTime(\$eventTime ?? new \\DateTimeImmutable());
    }

    public function getStatId(): string
    {
        return \$this->statId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MessengerBundle/Message/EmailHitNotification.php";
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
        return new Source("", "@bundles/MessengerBundle/Message/EmailHitNotification.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Message\\EmailHitNotification.php");
    }
}
