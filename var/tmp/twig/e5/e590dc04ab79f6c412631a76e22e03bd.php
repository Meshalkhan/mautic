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

/* @bundles/FormBundle/Twig/Extension/FormFieldExtension.php */
class __TwigTemplate_d425814632352c02597a91e07ba4008b extends Template
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

namespace Mautic\\FormBundle\\Twig\\Extension;

use Mautic\\FormBundle\\Helper\\FormFieldHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

final class FormFieldExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('formFieldParseBooleanList', [FormFieldHelper::class, 'parseBooleanList']),
            new TwigFunction('formFieldParseList', [FormFieldHelper::class, 'parseList']),
            new TwigFunction('formFieldParseListForChoices', [FormFieldHelper::class, 'parseListForChoices']),
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
        return "@bundles/FormBundle/Twig/Extension/FormFieldExtension.php";
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
        return new Source("", "@bundles/FormBundle/Twig/Extension/FormFieldExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Twig\\Extension\\FormFieldExtension.php");
    }
}
