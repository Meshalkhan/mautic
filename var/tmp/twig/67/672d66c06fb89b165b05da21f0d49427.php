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

/* @bundles/PointBundle/Entity/GroupRepository.php */
class __TwigTemplate_8e7d9f7bd41a08006993f8783ae4d166 extends Template
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

namespace Mautic\\PointBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Group>
 */
class GroupRepository extends CommonRepository
{
    public function getTableAlias(): string
    {
        return 'pl';
    }

    public function getEntities(array \$args = [])
    {
        // Without qb it returns entities indexed by id instead of array indexes
        \$args['qb'] = \$this->createQueryBuilder(\$this->getTableAlias());

        return parent::getEntities(\$args);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Entity/GroupRepository.php";
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
        return new Source("", "@bundles/PointBundle/Entity/GroupRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Entity\\GroupRepository.php");
    }
}
