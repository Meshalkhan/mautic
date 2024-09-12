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

/* @bundles/LeadBundle/Event/DoNotContactAddEvent.php */
class __TwigTemplate_2dc1b1550ea5eaee4ef7974791136931 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\LeadBundle\\Entity\\DoNotContact as DNC;
use Mautic\\LeadBundle\\Entity\\Lead;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class DoNotContactAddEvent extends Event
{
    public const ADD_DONOT_CONTACT = 'mautic.lead.add_donot_contact';

    public function __construct(
        private Lead \$lead,
        private string \$channel,
        private string \$comments = '',
        private int \$reason = DNC::BOUNCED,
        private bool \$persist = true,
        private bool \$checkCurrentStatus = true,
        private bool \$override = true
    ) {
    }

    public function getLead(): Lead
    {
        return \$this->lead;
    }

    public function getChannel(): string
    {
        return \$this->channel;
    }

    public function getComments(): string
    {
        return \$this->comments;
    }

    public function getReason(): int
    {
        return \$this->reason;
    }

    public function isPersist(): bool
    {
        return \$this->persist;
    }

    public function isCheckCurrentStatus(): bool
    {
        return \$this->checkCurrentStatus;
    }

    public function isOverride(): bool
    {
        return \$this->override;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/DoNotContactAddEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/DoNotContactAddEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\DoNotContactAddEvent.php");
    }
}
