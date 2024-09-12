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

/* @bundles/LeadBundle/EventListener/DoNotContactSubscriber.php */
class __TwigTemplate_07168b9d36d798dec8a64c5f63941e34 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\LeadBundle\\Event\\DoNotContactAddEvent;
use Mautic\\LeadBundle\\Event\\DoNotContactRemoveEvent;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

final class DoNotContactSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private DoNotContact \$doNotContact
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            DoNotContactAddEvent::ADD_DONOT_CONTACT       => ['addDncForLead', 0],
            DoNotContactRemoveEvent::REMOVE_DONOT_CONTACT => ['removeDncForLead', 0],
        ];
    }

    public function removeDncForLead(DoNotContactRemoveEvent \$doNotContactRemoveEvent): void
    {
        \$this->doNotContact->removeDncForContact(
            \$doNotContactRemoveEvent->getLead()->getId(),
            \$doNotContactRemoveEvent->getChannel(),
            \$doNotContactRemoveEvent->getPersist()
        );
    }

    public function addDncForLead(DoNotContactAddEvent \$doNotContactAddEvent): void
    {
        if (empty(\$doNotContactAddEvent->getLead()->getId())) {
            \$this->doNotContact->createDncRecord(
                \$doNotContactAddEvent->getLead(),
                \$doNotContactAddEvent->getChannel(),
                \$doNotContactAddEvent->getReason(),
                \$doNotContactAddEvent->getComments()
            );
        } else {
            \$this->doNotContact->addDncForContact(
                \$doNotContactAddEvent->getLead()->getId(),
                \$doNotContactAddEvent->getChannel(),
                \$doNotContactAddEvent->getReason(),
                \$doNotContactAddEvent->getComments(),
                \$doNotContactAddEvent->isPersist(),
                \$doNotContactAddEvent->isCheckCurrentStatus(),
                \$doNotContactAddEvent->isOverride()
            );
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
        return "@bundles/LeadBundle/EventListener/DoNotContactSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/DoNotContactSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\DoNotContactSubscriber.php");
    }
}
