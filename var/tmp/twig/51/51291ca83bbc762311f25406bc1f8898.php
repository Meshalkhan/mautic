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

/* @bundles/UserBundle/Event/PasswordStrengthValidateEvent.php */
class __TwigTemplate_de350dd53d4867639f0d8dc1df694c92 extends Template
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

namespace Mautic\\UserBundle\\Event;

use Symfony\\Contracts\\EventDispatcher\\Event;

final class PasswordStrengthValidateEvent extends Event
{
    public function __construct(
        public bool \$isValid,
        public string \$password
    ) {
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Event/PasswordStrengthValidateEvent.php";
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
        return new Source("", "@bundles/UserBundle/Event/PasswordStrengthValidateEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Event\\PasswordStrengthValidateEvent.php");
    }
}
