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

/* @bundles/EmailBundle/Exception/InvalidEmailException.php */
class __TwigTemplate_1ce08902152cc8b304a699350d4dd5fc extends Template
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

namespace Mautic\\EmailBundle\\Exception;

use Mautic\\CoreBundle\\Exception\\InvalidValueException;

class InvalidEmailException extends InvalidValueException
{
    public function __construct(
        protected string \$emailAddress,
        string \$message = '',
        int \$code = 0,
        ?\\Throwable \$previous = null
    ) {
        parent::__construct(\$message, \$code, \$previous);
    }

    public function getEmailAddress(): string
    {
        return \$this->emailAddress;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Exception/InvalidEmailException.php";
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
        return new Source("", "@bundles/EmailBundle/Exception/InvalidEmailException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Exception\\InvalidEmailException.php");
    }
}
