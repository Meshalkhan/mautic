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

/* @bundles/CoreBundle/Predis/Replication/MasterOnlyStrategy.php */
class __TwigTemplate_78ff55f6aa5635c2a51c07d05b69c892 extends Template
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

use Predis\\Replication\\ReplicationStrategy;

class MasterOnlyStrategy extends ReplicationStrategy
{
    public function __construct(
        private StrategyConfig \$config
    ) {
        parent::__construct();
    }

    /**
     * @return mixed[]
     */
    protected function getReadOnlyOperations(): array
    {
        if (\$this->config->usePrimaryOnly()) {
            return [];
        }

        return parent::getReadOnlyOperations();
    }

    /**
     * @return mixed[]
     */
    protected function getDisallowedOperations(): array
    {
        \$operations = parent::getDisallowedOperations();
        unset(\$operations['INFO']); // removed to avoid \"The command 'INFO' is not allowed in replication mode.\" error when executing bin/console cache:clear. INFO is safe if you only have one master that handles all operations.

        return \$operations;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Predis/Replication/MasterOnlyStrategy.php";
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
        return new Source("", "@bundles/CoreBundle/Predis/Replication/MasterOnlyStrategy.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Predis\\Replication\\MasterOnlyStrategy.php");
    }
}
