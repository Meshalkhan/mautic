<?php

declare(strict_types=1);

namespace Mautic\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Mautic\CoreBundle\Doctrine\PreUpAssertionMigration;

final class Version20240416112112 extends PreUpAssertionMigration
{
    protected function preUpAssertions(): void
    {
        try{
        $this->skipAssertion(function (Schema $schema) {
            return $schema->getTable("{$this->prefix}campaigns")->hasColumn('version');
        }, sprintf('Column %s already exists', 'version'));
    } catch (TableNotFoundException $e) {
        // Log the exception or handle it as needed.
        $this->write("Table not found: " . $e->getMessage());
    } catch (\Exception $e) {
        // Handle other possible exceptions.
        $this->write("An error occurred: " . $e->getMessage());
    }
    }

    public function up(Schema $schema): void
    {
        try{
            $this->addSql("ALTER TABLE {$this->prefix}campaigns ADD version INT UNSIGNED DEFAULT 1 NOT NULL");
        } catch (TableNotFoundException $e) {
            // Log the exception or handle it as needed.
            $this->write("Table not found: " . $e->getMessage());
        } catch (\Exception $e) {
            // Handle other possible exceptions.
            $this->write("An error occurred: " . $e->getMessage());
        }
    }
}
