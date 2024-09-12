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

/* @bundles/EmailBundle/Event/EmailStatEvent.php */
class __TwigTemplate_a5fab1b3bcda3f4097f10157375caa9e extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Mautic\\EmailBundle\\Entity\\Stat;
use Symfony\\Contracts\\EventDispatcher\\Event;

final class EmailStatEvent extends Event
{
    /**
     * @param Stat[] \$stats
     */
    public function __construct(
        private array \$stats
    ) {
    }

    /**
     * @return Stat[]
     */
    public function getStats(): array
    {
        return \$this->stats;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Event/EmailStatEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/EmailStatEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Event\\EmailStatEvent.php");
    }
}
