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

/* @bundles/EmailBundle/Model/EmailStatModel.php */
class __TwigTemplate_a7fa03eb76e0c7356bb9cfd19e396b30 extends Template
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

namespace Mautic\\EmailBundle\\Model;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\EmailBundle\\EmailEvents;
use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Entity\\StatRepository;
use Mautic\\EmailBundle\\Event\\EmailStatEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class EmailStatModel
{
    public function __construct(private EntityManagerInterface \$entityManager, private EventDispatcherInterface \$dispatcher)
    {
    }

    public function saveEntity(Stat \$stat): void
    {
        \$this->saveEntities([\$stat]);
    }

    /**
     * @param Stat[] \$stats
     */
    public function saveEntities(array \$stats): void
    {
        \$event = new EmailStatEvent(\$stats);

        \$this->dispatcher->dispatch(\$event, EmailEvents::ON_EMAIL_STAT_PRE_SAVE);

        \$this->getRepository()->saveEntities(\$stats);

        \$this->dispatcher->dispatch(\$event, EmailEvents::ON_EMAIL_STAT_POST_SAVE);
    }

    public function getRepository(): StatRepository
    {
        return \$this->entityManager->getRepository(Stat::class);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Model/EmailStatModel.php";
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
        return new Source("", "@bundles/EmailBundle/Model/EmailStatModel.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Model\\EmailStatModel.php");
    }
}
