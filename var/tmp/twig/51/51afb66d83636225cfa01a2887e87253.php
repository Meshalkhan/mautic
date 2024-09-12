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

/* @bundles/LeadBundle/EventListener/DynamicContentSubscriber.php */
class __TwigTemplate_05fe1a32f65b6bf4e97abd1dc55702aa extends Template
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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/EventListener/DynamicContentSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/DynamicContentSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\DynamicContentSubscriber.php");
    }
}
