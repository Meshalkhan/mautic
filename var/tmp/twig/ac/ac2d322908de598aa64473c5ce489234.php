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

/* @bundles/CoreBundle/EventListener/StatsSubscriber.php */
class __TwigTemplate_454b79c9ccc03ccae011e2237edcdcef extends Template
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

namespace Mautic\\CoreBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Entity\\AuditLog;
use Mautic\\CoreBundle\\Entity\\IpAddress;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;

class StatsSubscriber extends CommonStatsSubscriber
{
    public function __construct(CorePermissions \$security, EntityManager \$entityManager)
    {
        parent::__construct(\$security, \$entityManager);
        \$this->repositories['MauticCoreBundle:AuditLog'] = \$entityManager->getRepository(AuditLog::class);
        \$this->permissions['MauticCoreBundle:AuditLog']  = ['admin'];

        \$this->repositories['MauticCoreBundle:IpAddress'] = \$entityManager->getRepository(IpAddress::class);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/StatsSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/StatsSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\EventListener\\StatsSubscriber.php");
    }
}
