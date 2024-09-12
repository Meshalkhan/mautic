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

/* @bundles/LeadBundle/Field/Event/AddColumnEvent.php */
class __TwigTemplate_b55d1ec233e291b9d5384bbd28e00884 extends Template
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

namespace Mautic\\LeadBundle\\Field\\Event;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class AddColumnEvent extends Event
{
    public function __construct(
        private LeadField \$leadField,
        private bool \$shouldProcessInBackground
    ) {
    }

    public function getLeadField(): LeadField
    {
        return \$this->leadField;
    }

    public function shouldProcessInBackground(): bool
    {
        return \$this->shouldProcessInBackground;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/Event/AddColumnEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Event/AddColumnEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Field\\Event\\AddColumnEvent.php");
    }
}
