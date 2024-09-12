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

/* @bundles/CoreBundle/Translation/TranslatorLoader.php */
class __TwigTemplate_07f2723deed224fe582d19c50a8c1c55 extends Template
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

namespace Mautic\\CoreBundle\\Translation;

class TranslatorLoader extends \\Symfony\\Bundle\\FrameworkBundle\\Translation\\Translator
{
    protected function loadCatalogue(string \$locale): void
    {
        if ('en_US' !== \$locale) {
            // Always force en_US so that it's available for fallback
            \$this->addResource('mautic', null, 'en_US', 'messages');
        }

        \$this->addResource('mautic', null, \$locale, 'messages');

        parent::loadCatalogue(\$locale);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Translation/TranslatorLoader.php";
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
        return new Source("", "@bundles/CoreBundle/Translation/TranslatorLoader.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Translation\\TranslatorLoader.php");
    }
}
