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

/* @bundles/LeadBundle/Segment/TableSchemaColumnsCache.php */
class __TwigTemplate_963de04939823a7c0f6a905110349468 extends Template
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

namespace Mautic\\LeadBundle\\Segment;

use Doctrine\\ORM\\EntityManager;

class TableSchemaColumnsCache
{
    /**
     * @var array
     */
    private \$cache;

    public function __construct(
        private EntityManager \$entityManager
    ) {
        \$this->cache         = [];
    }

    /**
     * @return array|false
     */
    public function getColumns(\$tableName)
    {
        if (!isset(\$this->cache[\$tableName])) {
            \$columns                 = \$this->entityManager->getConnection()->createSchemaManager()->listTableColumns(\$tableName);
            \$this->cache[\$tableName] = \$columns ?: [];
        }

        return \$this->cache[\$tableName];
    }

    /**
     * @return \$this
     */
    public function clear()
    {
        \$this->cache = [];

        return \$this;
    }

    /**
     * @return string
     */
    public function getCurrentDatabaseName()
    {
        return \$this->entityManager->getConnection()->getDatabase();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/TableSchemaColumnsCache.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/TableSchemaColumnsCache.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\TableSchemaColumnsCache.php");
    }
}
