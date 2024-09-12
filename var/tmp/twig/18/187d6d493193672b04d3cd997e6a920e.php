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

/* @bundles/CoreBundle/Helper/PathsHelper.php */
class __TwigTemplate_050e9a99ba91f4bae40116c9be620026 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Mautic\\CoreBundle\\Loader\\ParameterLoader;

class PathsHelper
{
    /**
     * @var array<string, string>
     */
    private array \$paths;

    /**
     * @var string
     */
    private \$theme;

    private string \$imagePath;

    private string \$dashboardImportDir;

    private string \$dashboardUserImportDir;

    private string \$kernelCacheDir;

    private string \$kernelLogsDir;

    private string \$kernelRootDir;

    private string \$temporaryDir;

    private ?\\Mautic\\UserBundle\\Entity\\User \$user;

    private string \$importLeadsDir;

    public function __construct(UserHelper \$userHelper, CoreParametersHelper \$coreParametersHelper, string \$cacheDir, string \$logsDir, string \$rootDir)
    {
        \$root                         = \$rootDir.'/app'; // Do not rename the variable, used in paths_helper.php
        \$projectRoot                  = \$this->getVendorRootPath();
        \$this->user                   = \$userHelper->getUser();
        \$this->theme                  = \$coreParametersHelper->get('theme');
        \$this->imagePath              = \$this->removeTrailingSlash((string) \$coreParametersHelper->get('image_path'));
        \$this->dashboardImportDir     = \$this->removeTrailingSlash((string) \$coreParametersHelper->get('dashboard_import_dir'));
        \$this->importLeadsDir         = \$this->removeTrailingSlash((string) \$coreParametersHelper->get('import_leads_dir'));
        \$this->temporaryDir           = \$this->removeTrailingSlash((string) \$coreParametersHelper->get('tmp_path'));
        \$this->dashboardUserImportDir = \$this->removeTrailingSlash((string) \$coreParametersHelper->get('dashboard_import_user_dir'));
        \$this->kernelCacheDir         = \$this->removeTrailingSlash(\$cacheDir);
        \$this->kernelLogsDir          = \$this->removeTrailingSlash(\$logsDir);
        \$this->kernelRootDir          = \$this->removeTrailingSlash(\$root);

        \$paths = [];
        include \$root.'/config/paths_helper.php';

        \$this->paths = \$paths;
    }

    public function getLocalConfigurationFile(): string
    {
        return ParameterLoader::getLocalConfigFile(\$this->kernelRootDir);
    }

    public function getCachePath(): string
    {
        return \$this->getSystemPath('cache', true);
    }

    public function getRootPath(): string
    {
        return \$this->getSystemPath('root', true);
    }

    public function getTemporaryPath(): string
    {
        return \$this->getSystemPath('tmp', true);
    }

    public function getLogsPath(): string
    {
        return \$this->getSystemPath('logs', true);
    }

    public function getImagePath(): string
    {
        return \$this->getSystemPath('images', true);
    }

    public function getTranslationsPath(): string
    {
        return \$this->getSystemPath('translations', true);
    }

    public function getThemesPath(): string
    {
        return \$this->getSystemPath('themes', true);
    }

    public function getAssetsPath(): string
    {
        return \$this->getSystemPath('assets', true);
    }

    public function getMediaPath(): string
    {
        return \$this->getSystemPath('media', true);
    }

    public function getCoreBundlesPath(): string
    {
        return \$this->getSystemPath('bundles', true);
    }

    public function getPluginsPath(): string
    {
        return \$this->getSystemPath('plugins', true);
    }

    public function getImportLeadsPath(): string
    {
        return \$this->getSystemPath('import.leads.dir', true);
    }

    /**
     * Returns absolute path to the root directory where the \"vendor\" directory is located.
     */
    public function getVendorRootPath(): string
    {
        \$reflection = new \\ReflectionClass(\\Composer\\Autoload\\ClassLoader::class);

        return dirname(\$reflection->getFileName(), 3);
    }

    /**
     * Get the path to specified area.  Returns relative by default with the exception of cache and log
     * which will be absolute regardless of \$fullPath setting.
     *
     * @param string \$name
     * @param bool   \$fullPath
     *
     * @return string
     *
     * @throws \\InvalidArgumentException
     */
    public function getSystemPath(\$name, \$fullPath = false)
    {
        switch (\$name) {
            case 'currentTheme':
            case 'current_theme':
                \$path = \$this->paths['themes'].'/'.\$this->theme;
                break;

            case 'cache':
                return \$this->kernelCacheDir;
            case 'logs':
                return \$this->kernelLogsDir;
            case 'temporary':
            case 'tmp':
                if (!file_exists(\$this->temporaryDir)) {
                    mkdir(\$this->temporaryDir, 0777, true);
                }

                return \$this->temporaryDir;
            case 'images':
                \$path = \$this->imagePath;
                break;

            case 'dashboard.user':
            case 'dashboard.global':
                // these are absolute regardless as they are configurable
                \$globalPath = \$this->dashboardImportDir;

                if ('dashboard.global' == \$name) {
                    return \$globalPath;
                }

                if (!\$userPath = \$this->dashboardUserImportDir) {
                    \$userPath = \$globalPath;
                }

                \$userPath .= '/'.\$this->user->getId();

                if (!file_exists(\$userPath)) {
                    mkdir(\$userPath, 0777, true);
                }

                return \$userPath;

            case 'import.leads.dir':
                return \$this->importLeadsDir;

            default:
                if (isset(\$this->paths[\$name])) {
                    \$path = \$this->paths[\$name];
                } elseif (str_contains(\$name, '_root')) {
                    // Assume system root if one is not set specifically
                    \$path = \$this->paths['root'];
                } else {
                    throw new \\InvalidArgumentException(\"\$name does not exist.\");
                }
        }

        if (!\$fullPath) {
            return \$path;
        }

        \$rootPath = (!empty(\$this->paths[\$name.'_root'])) ? \$this->paths[\$name.'_root'] : \$this->paths['root'];
        if (!str_contains(\$path, \$rootPath)) {
            return \$rootPath.'/'.\$path;
        }

        return \$path;
    }

    private function removeTrailingSlash(string \$dir): string
    {
        if (str_ends_with(\$dir, '/')) {
            \$dir = substr(\$dir, 0, -1);
        }

        return \$dir;
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
        return "@bundles/CoreBundle/Helper/PathsHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/PathsHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\PathsHelper.php");
    }
}
