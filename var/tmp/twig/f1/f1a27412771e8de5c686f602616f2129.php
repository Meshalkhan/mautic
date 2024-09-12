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

/* @bundles/IntegrationsBundle/Migrations/Version_0_0_1.php */
class __TwigTemplate_bf03d36d1d88fb35ac83b60da252bce6 extends Template
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

namespace Mautic\\IntegrationsBundle\\Migrations;

use Doctrine\\DBAL\\Schema\\Schema;
use Doctrine\\DBAL\\Schema\\SchemaException;
use Mautic\\IntegrationsBundle\\Migration\\AbstractMigration;

class Version_0_0_1 extends AbstractMigration
{
    private string \$table = 'sync_object_mapping';

    protected function isApplicable(Schema \$schema): bool
    {
        try {
            return !\$schema->getTable(\$this->concatPrefix(\$this->table))->hasColumn('integration_reference_id');
        } catch (SchemaException) {
            return false;
        }
    }

    protected function up(): void
    {
        \$this->addSql(\"
            ALTER TABLE `{\$this->concatPrefix(\$this->table)}`
            DROP INDEX `{\$this->concatPrefix('integration_object')}`
        \");

        \$this->addSql(\"
            ALTER TABLE `{\$this->concatPrefix(\$this->table)}`
            ADD `integration_reference_id` varchar(191) NULL AFTER `internal_object_name`
        \");

        \$this->addSql(\"
            CREATE INDEX {\$this->concatPrefix('integration_object')}
            ON {\$this->concatPrefix(\$this->table)}(integration, integration_object_name, integration_object_id, integration_reference_id);
        \");

        \$this->addSql(\"
            CREATE INDEX {\$this->concatPrefix('integration_reference')}
            ON {\$this->concatPrefix(\$this->table)}(integration, integration_object_name, integration_reference_id, integration_object_id);
        \");
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Migrations/Version_0_0_1.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Migrations/Version_0_0_1.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Migrations\\Version_0_0_1.php");
    }
}
