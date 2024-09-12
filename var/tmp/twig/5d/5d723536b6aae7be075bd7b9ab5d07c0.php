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

/* @bundles/LeadBundle/Provider/TypeOperatorProviderInterface.php */
class __TwigTemplate_3b62c975bde0393675b61ff8b041734b extends Template
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

use Mautic\\LeadBundle\\Exception\\OperatorsNotFoundException;

interface TypeOperatorProviderInterface
{
    /**
     * @param mixed[] \$operators
     *
     * @return mixed[]
     */
    public function getOperatorsIncluding(array \$operators): array;

    /**
     * @param mixed[] \$operators
     *
     * @return mixed[]
     */
    public function getOperatorsExcluding(array \$operators): array;

    /**
     * @return mixed[]
     *
     * @throws OperatorsNotFoundException
     */
    public function getOperatorsForFieldType(string \$fieldType): array;

    /**
     * @return mixed[]
     */
    public function getAllTypeOperators(): array;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Provider/TypeOperatorProviderInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Provider/TypeOperatorProviderInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Provider\\TypeOperatorProviderInterface.php");
    }
}
