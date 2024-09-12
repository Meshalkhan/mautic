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

/* @bundles/CategoryBundle/Event/CategoryEvent.php */
class __TwigTemplate_c2a998d6545f6e773481a761bd269429 extends Template
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

namespace Mautic\\CategoryBundle\\Event;

use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Event\\CommonEvent;

class CategoryEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(Category &\$category, \$isNew = false)
    {
        \$this->entity = &\$category;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the Category entity.
     *
     * @return Category
     */
    public function getCategory()
    {
        return \$this->entity;
    }

    /**
     * Sets the Category entity.
     */
    public function setCategory(Category \$category): void
    {
        \$this->entity = \$category;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Event/CategoryEvent.php";
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
        return new Source("", "@bundles/CategoryBundle/Event/CategoryEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CategoryBundle\\Event\\CategoryEvent.php");
    }
}
