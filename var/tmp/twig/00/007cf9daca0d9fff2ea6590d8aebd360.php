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

/* @bundles/MarketplaceBundle/DTO/Allowlist.php */
class __TwigTemplate_4b42001f7a676007caf16593dbe5e5c9 extends Template
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

use Mautic\\MarketplaceBundle\\Exception\\RecordNotFoundException;

final class Allowlist
{
    /**
     * @param AllowlistEntry[] \$entries
     */
    public function __construct(
        public array \$entries
    ) {
    }

    /**
     * @param array<string,mixed> \$array
     */
    public static function fromArray(array \$array): Allowlist
    {
        return new self(
            array_map(fn (array \$item) => AllowlistEntry::fromArray(\$item), \$array['allowlist'] ?? []),
        );
    }

    public function findPackageByName(string \$packageName): AllowlistEntry
    {
        foreach (\$this->entries as \$entry) {
            if (\$entry->package === \$packageName) {
                return \$entry;
            }
        }

        throw new RecordNotFoundException(\"Package '\$packageName' not found in allowlist.\");
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MarketplaceBundle/DTO/Allowlist.php";
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
        return new Source("", "@bundles/MarketplaceBundle/DTO/Allowlist.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\DTO\\Allowlist.php");
    }
}
