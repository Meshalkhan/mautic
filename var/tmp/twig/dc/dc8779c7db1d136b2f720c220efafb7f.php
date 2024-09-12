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

/* @bundles/SmsBundle/Broadcast/BroadcastResult.php */
class __TwigTemplate_f48e4325bcf6f8acd66e74b925013a52 extends Template
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

namespace Mautic\\SmsBundle\\Broadcast;

class BroadcastResult
{
    private int \$sentCount = 0;

    private int \$failedCount = 0;

    public function process(array \$results): void
    {
        foreach (\$results as \$result) {
            if (isset(\$result['sent']) && true === \$result['sent']) {
                \$this->sent();
            } else {
                \$this->failed();
            }
        }
    }

    public function sent(): void
    {
        ++\$this->sentCount;
    }

    public function failed(): void
    {
        ++\$this->failedCount;
    }

    public function getSentCount(): int
    {
        return \$this->sentCount;
    }

    public function getFailedCount(): int
    {
        return \$this->failedCount;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Broadcast/BroadcastResult.php";
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
        return new Source("", "@bundles/SmsBundle/Broadcast/BroadcastResult.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Broadcast\\BroadcastResult.php");
    }
}
