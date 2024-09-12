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

/* @bundles/WebhookBundle/Entity/WebhookRepository.php */
class __TwigTemplate_3eea298ab1f0c823af9fd20e5a3d8566 extends Template
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

namespace Mautic\\WebhookBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Webhook>
 */
class WebhookRepository extends CommonRepository
{
    /**
     * @param \\Doctrine\\ORM\\QueryBuilder|\\Doctrine\\DBAL\\Query\\QueryBuilder \$q
     */
    protected function addCatchAllWhereClause(\$q, \$filter): array
    {
        return \$this->addStandardCatchAllWhereClause(\$q, \$filter, ['e.name']);
    }

    /**
     * @param \\Doctrine\\ORM\\QueryBuilder|\\Doctrine\\DBAL\\Query\\QueryBuilder \$q
     */
    protected function addSearchCommandWhereClause(\$q, \$filter): array
    {
        return \$this->addStandardSearchCommandWhereClause(\$q, \$filter);
    }

    /**
     * @return string[]
     */
    public function getSearchCommands(): array
    {
        return \$this->getStandardSearchCommands();
    }

    /**
     * @return array<array<string>>
     */
    protected function getDefaultOrder(): array
    {
        return [
            [\$this->getTableAlias().'.name', 'ASC'],
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
        return "@bundles/WebhookBundle/Entity/WebhookRepository.php";
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
        return new Source("", "@bundles/WebhookBundle/Entity/WebhookRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Entity\\WebhookRepository.php");
    }
}
