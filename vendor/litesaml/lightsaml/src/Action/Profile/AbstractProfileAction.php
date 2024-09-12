<?php

namespace LightSaml\Action\Profile;

use LightSaml\Action\ActionInterface;
use LightSaml\Context\ContextInterface;
use LightSaml\Context\Profile\ProfileContext;
use LightSaml\Error\LightSamlContextException;
use Psr\Log\LoggerInterface;

abstract class AbstractProfileAction implements ActionInterface
{
    /** @var LoggerInterface */
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return void
     */
    public function execute(ContextInterface $context)
    {
        if ($context instanceof ProfileContext) {
            $this->doExecute($context);
        } else {
            $message = sprintf('Expected ProfileContext but got %s', get_class($context));
            $this->logger->emergency($message, ['context' => $context]);
            throw new LightSamlContextException($context, $message);
        }
    }

    abstract protected function doExecute(ProfileContext $context);
}
