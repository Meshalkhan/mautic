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

/* @bundles/LeadBundle/DataFixtures/ORM/LoadCategorizedLeadListData.php */
class __TwigTemplate_877320f45c791b48d21eda9869ee37d3 extends Template
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
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Entity\\LeadListRepository;

class LoadCategorizedLeadListData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager): void
    {
        /** @var LeadListRepository \$leadListRepo */
        \$leadListRepo = \$manager->getRepository(LeadList::class);
        /** @var CategoryRepository \$categoryRepo */
        \$categoryRepo = \$manager->getRepository(Category::class);

        \$leadLists = CsvHelper::csv_to_array(__DIR__.'/fakecategorizedleadlistdata.csv');
        foreach (\$leadLists as \$leadList) {
            \$category       = \$categoryRepo->find(\$leadList['category']);
            \$leadListEntity = new LeadList();
            \$leadListEntity->setName(\$leadList['name']);
            \$leadListEntity->setPublicName(\$leadList['publicname']);
            \$leadListEntity->setAlias(\$leadList['alias']);
            \$leadListEntity->setCategory(\$category);
            \$leadListRepo->saveEntity(\$leadListEntity);
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
        return "@bundles/LeadBundle/DataFixtures/ORM/LoadCategorizedLeadListData.php";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/LoadCategorizedLeadListData.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\DataFixtures\\ORM\\LoadCategorizedLeadListData.php");
    }
}
