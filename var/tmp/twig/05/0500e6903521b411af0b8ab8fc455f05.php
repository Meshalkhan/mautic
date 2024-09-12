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

/* @bundles/CoreBundle/Predis/Replication/StrategyConfig.php */
class __TwigTemplate_7bcdd682088491d885c08319761ca832 extends Template
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

namespace Mautic\\CoreBundle\\Predis\\Replication;

final class StrategyConfig
{
    public function __construct(
        private bool \$primaryOnly
    ) {
    }

    /**
     * @param mixed[] \$options
     */
    public static function fromArray(array \$options): self
    {
        return new StrategyConfig(\$options['primaryOnly'] ?? false);
    }

    /**
     * Use primary Redis server for reads and writes only.
     * The secondary Redis replicas will not be used at all when TRUE.
     */
    public function usePrimaryOnly(): bool
    {
        return \$this->primaryOnly;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Predis/Replication/StrategyConfig.php";
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
        return new Source("", "@bundles/CoreBundle/Predis/Replication/StrategyConfig.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Predis\\Replication\\StrategyConfig.php");
    }
}
