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

/* @bundles/CoreBundle/Doctrine/Helper/TableSchemaHelper.php */
class __TwigTemplate_d8cef84973ed34c8f1fe6559b18d5ba5 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Helper;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Schema\\Schema;
use Mautic\\CoreBundle\\Exception\\SchemaException;

/**
 * Used to manipulate creation/removal of tables.
 */
class TableSchemaHelper
{
    /**
     * @var \\Doctrine\\DBAL\\Schema\\AbstractSchemaManager<\\Doctrine\\DBAL\\Platforms\\AbstractMySQLPlatform>
     */
    protected \\Doctrine\\DBAL\\Schema\\AbstractSchemaManager \$sm;

    /**
     * @var Schema
     */
    protected \$schema;

    /**
     * @var string[]
     */
    protected array \$dropTables = [];

    /**
     * @var string[]
     */
    protected array \$addTables = [];

    /**
     * @param string \$prefix
     */
    public function __construct(
        protected Connection \$db,
        protected \$prefix,
        protected ColumnSchemaHelper \$columnHelper
    ) {
        \$this->sm = \$db->createSchemaManager();
    }

    /**
     * Get the SchemaManager.
     *
     * @return \\Doctrine\\DBAL\\Schema\\AbstractSchemaManager<\\Doctrine\\DBAL\\Platforms\\AbstractMySQLPlatform>
     */
    public function getSchemaManager()
    {
        return \$this->sm;
    }

    /**
     * Add an array of tables to db.
     *
     * @return \$this
     *
     * @throws SchemaException
     */
    public function addTables(array \$tables)
    {
        // ensure none of the tables exist before manipulating the schema
        foreach (\$tables as \$table) {
            if (empty(\$table['name'])) {
                throw new SchemaException('Table is missing required name key.');
            }

            \$this->checkTableExists(\$table['name'], true);
        }

        // now add the tables
        foreach (\$tables as \$table) {
            \$this->addTables[] = \$table;
            \$this->addTable(\$table, false);
        }

        return \$this;
    }

    /**
     * Add a table to the db.
     *
     *                     ['name']    string (required) unique name of table; cannot already exist
     *                     ['columns'] array  (optional) Array of columns to add in the format of
     *                     array(
     *                     array(
     *                     'name'    => 'column_name', //required
     *                     'type'    => 'string',  //optional, defaults to text
     *                     'options' => array(...) //optional, column options
     *                     ),
     *                     ...
     *                     )
     *                     ['options'] array  (optional) Defining options for table
     *                     array(
     *                     'primaryKey' => array(),
     *                     'uniqueIndex' => array()
     *                     )
     *
     * @return \$this
     *
     * @throws SchemaException
     */
    public function addTable(array \$table, \$checkExists = true, \$dropExisting = false)
    {
        if (empty(\$table['name'])) {
            throw new SchemaException('Table is missing required name key.');
        }

        if (\$checkExists || \$dropExisting) {
            \$throwException = (\$dropExisting) ? false : true;
            if (\$this->checkTableExists(\$table['name'], \$throwException) && \$dropExisting) {
                \$this->deleteTable(\$table['name']);
            }
        }

        \$this->addTables[] = \$table;

        \$options = \$table['options'] ?? [];
        \$columns = \$table['columns'] ?? [];

        \$newTable = \$this->getSchema()->createTable(\$this->prefix.\$table['name']);

        if (!empty(\$columns)) {
            // just to make sure a same name column is not added
            \$columnsAdded = [];
            foreach (\$columns as \$column) {
                if (empty(\$column['name'])) {
                    throw new SchemaException('A column is missing required name key.');
                }

                if (!isset(\$columns[\$column['name']])) {
                    \$type       = \$column['type'] ?? 'text';
                    \$colOptions = \$column['options'] ?? [];

                    \$newTable->addColumn(\$column['name'], \$type, \$colOptions);
                    \$columnsAdded[] = \$column['name'];
                }
            }
        }

        if (!empty(\$options)) {
            foreach (\$options as \$option => \$value) {
                \$func = ('uniqueIndex' == \$option ? 'add' : 'set').ucfirst(\$option);
                \$newTable->\$func(\$value);
            }
        }

        return \$this;
    }

    /**
     * @return \$this
     *
     * @throws SchemaException
     */
    public function deleteTable(\$table)
    {
        if (\$this->checkTableExists(\$table)) {
            \$this->dropTables[] = \$table;
        }

        return \$this;
    }

    /**
     * Executes the changes.
     */
    public function executeChanges(): void
    {
        \$platform = \$this->db->getDatabasePlatform();

        foreach (\$this->dropTables as \$t) {
            \$this->sm->dropTable(\$this->prefix.\$t);
        }

        \$sql = \$this->getSchema()->toSql(\$platform);

        foreach (\$sql as \$s) {
            \$this->db->executeStatement(\$s);
        }

        // reset schema
        \$this->schema     = new Schema([], [], \$this->sm->createSchemaConfig());
        \$this->dropTables = \$this->addTables = [];
    }

    /**
     * Determine if a table exists.
     *
     * @param string \$table
     * @param bool   \$throwException
     *
     * @throws SchemaException
     */
    public function checkTableExists(\$table, \$throwException = false): bool
    {
        if (\$this->sm->tablesExist(\$this->prefix.\$table)) {
            if (\$throwException) {
                throw new SchemaException(\$this->prefix.\"\$table already exists\");
            }

            return true;
        }

        return false;
    }

    private function getSchema(): Schema
    {
        if (\$this->schema) {
            return \$this->schema;
        }

        if (\$this->db instanceof \\Doctrine\\DBAL\\Connections\\PrimaryReadReplicaConnection) {
            \$params       = \$this->db->getParams();
            \$schemaConfig = new \\Doctrine\\DBAL\\Schema\\SchemaConfig();
            \$schemaConfig->setName(\$params['master']['dbname']);
            \$this->schema = new Schema([], [], \$schemaConfig);
        } else {
            \$this->schema = new Schema([], [], \$this->sm->createSchemaConfig());
        }

        return \$this->schema;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Helper/TableSchemaHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Helper/TableSchemaHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\Helper\\TableSchemaHelper.php");
    }
}
