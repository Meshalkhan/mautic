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

/* @bundles/PluginBundle/Helper/EventHelper.php */
class __TwigTemplate_6fe1e588987226fe48b98b745fc1c599 extends Template
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

namespace Mautic\\PluginBundle\\Helper;

use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\PluginBundle\\EventListener\\PushToIntegrationTrait;

class EventHelper
{
    use PushToIntegrationTrait;

    public static function pushLead(\$config, \$lead, MauticFactory \$factory): bool
    {
        \$contact = \$factory->getEntityManager()->getRepository(\\Mautic\\LeadBundle\\Entity\\Lead::class)->getEntityWithPrimaryCompany(\$lead);

        /** @var IntegrationHelper \$integrationHelper */
        \$integrationHelper = \$factory->getHelper('integration');

        static::setStaticIntegrationHelper(\$integrationHelper);
        \$errors  = [];

        return static::pushIt(\$config, \$contact, \$errors);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Helper/EventHelper.php";
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
        return new Source("", "@bundles/PluginBundle/Helper/EventHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Helper\\EventHelper.php");
    }
}
