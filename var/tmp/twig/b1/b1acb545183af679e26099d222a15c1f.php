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

/* @bundles/CoreBundle/Doctrine/Mapping/ManyToManyAssociationBuilder.php */
class __TwigTemplate_5523296bf78db4ec6b7da96b3df88715 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Mapping;

/**
 * ManyToMany Association Builder.
 *
 * Override Doctrine's builder classes to add support to orphanRemoval until the fix is incorporated into Doctrine release
 * See @see https://github.com/doctrine/doctrine2/pull/1326/
 */
class ManyToManyAssociationBuilder extends \\Doctrine\\ORM\\Mapping\\Builder\\ManyToManyAssociationBuilder
{
    /**
     * Set orphanRemoval.
     *
     * @param bool \$orphanRemoval
     *
     * @return ManyToManyAssociationBuilder
     */
    public function orphanRemoval(\$orphanRemoval = true)
    {
        \$this->mapping['orphanRemoval'] = \$orphanRemoval;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Mapping/ManyToManyAssociationBuilder.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Mapping/ManyToManyAssociationBuilder.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\Mapping\\ManyToManyAssociationBuilder.php");
    }
}
