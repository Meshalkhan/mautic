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

/* @bundles/ApiBundle/Event/ApiSerializationContextEvent.php */
class __TwigTemplate_82f863bb07100c247b61326659351319 extends Template
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

namespace Mautic\\ApiBundle\\Event;

use FOS\\RestBundle\\Context\\Context;
use Mautic\\CoreBundle\\Event\\CommonEvent;
use Symfony\\Component\\HttpFoundation\\Request;

final class ApiSerializationContextEvent extends CommonEvent
{
    public function __construct(private Context \$context, private Request \$request)
    {
    }

    public function getContext(): Context
    {
        return \$this->context;
    }

    public function setContext(Context \$context): void
    {
        \$this->context = \$context;
    }

    public function getRequest(): Request
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
        return "@bundles/ApiBundle/Event/ApiSerializationContextEvent.php";
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
        return new Source("", "@bundles/ApiBundle/Event/ApiSerializationContextEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Event\\ApiSerializationContextEvent.php");
    }
}
