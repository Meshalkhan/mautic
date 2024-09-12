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

/* @bundles/InstallBundle/Exception/DatabaseVersionTooOldException.php */
class __TwigTemplate_66dceab22a4c93d9b873028b15e07fe2 extends Template
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

namespace Mautic\\InstallBundle\\Exception;

class DatabaseVersionTooOldException extends \\Exception
{
    public function __construct(
        private string \$currentVersion
    ) {
        parent::__construct();
    }

    /**
     * Returns the current database version as reported by the database itself.
     */
    public function getCurrentVersion(): string
    {
        return \$this->currentVersion;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Exception/DatabaseVersionTooOldException.php";
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
        return new Source("", "@bundles/InstallBundle/Exception/DatabaseVersionTooOldException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\Exception\\DatabaseVersionTooOldException.php");
    }
}
