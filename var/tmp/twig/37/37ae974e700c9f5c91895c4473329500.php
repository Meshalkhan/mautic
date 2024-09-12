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

/* @bundles/MarketplaceBundle/DTO/AllowlistEntry.php */
class __TwigTemplate_733025c78833c81fd5ace82e9147eae9 extends Template
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

final class AllowlistEntry
{
    public function __construct(
        /**
         * Packagist package in the format vendor/package.
         */
        public string \$package,
        /**
         * Human readable name.
         */
        public string \$displayName,
        /**
         * Minimum Mautic version in semver format (e.g. 4.1.2).
         */
        public ?string \$minimumMauticVersion,
        /**
         * Maximum Mautic version in semver format (e.g. 4.1.2).
         */
        public ?string \$maximumMauticVersion
    ) {
    }

    /**
     * @param array<string,mixed> \$array
     */
    public static function fromArray(array \$array): AllowlistEntry
    {
        return new self(
            \$array['package'],
            \$array['display_name'] ?? '',
            \$array['minimum_mautic_version'],
            \$array['maximum_mautic_version']
        );
    }

    /**
     * @return array<string,string>
     */
    public function toArray(): array
    {
        return [
            'package'                => \$this->package,
            'display_name'           => \$this->displayName,
            'minimum_mautic_version' => \$this->minimumMauticVersion,
            'maximum_mautic_version' => \$this->maximumMauticVersion,
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/DTO/AllowlistEntry.php";
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
        return new Source("", "@bundles/MarketplaceBundle/DTO/AllowlistEntry.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\DTO\\AllowlistEntry.php");
    }
}
