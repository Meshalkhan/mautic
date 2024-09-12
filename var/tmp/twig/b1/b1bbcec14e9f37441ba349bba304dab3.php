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

/* @bundles/FormBundle/ProgressiveProfiling/DisplayManager.php */
class __TwigTemplate_653618adba50da80e7d1d86f1185ea51 extends Template
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

namespace Mautic\\FormBundle\\ProgressiveProfiling;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Entity\\Form;

class DisplayManager
{
    private DisplayCounter \$displayCounter;

    public function __construct(
        private Form \$form,
        private array \$viewOnlyFields = []
    ) {
        \$this->displayCounter = new DisplayCounter(\$form);
    }

    /**
     * @return bool
     */
    public function showForField(Field \$field)
    {
        if (in_array(\$field->getType(), \$this->viewOnlyFields)) {
            return true;
        }

        // Always Display field priority until hit limit
        if (\$field->isAlwaysDisplay()) {
            if (\$this->form->getProgressiveProfilingLimit() <= \$this->displayCounter->getDisplayFields()) {
                return false;
            } else {
                \$this->displayCounter->increaseAlreadyAlwaysDisplayed();

                return true;
            }
        }

        if (\$this->shouldDisplayNotAlwaysDisplayField(\$field)) {
            return true;
        } else {
            return false;
        }
    }

    private function shouldDisplayNotAlwaysDisplayField(Field \$field): bool
    {
        \$fields = \$this->form->getFields()->toArray();
        foreach (\$fields as \$fieldFromArray) {
            if (in_array(\$field->getType(), \$this->viewOnlyFields)) {
                continue;
            }

            /** @var Field \$fieldFromArray */
            if (\$field->getId() === \$fieldFromArray->getId()) {
                if ((\$this->displayCounter->getDisplayFields() + (\$this->displayCounter->getAlwaysDisplayFields() - \$this->displayCounter->getAlreadyAlwaysDisplayed())) >= \$this->form->getProgressiveProfilingLimit()) {
                    return false;
                }
            }
        }

        return true;
    }

    public function useProgressiveProfilingLimit(): bool
    {
        return '' != \$this->form->getProgressiveProfilingLimit();
    }

    /**
     * @return DisplayCounter
     */
    public function getDisplayCounter()
    {
        return \$this->displayCounter;
    }

    public function increaseDisplayedFields(Field \$field): void
    {
        if (!in_array(\$field->getType(), \$this->viewOnlyFields)) {
            \$this->displayCounter->increaseDisplayedFields();
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/ProgressiveProfiling/DisplayManager.php";
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
        return new Source("", "@bundles/FormBundle/ProgressiveProfiling/DisplayManager.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\ProgressiveProfiling\\DisplayManager.php");
    }
}
