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

/* @bundles/LeadBundle/Event/ContactIdentificationEvent.php */
class __TwigTemplate_1a6c60d4d9784a916fc7495ee0de41f6 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

class ContactIdentificationEvent extends Event
{
    private ?Lead \$identifiedContact = null;

    /**
     * @var string
     */
    private \$identifiedByChannel;

    public function __construct(
        private array \$clickthrough
    ) {
    }

    /**
     * @return array
     */
    public function getClickthrough()
    {
        return \$this->clickthrough;
    }

    /**
     * @param string \$channel
     */
    public function setIdentifiedContact(Lead \$contact, \$channel): void
    {
        \$this->identifiedContact   = \$contact;
        \$this->identifiedByChannel = \$channel;

        \$this->stopPropagation();
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return \$this->identifiedByChannel;
    }

    /**
     * @return Lead
     */
    public function getIdentifiedContact()
    {
        return \$this->identifiedContact;
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
        return "@bundles/LeadBundle/Event/ContactIdentificationEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ContactIdentificationEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\ContactIdentificationEvent.php");
    }
}
