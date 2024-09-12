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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Order/ObjectMappingsDAO.php */
class __TwigTemplate_e7c9e0a4103fea52c67e9d174f6822e9 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order;

use Mautic\\IntegrationsBundle\\Entity\\ObjectMapping;

class ObjectMappingsDAO
{
    /**
     * @var ObjectMapping[]
     */
    private array \$updatedMappings = [];

    /**
     * @var ObjectMapping[]
     */
    private array \$newMappings = [];

    public function addUpdatedObjectMapping(ObjectMapping \$objectMapping): void
    {
        \$this->updatedMappings[] = \$objectMapping;
    }

    public function addNewObjectMapping(ObjectMapping \$objectMapping): void
    {
        \$this->newMappings[] = \$objectMapping;
    }

    /**
     * @return ObjectMapping[]
     */
    public function getUpdatedMappings(): array
    {
        return \$this->updatedMappings;
    }

    /**
     * @return ObjectMapping[]
     */
    public function getNewMappings(): array
    {
        return \$this->newMappings;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Order/ObjectMappingsDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Order/ObjectMappingsDAO.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\ObjectMappingsDAO.php");
    }
}
