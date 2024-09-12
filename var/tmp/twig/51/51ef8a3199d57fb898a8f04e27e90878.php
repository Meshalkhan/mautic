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

/* @bundles/CoreBundle/Helper/CookieHelper.php */
class __TwigTemplate_9aaf628a42dfeb3d71babec26c4837c1 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Event\\ResponseEvent;
use Symfony\\Component\\HttpKernel\\KernelEvents;

class CookieHelper implements EventSubscriberInterface
{
    private ?Request \$request = null;

    /**
     * @var array<string, Cookie>
     */
    private array \$cookies = [];

    public function __construct(
        private ?string \$path,
        private ?string \$domain,
        private bool \$secure,
        private bool \$httponly,
        private RequestStack \$requestStack
    ) {
    }

    /**
     * @param mixed \$default
     *
     * @return mixed
     */
    public function getCookie(string \$key, \$default = null)
    {
        if (null === \$this->getRequest()) {
            return \$default;
        }

        return \$this->getRequest()->cookies->get(\$key, \$default);
    }

    /**
     * @param int|string|float|bool|object|null \$value
     */
    public function setCookie(string \$name, \$value, ?int \$expire = 1800, ?string \$path = null, ?string \$domain = null, ?bool \$secure = null, ?bool \$httponly = null, ?string \$sameSite = Cookie::SAMESITE_LAX): void
    {
        if (null !== \$value) {
            \$value = (string) \$value;
        }

        \$cookie = Cookie::create(
            \$name,
            \$value,
            null !== \$expire ? time() + \$expire : 0,
            \$path ?? \$this->path,
            \$domain ?? \$this->domain,
            \$secure ?? \$this->secure,
            \$httponly ?? \$this->httponly,
            false,
            \$sameSite
        );

        \$this->cookies[\$name] = \$cookie;
    }

    /**
     * Deletes a cookie by expiring it.
     */
    public function deleteCookie(string \$name, ?string \$path = null, ?string \$domain = null, ?bool \$secure = null, ?bool \$httponly = null, ?string \$sameSite = Cookie::SAMESITE_LAX): void
    {
        \$this->setCookie(\$name, '', -86400, \$path, \$domain, \$secure, \$httponly, \$sameSite);
    }

    public function onResponse(ResponseEvent \$event): void
    {
        foreach (\$this->cookies as \$cookie) {
            \$event->getResponse()->headers->setCookie(\$cookie);
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::RESPONSE => 'onResponse',
        ];
    }

    private function getRequest(): ?Request
    {
        if (null !== \$this->request) {
            return \$this->request;
        }

        return \$this->request = \$this->requestStack->getMainRequest();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/CookieHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/CookieHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\CookieHelper.php");
    }
}
