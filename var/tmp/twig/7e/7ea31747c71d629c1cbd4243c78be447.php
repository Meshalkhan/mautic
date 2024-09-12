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

/* @bundles/FormBundle/Form/Type/FormFieldTrait.php */
class __TwigTemplate_49b13ed9d752e8986226ab594544239a extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\FormBundle\\Model\\FieldModel;
use Mautic\\FormBundle\\Model\\FormModel;

trait FormFieldTrait
{
    /**
     * @var FieldModel
     */
    protected \$fieldModel;

    /**
     * @var FormModel
     */
    protected \$formModel;

    public function setFieldModel(FieldModel \$fieldModel): void
    {
        \$this->fieldModel = \$fieldModel;
    }

    public function setFormModel(FormModel \$formModel): void
    {
        \$this->formModel = \$formModel;
    }

    /**
     * @param bool \$asTokens
     */
    protected function getFormFields(\$formId, \$asTokens = true): array
    {
        \$fields   = \$this->fieldModel->getSessionFields(\$formId);
        \$viewOnly = \$this->formModel->getCustomComponents()['viewOnlyFields'];

        \$choices = [];

        foreach (\$fields as \$f) {
            if (in_array(\$f['type'], \$viewOnly)) {
                continue;
            }

            \$choices[(\$asTokens) ? '{formfield='.\$f['alias'].'}' : \$f['alias']] = \$f['label'];
        }

        return \$choices;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Form/Type/FormFieldTrait.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/FormFieldTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Form\\Type\\FormFieldTrait.php");
    }
}
