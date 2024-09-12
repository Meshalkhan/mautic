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

/* @bundles/CoreBundle/Update/Step/DeleteCacheStep.php */
class __TwigTemplate_83e3fe21788457e596aa1ccde27297c2 extends Template
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

namespace Mautic\\CoreBundle\\Update\\Step;

use Mautic\\CoreBundle\\Helper\\CacheHelper;
use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

final class DeleteCacheStep implements StepInterface
{
    public function __construct(
        private CacheHelper \$cacheHelper,
        private TranslatorInterface \$translator
    ) {
    }

    public function getOrder(): int
    {
        return 30;
    }

    public function shouldExecuteInFinalStage(): bool
    {
        return false;
    }

    public function execute(ProgressBar \$progressBar, InputInterface \$input, OutputInterface \$output): void
    {
        // Clear the dev and prod cache instances to reset the system
        \$progressBar->setMessage(\$this->translator->trans('mautic.core.update.clear.cache'));
        \$progressBar->advance();

        \$this->cacheHelper->nukeCache();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Update/Step/DeleteCacheStep.php";
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
        return new Source("", "@bundles/CoreBundle/Update/Step/DeleteCacheStep.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Update\\Step\\DeleteCacheStep.php");
    }
}
