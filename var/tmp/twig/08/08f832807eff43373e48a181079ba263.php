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

/* @bundles/CoreBundle/Exception/DatabaseConnectionException.php */
class __TwigTemplate_1d12836f10e65afc586ca8dcc830715b extends Template
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

class DatabaseConnectionException extends \\Exception
{
    public function __construct(\$message = 'Unable to connect to the database.', \$code = 0, \\Exception \$previous = null)
    {
        parent::__construct(\$message, \$code, \$previous);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Exception/DatabaseConnectionException.php";
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
        return new Source("", "@bundles/CoreBundle/Exception/DatabaseConnectionException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Exception\\DatabaseConnectionException.php");
    }
}
