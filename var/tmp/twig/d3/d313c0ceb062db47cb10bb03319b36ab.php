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

/* @bundles/UserBundle/Event/LogoutEvent.php */
class __TwigTemplate_b6942ef6399e46ee6688749482f7190c extends Template
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

namespace Mautic\\UserBundle\\Event;

use Mautic\\UserBundle\\Entity\\User;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Contracts\\EventDispatcher\\Event;

class LogoutEvent extends Event
{
    private array \$session = [];

    public function __construct(
        private User \$user,
        private Request \$request
    ) {
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return \$this->user;
    }

    /**
     * Add value to session after it's been cleared.
     */
    public function setPostSessionItem(\$key, \$value): void
    {
        \$this->session[\$key] = \$value;
    }

    /**
     * Get session items to be added after session has been cleared.
     *
     * @return array
     */
    public function getPostSessionItems()
    {
        return \$this->session;
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return \$this->request;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Event/LogoutEvent.php";
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
        return new Source("", "@bundles/UserBundle/Event/LogoutEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Event\\LogoutEvent.php");
    }
}
