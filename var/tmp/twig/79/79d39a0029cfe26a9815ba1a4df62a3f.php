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

/* @bundles/LeadBundle/Provider/FormAdjustmentsProvider.php */
class __TwigTemplate_08e2351d2284e88c98046f5a074f87ba extends Template
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

namespace Mautic\\LeadBundle\\Provider;

use Mautic\\LeadBundle\\Event\\FormAdjustmentEvent;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormInterface;

final class FormAdjustmentsProvider implements FormAdjustmentsProviderInterface
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    /**
     * @param FormInterface<FormInterface<mixed>> \$form
     * @param mixed[]                             \$fieldDetails
     *
     * @return FormInterface<FormInterface<mixed>>
     */
    public function adjustForm(FormInterface \$form, string \$fieldAlias, string \$fieldObject, string \$operator, array \$fieldDetails): FormInterface
    {
        \$event = new FormAdjustmentEvent(\$form, \$fieldAlias, \$fieldObject, \$operator, \$fieldDetails);
        \$this->dispatcher->dispatch(\$event, LeadEvents::ADJUST_FILTER_FORM_TYPE_FOR_FIELD);

        return \$event->getForm();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Provider/FormAdjustmentsProvider.php";
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
        return new Source("", "@bundles/LeadBundle/Provider/FormAdjustmentsProvider.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Provider\\FormAdjustmentsProvider.php");
    }
}
