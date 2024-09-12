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

/* @bundles/CoreBundle/Controller/FormThemeTrait.php */
class __TwigTemplate_287b981346c88ecf7f8c7b2d4d7846bf extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormInterface;

trait FormThemeTrait
{
    /**
     * Sets a specific theme for the form.
     *
     * @param FormInterface<mixed> \$form
     * @param string               \$template
     * @param mixed                \$themes
     *
     * @return \\Symfony\\Component\\Form\\FormView
     */
    protected function setFormTheme(FormInterface \$form, \$template, \$themes = null)
    {
        \$formView = \$form->createView();

        \$twig = \$this->get('twig');

        // Extract form theme from options if applicable
        \$fieldThemes = [];
        \$findThemes  = function (\$form, \$formView) use (\$twig, &\$findThemes, &\$fieldThemes): void {
            /** @var Form \$field */
            foreach (\$form as \$name => \$field) {
                \$fieldView = \$formView[\$name];
                if (\$theme = \$field->getConfig()->getOption('default_theme')) {
                    \$fieldThemes[] = \$theme;
                    \$twig->get('form')->setTheme(\$fieldView, \$theme);
                }

                if (\$field->count()) {
                    \$findThemes(\$field, \$fieldView);
                }
            }
        };

        \$findThemes(\$form, \$formView);

        \$themes = (array) \$themes;
        \$themes = array_values(array_unique(array_merge(\$themes, \$fieldThemes)));

        \$twig->get('form')->setTheme(\$formView, \$themes);

        return \$formView;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/FormThemeTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/FormThemeTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Controller\\FormThemeTrait.php");
    }
}
