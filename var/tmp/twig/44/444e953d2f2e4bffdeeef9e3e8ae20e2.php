<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/UserBundle/EventListener/PasswordSubscriber.php */
class __TwigTemplate_b599a0432e0aedd40bb0c38a109a7acc extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

declare(strict_types=1);

namespace Mautic\\UserBundle\\EventListener;

use Mautic\\UserBundle\\Event\\AuthenticationEvent;
use Mautic\\UserBundle\\Exception\\WeakPasswordException;
use Mautic\\UserBundle\\Model\\PasswordStrengthEstimatorModel;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

final class PasswordSubscriber implements EventSubscriberInterface
{
    public function __construct(private PasswordStrengthEstimatorModel \$passwordStrengthEstimatorModel)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            UserEvents::USER_FORM_POST_LOCAL_PASSWORD_AUTHENTICATION => ['onUserFormAuthentication', 0],
        ];
    }

    public function onUserFormAuthentication(AuthenticationEvent \$authenticationEvent): void
    {
        \$userPassword = \$authenticationEvent->getToken()->getCredentials(); /* @phpstan-ignore-line getCredentials() is deprecated since Symfony 5.4, refactoring needed */

        if (!\$this->passwordStrengthEstimatorModel->validate(\$userPassword)) {
            throw new WeakPasswordException();
        }
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/EventListener/PasswordSubscriber.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/UserBundle/EventListener/PasswordSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\EventListener\\PasswordSubscriber.php");
    }
}
