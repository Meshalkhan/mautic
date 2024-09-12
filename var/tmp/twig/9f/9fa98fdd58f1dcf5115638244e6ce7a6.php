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

/* @bundles/CoreBundle/Twig/Extension/FormExtension.php */
class __TwigTemplate_8fffa3c6fc84158a97c963217e6dfb7d extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Extension;

use Mautic\\FormBundle\\Helper\\FormFieldHelper;
use Symfony\\Component\\Form\\FormView;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class FormExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('formFieldFormatList', [\$this, 'formatList'], ['is_safe' => ['all']]),
            new TwigFunction('formContainsErrors', [\$this, 'containsErrors'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * @param array<string> \$v
     */
    public function formatList(string \$format, array \$v): string
    {
        return FormFieldHelper::formatList(\$format, \$v);
    }

    /**
     * Checks to see if the form and its children has an error.
     *
     * @param array<string> \$excluding
     */
    public function containsErrors(FormView \$form, array \$excluding = []): bool
    {
        if (count(\$form->vars['errors'])) {
            return true;
        }
        foreach (\$form->children as \$key => \$child) {
            if (in_array(\$key, \$excluding)) {
                continue;
            }

            if (isset(\$child->vars['errors']) && count(\$child->vars['errors'])) {
                return true;
            }

            if (count(\$child->children)) {
                \$hasErrors = \$this->containsErrors(\$child);
                if (\$hasErrors) {
                    return true;
                }
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
        return "@bundles/CoreBundle/Twig/Extension/FormExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/FormExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Extension\\FormExtension.php");
    }
}
