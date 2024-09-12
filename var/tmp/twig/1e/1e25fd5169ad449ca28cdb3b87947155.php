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

/* @bundles/CoreBundle/Event/GlobalSearchEvent.php */
class __TwigTemplate_f793fe479bde95081c5ec8f603667ace extends Template
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

use Mautic\\CoreBundle\\Translation\\Translator;
use Symfony\\Contracts\\EventDispatcher\\Event;

class GlobalSearchEvent extends Event
{
    /**
     * @var array
     */
    protected \$results = [];

    protected string \$searchString;

    /**
     * @param string     \$searchString
     * @param Translator \$translator
     */
    public function __construct(
        \$searchString,
        protected \$translator
    ) {
        \$this->searchString = strtolower(trim(strip_tags(\$searchString)));
    }

    /**
     * Returns the string to be searched.
     */
    public function getSearchString(): string
    {
        return \$this->searchString;
    }

    /**
     * Add an array of results from a search query to be listed in right side panel
     * Each result should be the ENTIRE html to be rendered.
     *
     * @param string \$header  String name for section header
     * @param array  \$results Array of HTML output that will be wrapped in <li /> elements
     */
    public function addResults(\$header, array \$results): void
    {
        \$header                 = \$this->translator->trans(\$header);
        \$this->results[\$header] = \$results;
    }

    /**
     * Returns the results.
     *
     * @return array
     */
    public function getResults()
    {
        uksort(\$this->results, 'strnatcmp');

        return \$this->results;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/GlobalSearchEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/GlobalSearchEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Event\\GlobalSearchEvent.php");
    }
}
