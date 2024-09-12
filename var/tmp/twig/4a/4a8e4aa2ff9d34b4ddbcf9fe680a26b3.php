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

/* @bundles/AssetBundle/Event/AssetLoadEvent.php */
class __TwigTemplate_a7a91746d6b183131ebed5ef62a79dbe extends Template
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

namespace Mautic\\AssetBundle\\Event;

use Mautic\\AssetBundle\\Entity\\Download;
use Mautic\\CoreBundle\\Event\\CommonEvent;

class AssetLoadEvent extends CommonEvent
{
    public function __construct(
        Download \$download,
        protected bool \$unique
    ) {
        \$this->entity = \$download;
    }

    /**
     * Returns the Download entity.
     *
     * @return Download
     */
    public function getRecord()
    {
        return \$this->entity;
    }

    /**
     * @return \\Mautic\\AssetBundle\\Entity\\Asset
     */
    public function getAsset()
    {
        return \$this->entity->getAsset();
    }

    /**
     * Returns if this is the first download for the session.
     */
    public function isUnique(): bool
    {
        return \$this->unique;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Event/AssetLoadEvent.php";
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
        return new Source("", "@bundles/AssetBundle/Event/AssetLoadEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Event\\AssetLoadEvent.php");
    }
}
