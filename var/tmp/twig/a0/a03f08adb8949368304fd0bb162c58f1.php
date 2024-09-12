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

/* @bundles/PageBundle/Event/RedirectGenerationEvent.php */
class __TwigTemplate_fb0dab6455a8b2a92f407b30ee8bbc2d extends Template
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

namespace Mautic\\PageBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\PageBundle\\Entity\\Redirect;

class RedirectGenerationEvent extends CommonEvent
{
    public function __construct(
        private Redirect \$redirect,
        private array \$clickthrough
    ) {
    }

    /**
     * Set or overwrite a value in the clickthrough.
     *
     * @param string \$key
     * @param mixed  \$value
     */
    public function setInClickthrough(\$key, \$value): void
    {
        \$this->clickthrough[\$key] = \$value;
    }

    /**
     * Get the redirect from the event.
     *
     * @return Redirect
     */
    public function getRedirect()
    {
        return \$this->redirect;
    }

    /**
     * Get the modified clickthrough from the event.
     *
     * @return array
     */
    public function getClickthrough()
    {
        return \$this->clickthrough;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Event/RedirectGenerationEvent.php";
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
        return new Source("", "@bundles/PageBundle/Event/RedirectGenerationEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Event\\RedirectGenerationEvent.php");
    }
}
