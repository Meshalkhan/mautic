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

/* @bundles/CoreBundle/Service/BulkNotificationInterface.php */
class __TwigTemplate_713bad2621d1bdfb98b931fab74f8494 extends Template
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

namespace Mautic\\CoreBundle\\Service;

use Mautic\\UserBundle\\Entity\\User;

interface BulkNotificationInterface
{
    public function addNotification(
        string \$deduplicateValue,
        string \$message,
        string \$type = null,
        string \$header = null,
        string \$iconClass = null,
        \\DateTime \$datetime = null,
        User \$user = null
    ): void;

    public function flush(\\DateTime \$deduplicateDateTimeFrom = null): void;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Service/BulkNotificationInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Service/BulkNotificationInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Service\\BulkNotificationInterface.php");
    }
}
