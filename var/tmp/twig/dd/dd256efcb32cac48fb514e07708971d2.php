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

/* @bundles/IntegrationsBundle/Sync/DAO/Mapping/RemappedObjectDAO.php */
class __TwigTemplate_5399794a0dc937f671bec578e2a9b31e extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Mapping;

class RemappedObjectDAO
{
    /**
     * @param mixed \$oldObjectId
     * @param mixed \$newObjectId
     */
    public function __construct(
        private string \$integration,
        private string \$oldObjectName,
        private \$oldObjectId,
        private string \$newObjectName,
        private \$newObjectId
    ) {
    }

    public function getIntegration(): string
    {
        return \$this->integration;
    }

    public function getOldObjectName(): string
    {
        return \$this->oldObjectName;
    }

    /**
     * @return mixed
     */
    public function getOldObjectId()
    {
        return \$this->oldObjectId;
    }

    public function getNewObjectName(): string
    {
        return \$this->newObjectName;
    }

    /**
     * @return mixed
     */
    public function getNewObjectId()
    {
        return \$this->newObjectId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Mapping/RemappedObjectDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Mapping/RemappedObjectDAO.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\DAO\\Mapping\\RemappedObjectDAO.php");
    }
}
