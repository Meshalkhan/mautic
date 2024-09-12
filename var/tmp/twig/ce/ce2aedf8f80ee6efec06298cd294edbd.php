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

/* @bundles/AssetBundle/EventListener/StatsSubscriber.php */
class __TwigTemplate_6442de13302d1c10829bc0b96a753d19 extends Template
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

namespace Mautic\\AssetBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\AssetBundle\\Entity\\Download;
use Mautic\\CoreBundle\\EventListener\\CommonStatsSubscriber;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;

class StatsSubscriber extends CommonStatsSubscriber
{
    public function __construct(CorePermissions \$security, EntityManager \$entityManager)
    {
        parent::__construct(\$security, \$entityManager);
        \$this->addContactRestrictedRepositories([Download::class]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/EventListener/StatsSubscriber.php";
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
        return new Source("", "@bundles/AssetBundle/EventListener/StatsSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\EventListener\\StatsSubscriber.php");
    }
}
