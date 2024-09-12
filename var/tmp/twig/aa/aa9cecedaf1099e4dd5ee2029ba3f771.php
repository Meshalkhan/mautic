<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/PluginBundle/Helper/EventHelper.php */
class __TwigTemplate_ed8886538cd411f7bbc6d455c24fe063 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PluginBundle/Helper/EventHelper.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/PluginBundle/Helper/EventHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Helper\\EventHelper.php");
    }
}
