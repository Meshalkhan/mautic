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

/* @bundles/CoreBundle/Doctrine/Connection/ConnectionWrapper.php */
class __TwigTemplate_b3b3fa48a6ff0d5ad1a93598ee573946 extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Doctrine\\Connection;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Exception;

class ConnectionWrapper extends Connection
{
    /**
     * @throws Exception
     */
    public function initConnection(array \$dbParams): void
    {
        \$params = \$this->getParams();

        if (\$this->isConnected()) {
            \$this->close();
        }

        \$params['host']     = \$dbParams['host'];
        \$params['port']     = (int) \$dbParams['port'];
        \$params['dbname']   = \$dbParams['name'];
        \$params['user']     = \$dbParams['user'];
        \$params['password'] = \$dbParams['password'];
        \$this->__construct(\$params, \$this->_driver, \$this->_config, \$this->_eventManager);
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
        return "@bundles/CoreBundle/Doctrine/Connection/ConnectionWrapper.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Connection/ConnectionWrapper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\Connection\\ConnectionWrapper.php");
    }
}
