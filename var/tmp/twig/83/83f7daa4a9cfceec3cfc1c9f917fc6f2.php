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

/* @bundles/IntegrationsBundle/Integration/Interfaces/AuthenticationInterface.php */
class __TwigTemplate_f05554f8b633d7e1cd8721b1f97a9252 extends Template
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

namespace Mautic\\IntegrationsBundle\\Integration\\Interfaces;

use Symfony\\Component\\HttpFoundation\\Request;

interface AuthenticationInterface extends IntegrationInterface
{
    /**
     * Returns true if the integration has already been authorized with the 3rd party service.
     */
    public function isAuthenticated(): bool;

    /**
     * This would be where one will use a client to store access tokens such as.
     *
     * @return string message to render if succeeded
     */
    public function authenticateIntegration(Request \$request): string;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Integration/Interfaces/AuthenticationInterface.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Integration/Interfaces/AuthenticationInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Integration\\Interfaces\\AuthenticationInterface.php");
    }
}
