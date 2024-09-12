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

/* @bundles/EmailBundle/Mailer/Transport/TokenTransportInterface.php */
class __TwigTemplate_37cc1457b407d94acbcc867c007196cb extends Template
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

interface TokenTransportInterface
{
    /**
     * Return the max number of to addresses allowed per batch.  If there is no limit, return 0.
     */
    public function getMaxBatchLimit(): int;

    /**
     * Get the count for the max number of recipients per batch.
     *
     * @param int    \$toBeAdded Number of emails about to be added
     * @param string \$type      Type of emails being added (to, cc, bcc)
     */
    public function getBatchRecipientCount(Email \$message, int \$toBeAdded = 1, string \$type = 'to'): int;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Mailer/Transport/TokenTransportInterface.php";
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
        return new Source("", "@bundles/EmailBundle/Mailer/Transport/TokenTransportInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Mailer\\Transport\\TokenTransportInterface.php");
    }
}
