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

/* @bundles/MessengerBundle/Message/Traits/MessageRequestTrait.php */
class __TwigTemplate_9ebafc7f152829e68e2a2e2fe25b37a6 extends Template
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

namespace Mautic\\MessengerBundle\\Message\\Traits;

use Symfony\\Component\\HttpFoundation\\Request;

trait MessageRequestTrait
{
    private ?\\DateTimeInterface \$eventTime = null;

    private Request \$request;

    public function getEventTime(): ?\\DateTimeInterface
    {
        return \$this->eventTime;
    }

    public function setEventTime(\\DateTimeInterface \$eventTime = null): self
    {
        \$this->eventTime = \$eventTime;

        return \$this;
    }

    public function getRequest(): Request
    {
        return \$this->request;
    }

    public function __serialize(): array
    {
        \$data            = get_object_vars(\$this);
        \$data['request'] = array_filter([
            'attributes' => \$this->request->attributes->all(),
            'request'    => \$this->request->request->all(),
            'query'      => \$this->request->query->all(),
            'cookies'    => \$this->request->cookies->all(),
            'files'      => \$this->request->files->all(),
            'server'     => \$this->request->server->all(),
        ]);

        return \$data;
    }

    /**
     * @param mixed[] \$data
     */
    public function __unserialize(array \$data): void
    {
        \$requestData     = \$data['request'];
        \$data['request'] = new Request(
            \$requestData['query'] ?? [],
            \$requestData['request'] ?? [],
            \$requestData['attributes'] ?? [],
            \$requestData['cookies'] ?? [],
            \$requestData['files'] ?? [],
            \$requestData['server'] ?? []
        );

        foreach (\$data as \$key => \$item) {
            \$this->\$key = \$item;
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
        return "@bundles/MessengerBundle/Message/Traits/MessageRequestTrait.php";
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
        return new Source("", "@bundles/MessengerBundle/Message/Traits/MessageRequestTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Message\\Traits\\MessageRequestTrait.php");
    }
}
