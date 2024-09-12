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

/* @bundles/UserBundle/Event/UserEvent.php */
class __TwigTemplate_c5a445f10e16517a8b7389b7dd6dd746 extends Template
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

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\UserBundle\\Entity\\User;

class UserEvent extends CommonEvent
{
    /**
     * @param bool \$isNew
     */
    public function __construct(User &\$user, \$isNew = false)
    {
        \$this->entity = &\$user;
        \$this->isNew  = \$isNew;
    }

    /**
     * Returns the User entity.
     *
     * @return User
     */
    public function getUser()
    {
        return \$this->entity;
    }

    /**
     * Sets the User entity.
     */
    public function setUser(User \$user): void
    {
        \$this->entity = \$user;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Event/UserEvent.php";
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
        return new Source("", "@bundles/UserBundle/Event/UserEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Event\\UserEvent.php");
    }
}
