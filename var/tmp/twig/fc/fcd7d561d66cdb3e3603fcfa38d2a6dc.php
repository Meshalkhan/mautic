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

/* @bundles/MarketplaceBundle/DTO/PackageDetail.php */
class __TwigTemplate_d97883fe97e8838d4ad213f44ae0313e extends Template
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

namespace Mautic\\MarketplaceBundle\\DTO;

use Mautic\\MarketplaceBundle\\Collection\\MaintainerCollection;
use Mautic\\MarketplaceBundle\\Collection\\VersionCollection;

final class PackageDetail
{
    public function __construct(
        public PackageBase \$packageBase,
        public VersionCollection \$versions,
        public MaintainerCollection \$maintainers,
        public GitHubInfo \$githubInfo,
        public int \$monthlyDownloads,
        public int \$dailyDownloads,
        public \\DateTimeInterface \$time
    ) {
    }

    public static function fromArray(array \$array): self
    {
        return new self(
            new PackageBase(
                \$array['name'],
                \"https://packagist.org/packages/{\$array['name']}\",
                \$array['repository'],
                \$array['description'],
                (int) \$array['downloads']['total'],
                (int) \$array['favers'],
                \$array['type'] ?? null,
                \$array['display_name'] ?? null
            ),
            VersionCollection::fromArray(\$array['versions']),
            MaintainerCollection::fromArray(\$array['maintainers']),
            new GitHubInfo(
                \$array['github_stars'],
                \$array['github_watchers'],
                \$array['github_forks'],
                \$array['github_open_issues']
            ),
            \$array['downloads']['monthly'],
            \$array['downloads']['daily'],
            new \\DateTimeImmutable(\$array['time'])
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/DTO/PackageDetail.php";
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
        return new Source("", "@bundles/MarketplaceBundle/DTO/PackageDetail.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\DTO\\PackageDetail.php");
    }
}
