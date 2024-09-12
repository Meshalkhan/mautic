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

/* @bundles/CoreBundle/Doctrine/Helper/FulltextKeyword.php */
class __TwigTemplate_d67cda7de62691bb5b875241c0711b59 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Helper;

class FulltextKeyword implements \\Stringable
{
    public function __construct(
        private string \$value,
        private bool \$booleanMode = true,
        private bool \$wordSearch = true,
        private bool \$wordInflecting = false
    ) {
    }

    public function __toString(): string
    {
        return \$this->format();
    }

    public function format(): string
    {
        \$return = '';
        \$value  = mb_substr(\$this->value, 0, 255);

        if (\$this->wordSearch) {
            \$words     = explode(' ', preg_replace('/[^\\p{L}\\p{N}_]+/u', ' ', \$value));
            \$wordCount = count(\$words);

            for (\$i = 0; \$i < \$wordCount; ++\$i) {
                \$word = \$words[\$i];

                if (\$this->booleanMode) {
                    // strip boolean operators
                    \$word = str_replace(['+', '-', '@', '<', '>', '(', ')', '~', '*', '\"'], '', \$word);
                }

                \$wordLength = mb_strlen(\$word);

                if (\$wordLength > 0) {
                    if (\$this->booleanMode) {
                        if (\$this->wordInflecting && \$wordLength > 3) {
                            \$return .= '+('.\$word.'* <'.mb_substr(\$word, 0, \$wordLength - 1).'*)';
                        } else {
                            \$return .= '+'.\$word.'*';
                        }
                    } else {
                        \$return .= \$word;
                    }

                    \$return .= ' ';
                }
            }

            \$return = trim(\$return);
        }

        // append phrase search with a higher rank
        if (\$this->booleanMode && \$value) {
            \$return = sprintf('%s\"%s\"', \$return ? '('.\$return.') >' : '', trim(str_replace('\"', \"'\", \$value)));
        }

        return \$return;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Helper/FulltextKeyword.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Helper/FulltextKeyword.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\Helper\\FulltextKeyword.php");
    }
}
