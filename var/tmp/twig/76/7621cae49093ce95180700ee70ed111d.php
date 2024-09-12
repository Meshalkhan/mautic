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

/* @bundles/UserBundle/EventListener/PasswordSubscriber.php */
class __TwigTemplate_17d110aaa7dba401d9a7bada2d3290b0 extends Template
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
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/EventListener/PasswordSubscriber.php";
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
        return new Source("", "@bundles/UserBundle/EventListener/PasswordSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\EventListener\\PasswordSubscriber.php");
    }
}
