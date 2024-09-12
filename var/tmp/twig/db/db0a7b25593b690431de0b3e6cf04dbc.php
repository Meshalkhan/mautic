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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Order/NotificationDAO.php */
class __TwigTemplate_fb10fddea79111c7be3d5c25915b3921 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order;

class NotificationDAO
{
    public function __construct(
        private ObjectChangeDAO \$objectChangeDAO,
        private string \$message
    ) {
    }

    /**
     * @return ObjectChangeDAO
     */
    public function getMauticObject(): string
    {
        return \$this->objectChangeDAO->getMappedObject();
    }

    public function getMauticObjectId(): int
    {
        return (int) \$this->objectChangeDAO->getMappedObjectId();
    }

    public function getIntegration(): string
    {
        return \$this->objectChangeDAO->getIntegration();
    }

    public function getIntegrationObject(): string
    {
        return \$this->objectChangeDAO->getObject();
    }

    /**
     * @return mixed
     */
    public function getIntegrationObjectId()
    {
        return \$this->objectChangeDAO->getObjectId();
    }

    public function getMessage(): string
    {
        return \$this->message;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Order/NotificationDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Order/NotificationDAO.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\DAO\\Sync\\Order\\NotificationDAO.php");
    }
}
