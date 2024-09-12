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

/* @bundles/CoreBundle/Doctrine/Common/DataFixtures/Event/PreExecuteEvent.php */
class __TwigTemplate_45a57232cbb442da4339ea36a5ea1ea0 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Common\\DataFixtures\\Event;

use Doctrine\\Common\\DataFixtures\\Purger\\ORMPurger;
use Doctrine\\ORM\\EntityManagerInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

class PreExecuteEvent extends Event
{
    public function __construct(
        private EntityManagerInterface \$entityManager,
        private int \$purgeMode
    ) {
    }

    public function getEntityManager(): EntityManagerInterface
    {
        return \$this->entityManager;
    }

    public function isDelete(): bool
    {
        return ORMPurger::PURGE_MODE_DELETE === \$this->purgeMode;
    }

    public function isTruncate(): bool
    {
        return ORMPurger::PURGE_MODE_TRUNCATE === \$this->purgeMode;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Common/DataFixtures/Event/PreExecuteEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Common/DataFixtures/Event/PreExecuteEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\Common\\DataFixtures\\Event\\PreExecuteEvent.php");
    }
}
