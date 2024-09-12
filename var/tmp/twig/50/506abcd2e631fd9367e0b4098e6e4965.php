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

/* @bundles/LeadBundle/Provider/FieldChoicesProviderInterface.php */
class __TwigTemplate_91596746c1714b5fe97d06c6c668b4b0 extends Template
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

namespace Mautic\\LeadBundle\\Provider;

use Mautic\\LeadBundle\\Exception\\ChoicesNotFoundException;

interface FieldChoicesProviderInterface
{
    /**
     * @return mixed[]
     *
     * @throws ChoicesNotFoundException
     */
    public function getChoicesForField(string \$fieldType, string \$fieldAlias, string \$search = ''): array;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Provider/FieldChoicesProviderInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Provider/FieldChoicesProviderInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Provider\\FieldChoicesProviderInterface.php");
    }
}
