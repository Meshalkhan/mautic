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

/* @bundles/LeadBundle/Provider/FormAdjustmentsProviderInterface.php */
class __TwigTemplate_17a2b88ae4cb73c855300fb87acbc31f extends Template
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

use Symfony\\Component\\Form\\FormInterface;

interface FormAdjustmentsProviderInterface
{
    /**
     * Allows subscribers to adjust a form so new fields can be added, deleted or modified.
     *
     * @param FormInterface<FormInterface<mixed>> \$form
     * @param mixed[]                             \$fieldDetails
     *
     * @return FormInterface<FormInterface<mixed>>
     */
    public function adjustForm(FormInterface \$form, string \$fieldAlias, string \$fieldObject, string \$operator, array \$fieldDetails): FormInterface;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Provider/FormAdjustmentsProviderInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Provider/FormAdjustmentsProviderInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Provider\\FormAdjustmentsProviderInterface.php");
    }
}
