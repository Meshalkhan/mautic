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

/* @bundles/InstallBundle/InstallFixtures/ORM/RoleData.php */
class __TwigTemplate_f0169256e4cd9a57063459d7e09f657b extends Template
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

namespace Mautic\\InstallBundle\\InstallFixtures\\ORM;

use Doctrine\\Bundle\\FixturesBundle\\FixtureGroupInterface;
use Doctrine\\Common\\DataFixtures\\AbstractFixture;
use Doctrine\\Common\\DataFixtures\\OrderedFixtureInterface;
use Doctrine\\Persistence\\ObjectManager;
use Mautic\\UserBundle\\Entity\\Role;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class RoleData extends AbstractFixture implements OrderedFixtureInterface, FixtureGroupInterface
{
    public function __construct(
        private TranslatorInterface \$translator
    ) {
    }

    public static function getGroups(): array
    {
        return ['group_install', 'group_mautic_install_data'];
    }

    public function load(ObjectManager \$manager): void
    {
        if (\$this->hasReference('admin-role')) {
            return;
        }

        \$role = new Role();
        \$role->setName(\$this->translator->trans('mautic.user.role.admin.name', [], 'fixtures'));
        \$role->setDescription(\$this->translator->trans('mautic.user.role.admin.description', [], 'fixtures'));
        \$role->setIsAdmin(1);
        \$manager->persist(\$role);
        \$manager->flush();

        \$this->addReference('admin-role', \$role);
    }

    public function getOrder()
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
        return "@bundles/InstallBundle/InstallFixtures/ORM/RoleData.php";
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
        return new Source("", "@bundles/InstallBundle/InstallFixtures/ORM/RoleData.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\InstallFixtures\\ORM\\RoleData.php");
    }
}
