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

/* @bundles/ApiBundle/Form/Validator/Constraints/OAuthCallback.php */
class __TwigTemplate_9b63365b7ad3fd05552092d22970dad6 extends Template
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

namespace Mautic\\ApiBundle\\Form\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;

class OAuthCallback extends Constraint
{
    public \$message = 'The callback URL is invalid.';

    public function validatedBy()
    {
        return OAuthCallbackValidator::class;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Form/Validator/Constraints/OAuthCallback.php";
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
        return new Source("", "@bundles/ApiBundle/Form/Validator/Constraints/OAuthCallback.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Form\\Validator\\Constraints\\OAuthCallback.php");
    }
}
