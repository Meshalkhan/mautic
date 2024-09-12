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

/* @bundles/DashboardBundle/Exception/CouldNotFormatDateTimeException.php */
class __TwigTemplate_3d771d09816327d33572f76807e2f4f4 extends Template
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

namespace Mautic\\DashboardBundle\\Exception;

class CouldNotFormatDateTimeException extends \\Exception
{
    public function __construct(
        string \$message = 'Can\\'t format date object to string',
        int \$code = 0,
        \\Throwable \$throwable = null
    ) {
        parent::__construct(\$message, \$code, \$throwable);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/DashboardBundle/Exception/CouldNotFormatDateTimeException.php";
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
        return new Source("", "@bundles/DashboardBundle/Exception/CouldNotFormatDateTimeException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\DashboardBundle\\Exception\\CouldNotFormatDateTimeException.php");
    }
}
