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

/* @bundles/PointBundle/EventListener/SegmentFilterSubscriber.php */
class __TwigTemplate_311248f7be79ec6a3fde2de0e5a38162 extends Template
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

namespace Mautic\\PointBundle\\EventListener;

use Mautic\\LeadBundle\\Event\\LeadListFiltersChoicesEvent;
use Mautic\\LeadBundle\\Event\\SegmentDictionaryGenerationEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Mautic\\LeadBundle\\Provider\\TypeOperatorProviderInterface;
use Mautic\\LeadBundle\\Segment\\Query\\Filter\\ForeignValueFilterQueryBuilder;
use Mautic\\PointBundle\\Entity\\Group;
use Mautic\\PointBundle\\Entity\\GroupRepository;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class SegmentFilterSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private GroupRepository \$groupRepository,
        private TypeOperatorProviderInterface \$typeOperatorProvider,
        private TranslatorInterface \$translator
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            LeadEvents::LIST_FILTERS_CHOICES_ON_GENERATE   => [
                ['onGenerateSegmentFiltersAddPointGroups', -10],
            ],
            LeadEvents::SEGMENT_DICTIONARY_ON_GENERATE   => [
                ['onSegmentDictionaryGenerate', 0],
            ],
        ];
    }

    public function onGenerateSegmentFiltersAddPointGroups(LeadListFiltersChoicesEvent \$event): void
    {
        // Only show for segments and not dynamic content addressed by https://github.com/mautic/mautic/pull/9260
        if (!\$event->isForSegmentation()) {
            return;
        }

        \$groups  = \$this->groupRepository->getEntities();
        \$choices = [];

        /** @var Group \$group */
        foreach (\$groups as \$group) {
            \$choices['group_points_'.\$group->getId()] = [
                'label'      => \$this->translator->trans('mautic.lead.lead.event.grouppoints', ['%group%' => \$group->getName()]),
                'properties' => ['type' => 'number'],
                'operators'  => \$this->typeOperatorProvider->getOperatorsForFieldType('default'),
                'object'     => 'lead',
            ];
        }

        foreach (\$choices as \$alias => \$fieldOptions) {
            \$event->addChoice('groups', \$alias, \$fieldOptions);
        }
    }

    public function onSegmentDictionaryGenerate(SegmentDictionaryGenerationEvent \$event): void
    {
        \$groups = \$this->groupRepository->getEntities();

        /** @var Group \$group */
        foreach (\$groups as \$group) {
            \$event->addTranslation('group_points_'.\$group->getId(), [
                'type'                => ForeignValueFilterQueryBuilder::getServiceId(),
                'foreign_table'       => 'point_group_contact_score',
                'foreign_table_field' => 'contact_id',
                'table'               => 'leads',
                'table_field'         => 'id',
                'field'               => 'score',
                'where'               => 'point_group_contact_score.group_id = '.\$group->getId(),
                'null_value'          => 0,
            ]);
        }
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
        return "@bundles/PointBundle/EventListener/SegmentFilterSubscriber.php";
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
        return new Source("", "@bundles/PointBundle/EventListener/SegmentFilterSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\EventListener\\SegmentFilterSubscriber.php");
    }
}
