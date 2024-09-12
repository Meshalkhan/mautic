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

/* @bundles/UserBundle/Event/AuthenticationContentEvent.php */
class __TwigTemplate_92dae2b5817c692e67e9ce9e1a6019b6 extends Template
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

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Contracts\\EventDispatcher\\Event;

class AuthenticationContentEvent extends Event
{
    /**
     * @var array
     */
    protected \$content = [];

    /**
     * @var bool
     */
    protected \$postLogout = false;

    public function __construct(
        protected Request \$request
    ) {
        \$this->postLogout = \$request->getSession()->get('post_logout', false);
    }

    /**
     * @return Request
     */
    public function getRequest()
    {
        return \$this->request;
    }

    /**
     * @return bool
     */
    public function isLogout()
    {
        return \$this->postLogout;
    }

    public function addContent(\$content): void
    {
        \$this->content[] = \$content;
    }

    public function getContent(): string
    {
        return implode(\"\\n\\n\", \$this->content);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Event/AuthenticationContentEvent.php";
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
        return new Source("", "@bundles/UserBundle/Event/AuthenticationContentEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Event\\AuthenticationContentEvent.php");
    }
}
