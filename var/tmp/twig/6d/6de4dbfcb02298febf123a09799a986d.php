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

/* @bundles/StageBundle/EventListener/StatsSubscriber.php */
class __TwigTemplate_335ee8e8d05d274d0b4109cf524d3273 extends Template
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

namespace Mautic\\StageBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\EventListener\\CommonStatsSubscriber;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\StageBundle\\Entity\\LeadStageLog;

class StatsSubscriber extends CommonStatsSubscriber
{
    public function __construct(CorePermissions \$security, EntityManager \$entityManager)
    {
        parent::__construct(\$security, \$entityManager);
        \$this->addContactRestrictedRepositories([LeadStageLog::class]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/EventListener/StatsSubscriber.php";
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
        return new Source("", "@bundles/StageBundle/EventListener/StatsSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StageBundle\\EventListener\\StatsSubscriber.php");
    }
}
