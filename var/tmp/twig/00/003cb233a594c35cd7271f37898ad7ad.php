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

/* @bundles/CoreBundle/Predis/Replication/MasterOnlyStrategy.php */
class __TwigTemplate_73b6d29497c1fd9df46227935a39ef43 extends Template
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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Predis/Replication/MasterOnlyStrategy.php";
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
        return new Source("", "@bundles/CoreBundle/Predis/Replication/MasterOnlyStrategy.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Predis\\Replication\\MasterOnlyStrategy.php");
    }
}
