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

/* @bundles/FormBundle/Crate/FieldCrate.php */
class __TwigTemplate_f7e0cdb913444e1c7c2b8968acefe550 extends Template
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

namespace Mautic\\FormBundle\\Crate;

use Mautic\\LeadBundle\\Helper\\FormFieldHelper;

final class FieldCrate
{
    /**
     * @param mixed[] \$properties
     */
    public function __construct(
        private string \$key,
        private string \$name,
        private string \$type,
        private array \$properties
    ) {
    }

    public function getKey(): string
    {
        return \$this->key;
    }

    public function getName(): string
    {
        return \$this->name;
    }

    public function getType(): string
    {
        return \$this->type;
    }

    /**
     * @return mixed[]
     */
    public function getProperties(): array
    {
        return \$this->properties;
    }

    public function isListType(): bool
    {
        \$isListType    = in_array(\$this->getType(), FormFieldHelper::getListTypes());
        \$hasList       = !empty(\$this->getProperties()['list']);
        \$hasOptionList = !empty(\$this->getProperties()['optionlist']);

        return \$isListType || \$hasList || \$hasOptionList;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Crate/FieldCrate.php";
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
        return new Source("", "@bundles/FormBundle/Crate/FieldCrate.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Crate\\FieldCrate.php");
    }
}
