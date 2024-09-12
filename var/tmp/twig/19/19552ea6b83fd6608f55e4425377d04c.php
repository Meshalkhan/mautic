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

/* @bundles/InstallBundle/EventListener/DoctrineEventSubscriber.php */
class __TwigTemplate_b49e17097b5f21071bdd6769cc4e8dab extends Template
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

namespace Mautic\\InstallBundle\\EventListener;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\ORM\\Tools\\Event\\GenerateSchemaEventArgs;
use Mautic\\LeadBundle\\Field\\SchemaDefinition;
use Mautic\\LeadBundle\\Model\\FieldModel;

class DoctrineEventSubscriber implements EventSubscriber
{
    public function getSubscribedEvents(): array
    {
        return [
            'postGenerateSchema',
        ];
    }

    public function postGenerateSchema(GenerateSchemaEventArgs \$args): void
    {
        \$fieldGroups = [
            'leads'     => FieldModel::\$coreFields,
            'companies' => FieldModel::\$coreCompanyFields,
        ];

        foreach (\$fieldGroups as \$tableName => \$fields) {
            \$fullTableName = MAUTIC_TABLE_PREFIX.\$tableName;
            if (!\$args->getSchema()->hasTable(\$fullTableName)) {
                // Ignore during plugin installations as not all tables are present in the schema.
                continue;
            }
            \$table = \$args->getSchema()->getTable(\$fullTableName);

            foreach (\$fields as \$alias => \$field) {
                if (!\$table->hasColumn(\$alias)) {
                    \$type       = \$field['type'] ?? 'text';
                    \$definition = SchemaDefinition::getSchemaDefinition(\$alias, \$type, !empty(\$field['unique']));
                    \$table->addColumn(\$definition['name'], \$definition['type'], \$definition['options']);

                    if ('textarea' !== \$type) {
                        \$table->addIndex([\$definition['name']], \$definition['name'].'_search');
                    }
                }
            }

            if ('leads' === \$tableName) {
                // Add an attribution index
                \$table->addIndex(['attribution', 'attribution_date'], 'contact_attribution');
                // Add date added and country index
                \$table->addIndex(['date_added', 'country'], 'date_added_country_index');
            } else {
                \$table->addIndex(['companyname', 'companyemail'], 'company_filter');
                \$table->addIndex(['companyname', 'companycity', 'companycountry', 'companystate'], 'company_match');
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/EventListener/DoctrineEventSubscriber.php";
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
        return new Source("", "@bundles/InstallBundle/EventListener/DoctrineEventSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\EventListener\\DoctrineEventSubscriber.php");
    }
}
