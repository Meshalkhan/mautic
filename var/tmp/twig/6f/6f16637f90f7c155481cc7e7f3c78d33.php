<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/IpLookup/AbstractLocalDataLookup.php */
class __TwigTemplate_e1403f01771063bbcf0712871c71f0e2 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\CoreBundle\\IpLookup;

use GuzzleHttp\\RequestOptions;
use Mautic\\CoreBundle\\Form\\Type\\IpLookupDownloadDataStoreButtonType;

abstract class AbstractLocalDataLookup extends AbstractLookup implements IpLookupFormInterface
{
    /**
     * @const TAR_CACHE_FOLDER
     */
    public const TAR_CACHE_FOLDER = 'unpack';

    /**
     * @const TAR_TEMP_FILE
     */
    public const TAR_TEMP_FILE = 'temp.tar.gz';

    /**
     * Path to the local data store.
     *
     * @return string
     */
    abstract public function getLocalDataStoreFilepath();

    /**
     * Return the URL to manually download.
     *
     * @return string
     */
    abstract public function getRemoteDateStoreDownloadUrl();

    /**
     * @return string
     */
    public function getConfigFormService()
    {
        return IpLookupDownloadDataStoreButtonType::class;
    }

    /**
     * @return array
     */
    public function getConfigFormThemes()
    {
        return [];
    }

    /**
     * Download remote data store.
     *
     * Used by the mautic:iplookup:update_data command and form fetch button (if applicable) to update local IP data stores
     *
     * @return bool
     */
    public function downloadRemoteDataStore()
    {
        \$package   = \$this->getRemoteDateStoreDownloadUrl();

        if (empty(\$package)) {
            \$this->logger->error('Failed to fetch remote IP data: Invalid or inactive MaxMind license key');

            return false;
        }
        try {
            \$data = \$this->client->get(\$package, [
                RequestOptions::ALLOW_REDIRECTS => true,
            ]);
        } catch (\\Exception \$exception) {
            \$this->logger->error('Failed to fetch remote IP data: '.\$exception->getMessage());
        }

        \$tempTarget        = \$this->cacheDir.'/'.basename(\$package);
        \$tempExt           = strtolower(pathinfo(\$package, PATHINFO_EXTENSION));
        \$localTarget       = \$this->getLocalDataStoreFilepath();
        \$localTargetExt    = strtolower(pathinfo(\$localTarget, PATHINFO_EXTENSION));

        try {
            \$success = false;

            switch (true) {
                case \$localTargetExt === \$tempExt:
                    \$success = (bool) file_put_contents(\$localTarget, \$data->getBody());

                    break;

                case \$this->endsWith(\$package, 'tar.gz'):
                    /**
                     * If tar.gz it loops whole folder structure and copy the file which has the same basename as
                     * desired localTarget.
                     */
                    \$tempTargetFolder = \$this->cacheDir.'/'.self::TAR_CACHE_FOLDER;
                    \$temporaryPhar    = \$tempTargetFolder.'/'.self::TAR_TEMP_FILE;
                    if (!is_dir(\$tempTargetFolder)) {
                        // dir doesn't exist, make it
                        mkdir(\$tempTargetFolder);
                    }
                    file_put_contents(\$temporaryPhar, \$data->getBody());
                    \$pharData = new \\PharData(\$temporaryPhar);
                    foreach (new \\RecursiveIteratorIterator(\$pharData) as \$file) {
                        /** @var \\PharFileInfo \$file */
                        if (\$file->getBasename() === basename(\$localTarget)) {
                            \$success = copy(\$file->getPathname(), \$localTarget);
                        }
                    }
                    @unlink(\$temporaryPhar);

                    break;

                case 'gz' == \$tempExt:
                    \$memLimit = \$this->sizeInByte(ini_get('memory_limit'));
                    \$freeMem  = \$memLimit - memory_get_peak_usage();
                    // check whether there is enough memory to handle large iplookp DB
                    // or will throw iplookup exception
                    if (function_exists('gzdecode') && strlen(\$data->getBody()) < (\$freeMem / 3)) {
                        \$success = (bool) file_put_contents(\$localTarget, gzdecode(\$data->getBody()));
                    } elseif (function_exists('gzopen')) {
                        if (file_put_contents(\$tempTarget, \$data->getBody())) {
                            \$bufferSize = 4096; // read 4kb at a time
                            \$file       = gzopen(\$tempTarget, 'rb');
                            \$outFile    = fopen(\$localTarget, 'wb');
                            while (!gzeof(\$file)) {
                                fwrite(\$outFile, gzread(\$file, \$bufferSize));
                            }
                            fclose(\$outFile);
                            gzclose(\$file);
                            @unlink(\$tempTarget);
                            \$success = true;
                        }
                    }

                    break;

                case 'zip' == \$tempExt:
                    file_put_contents(\$tempTarget, \$data->getBody());

                    \$zipper = new \\ZipArchive();

                    \$zipper->open(\$tempTarget);
                    \$success = \$zipper->extractTo(\$localTarget);
                    \$zipper->close();
                    @unlink(\$tempTarget);
                    break;
            }
        } catch (\\Exception \$exception) {
            error_log(\$exception);

            \$success = false;
        }

        return \$success;
    }

    /**
     * Get the common directory for data.
     *
     * @return string|null
     */
    protected function getDataDir()
    {
        if (null !== \$this->cacheDir) {
            if (!file_exists(\$this->cacheDir)) {
                mkdir(\$this->cacheDir);
            }

            \$dataDir = \$this->cacheDir.'/../ip_data';

            if (!file_exists(\$dataDir)) {
                mkdir(\$dataDir);
            }

            return \$dataDir;
        }

        return null;
    }

    protected function sizeInByte(\$size)
    {
        \$data = (int) substr(\$size, 0, -1);
        switch (strtoupper(substr(\$size, -1))) {
            case 'K':
                return \$data * 1024;
            case 'M':
                return \$data * 1024 * 1024;
            case 'G':
                return \$data * 1024 * 1024 * 1024;
        }
    }

    /**
     * Get if the string ends with.
     *
     * @param string \$haystack
     * @param string \$needle
     */
    private function endsWith(\$haystack, \$needle): bool
    {
        return str_ends_with(\$haystack, \$needle);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/IpLookup/AbstractLocalDataLookup.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/IpLookup/AbstractLocalDataLookup.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\IpLookup\\AbstractLocalDataLookup.php");
    }
}
