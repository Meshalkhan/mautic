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

/* @bundles/LeadBundle/Event/SegmentDictionaryGenerationEvent.php */
class __TwigTemplate_9e1482cb29abe34a3658c1cbd9e4460c extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;

/**
 * SegmentDictionaryGenerationEvent is dispatched while dictionary to transform frontend filters into
 *  translation understandable by segment service is run.
 *
 * This is not related to language translations at all
 */
class SegmentDictionaryGenerationEvent extends CommonEvent
{
    /**
     * @param array<string,mixed[]> \$translations
     */
    public function __construct(
        private array \$translations = []
    ) {
    }

    /**
     * @param mixed[] \$attributes
     *
     * @return SegmentDictionaryGenerationEvent
     */
    public function addTranslation(string \$key, \$attributes)
    {
        \$this->translations[\$key] = \$attributes;

        return \$this;
    }

    /**
     * @return array<string,mixed[]>
     */
    public function getTranslations()
    {
        return \$this->translations;
    }

    public function hasTranslation(string \$key): bool
    {
        return isset(\$this->translations[\$key]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/SegmentDictionaryGenerationEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/SegmentDictionaryGenerationEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\SegmentDictionaryGenerationEvent.php");
    }
}
