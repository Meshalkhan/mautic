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

/* @bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckResult.php */
class __TwigTemplate_7eb3827d385eb7feba8ea6f893311e40 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks;

class PreUpdateCheckResult
{
    /**
     * @var PreUpdateCheckError[]
     */
    public array \$errors;

    /**
     * @param PreUpdateCheckError[] \$errors
     */
    public function __construct(
        public bool \$success,
        public ?AbstractPreUpdateCheck \$check,
        array \$errors = []
    ) {
        foreach (\$errors as \$error) {
            if (!(\$error instanceof PreUpdateCheckError)) {
                throw new \\InvalidArgumentException('Error must be of type PreUpdateCheckError');
            }
        }

        \$this->errors = \$errors;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckResult.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/PreUpdateCheckResult.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\Update\\PreUpdateChecks\\PreUpdateCheckResult.php");
    }
}
