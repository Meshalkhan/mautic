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

/* @bundles/CoreBundle/Exception/ErrorHandlerException.php */
class __TwigTemplate_6b01731b4e93e7208221ffbb69ffd49b extends Template
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

namespace Mautic\\CoreBundle\\Exception;

class ErrorHandlerException extends \\Exception
{
    /**
     * @param string \$message
     * @param bool   \$showMessage
     * @param int    \$code
     */
    public function __construct(
        \$message = '',
        protected \$showMessage = false,
        \$code = 0,
        \\Exception \$previous = null
    ) {
        parent::__construct(\$message, \$code, \$previous);
    }

    /**
     * @return bool
     */
    public function showMessage()
    {
        return \$this->showMessage;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Exception/ErrorHandlerException.php";
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
        return new Source("", "@bundles/CoreBundle/Exception/ErrorHandlerException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Exception\\ErrorHandlerException.php");
    }
}
