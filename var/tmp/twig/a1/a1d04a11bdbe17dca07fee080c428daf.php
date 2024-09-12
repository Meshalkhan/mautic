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

/* @bundles/LeadBundle/Twig/Extension/FormFieldExtension.php */
class __TwigTemplate_0785833947bdf1a8c1615cf34b69b1e4 extends Template
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

namespace Mautic\\LeadBundle\\Twig\\Extension;

use Mautic\\LeadBundle\\Helper\\FormFieldHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

final class FormFieldExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('leadFieldCountryChoices', [FormFieldHelper::class, 'getCountryChoices']),
            new TwigFunction('leadFieldRegionChoices', [FormFieldHelper::class, 'getRegionChoices']),
            new TwigFunction('leadFieldTimezonesChoices', [FormFieldHelper::class, 'getTimezonesChoices']),
            new TwigFunction('leadFieldLocaleChoices', [FormFieldHelper::class, 'getLocaleChoices']),
            new TwigFunction('leadFormFieldParseListForChoices', [FormFieldHelper::class, 'parseListForChoices']),
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Twig/Extension/FormFieldExtension.php";
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
        return new Source("", "@bundles/LeadBundle/Twig/Extension/FormFieldExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Twig\\Extension\\FormFieldExtension.php");
    }
}
