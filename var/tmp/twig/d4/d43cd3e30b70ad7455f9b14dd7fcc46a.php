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

/* @bundles/CoreBundle/Doctrine/Loader/MauticFixturesLoader.php */
class __TwigTemplate_a8a8acdafe28c13981bab8d8314012ce extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Loader;

use Doctrine\\Bundle\\FixturesBundle\\Loader\\SymfonyFixturesLoader;

/**
 * The sole purpose of this class is to make SymfonyFixturesLoader mockable.
 */
final class MauticFixturesLoader implements FixturesLoaderInterface
{
    public function __construct(
        private SymfonyFixturesLoader \$fixturesLoader
    ) {
    }

    public function getFixtures(array \$groups = []): array
    {
        return \$this->fixturesLoader->getFixtures(\$groups);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Loader/MauticFixturesLoader.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Loader/MauticFixturesLoader.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\Loader\\MauticFixturesLoader.php");
    }
}
