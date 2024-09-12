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

/* @bundles/LeadBundle/DataFixtures/ORM/LoadLeadListData.php */
class __TwigTemplate_5854ecf812588302b6703ca4887a8f69 extends Template
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
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Model\\ListModel;

class LoadLeadListData extends AbstractFixture implements OrderedFixtureInterface
{
    public function __construct(
        private ListModel \$segmentModel
    ) {
    }

    public function load(ObjectManager \$manager): void
    {
        \$adminUser = \$this->getReference('admin-user');

        \$list = new LeadList();
        \$list->setName('United States');
        \$list->setPublicName('United States');
        \$list->setAlias('us');
        \$list->setCreatedBy(\$adminUser);
        \$list->setIsGlobal(true);
        \$list->setFilters([
            [
                'glue'     => 'and',
                'type'     => 'lookup',
                'field'    => 'country',
                'operator' => '=',
                'filter'   => 'United States',
                'display'  => '',
            ],
        ]);

        \$this->setReference('lead-list', \$list);
        \$manager->persist(\$list);
        \$manager->flush();

        \$this->segmentModel->rebuildListLeads(\$list);
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 5;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/DataFixtures/ORM/LoadLeadListData.php";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/LoadLeadListData.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\DataFixtures\\ORM\\LoadLeadListData.php");
    }
}
