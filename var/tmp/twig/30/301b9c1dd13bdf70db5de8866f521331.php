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

/* @bundles/PageBundle/DataFixtures/ORM/LoadPageCategoryData.php */
class __TwigTemplate_ec9e5eee13db1cbd20d66e68b56d3cf7 extends Template
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

namespace Mautic\\PageBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CategoryBundle\\Model\\CategoryModel;

class LoadPageCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function __construct(
        private CategoryModel \$categoryModel
    ) {
    }

    public function load(ObjectManager \$manager): void
    {
        \$today  = new \\DateTime();
        \$cat    = new Category();
        \$events = 'Events';

        \$cat->setBundle('page');
        \$cat->setDateAdded(\$today);
        \$cat->setTitle(\$events);
        \$cat->setAlias(strtolower(\$events));

        \$this->categoryModel->getRepository()->saveEntity(\$cat);
        \$this->setReference('page-cat-1', \$cat);
    }

    public function getOrder()
    {
        return 6;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/DataFixtures/ORM/LoadPageCategoryData.php";
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
        return new Source("", "@bundles/PageBundle/DataFixtures/ORM/LoadPageCategoryData.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\DataFixtures\\ORM\\LoadPageCategoryData.php");
    }
}
