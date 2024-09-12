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

/* @bundles/SmsBundle/Callback/HandlerContainer.php */
class __TwigTemplate_d5f4afe0320503b98b92495389778c88 extends Template
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

namespace Mautic\\SmsBundle\\Callback;

use Mautic\\SmsBundle\\Exception\\CallbackHandlerNotFound;

class HandlerContainer
{
    /**
     * @var CallbackInterface[]
     */
    private ?array \$handlers = null;

    public function registerHandler(CallbackInterface \$handler): void
    {
        \$this->handlers[\$handler->getTransportName()] = \$handler;
    }

    /**
     * @return CallbackInterface
     *
     * @throws CallbackHandlerNotFound
     */
    public function getHandler(\$transportName)
    {
        if (!isset(\$this->handlers[\$transportName])) {
            throw new CallbackHandlerNotFound(\"\$transportName has not been registered\");
        }

        return \$this->handlers[\$transportName];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Callback/HandlerContainer.php";
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
        return new Source("", "@bundles/SmsBundle/Callback/HandlerContainer.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Callback\\HandlerContainer.php");
    }
}
