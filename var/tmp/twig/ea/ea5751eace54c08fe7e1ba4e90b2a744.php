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

/* @bundles/LeadBundle/Tests/DataFixtures/ORM/LoadDncData.php */
class __TwigTemplate_e7f0dfecf5e6bb8f43b0546b7e82ff24 extends Template
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

namespace Mautic\\LeadBundle\\Tests\\DataFixtures\\ORM;

use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\LeadBundle\\Entity\\DoNotContact;

class LoadDncData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager \$manager): void
    {
        \$dnc = new DoNotContact();
        \$dnc->setChannel('sms');
        \$dnc->setReason(DoNotContact::MANUAL);
        \$dnc->setDateAdded(new \\DateTime());
        \$dnc->setLead(\$this->getReference('lead-1'));

        \$manager->persist(\$dnc);
        \$manager->flush();
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 8;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Tests/DataFixtures/ORM/LoadDncData.php";
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
        return new Source("", "@bundles/LeadBundle/Tests/DataFixtures/ORM/LoadDncData.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Tests\\DataFixtures\\ORM\\LoadDncData.php");
    }
}
