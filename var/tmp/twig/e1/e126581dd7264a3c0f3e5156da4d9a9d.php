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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/Report/ObjectDAO.php */
class __TwigTemplate_80ab1c16e3248bcb817564e9ff0c398f extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report;

use Mautic\\IntegrationsBundle\\Sync\\Exception\\FieldNotFoundException;

class ObjectDAO
{
    /**
     * @var FieldDAO[]
     */
    private array \$fields = [];

    /**
     * @param string \$object
     * @param mixed  \$objectId
     */
    public function __construct(
        private \$object,
        private \$objectId,
        private ?\\DateTimeInterface \$changeDateTime = null
    ) {
    }

    public function getChangeDateTime(): ?\\DateTimeInterface
    {
        return \$this->changeDateTime;
    }

    public function setChangeDateTime(\\DateTimeInterface \$changeDateTime): self
    {
        \$this->changeDateTime = \$changeDateTime;

        return \$this;
    }

    /**
     * @return \$this
     */
    public function addField(FieldDAO \$fieldDAO)
    {
        \$this->fields[\$fieldDAO->getName()] = \$fieldDAO;

        return \$this;
    }

    /**
     * @return mixed
     */
    public function getObjectId()
    {
        return \$this->objectId;
    }

    /**
     * @return string
     */
    public function getObject()
    {
        return \$this->object;
    }

    /**
     * @param string \$name
     *
     * @return FieldDAO|null
     *
     * @throws FieldNotFoundException
     */
    public function getField(\$name)
    {
        if (!isset(\$this->fields[\$name])) {
            throw new FieldNotFoundException(\$name, \$this->object);
        }

        return \$this->fields[\$name];
    }

    /**
     * @return FieldDAO[]
     */
    public function getFields(): array
    {
        return \$this->fields;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/Report/ObjectDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/Report/ObjectDAO.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\DAO\\Sync\\Report\\ObjectDAO.php");
    }
}
