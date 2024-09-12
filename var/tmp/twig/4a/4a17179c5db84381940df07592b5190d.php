<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Configurator/Step/StepInterface.php */
class __TwigTemplate_4d059f94a52c060eed7a663f166f653d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\CoreBundle\\Configurator\\Step;

interface StepInterface
{
    /**
     * Returns the form used for configuration.
     *
     * @return string
     */
    public function getFormType();

    /**
     * Checks for requirements.
     *
     * @return array
     */
    public function checkRequirements();

    /**
     * Checks for optional settings.
     *
     * @return array
     */
    public function checkOptionalSettings();

    /**
     * Returns the template to be rendered for this step.
     *
     * @return string
     */
    public function getTemplate();

    /**
     * Updates form data parameters.
     *
     * @return array
     */
    public function update(StepInterface \$data);
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Configurator/Step/StepInterface.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Configurator/Step/StepInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Configurator\\Step\\StepInterface.php");
    }
}
