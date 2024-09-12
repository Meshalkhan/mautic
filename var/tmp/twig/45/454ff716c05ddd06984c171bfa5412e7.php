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

/* @bundles/LeadBundle/Form/Type/FilterPropertiesType.php */
class __TwigTemplate_9bced94afa27ca9d7e8c9cb910ff551f extends Template
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

namespace Mautic\\LeadBundle\\Form\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * This form is filled with the LeadEvents::ADJUST_FILTER_FORM_TYPE_FOR_FIELD subscribers.
 *
 * @extends AbstractType<mixed>
 */
class FilterPropertiesType extends AbstractType
{
    public function configureOptions(OptionsResolver \$resolver): void
    {
        // This form is loaded via AJAX as part of another form.
        // Disable CSRF protection to avoid validation errors with unexpected fileds.
        \$resolver->setDefaults(['csrf_protection' => false]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/Type/FilterPropertiesType.php";
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
        return new Source("", "@bundles/LeadBundle/Form/Type/FilterPropertiesType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\Type\\FilterPropertiesType.php");
    }
}
