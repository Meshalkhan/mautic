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

/* @bundles/CoreBundle/Helper/Update/Github/Release.php */
class __TwigTemplate_48701b4aa70786d34440220caef40374 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Update\\Github;

use Mautic\\CoreBundle\\Helper\\Update\\Exception\\UpdatePackageNotFoundException;
use Mautic\\CoreBundle\\Release\\Metadata;

class Release
{
    /**
     * @var string
     */
    private \$version;

    private string \$downloadUrl;

    /**
     * @var string
     */
    private \$announcementUrl;

    private string \$stability;

    private Metadata \$metadata;

    /**
     * @throws UpdatePackageNotFoundException
     */
    public function __construct(array \$release, Metadata \$metadata)
    {
        \$this->version         = \$release['tag_name'];
        \$this->downloadUrl     = \$this->parseUpdatePackage(\$release['assets']);
        \$this->announcementUrl = \$metadata->getAnnouncementUrl() ?: \$release['html_url'];
        \$this->stability       = \$metadata->getStability();
        \$this->metadata        = \$metadata;
    }

    public function getVersion(): string
    {
        return \$this->version;
    }

    public function getDownloadUrl(): string
    {
        return \$this->downloadUrl;
    }

    public function getAnnouncementUrl(): string
    {
        return \$this->announcementUrl;
    }

    public function getStability(): string
    {
        return \$this->stability;
    }

    public function getMetadata(): Metadata
    {
        return \$this->metadata;
    }

    /**
     * @throws UpdatePackageNotFoundException
     */
    private function parseUpdatePackage(array \$assets): string
    {
        foreach (\$assets as \$asset) {
            if (str_contains(\$asset['name'], 'update.zip')) {
                return \$asset['browser_download_url'];
            }
        }

        throw new UpdatePackageNotFoundException();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Update/Github/Release.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Update/Github/Release.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\Update\\Github\\Release.php");
    }
}
