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

/* @bundles/LeadBundle/Field/Event/AddColumnBackgroundEvent.php */
class __TwigTemplate_70c18a6d0b64da59fbb4189d3cf165f4 extends Template
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

final class AddColumnBackgroundEvent extends Event
{
    public function __construct(
        private LeadField \$leadField
    ) {
    }

    public function getLeadField(): LeadField
    {
        return \$this->leadField;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/Event/AddColumnBackgroundEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Event/AddColumnBackgroundEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Field\\Event\\AddColumnBackgroundEvent.php");
    }
}
