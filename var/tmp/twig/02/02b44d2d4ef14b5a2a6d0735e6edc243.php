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

/* @bundles/MessengerBundle/Config/config.php */
class __TwigTemplate_d874895c7f9524ba2fb5dd5851a7b35f extends Template
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

return [
    'parameters' => [
        'messenger_dsn_email'                  => 'sync://', // sync means no queue
        'messenger_dsn_hit'                    => 'sync://', // sync means no queue
        'messenger_dsn_failed'                 => null, // failed transport is optional
        'messenger_retry_strategy_max_retries' => 3, // Maximum number of retries for a failed send
        'messenger_retry_strategy_delay'       => 1000, // Delay in milliseconds between retries
        'messenger_retry_strategy_multiplier'  => 2.0, // Delay multiplier between retries  e.g. 1 second delay, 2 seconds, 4 seconds
        'messenger_retry_strategy_max_delay'   => 0, // maximum delay in milliseconds between retries
    ],
];
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MessengerBundle/Config/config.php";
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
        return new Source("", "@bundles/MessengerBundle/Config/config.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Config\\config.php");
    }
}
