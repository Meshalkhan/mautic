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

/* @bundles/FormBundle/Collector/AlreadyMappedFieldCollectorInterface.php */
class __TwigTemplate_256275ea16b53bffacc3c0126ff7313a extends Template
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

namespace Mautic\\FormBundle\\Collector;

interface AlreadyMappedFieldCollectorInterface
{
    /**
     * @param string \$formId can be a string hash for new forms
     *
     * @return mixed[]
     */
    public function getFields(string \$formId, string \$object): array;

    public function addField(string \$formId, string \$object, string \$fieldKey): void;

    public function removeField(string \$formId, string \$object, string \$fieldKey): void;

    /**
     * Removes all mapped fields for the specified form.
     */
    public function removeAllForForm(string \$formId): void;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Collector/AlreadyMappedFieldCollectorInterface.php";
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
        return new Source("", "@bundles/FormBundle/Collector/AlreadyMappedFieldCollectorInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Collector\\AlreadyMappedFieldCollectorInterface.php");
    }
}
