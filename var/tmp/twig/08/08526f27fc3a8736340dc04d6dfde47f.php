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

/* @bundles/StatsBundle/Event/Options/FetchOptions.php */
class __TwigTemplate_87065d2b66b73e15b393e6b7b9ce1d0e extends Template
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

namespace Mautic\\StatsBundle\\Event\\Options;

class FetchOptions
{
    private array \$options = [];

    /**
     * @var int|null
     */
    private \$itemId;

    /**
     * @param int \$value
     *
     * @return \$this
     */
    public function setItemId(\$value)
    {
        \$this->itemId = \$value;

        return \$this;
    }

    /**
     * @return int|null
     */
    public function getItemId()
    {
        return \$this->itemId;
    }

    /**
     * @param string \$key
     * @param mixed  \$value
     *
     * @return \$this
     */
    public function setOption(\$key, \$value)
    {
        \$this->options[\$key] = \$value;

        return \$this;
    }

    /**
     * @param string \$key
     *
     * @return mixed
     */
    public function getOption(\$key, \$default = null)
    {
        return \$this->options[\$key] ?? \$default;
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
        return "@bundles/StatsBundle/Event/Options/FetchOptions.php";
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
        return new Source("", "@bundles/StatsBundle/Event/Options/FetchOptions.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StatsBundle\\Event\\Options\\FetchOptions.php");
    }
}
