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

/* @bundles/WebhookBundle/Entity/EventRepository.php */
class __TwigTemplate_b919df7f4ff622bfc3d5e48c030d198a extends Template
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
 * @extends CommonRepository<Event>
 */
class EventRepository extends CommonRepository
{
    /**
     * @return array
     */
    public function getEntitiesByEventType(\$type)
    {
        \$alias = \$this->getTableAlias();
        \$q     = \$this->createQueryBuilder(\$alias)
            ->leftJoin(\$alias.'.webhook', 'u');

        \$q->where(
            \$q->expr()->eq(\$alias.'.eventType', ':type')
        )->setParameter('type', \$type);

        // only find published webhooks
        \$q->andWhere(\$q->expr()->eq('u.isPublished', ':published'))
            ->setParameter('published', 1);

        return \$q->getQuery()->getResult();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/WebhookBundle/Entity/EventRepository.php";
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
        return new Source("", "@bundles/WebhookBundle/Entity/EventRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Entity\\EventRepository.php");
    }
}
