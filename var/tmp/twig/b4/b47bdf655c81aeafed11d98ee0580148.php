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

/* @bundles/LeadBundle/Event/ImportProcessEvent.php */
class __TwigTemplate_a36846e8e4cdb7629dbb93fabe1a909c extends Template
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

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\Import;
use Mautic\\LeadBundle\\Entity\\LeadEventLog;

final class ImportProcessEvent extends CommonEvent
{
    private ?bool \$wasMerged = null;

    public function __construct(
        public Import \$import,
        public LeadEventLog \$eventLog,
        public array \$rowData
    ) {
    }

    public function setWasMerged(bool \$wasMerged): void
    {
        \$this->wasMerged = \$wasMerged;
    }

    /**
     * @throws \\UnexpectedValueException
     */
    public function wasMerged(): bool
    {
        if (null === \$this->wasMerged) {
            throw new \\UnexpectedValueException(\"Import failed as {\$this->import->getObject()} object is missing import handler.\");
        }

        return \$this->wasMerged;
    }

    public function importIsForObject(string \$object): bool
    {
        return \$this->import->getObject() === \$object;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/ImportProcessEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/ImportProcessEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\ImportProcessEvent.php");
    }
}
