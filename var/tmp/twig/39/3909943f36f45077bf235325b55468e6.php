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

/* @bundles/LeadBundle/EventListener/DynamicContentSubscriber.php */
class __TwigTemplate_5da2dd30af1a2763edacef7cdbd7b493 extends Template
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

use Mautic\\DynamicContentBundle\\DynamicContentEvents;
use Mautic\\DynamicContentBundle\\Event\\ContactFiltersEvaluateEvent;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadListRepository;
use Mautic\\LeadBundle\\Segment\\OperatorOptions;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

final class DynamicContentSubscriber implements EventSubscriberInterface
{
    public function __construct(private LeadListRepository \$segmentRepository)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            DynamicContentEvents::ON_CONTACTS_FILTER_EVALUATE => ['onContactFilterEvaluate', 0],
        ];
    }

    public function onContactFilterEvaluate(ContactFiltersEvaluateEvent \$event): void
    {
        foreach (\$event->getFilters() as \$filter) {
            if ('leadlist' === \$filter['type']) {
                // Segment membership evaluation. Check if contact/segment relationship is correct.
                \$event->setIsMatched(
                    \$this->isContactSegmentRelationshipValid(\$event->getContact(), \$filter['operator'], \$filter['filter'])
                );
                \$event->setIsEvaluated(true);

                return;
            }
        }
    }

    /**
     * @param string \$operator   empty, !empty, in, !in
     * @param ?int[] \$segmentIds
     */
    private function isContactSegmentRelationshipValid(Lead \$contact, string \$operator, array \$segmentIds = null): bool
    {
        \$contactId = (int) \$contact->getId();

        return match (\$operator) {
            OperatorOptions::EMPTY     => \$this->segmentRepository->isNotContactInAnySegment(\$contactId),
            OperatorOptions::NOT_EMPTY => \$this->segmentRepository->isContactInAnySegment(\$contactId),
            OperatorOptions::IN        => \$this->segmentRepository->isContactInSegments(\$contactId, \$segmentIds),
            OperatorOptions::NOT_IN    => \$this->segmentRepository->isNotContactInSegments(\$contactId, \$segmentIds),
            default                    => throw new \\InvalidArgumentException(sprintf(\"Unexpected operator '%s'\", \$operator)),
        };
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/DynamicContentSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/DynamicContentSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\DynamicContentSubscriber.php");
    }
}
