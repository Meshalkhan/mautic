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

/* @bundles/CoreBundle/Doctrine/Common/DataFixtures/Purger/ORMPurgerFactory.php */
class __TwigTemplate_c1fbeaf6d4dbbc698f1dd35fa012dae1 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Common\\DataFixtures\\Purger;

use Doctrine\\Bundle\\FixturesBundle\\Purger\\PurgerFactory;
use Doctrine\\Common\\DataFixtures\\Purger\\ORMPurger;
use Doctrine\\Common\\DataFixtures\\Purger\\PurgerInterface;
use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Doctrine\\Common\\DataFixtures\\Event\\PreExecuteEvent;
use Symfony\\Contracts\\EventDispatcher\\EventDispatcherInterface;

class ORMPurgerFactory implements PurgerFactory
{
    public function __construct(
        private EventDispatcherInterface \$eventDispatcher
    ) {
    }

    public function createForEntityManager(
        ?string \$emName,
        EntityManagerInterface \$em,
        array \$excluded = [],
        bool \$purgeWithTruncate = false
    ): PurgerInterface {
        \$this->eventDispatcher->dispatch(
            new PreExecuteEvent(
                \$em,
                \$purgeWithTruncate ? ORMPurger::PURGE_MODE_TRUNCATE : ORMPurger::PURGE_MODE_DELETE
            )
        );

        \$purger = new ORMPurger(\$em, \$excluded);
        \$purger->setPurgeMode(\$purgeWithTruncate ? ORMPurger::PURGE_MODE_TRUNCATE : ORMPurger::PURGE_MODE_DELETE);

        return \$purger;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Common/DataFixtures/Purger/ORMPurgerFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Common/DataFixtures/Purger/ORMPurgerFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\Common\\DataFixtures\\Purger\\ORMPurgerFactory.php");
    }
}
