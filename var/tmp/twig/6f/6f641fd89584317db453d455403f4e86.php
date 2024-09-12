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

/* @bundles/MessengerBundle/Message/PageHitNotification.php */
class __TwigTemplate_8ab1b976dd57e4564de25bedb857dfae extends Template
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

final class PageHitNotification
{
    use MessageRequestTrait;

    public function __construct(
        private int \$hitId,
        private Request \$request,
        private bool \$isNew,
        private bool \$isRedirect,
        private ?int \$pageId = null,
        private ?int \$leadId = null,
        ?\\DateTimeInterface \$eventTime = null
    ) {
        \$this->setEventTime(\$eventTime ?? new \\DateTimeImmutable());
    }

    public function getHitId(): int
    {
        return \$this->hitId;
    }

    public function getPageId(): ?int
    {
        return \$this->pageId;
    }

    public function getLeadId(): ?int
    {
        return \$this->leadId;
    }

    public function isNew(): bool
    {
        return \$this->isNew;
    }

    public function isRedirect(): bool
    {
        return \$this->isRedirect;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MessengerBundle/Message/PageHitNotification.php";
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
        return new Source("", "@bundles/MessengerBundle/Message/PageHitNotification.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Message\\PageHitNotification.php");
    }
}
