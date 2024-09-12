<?php

declare(strict_types=1);

namespace Mautic\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Mautic\CoreBundle\Doctrine\AbstractMauticMigration;

/**
 * Move config files that contain local config to a folder outside the application data.
 */
final class Versionzz20230929183000 extends AbstractMauticMigration
{
    public function preUp(Schema $schema): void
    {
        try{
            [$appConfigDir] = $this->getConfigDirs();

            $matches = glob($appConfigDir.'/*local.php');

            $this->skipIf(
                0 == count($matches),
                'There are no local config files to migrate. Skipping the migration.'
            );
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
                $pathsHelper = $this->container->get('mautic.helper.paths');

                $appConfigDir   = $pathsHelper->getRootPath().'/app/config';
                $localConfigDir = $pathsHelper->getVendorRootPath().'/config';

                $matches = glob($appConfigDir.'/*local.php');

                foreach ($matches as $file) {
                    rename($file, $localConfigDir.'/'.pathinfo($file, PATHINFO_BASENAME));
                }
            } catch (TableNotFoundException $e) {
                // Log the exception or handle it as needed.
                $this->write("Table not found: " . $e->getMessage());
            } catch (\Exception $e) {
                // Handle other possible exceptions.
                $this->write("An error occurred: " . $e->getMessage());
            }
    }

    /**
     * @return string[]
     */
    public function getConfigDirs(): array
    {
        try{
        $pathsHelper = $this->container->get('mautic.helper.paths');

        $appConfigDir   = $pathsHelper->getRootPath().'/app/config';
        $localConfigDir = $pathsHelper->getVendorRootPath().'/config';

        return [$appConfigDir, $localConfigDir];
    } catch (TableNotFoundException $e) {
        // Log the exception or handle it as needed.
        $this->write("Table not found: " . $e->getMessage());
    } catch (\Exception $e) {
        // Handle other possible exceptions.
        $this->write("An error occurred: " . $e->getMessage());
    }
    }
}
