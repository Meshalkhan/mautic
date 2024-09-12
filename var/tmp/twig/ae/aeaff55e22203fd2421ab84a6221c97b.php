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

/* @bundles/DashboardBundle/Entity/WidgetRepository.php */
class __TwigTemplate_01499ffc734fe995d9042cd2b7132f8b extends Template
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

namespace Mautic\\DashboardBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Widget>
 */
class WidgetRepository extends CommonRepository
{
    /**
     * Update widget ordering.
     *
     * @param array \$ordering
     * @param int   \$userId
     */
    public function updateOrdering(\$ordering, \$userId): void
    {
        \$widgets = \$this->getEntities(
            [
                'filter' => [
                    'createdBy' => \$userId,
                ],
            ]
        );

        foreach (\$widgets as &\$widget) {
            if (isset(\$ordering[\$widget->getId()])) {
                \$widget->setOrdering((int) \$ordering[\$widget->getId()]);
            }
        }

        \$this->saveEntities(\$widgets);
    }

    protected function getDefaultOrder(): array
    {
        return [
            ['w.ordering', 'ASC'],
        ];
    }

    public function getTableAlias(): string
    {
        return 'w';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Entity/WidgetRepository.php";
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
        return new Source("", "@bundles/DashboardBundle/Entity/WidgetRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DashboardBundle\\Entity\\WidgetRepository.php");
    }
}
