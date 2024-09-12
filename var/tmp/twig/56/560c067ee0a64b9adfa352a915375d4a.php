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

/* @bundles/CoreBundle/Event/BuildJsEvent.php */
class __TwigTemplate_3f246fe3d665ada174f87e5a6a3ec5bc extends Template
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

namespace Mautic\\CoreBundle\\Event;

use MatthiasMullie\\Minify;
use Symfony\\Contracts\\EventDispatcher\\Event;

class BuildJsEvent extends Event
{
    /**
     * @param bool   \$debugMode
     * @param string \$js
     */
    public function __construct(
        protected \$js,
        protected \$debugMode = false
    ) {
    }

    /**
     * @return string
     */
    public function getJs()
    {
        return \$this->debugMode ? \$this->js : (new Minify\\JS(\$this->js))->minify();
    }

    /**
     * Append JS.
     *
     * @param string \$js
     * @param string \$section The section name. Shows when in debug mode
     *
     * @return \$this
     */
    public function appendJs(\$js, \$section = '')
    {
        if (\$section && \$this->debugMode) {
            \$slashes = str_repeat('/', strlen(\$section) + 10);
            \$this->js .= <<<JS
\\n
{\$slashes}
// {\$section} Start
{\$slashes}
\\n
JS;
        }

        \$this->js .= \$js;

        if (\$section && \$this->debugMode) {
            \$this->js .= <<<JS
\\n
{\$slashes}
// {\$section} End
{\$slashes}
JS;
        }

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/BuildJsEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/BuildJsEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Event\\BuildJsEvent.php");
    }
}
