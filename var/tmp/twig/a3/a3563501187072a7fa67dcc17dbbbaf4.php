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

/* @bundles/CoreBundle/Helper/ListParser/ArrayListParser.php */
class __TwigTemplate_4615b913ef63c3aef6d5a038f0c7bdb2 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\ListParser;

use Mautic\\CoreBundle\\Helper\\ListParser\\Exception\\FormatNotSupportedException;

class ArrayListParser implements ListParserInterface
{
    public function parse(\$list): array
    {
        if (!is_array(\$list)) {
            throw new FormatNotSupportedException();
        }

        if (
            array_key_exists(0, \$list)
            && !is_array(\$list[0])
            && array_keys(\$list) === range(0, count(\$list) - 1)
        ) {
            \$choices = [];

            // Numerical array so set labels as values and return as choices
            foreach (\$list as \$value) {
                if ('' === \$value || null === \$value) {
                    continue;
                }

                \$choices[trim(html_entity_decode(\$value, ENT_QUOTES))] = trim(html_entity_decode(\$value, ENT_QUOTES));
            }

            return \$choices;
        }

        return \$list;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/ListParser/ArrayListParser.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ListParser/ArrayListParser.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\ListParser\\ArrayListParser.php");
    }
}
