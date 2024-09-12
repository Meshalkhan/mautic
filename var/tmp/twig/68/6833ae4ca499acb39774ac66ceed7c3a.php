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

/* @bundles/LeadBundle/DataFixtures/ORM/LoadCategoryData.php */
class __TwigTemplate_4e33eaf1f7505eda9c75838c6905042a extends Template
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

namespace Mautic\\LeadBundle\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CategoryBundle\\Entity\\CategoryRepository;
use Mautic\\CoreBundle\\Helper\\CsvHelper;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager): void
    {
        /** @var CategoryRepository \$categoryRepo */
        \$categoryRepo = \$manager->getRepository(Category::class);
        \$categories   = CsvHelper::csv_to_array(__DIR__.'/fakecategorydata.csv');
        foreach (\$categories as \$category) {
            \$categoryEntity = new Category();
            \$categoryEntity->setTitle(\$category['categoryname']);
            \$categoryEntity->setBundle(\$category['categorybundle']);
            \$categoryEntity->setAlias(\$category['categoryalias']);
            \$categoryEntity->setIsPublished(\$category['published']);
            \$categoryRepo->saveEntity(\$categoryEntity);
        }
    }

    public function getOrder(): int
    {
        return 1;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/DataFixtures/ORM/LoadCategoryData.php";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/LoadCategoryData.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\DataFixtures\\ORM\\LoadCategoryData.php");
    }
}
