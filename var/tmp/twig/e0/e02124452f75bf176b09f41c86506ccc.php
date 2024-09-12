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

/* @bundles/SmsBundle/Exception/NumberNotFoundException.php */
class __TwigTemplate_037c33d3614d2ce8c49e86250c4fbaf9 extends Template
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

namespace Mautic\\SmsBundle\\Exception;

class NumberNotFoundException extends \\Exception
{
    /**
     * @param string \$number
     * @param string \$message
     * @param int    \$code
     */
    public function __construct(
        private \$number,
        \$message = '',
        \$code = 0,
        \\Throwable \$previous = null
    ) {
        if (!\$message) {
            \$message = \"Phone number '{\$number}' not found\";
        }

        parent::__construct(\$message, \$code, \$previous);
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return \$this->number;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Exception/NumberNotFoundException.php";
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
        return new Source("", "@bundles/SmsBundle/Exception/NumberNotFoundException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Exception\\NumberNotFoundException.php");
    }
}
