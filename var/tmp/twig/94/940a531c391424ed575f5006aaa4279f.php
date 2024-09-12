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

/* @bundles/CoreBundle/Helper/Language/Installer.php */
class __TwigTemplate_a15bc967dbc4bb0f97c88e21720983b9 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Language;

use Symfony\\Component\\Filesystem\\Filesystem;
use Symfony\\Component\\Finder\\Finder;

class Installer
{
    private ?string \$sourceDirectory = null;

    private ?string \$installDirectory = null;

    private Filesystem \$filesystem;

    /**
     * @param string \$translationsDirectory
     */
    public function __construct(
        private \$translationsDirectory
    ) {
        \$this->filesystem            = new Filesystem();
    }

    /**
     * @param string \$sourceDirectory
     * @param string \$languageCode
     *
     * @return \$this
     */
    public function install(\$sourceDirectory, \$languageCode)
    {
        \$this->sourceDirectory  = \$sourceDirectory.'/'.\$languageCode;
        \$this->installDirectory = \$this->translationsDirectory.'/'.\$languageCode;

        \$this->createLanguageDirectory();
        \$this->copyConfig();
        \$this->copyBundles();

        return \$this;
    }

    public function cleanup(): void
    {
        if (!\$this->sourceDirectory) {
            return;
        }

        // Delete the temp directory
        \$this->filesystem->remove(\$this->sourceDirectory);

        \$this->sourceDirectory  = null;
        \$this->installDirectory = null;
    }

    private function createLanguageDirectory(): void
    {
        if (is_dir(\$this->installDirectory)) {
            return;
        }

        \$this->filesystem->mkdir(\$this->installDirectory, 0755);
    }

    private function copyConfig(): void
    {
        \$this->filesystem->copy(\$this->sourceDirectory.'/config.json', \$this->installDirectory.'/config.json', true);
    }

    private function copyBundles(): void
    {
        \$bundles = new Finder();
        \$bundles->directories()->name('*Bundle')->in(\$this->sourceDirectory);

        /** @var \\SplFileInfo \$bundle */
        foreach (\$bundles as \$bundle) {
            \$this->copyBundle(\$bundle);
        }
    }

    private function copyBundle(\\SplFileInfo \$bundle): void
    {
        \$name            = \$bundle->getFilename();
        \$targetDirectory = \$this->installDirectory.'/'.\$name;
        \$sourceDirectory = \$this->sourceDirectory.'/'.\$name;

        // Create bundle directory
        if (!is_dir(\$targetDirectory)) {
            \$this->filesystem->mkdir(\$targetDirectory, 0755);
        }

        // Copy INI files
        \$iniFinder = new Finder();
        \$iniFinder->files()->name('*.ini')->in(\$sourceDirectory);
        foreach (\$iniFinder as \$iniFile) {
            \$this->filesystem->copy(\$iniFile->getPathname(), \$targetDirectory.'/'.\$iniFile->getFilename());
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
        return "@bundles/CoreBundle/Helper/Language/Installer.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Language/Installer.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\Language\\Installer.php");
    }
}
