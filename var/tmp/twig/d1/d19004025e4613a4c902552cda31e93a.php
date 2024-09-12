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

/* @bundles/LeadBundle/DataFixtures/ORM/LoadLeadData.php */
class __TwigTemplate_23f6f3beb3014fd23cb2a4a60699f13a extends Template
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
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Helper\\CsvHelper;
use Mautic\\LeadBundle\\Entity\\CompanyLead;
use Mautic\\LeadBundle\\Entity\\CompanyLeadRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;

class LoadLeadData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager): void
    {
        /** @var LeadRepository \$leadRepo */
        \$leadRepo        = \$manager->getRepository(Lead::class);

        /** @var CompanyLeadRepository \$companyLeadRepo */
        \$companyLeadRepo = \$manager->getRepository(CompanyLead::class);

        \$today = new \\DateTime();
        \$leads = CsvHelper::csv_to_array(__DIR__.'/fakeleaddata.csv');

        foreach (\$leads as \$count => \$l) {
            \$key  = \$count + 1;
            \$lead = new Lead();
            \$lead->setDateAdded(\$today);
            \$ipAddress = new IpAddress();
            \$ipAddress->setIpAddress(\$l['ip']);
            \$this->setReference('ipAddress-'.\$key, \$ipAddress);
            unset(\$l['ip']);
            \$lead->addIpAddress(\$ipAddress);

            if (\$this->hasReference('sales-user')) {
                \$lead->setOwner(\$this->getReference('sales-user'));
            }

            foreach (\$l as \$col => \$val) {
                \$lead->addUpdatedField(\$col, \$val);
            }

            \$leadRepo->saveEntity(\$lead);

            \$this->setReference('lead-'.\$count, \$lead);

            // Assign to companies in a predictable way
            \$lastCharacter = (int) substr(\$count, -1, 1);
            if (\$lastCharacter <= 3) {
                if (\$this->hasReference('company-'.\$lastCharacter)) {
                    \$companyLead = new CompanyLead();
                    \$companyLead->setLead(\$lead);
                    \$companyLead->setCompany(\$this->getReference('company-'.\$lastCharacter));
                    \$companyLead->setDateAdded(\$today);
                    \$companyLead->setPrimary(true);
                    \$companyLeadRepo->saveEntity(\$companyLead);
                }
            }
        }
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
        return "@bundles/LeadBundle/DataFixtures/ORM/LoadLeadData.php";
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
        return new Source("", "@bundles/LeadBundle/DataFixtures/ORM/LoadLeadData.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\DataFixtures\\ORM\\LoadLeadData.php");
    }
}
