<?php

declare(strict_types=1);

namespace Mautic\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Mautic\CoreBundle\Doctrine\PreUpAssertionMigration;

final class Version20240911144147 extends PreUpAssertionMigration
{
    protected function preUpAssertions(): void
    {
        // Please add an assertion for every SQL you define in the `up()` method.
        // The order does matter!
        // E.g.:
        /*
        $this->skipAssertion(
            fn (Schema $schema) => $schema->hasTable("{$this->prefix}table_name"),
            "Table {$this->prefix}table_name already exists"
        );

        $this->skipAssertion(
            fn (Schema $schema) => $schema->getTable("{$this->prefix}table_name")->hasIndex('index_name'),
            'Index index_name already exists'
        );
        */
    }

    public function up(Schema $schema): void
    {
        try{
                if (!$schema->hasTable('random_smtp')) {
                    $table = $schema->createTable('random_smtp');
                    $table->addColumn('id', 'integer', ['autoincrement' => true]);
                    $table->addColumn('host', 'string');
                    $table->addColumn('port', 'integer');
                    $table->addColumn('encryption', 'string');
                    $table->addColumn('username', 'string');
                    $table->addColumn('password', 'string');
                    $table->setPrimaryKey(['id']);
                } else {
                    // Add columns if needed or perform other schema updates
                }
            } catch (TableNotFoundException $e) {
                // Log the exception or handle it as needed.
                $this->write("Table not found: " . $e->getMessage());
            } catch (\Exception $e) {
                // Handle other possible exceptions.
                $this->write("An error occurred: " . $e->getMessage());
            }
    }
    
}
