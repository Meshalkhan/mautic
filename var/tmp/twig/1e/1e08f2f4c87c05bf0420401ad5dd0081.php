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

/* @bundles/IntegrationsBundle/Integration/ConfigFormNotesTrait.php */
class __TwigTemplate_e5cde461457eff2934ee3e409cc2c06a extends Template
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

namespace Mautic\\IntegrationsBundle\\Integration;

use Mautic\\IntegrationsBundle\\DTO\\Note;

trait ConfigFormNotesTrait
{
    public function getAuthorizationNote(): ?Note
    {
        return null;
    }

    public function getFeaturesNote(): ?Note
    {
        return null;
    }

    public function getFieldMappingNote(): ?Note
    {
        return null;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Integration/ConfigFormNotesTrait.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Integration/ConfigFormNotesTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Integration\\ConfigFormNotesTrait.php");
    }
}
