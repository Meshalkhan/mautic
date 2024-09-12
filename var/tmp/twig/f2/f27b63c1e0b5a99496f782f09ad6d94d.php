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

/* @bundles/LeadBundle/EventListener/ReportNormalizeSubscriber.php */
class __TwigTemplate_9330a7eb6d0cb2bb6dfefa260b2271ee extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use Mautic\\LeadBundle\\Helper\\CustomFieldValueHelper;
use Mautic\\LeadBundle\\Model\\FieldModel;
use Mautic\\ReportBundle\\Event\\ReportDataEvent;
use Mautic\\ReportBundle\\ReportEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class ReportNormalizeSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private FieldModel \$fieldModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ReportEvents::REPORT_ON_DISPLAY => ['onReportDisplay', 0],
        ];
    }

    public function onReportDisplay(ReportDataEvent \$event): void
    {
        if (!\$this->useContactOrCompanyColumn(\$event->getReport()->getColumns())) {
            return;
        }

        \$fields = \$this->fieldModel->getRepository()->getFields();
        \$rows   = \$event->getData();
        foreach (\$rows as \$key => \$row) {
            foreach (\$row as \$key2 => \$value) {
                if (isset(\$fields[\$key2])) {
                    \$rows[\$key][\$key2] = CustomFieldValueHelper::normalize(\$value, \$fields[\$key2]['type'] ?? null, \$fields[\$key2]['properties'] ?? []);
                }
            }
        }
        \$event->setData(\$rows);
    }

    /**
     * @param array<string> \$columns
     */
    protected function useContactOrCompanyColumn(array \$columns): bool
    {
        foreach (\$columns as \$column) {
            if (str_starts_with(\$column, 'l.') || str_starts_with(\$column, 'comp.')) {
                return true;
            }
        }

        return false;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/ReportNormalizeSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/ReportNormalizeSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\ReportNormalizeSubscriber.php");
    }
}
