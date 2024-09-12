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

/* @bundles/EmailBundle/Mailer/Transport/TokenTransportTrait.php */
class __TwigTemplate_64840519af69dcc103456bb8c8e11be0 extends Template
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

namespace Mautic\\EmailBundle\\Mailer\\Transport;

use Symfony\\Component\\Mime\\Email;

trait TokenTransportTrait
{
    public function getBatchRecipientCount(Email \$message, int \$toBeAdded = 1, string \$type = 'to'): int
    {
        return count(\$message->getTo()) + count(\$message->getCc()) + count(\$message->getBcc()) + \$toBeAdded;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Mailer/Transport/TokenTransportTrait.php";
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
        return new Source("", "@bundles/EmailBundle/Mailer/Transport/TokenTransportTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Mailer\\Transport\\TokenTransportTrait.php");
    }
}
