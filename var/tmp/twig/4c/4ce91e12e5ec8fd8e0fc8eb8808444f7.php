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

/* @bundles/EmailBundle/Event/EmailOpenEvent.php */
class __TwigTemplate_956d599db20e33679055266b56e979ba extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\EmailBundle\\Entity\\Email;
use Mautic\\EmailBundle\\Entity\\Stat;
use Symfony\\Component\\HttpFoundation\\Request;

class EmailOpenEvent extends CommonEvent
{
    private ?Email \$email;

    /**
     * @param Request \$request
     * @param bool    \$firstTime
     */
    public function __construct(
        Stat \$stat,
        private \$request,
        private \$firstTime = false
    ) {
        \$this->entity    = \$stat;
        \$this->email     = \$stat->getEmail();
    }

    /**
     * Returns the Email entity.
     *
     * @return Email
     */
    public function getEmail()
    {
        return \$this->email;
    }

    /**
     * Get email request.
     *
     * @return string
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * @return Stat
     */
    public function getStat()
    {
        return \$this->entity;
    }

    /**
     * Returns if this is first time the email is read.
     *
     * @return bool
     */
    public function isFirstTime()
    {
        return \$this->firstTime;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Event/EmailOpenEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/EmailOpenEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Event\\EmailOpenEvent.php");
    }
}
