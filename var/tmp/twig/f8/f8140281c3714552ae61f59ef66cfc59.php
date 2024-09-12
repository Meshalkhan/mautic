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

/* @bundles/MessengerBundle/Retry/RetryStrategy.php */
class __TwigTemplate_eae150a0cc9b15218c4fd485c16fec71 extends Template
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

namespace Mautic\\MessengerBundle\\Retry;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Symfony\\Component\\Messenger\\Envelope;
use Symfony\\Component\\Messenger\\Retry\\MultiplierRetryStrategy;
use Symfony\\Component\\Messenger\\Retry\\RetryStrategyInterface;

class RetryStrategy implements RetryStrategyInterface
{
    private RetryStrategyInterface \$retryStrategy;

    public function __construct(
        private CoreParametersHelper \$parametersHelper
    ) {
    }

    public function isRetryable(Envelope \$message): bool
    {
        return \$this->getRetryStrategy()->isRetryable(\$message);
    }

    public function getWaitingTime(Envelope \$message): int
    {
        return \$this->getRetryStrategy()->getWaitingTime(\$message);
    }

    private function getRetryStrategy(): RetryStrategyInterface
    {
        if (!isset(\$this->retryStrategy)) {
            \$this->retryStrategy = new MultiplierRetryStrategy(
                (int) \$this->parametersHelper->get('messenger_retry_strategy_max_retries'),
                (int) \$this->parametersHelper->get('messenger_retry_strategy_delay'),
                (float) \$this->parametersHelper->get('messenger_retry_strategy_multiplier'),
                (int) \$this->parametersHelper->get('messenger_retry_strategy_max_delay'),
            );
        }

        return \$this->retryStrategy;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MessengerBundle/Retry/RetryStrategy.php";
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
        return new Source("", "@bundles/MessengerBundle/Retry/RetryStrategy.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Retry\\RetryStrategy.php");
    }
}
