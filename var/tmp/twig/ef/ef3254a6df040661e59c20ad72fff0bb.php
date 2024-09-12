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

/* @bundles/PluginBundle/Entity/PluginRepository.php */
class __TwigTemplate_3d4afb13823a3eb66c40e85589c352d1 extends Template
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

namespace Mautic\\PluginBundle\\Entity;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Plugin>
 */
class PluginRepository extends CommonRepository
{
    /**
     * Find an addon record by bundle name.
     *
     * @param string \$bundle
     *
     * @return mixed
     *
     * @throws \\Doctrine\\ORM\\NonUniqueResultException
     */
    public function findByBundle(\$bundle)
    {
        \$q = \$this->createQueryBuilder(\$this->getTableAlias());
        \$q->where(\$q->expr()->eq('p.bundle', ':bundle'))
            ->setParameter('bundle', \$bundle);

        return \$q->getQuery()->getOneOrNullResult();
    }

    public function getEntities(array \$args = [])
    {
        \$q = \$this->_em->createQueryBuilder();
        \$q->select(\$this->getTableAlias())
            ->from(Plugin::class, \$this->getTableAlias(), (!empty(\$args['index'])) ? \$this->getTableAlias().'.'.\$args['index'] : \$this->getTableAlias().'.id');

        \$args['qb']               = \$q;
        \$args['ignore_paginator'] = true;

        return parent::getEntities(\$args);
    }

    protected function getDefaultOrder(): array
    {
        return [
            ['p.name', 'ASC'],
        ];
    }

    public function getTableAlias(): string
    {
        return 'p';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Entity/PluginRepository.php";
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
        return new Source("", "@bundles/PluginBundle/Entity/PluginRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Entity\\PluginRepository.php");
    }
}
