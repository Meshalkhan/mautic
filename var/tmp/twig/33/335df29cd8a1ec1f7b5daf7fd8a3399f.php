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

/* @bundles/CoreBundle/Helper/CacheHelper.php */
class __TwigTemplate_53bbf7f4a0b91bc730845466e51db004 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Bundle\\FrameworkBundle\\Console\\Application;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\BufferedOutput;
use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\HttpFoundation\\Session\\Session;
use Symfony\\Component\\HttpKernel\\KernelInterface;

class CacheHelper
{
    public function __construct(
        private string \$cacheDir,
        private ?Session \$session,
        private PathsHelper \$pathsHelper,
        private KernelInterface \$kernel
    ) {
    }

    /**
     * Deletes the cache folder.
     */
    public function nukeCache(): void
    {
        \$this->clearSessionItems();

        \$fs = new Filesystem();
        \$fs->remove(\$this->cacheDir);

        \$this->clearOpcache();
        \$this->clearApcuCache();
    }

    public function refreshConfig(): void
    {
        \$this->clearSessionItems();
        \$this->clearConfigOpcache();
        \$this->clearApcuCache();
    }

    /**
     * Run the bin/console cache:clear command.
     */
    public function clearSymfonyCache(): int
    {
        \$env = \$this->kernel->getEnvironment();

        \$application = new Application(\$this->kernel);
        \$application->setAutoExit(false);

        \$input = new ArrayInput([
            'command' => 'cache:clear',
            '--env'   => \$env,
        ]);

        \$output = new BufferedOutput();

        return \$application->run(\$input, \$output);
    }

    /**
     * Clear cache related session items.
     */
    protected function clearSessionItems(): void
    {
        if (!\$this->session) {
            return;
        }

        // Clear the menu items and icons so they can be rebuilt
        \$this->session->remove('mautic.menu.items');
        \$this->session->remove('mautic.menu.icons');
    }

    private function clearConfigOpcache(): void
    {
        if (!function_exists('opcache_reset') || !function_exists('opcache_invalidate')) {
            return;
        }

        opcache_invalidate(\$this->pathsHelper->getLocalConfigurationFile(), true);
    }

    private function clearOpcache(): void
    {
        if (!function_exists('opcache_reset')) {
            return;
        }

        opcache_reset();
    }

    private function clearApcuCache(): void
    {
        if (!function_exists('apcu_clear_cache')) {
            return;
        }

        apcu_clear_cache();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/CacheHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/CacheHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\CacheHelper.php");
    }
}
